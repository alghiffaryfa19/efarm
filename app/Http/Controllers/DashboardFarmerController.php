<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardFarmerController extends Controller
{
    public function index()
    {
        return view('farmer.dashboard');
    }
}
