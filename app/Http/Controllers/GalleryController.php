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
        return view('gallery.archiv', compact('imageFiles'));
    }

    public function hetkoznap()
    {
        $imageFiles = File::files(public_path('images/hetkoznap'));
        return view('gallery.hetkoznap', compact('imageFiles'));
    }

    public function kereszt()
    {
        $imageFiles = File::files(public_path('images/kereszt'));
        return view('gallery.kereszt', compact('imageFiles'));
    }
}
