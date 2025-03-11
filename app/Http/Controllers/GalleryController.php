<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class GalleryController extends Controller
{
    public function archiv()
    {
        $imageFiles = File::files(public_path('images/archiv'));
        return view('archiv', compact('imageFiles'));
    }
}
