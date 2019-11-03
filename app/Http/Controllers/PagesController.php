<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Rank;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'events']]);
    }

    public function index()
    {
        return view('pages.index');
    }

    public function events()
    {
        return view('pages.events.index');
    }
}
