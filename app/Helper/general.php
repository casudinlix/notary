<?php
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\Uuid as Generator;
function langapp($key, $params = [], $lang = 'en')
{
    return trans("baku.{$key}", $params, $lang == 'en' ? app()->getLocale() : $lang);
}
function avatar($id)
{

}
function unik()
{
    return Generator::uuid4()->toString();
}
