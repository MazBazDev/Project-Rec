<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SettingsController extends Controller
{
    public function updateSettings(Request $request)
    {
        createSettings([
            "modal.enable" => $request->has("modalEnable"),
            "modal.title" => $request->input("modalTitle"),
            "modal.content" => $request->input("modalContent"),

            "sec1.enable" => $request->has("sec1Enable"),
            "sec1.title" => $request->input("sec1Title"),
            "sec1.link1.title" => $request->input("sec1Link1Title"),
            "sec1.link1.url" => $request->input("sec1Link1Url"),
            "sec1.link2.title" => $request->input("sec1Link2Title"),
            "sec1.link2.url" => $request->input("sec1Link2Url"),
            "sec1.content" => $request->input("sec1Content"),

            "sec2.enable" => $request->has("sec2Enable"),
            "sec2.title" => $request->input("sec2Title"),
            "sec2.link1.title" => $request->input("sec2Link1Title"),

            "sec3.enable" => $request->has("sec3Enable"),
            "sec3.title" => $request->input("sec3Title"),
            "sec3.link1.title" => $request->input("sec3Link1Title"),
            "sec3.api.id" => $request->input("sec3ApiId"),

            "sec4.enable" => $request->has("sec4Enable"),
            "sec4.title" => $request->input("sec4Title"),
            "sec4.content" => $request->input("sec4Content"),
            "sec4.youtube.link" => $request->input("sec4YtbLink"),

            "sec5.enable" => $request->has("sec5Enable"),
            "sec5.title" => $request->input("sec5Title"),
            "sec5.link1.title" => $request->input("sec5Link1Title"),
        ]);

        return  Redirect::route("dashboard.home")->with("success", "Paramètres mis à jour !");
    }
}
