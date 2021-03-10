<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        return "Lerning Controller in Lumen";
    }

    public function index() 
    {
        return "Hai ini dari controller UserController dengan Method Index";
    }

    public function getIndexViews()
    {
        return view('user');
    }
}
