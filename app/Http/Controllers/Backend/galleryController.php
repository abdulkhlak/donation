<?php

namespace App\Http\Controllers\Backend;

use App\Backend\gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class galleryController extends Controller
{
  public function view()
  {
	  $galleries = gallery::get();
	  return view('layouts.admin.gallery.gallery_view', compact('galleries'));
  }
}
