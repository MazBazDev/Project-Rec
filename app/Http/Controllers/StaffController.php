<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.staff.index", [
            "staff" => Staff::where("cate", 1)->paginate(10),
            "partners" => Staff::where("cate", 2)->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.staff.create");
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
            "cate" => ["required", "min:1", "max:2"],
            "name" => ["required"],
            "desc" => ["required"],
            "image" => ["required"],
            "links" => ["required", "array"]
        ]);

        $file = $request->file('image');

        Staff::create([
            "cate" => $request->input("cate"),
            "name" => $request->input("name"),
            "role" => $request->input("role"),
            "desc" => $request->input("desc"),
            "links" => $request->input("links"),
            "image" => $file->storeAs($request->input('cate') == 1 ? 'public/images/staff' : 'public/images/partners', Str::uuid() . "." . $file->extension()),
        ]);

        return redirect()->route("admin.staff.index")->with("success", "Staff crée !");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view("admin.staff.edit", [
            "staff" => $staff,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            "cate" => ["required", "min:1", "max:2"],
            "name" => ["required"],
            "desc" => ["required"],
            "links" => ["array"]
        ]);

        if ($request->has("file")) {
            Storage::delete($staff->image);
            $file = $request->file('image');
        }

        $staff->update([
            "cate" => $request->input("cate"),
            "name" => $request->input("name"),
            "role" => $request->input("role"),
            "desc" => $request->input("desc"),
            "links" => $request->input("links"),
            "image" => isset($file) ? ($file->storeAs($request->input('cate') == 1 ? 'public/images/staff' : 'public/images/partners', Str::uuid() . "." . $file->extension())) : $staff->image,
        ]);

        // route de retour
        return redirect()->route("admin.staff.index")->with("success", "Staff/Partenaire crée !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        
        return redirect()->route("admin.staff.index")->with("success", "Staff/Partenaire supprimé !");
    }
}
