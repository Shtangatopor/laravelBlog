<?php

namespace App\Http\Controllers;

//use TCG\Voyager\Models\Page;
use App\Page;

class PageController extends Controller
{
        /**
     * Show the page.
     *
     * @param  int  $id
     * @return View
     */
    public function __invoke($id)
    {
        return view('page', ['pages' => Page::findOrFail($id)]);
    }
}
