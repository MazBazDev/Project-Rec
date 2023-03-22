<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("app.poster.index", [
            "posters" => Poster::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("app.poster.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "bail|required",
            "picture" => "bail|required|image|max:1024",
            "desc" => "bail|required",
        ]);
        
        poster::create([
            "name" => $request->name, 
            "picture" => $request->picture->store("posters"),
            "desc" => $request->desc,
            "team" => $request->team
        ]);

        return redirect()->route("dashboard.posters.index")->with("success", "Affiche crée !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function show(Poster $poster)
    {
        return view("guest.poster.show", [
            "poster" => $poster
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function edit(Poster $poster)
    {
        return view("app.poster.edit", [
            "poster" => $poster
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poster $poster)
    {

        $rules =[
            "name" => "bail|required",
            "desc" => "bail|required",
        ];

        if ($request->has("picture")) {
            $rules["picture"] = 'bail|image|max:1024';
        }

        $this->validate($request, $rules);


        if ($request->has("picture")) {
            Storage::delete($poster->picture);
            $chemin_image = $request->picture->store("posters");
        }

        $poster->update([
            "name" => $request->name, 
            "picture" => isset($chemin_image) ? $chemin_image : $poster->picture,
            "desc" => $request->desc,
            "team" => $request->team
        ]);

        return redirect()->route("dashboard.posters.index")->with("success", "Affiche modifié !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poster  $poster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poster $poster)
    {
        Storage::delete($poster->picture);

        $poster->delete();

        return redirect(route('dashboard.posters.index'));
    }
}
