<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Redis;

class AdsController extends Controller
{
    public function index()
    {
        $ads = Ads::all();
        return view ('ads', ['ads' => $ads]);
    }
    public function create()
    {
        return view ('create');
    }

    public function show($id)
    {
        return view('ad', ['ad' => Ads::findOrFail($id)]);
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $text = $request->text;
        $pnumber = $request->pnumber;
        return redirect('/');
    }
}
