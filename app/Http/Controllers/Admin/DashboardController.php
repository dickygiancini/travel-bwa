<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        return view('pages.admin.dashboard');
    }

    public function buttons()
    {
        return view('pages.admin.components.buttons');
    }

    public function cards()
    {
        return view('pages.admin.components.cards');
    }
}
