<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanelController extends Controller
{
    //
    public function index()
    {
        return view('pages.panel.panel');
    }

    public function faq()
    {
        return view('pages.panel.faq');
    }
}
