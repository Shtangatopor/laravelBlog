<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    //
    public function index()
    {
        $pages = Page::get();
        return view('page', ['pages' => $pages]);
    }
}
