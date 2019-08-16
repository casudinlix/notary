<?php
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\Uuid as Generator;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;
function langapp($key, $params = [], $lang = 'en')
{
    return trans("baku.{$key}", $params, $lang == 'en' ? app()->getLocale() : $lang);
}
function avatar($id)
{

}
function unik()
{
    return Uuid::uuid4()->toString();
}
function tgl_indo($tgl){
       return Carbon::parse($tgl)->formatLocalized('%A, %d %B %Y %H:%I:%S');

         // return $dt->formatLocalized('%A %d %B %Y  %H:%I:%S');
  }
  function tgl_akta($tgl){
    $dt = new Carbon($tgl);


          return $dt->formatLocalized('%d %B %Y');
  }
