<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.index');
    }
    public function create()
    {
        return view('account.create');
    }
    public function show()
    {
        return view('account.show');
    }   
    public function table()
    {
        return view('account.table');
    }
    public function datatable()
    {
        return view('account.data-table');
    }      

}
