<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; 
class PagesController extends Controller
{
     function index ()
{  
    return view('site.index');
}

function contact ()
{
    return view('site.contact');
}
function documentation ()
{
    return view('site.documentation');
}
}
