<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view("admin.booking.index");
    }

    public function edit(User $user)
    {
        return view("admin.booking.index", [
            "user" => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            "name" => $request->name ?? $user->name,
            "email" => $request->email ?? $user->email,
            "admin" => $request->has("admin") ?? false,
        ]);
    }

    public function destroy(User $user)
    {

        $user->delete();

        return view("admin.booking.index");
    }
}
