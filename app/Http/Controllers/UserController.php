<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return view('users.index',['users'=> $users]);
    }

    public function store() {
        return view('users.tambah');
    }

    public function lihat() {
        return view('users.lihat');
    }
}
