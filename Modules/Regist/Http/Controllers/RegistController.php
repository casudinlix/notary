<?php

namespace Modules\Regist\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
use Mail;
use Session;
use Modules\Regist\Entities\RegisModel;
use Illuminate\Validation\ValidationServiceProvider;
use Illuminate\Foundation\Validation\ValidatesRequests;

class RegistController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('regist::index');
    }
    function otp(Request $request)
    {
        DB::beginTransaction();

        try {
            $to_name = $request->nama;
        $to_email = $request->email;

        $token=str_random(32);
        $data = array("body" => "email OTP",'token'=>$token,'nama'=>$to_name);



        $new=RegisModel::firstOrNew(
        ['email'=>$request->email
        ]);
        $new->email=$request->email;
        $new->nama_lengkap=$request->nama;
        $new->token=$token;
        $new->save();

        // Mail::send('regist::otp_email', $data, function ($message) use ($to_name, $to_email) {
        //     $message->to($to_email, $to_name)
        //           ->subject('Login Token Anda');
        //     $message->from('no-reply@elodigi.id', 'No Reply');
        // });
        toastr()->success('Silahkan Cek Email Anda Untuk Step Berikutnya!','Selamat');

         return redirect()->route('register');

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        };

    }
    function step2(Request $request)
    {
        if (session('token')) {
            return redirect()->route('final');
        } else {
           return view("regist::token");
        }

    }
    function cek_token(Request $request)
    {
        $xx=DB::select(DB::Raw("delete  from public.otp where created_at < now() - interval '1 hour'"));

         $data=RegisModel::where('token', $request->token);

        if ($data->count()>0) {
            $id=RegisModel::where('token',$request->token)->first()->token;
            $token=session(['token' => $id]);
            //session()->set('token', $id);//Session::set('token',$id);
            session(['token' => $id]);
            //toastr()->success('Token Anda '.$token, 'Success');

            return redirect()->route('final');


        } else {
            toastr()->error('Token Expired / Salah', 'Error');

            return redirect()->route('step2');

            //dd(Input::all());
        }
    }
    function step3 (Request $request)
    {
        $jabatan=DB::table('user_type')->get();
        $paket=DB::table('services')->get();
        return view("regist::final",compact('jabatan','paket'));
    }
    function final(Request $request)
    {
        DB::beginTransaction();

        try {
            dd($request->all());


            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('regist::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('regist::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('regist::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
