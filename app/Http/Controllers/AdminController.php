<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this -> middleware('guest')->except(['showAdminDashboard']);
    }

    //Show Admin Login Form
    public function showAdminLoginForm()
    {
        return view('admin.login');
    }

    //Admin Register Form
    public function showAdminRegisterForm()
    {
        return view('admin.register');
    }

    //Show Admin Dashboard
    public function showAdminDashboard()
    {
        return view('admin.dashboard');
    }
}
