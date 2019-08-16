<?php

namespace Modules\Regist\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
class RegisModel extends Model
{
    use Uuid;
    protected $table='otp';

    protected $fillable = ['nama_lengkap','email','token'];
}
