<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.dashboard');
    }

    public function colors()
    {
        return view('pages.colors');
    }

    public function typography()
    {
        return view('pages.typography');
    }

    public function charts()
    {
        return view('pages.charts');
    }

    public function widgets()
    {
        return view('pages.widgets');
    }

// Route group = /base
    public function breadcrumb()
    {
        return view('pages.base.breadcrumb');
    }

    public function cards()
    {
        return view('pages.base.cards');
    }

    public function carousel()
    {
        return view('pages.base.carousel');
    }

    public function collapse()
    {
        return view('pages.base.collapse');
    }

    public function forms()
    {
        return view('pages.base.forms');
    }

    public function jumbotron()
    {
        return view('pages.base.jumbotron');
    }

    public function listGroup()
    {
        return view('pages.base.list-group');
    }

    public function navs()
    {
        return view('pages.base.navs');
    }

    public function pagination()
    {
        return view('pages.base.pagination');
    }

    public function popovers()
    {
        return view('pages.base.popovers');
    }

    public function progress()
    {
        return view('pages.base.progress');
    }

    public function scrollspy()
    {
        return view('pages.base.scrollspy');
    }

    public function switches()
    {
        return view('pages.base.switches');
    }

    public function tables()
    {
        return view('pages.base.tables');
    }

    public function tabs()
    {
        return view('pages.base.tabs');
    }

    public function tooltips()
    {
        return view('pages.base.tooltips');
    }

// Error pages
    public function error()
    {
        return view('errors.500');
    }
}
