<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index()
    {
        return view("admin.users.index", [
            "users" => User::paginate(15)
        ]);
    }

    public function edit(User $user)
    {
        return view("admin.users.edit", [
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
        return redirect()->route("admin.users.index")->with("success", "Utilisateur mis à jour");
    }

    public function destroy(User $user)
    {
        if($user->profile_photo_path) {
            Storage::delete($user->profile_photo_path);
        }

        $user->delete();

        return view("admin.users.index");
    }
}
