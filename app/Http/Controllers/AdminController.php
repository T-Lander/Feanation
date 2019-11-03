<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('pages.admin.index')->with('users', $users);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $filter = $request->input('filter');
        $result = User::where([
            ['username', 'like', "%{$search}%"],
            ])->orWhere([
            ['username', 'sounds like', "%{$search}%"],
            ])->paginate(10);

        return view('pages.admin.index')->with('users', $result);
    }
}
