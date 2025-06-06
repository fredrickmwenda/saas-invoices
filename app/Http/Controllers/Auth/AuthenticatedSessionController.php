<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return Application|Factory|View|\Illuminate\View\View
     */
    public function create(): \Illuminate\View\View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
    
        $request->session()->regenerate();
    
        if ($request->user()->hasRole('admin')) {
            return redirect()->intended(getDashboardURL());
        } elseif ($request->user()->hasRole('client')) {
            return redirect()->intended(getClientDashboardURL());
        } elseif ($request->user()->hasRole('client_user')) {
            return redirect()->intended(getClientDashboardURL());
        }
        else {
            // User doesn't have 'admin', 'client' or client_user role
            return redirect()
                ->route('login')  // Adjust the route to your login route name
                ->with('error', 'You do not have the required role.');
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

     public function logout(Request $request): Response|Redirector|Application|RedirectResponse
    {

        if ($admin_id = Session::get('admin_user_id')) {
            // Impersonate mode, back to original User
            session()->forget('admin_user_id');
            session()->forget('admin_user_name');
            session()->forget('temp_user_id');
            session()->forget('permissions');

            auth()->loginUsingId((int) $admin_id);

            session(['permissions' => auth()->user()->getPermissions()]);

            return redirect()->route('admin.home');
        }

        $this->guard()->logout();

        $request->session()->invalidate();

        if ($this->loggedOut($request)) {
            return $this->loggedOut($request)->with([
                'status'  => 'success',
                'message' => 'Logout was successfully done',
            ]);
        } else {
            return redirect('/login');
        }
    }
}
