<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Web\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
    $categories = Category::with(['contents.authors'])->orderBy('id')->get();

    return view('pages.home.index', compact('categories'));
    }
}