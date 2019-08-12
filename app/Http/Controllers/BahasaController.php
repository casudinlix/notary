<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
class BahasaController extends Controller
{
    function ubah($lang=null)
    {
        Session::put('locale', $lang);
        return redirect(url()->previous());
    }
}
