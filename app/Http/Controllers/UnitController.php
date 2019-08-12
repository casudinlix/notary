<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App;
class UnitController extends Controller
{
    function index($lang)
    {
    //     $user=User::find(1);
    //     //$user->assignRole('Super Users');

    //   return dd($user);
    App::setLocale($lang);
    return view('tes');
    }
    function bahasa($lang)
    {
        App::setLocale($lang);
        return view('tes');
    }
}
