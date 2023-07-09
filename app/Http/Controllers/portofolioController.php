<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portofolioController extends Controller
{
    public function homepage(){
        return view('portofolio.index');
    }

    public function about(){
        return view('portofolio.about.index');
    }

    public function contact(){
        return view('portofolio.contact.index');
    }

    public function gallery(){
        return view('portofolio.gallery.index');
    }

    public function sosmed(){
        return view('portofolio.sosmed.index');
    }
    
}
