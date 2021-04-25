<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Linkeys\UrlSigner\Facade\UrlSigner;
use Linkeys\UrlSigner\Models\Link;

class SlackController extends Controller
{

    public function index()
    {


    }

    public function create(Request $request)
    {
        $link = UrlSigner::generate(env('APP_URL').'/starting', [''], '+'. $request->time.' hours', $request->limit);

        $completeURL = $link->url . "?uuid=" . $link->uuid;

        return view('baru')->with([
            'completeURL' => $completeURL,
        ]);

    }

    public function isValid(Request $request)
    {
        // \Log::info($request);

        // $AccessLimit = $request->get(\Linkeys\UrlSigner\Models\Link::class);
        // // $noOfClick = $AccessLimit->clicks;

        // \Log::info($AccessLimit);

        // // if ( $noOfClick > 1)
        // // {
        // //     abort(401);
        // // } else {

        //     return view('started');
        // // }

    }


    public function linkRequest(Request $request)
    {
        $header = $request->header(); //get header info - later will use if more security needed.

        $link = UrlSigner::generate(env('APP_URL').'/starting', [''], '+24 hours', 2);
        $completeURL = $link->url . "?uuid=" . $link->uuid;

        return response()->json([
            'URL' => $completeURL,
            'uuid' => $link->uuid,
            'expired' => $link->expiry
        ]);

        // time and access limit can be variable accept from API request.

    }

    public function viewUrl() {

        $allLink = Link::orderBy('id', 'DESC')->paginate(12);

        return view('listrequest')->with(
            [
                'aall' => $allLink
            ]);
    }

}
