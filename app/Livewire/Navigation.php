<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Navigation extends Component
{
    public function render()
    {
        return view('livewire.navigation');
    }

    public function dashboardLink()
    {
        // Check if the user is logged in
        if(Auth::check()) {
            // Get the authenticated user
            $user = Auth::user();
            
            // Check the user's role and redirect accordingly
            if($user->isAdmin()) {
                return route('admin.dashboard'); // Example route for admin dashboard
            } elseif($user->isManager()) {
                return route('manager.dashboard'); // Example route for manager dashboard
            } else {
                return route('user.dashboard'); // Example route for user dashboard
            }
        }

        // Default to some fallback route if the user is not logged in
        return route('fallback.dashboard');
    }
}
