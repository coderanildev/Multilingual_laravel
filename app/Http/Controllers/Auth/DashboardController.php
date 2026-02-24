<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Only logged-in users can access dashboard
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.auth.dashboard');
    }

        public function language() {
        return view('backend.dashboard.language');
    }

    public function tender() {
        return view('backend.dashboard.tender');
    }

    public function jobs() {
        return view('backend.dashboard.jobs');
    }

    public function notifications() {
        return view('backend.dashboard.notifications');
    }

    public function announcements() {
        return view('backend.dashboard.announcements');
    }

    public function employees() {
        return view('backend.dashboard.employees');
    }

    public function whatsNew() {
        return view('backend.dashboard.whats-new');
    }
}
