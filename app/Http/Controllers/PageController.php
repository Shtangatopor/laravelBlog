<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        $id = 1;
        $pages = Page::get()->where( 'id', $id);
        return view('page', ['pages' => $pages]);
    }
}
