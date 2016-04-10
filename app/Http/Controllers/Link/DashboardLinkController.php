<?php

namespace App\Http\Controllers\Link;

use App\Http\Controllers\Controller;

class DashboardLinkController extends Controller
{
    public function get()
    {
        return '';
    }
    public function index()
    {
        return view('dashboard.dashboard');
    }
}