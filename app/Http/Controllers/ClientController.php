<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Client;
use App\Models\Invoice;
use App\Repositories\ClientRepository;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Laracasts\Flash\Flash;

class ClientController extends AppBaseController
{
    /**
     * @var ClientRepository
     */
    private $clientRepository;

    public function __construct(ClientRepository $clientRepo)
    {
        $this->clientRepository = $clientRepo;
    }

    /**
     * @return Application|Factory|View
     *
     * @throws Exception
     */
    public function index(Request $request): \Illuminate\View\View
    {

        return view('clients.index');
    }

    /**
     * @return Application|Factory|View
     */
    public function create(): \Illuminate\View\View
    {
        $countries = $this->clientRepository->getData();

        return view('clients.create', compact('countries'));
    }

    public function store(CreateClientRequest $request): RedirectResponse
    {
        $input = $request->all();
        info($input);
        try {
            $this->clientRepository->store($input);
            Flash::success(__('messages.flash.client_created_successfully'));
        } catch (Exception $exception) {
            Flash::error($exception->getMessage());

            return redirect()->route('clients.create')->withInput();
        }

        return redirect()->route('clients.index');
    }

    /**
     * @return Application|Factory|View
     */
    public function show(Client $client, Request $request): \Illuminate\View\View
    {
        $client->load('invoices.payments');
        // Get the profile picture URL
        $profilePicture = $client->account_image; // This will call the getAccountImageAttribute method

        $countries = $this->clientRepository->getData();

        //dd($profilePicture);

        // Check if the environment is local and replace localhost with 127.0.0.1:8000 if needed
        if (app()->environment('local') && strpos($profilePicture, 'localhost') !== false) {
            $profilePicture = str_replace('localhost', '127.0.0.1:8000', $profilePicture);
        }

       
        $activeTab = $request->get('Active', 'overview');

        return view('clients.show', compact('client', 'activeTab', 'profilePicture', 'countries'));
    }

    /**
     * @return Application|Factory|View
     */
    public function edit(Client $client): \Illuminate\View\View
    {
        $countries = $this->clientRepository->getData();
        $client->load('user.media');

        return view('clients.edit', compact('client', 'countries'));
    }

    public function update(Client $client, UpdateClientRequest $request): RedirectResponse
    {
        $input = $request->all();
        $client->load('user');

        try {
            $this->clientRepository->updateClient($input, $client);
            Flash::success(__('messages.flash.client_updated_successfully'));
        } catch (Exception $exception) {
            Flash::error($exception->getMessage());

            return redirect()->back()->withInput();
        }

        return redirect()->route('clients.index');
    }

    public function destroy(Client $client): JsonResponse
    {
        $invoiceModels = [
            Invoice::class,
        ];
        $result = canDelete($invoiceModels, 'client_id', $client->id);
        if ($result) {
            return $this->sendError(__('messages.flash.client_cant_deleted'));
        }
        $client->delete();

        return $this->sendSuccess(__('messages.flash.client_deleted_successfully'));
    }

    public function getStates(Request $request): mixed
    {
        $countryId = $request->get('countryId');
        $states = getStates($countryId);

        return $this->sendResponse($states, __('messages.flash.status_retrieved_successfully'));
    }

    /**
     * @return mixed
     */
    public function getCities(Request $request)
    {
        $stateId = $request->get('stateId');
        $cities = getCities($stateId);

        return $this->sendResponse($cities, __('messages.flash.cities_retrieved_successfully'));
    }
}
