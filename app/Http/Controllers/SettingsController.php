<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        createSettings([
            "settings.maintenance" => $request->has("maintenance"),
            "settings.registrations" => $request->has("registrations"),
            "settings.site.name" => $request->input("site_name")
        ]);

        return redirect()->route("admin.settings.index")->with("success", "Paramètres mis à jour !");
    }
}
