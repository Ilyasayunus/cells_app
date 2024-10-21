<?php

namespace App\Http\Controllers\Carousels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    function tampil(){
        return view('admin.carousel.carousels');

    }
    function tambah(){
        return view('admin.carousel.tambah');
    }
}
