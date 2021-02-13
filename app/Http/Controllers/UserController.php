<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        DB::insert("INSERT INTO users(name, email, password) values(?,?,?)", [
            "fred", "fred@gmail.com", "password"
        ]);
        return view('user');
    }
}
