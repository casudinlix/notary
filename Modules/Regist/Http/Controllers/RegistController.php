<?php

namespace Modules\Regist\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
use Mail;
use Session;
use Modules\Regist\Entities\RegisModel;
use Validator;
//use Illuminate\Support\Carbon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

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
        try{
        DB::commit();
        $to_name = $request->nama_lengkap;
        $to_email = $request->email;

        $token= rand(10000, 99999);//str_random(32);
        $data = array("body" => "email OTP",'token'=>$token,'nama'=>$to_name);
            $data=RegisModel::firstOrNew(['email'=>$request->email]);
            $data->nama_lengkap=$request->nama_lengkap;
            $data->token=$token;
            $data->save();
            toastr()->success('Silahkan Cek Email Anda Untuk Step Berikutnya!','Selamat');
            //   Mail::send('regist::otp_email', $data, function ($message) use ($to_name, $to_email) {
            //             $message->to($to_email, $to_name)
            //                   ->subject('Login Token Anda');
            //             $message->from('no-reply@elodigi.id', 'No Reply');
            //         });
         return redirect()->route('register');
        }catch(\Exception $e){
        DB::rollback();
        //gagal
        return $e->getMessage();

        }


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
        $xx=DB::select(DB::Raw("DELETE FROM public.otp WHERE created_at < now()-'1 hour'::interval
        "));

         $data=RegisModel::where('token', $request->token);

        if ($data->count()>0) {
            $id=RegisModel::where('token',$request->token)->first()->token;
            $token=session(['token' => $id]);
            //session()->set('token', $id);//Session::set('token',$id);
            session(['token' => $id]);
            //toastr()->success('Token Anda '.$token, 'Success');
            //$data=RegisModel::where('token',$token)->first()
            return redirect()->route('final');


        } else {
            toastr()->error('Token Expired / Salah', 'Error');

            return redirect()->route('login');

            //dd(Input::all());
        }
    }
    function step3 (Request $request)
    {
        if(empty(session('token'))){
            toastr()->error('Silahkan Masukan Token Anda Terlebih Dahulu', 'Error');

            return redirect()->route('step2');
        }
        $jabatan=DB::table('user_type')->get();
        $paket=DB::table('services')->get();
        $data=RegisModel::where('token',session('token'))->first();
        return view("regist::final",compact('jabatan','paket','data'));
    }
    function final(Request $request)
    {
        DB::beginTransaction();

        try {
            DB::commit();
            $validasi=Validator::make($request->all(),[
                //'file_sk'=>'image|required|png,jpg,jpeg',
                'file_sk' => 'required|mimes:pdf,doc,docx,jpeg,png,jpg|max:2048',
                'file_ktp'=>'required|mimes:pdf,doc,docx,jpeg,png,jpg|max:2048',
                'wilayah'=>'required',
                'no_sk'=>'required',
                'no_identitas'=>'required',
                'nama_lengkap'=>'required',
                'aggre'=>'required'

              ]);
              if ($validasi->fails()) {
                toastr()->error('Pastikan Semua Kolom Sudah terisi dengan Benar', 'Error');

                   return redirect()->route('final');
              }
              $sk=$request->file('file_sk');
                $path_sk=$sk->store('public/register/sk');
                $ktp=$request->file('file_ktp');
                 $path_ktp=  $ktp->store('public/register/ktp');
              DB::table('users_request')->insert([
                'uuid'=>unik(),
                'user_type_id'=>$request->jabatan,
                'nama_lengkap'=>$request->nama_lengkap,
                'email'=>$request->email,
                'gelar'=>$request->gelar,
                'tempat_lahir'=>$request->tempat_lahir,
                'tgl_lahir'=>$request->tgl_lahir,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'alamat_kantor'=>$request->alamat_kantor,
                'alamat_rumah'=>$request->alamat_rumah,
                'jenis_identitas'=>$request->jenis_identitas,
                'no_identitas'=>$request->no_identitas,
                'no_npwp'=>$request->npwp,
                'telpon'=>$request->telpon,
                'no_sk'=>$request->no_sk,
                'file_sk'=>$path_sk,
                'file_ktp'=>$path_ktp,
                'wilayah'=>$request->wilayah,
                'status'=>'pending',
                'services_uuid'=>$request->paket,
                'created_at'=>Carbon::now(),
              ]);

              RegisModel::where('token',session('token'))->delete();
              session()->forget('token');
              toastr()->success('Data Anda Sedang Kami Verifikasi!','Selamat');
              $this->send_email($request->nama_lengkap,$request->email);
              return redirect()->route('login');

            // all good
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }
    function send_email($a,$b)
    {
        $data=['nama'=>$a,'email'=>$b];
    return  Mail::send('regist::email_notif', $data, function ($message) use ($a, $b) {
          $message->to($b, $a)
                ->subject('Akun '.$a.' Sedang Ditinjau');
          $message->from('no-reply@elodigi.id', 'No Reply');
      });
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

        DB::beginTransaction();

        try {


            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }
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
