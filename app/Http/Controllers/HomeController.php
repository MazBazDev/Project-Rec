<?php

namespace App\Http\Controllers;

use App\Models\Poster;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $this->getUluleProjectDatas();
        return view('guest.welcome', [
            "ulule" => $this->getUluleProjectDatas(),
            "posters" => Poster::all()
        ]);    
    }

    private function getUluleProjectDatas() 
    {
        try {
            $api =  json_decode(Http::get('https://api.ulule.com/v1/projects/' + setting("sec3.api.id")));
        } catch (\Throwable $th) {
            //throw $th;
        }

        return (object) [
            "absolute_url" => $api->absolute_url ?? "",
            "amount_raised" => $api->amount_raised ?? 0,
            "currency" => $api->currency_display ?? "€",
            "goal" => $api->goal ?? 100,
            "goal_raised" => $api->goal_raised ?? 100,
            "percent" => $api->percent ?? 100,
        ];
    }
}
