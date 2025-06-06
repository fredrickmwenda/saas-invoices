<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingRequest;
use App\Models\Client;
use App\Models\InvoiceSetting;
use App\Models\User;
use App\Repositories\SettingRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class SettingController extends AppBaseController
{
    /** @var SettingRepository */
    private $settingRepository;

    public function __construct(SettingRepository $settingRepo)
    {
        $this->settingRepository = $settingRepo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Application|Factory|View
     */
    public function edit(Request $request): \Illuminate\View\View
    {
        // $retVal = (condition) ? a : b ;
        if (Auth::user()->hasRole('client')) {
            $defaultSettings = $this->settingRepository->editSettingsData();
            $sectionName = ($request->section === null) ? 'general' : $request->section;

            $invoiceTemplate = InvoiceSetting::all()->toArray();
            $defaultTemplate = $defaultTemplate = $this->settingRepository->getSettingByKey('default_invoice_template'); // Use the repository method here

            return view("settings.$sectionName", compact('sectionName', 'invoiceTemplate', 'defaultTemplate'), $defaultSettings);
        }
        else{
        // return error here
            dd('am here fuck you, how many times will i show you how to do that');
        }
    } 
        
    

    public function update(UpdateSettingRequest $request)
    {
        if(Auth::user()->hasRole('client')|| Auth::user()->hasRole('admin')){
            $this->settingRepository->updateSetting($request->all());
            Flash::success(__('messages.flash.setting_updated_successfully'));

            return redirect()->back();
        }
    }

    //Invoice Update
    public function invoiceUpdate(Request $request): RedirectResponse
    {  
        if(Auth::user()->hasRole('client')){
            $this->settingRepository->updateInvoiceSetting($request->all());
            Flash::success(__('messages.flash.invoice_template_updated_successfully'));

            return redirect('admin/settings?section=setting-invoice');
        }

    }

    public function editInvoiceTemplate($key): mixed
    {
        if(Auth::user()->hasRole('client')){
            $user_id = Auth::user()->id;
            $client_id = Client::where('user_id', $user_id)->id;
            $invoiceTemplate = InvoiceSetting::where('key', $key)->where('client_id',$client_id)->get();
        }
        else{
            //return error
        }
        
        

        return $this->sendResponse($invoiceTemplate, 'InvoiceTemplate retrieved successfully.');
    }

    /**
     * @return Application|Factory|View
     */
    public function invoiceSettings()
    {
        if(Auth::user()->hasRole('client')){
            $data['settings'] = $this->settingRepository->getSyncList();

            return view('settings.invoice-settings', $data);
        }
        else{
            return back($status = 400);
        }
    }
}
