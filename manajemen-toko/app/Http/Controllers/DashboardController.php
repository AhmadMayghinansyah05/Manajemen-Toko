<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return Auth::user()->role === 'admin'
            ? view('dashboard.admin')
            : view('dashboard.kasir');
    }
}
