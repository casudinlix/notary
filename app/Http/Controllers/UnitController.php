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
    function index()
    {
      $user=User::find(Auth::id());
        $roles = $user->getRoleNames();//['data'=>$user->getRoleNames()];
       //return  response()->json($roles);
    //     $data=[1,2,3,4,5,6];
    //    //$user->assignRole('Dewa');
    $result = array();

    foreach($roles as $inner) {
        $result[] = $inner;
    }
      if (in_array('Super Users',$result)) {
          echo "ada";
      } else {
          echo "tidak ada";
      }


    // //     //$user->assignRole('Super Users');

    // //   return dd($user);
    // App::setLocale($lang);
    // return view('tes');
    // }
    // function bahasa($lang)
    // {
    //     App::setLocale($lang);
    //     return view('tes');
//return view('tes');
    }
}
