<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Show the page.
     *
     * @param string
     * @return View
     */
    public function __invoke($slug)
    {
        $pages = DB::table('pages')->get()->where('slug', $slug);
        if($pages->isEmpty()){
            return view('page', ['pages' => $pages])->withErrors('page not found');
        }
        return view('page', ['pages' => $pages]);
    }
}
