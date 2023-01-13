<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index', [
            "users" => User::count(),
            "court" => 0,
            "booking" => 0,
        ]);
    }
}