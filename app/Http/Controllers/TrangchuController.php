<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\slides;
use App\Models\products;

class TrangchuController 
{
    public function getIndex()
    {
        $slide = slides::all();
        return view('page.trangchu', compact('slides'));
    }
}