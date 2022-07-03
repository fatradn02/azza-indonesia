<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Feature;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data['products'] = Product::all();
        $data['features'] = Feature::all();
        $data['about'] = About::first();
        $data['settings'] = Setting::first();
        $data['sponsors'] = Sponsor::all();
        $data['users'] = User::all();
        return view('font-page.home', $data);
    }
}
