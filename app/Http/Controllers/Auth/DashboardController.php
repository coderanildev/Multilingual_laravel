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
        return view('auth.dashboard');
    }

        public function language() {
        return view('dashboard.language');
    }

    public function tender() {
        return view('dashboard.tender');
    }

    public function jobs() {
        return view('dashboard.jobs');
    }

    public function notifications() {
        return view('dashboard.notifications');
    }

    public function announcements() {
        return view('dashboard.announcements');
    }

    public function employees() {
        return view('dashboard.employees');
    }

    public function whatsNew() {
        return view('dashboard.whats-new');
    }
}
