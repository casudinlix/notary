@section('title')

@stop
@section('css')

@stop
@section('content);

@stop

@section('js');

@stop

@section('script)

@stop

DB::beginTransaction();

try {
   

    DB::commit();
    // all good
} catch (\Exception $e) {
    DB::rollback();
    // something went wrong
}

--Session
set session $token=session(['token' => $id]);
delete Session
  {{dd(session()->forget('token'))}}
  menampilakn Session
  session('nama session')
