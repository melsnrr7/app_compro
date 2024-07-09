<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Pendidikans;
use App\Models\Pengalamans;
use App\Models\Skills;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::get()->last();
        $pengalamans = Pengalamans::get();
        $pendidikans = Pendidikans::get()->last();
        $skills = Skills::get()->last();
        return view('home.index', compact("profile",  "pengalamans", "pendidikans", "skills"));
    }
}
