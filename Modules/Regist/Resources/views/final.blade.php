@extends('regist::layouts.master')
@section('title')
    Final
@endsection
@section('content')
            <!-- -------------- Registration -------------- -->
            <div class="allcp-form theme-primary mw600" id="register">

                <div class="panel panel-primary">
                    <div class="panel-heading pn">
                                    <span class="panel-title">
                                     form Registrasi
                                    </span>
                    </div>
                    <!-- -------------- /Panel Heading -------------- -->

                <form method="post" action="{{route('post_final')}}" id="form-register" method="POST" enctype="multipart/form-data">
                        <div class="panel-body pn">
                            <div class="section row">
                                <div class="col-md-6 ph10">
                                    <label for="firstname" class="field prepend-icon">
                                       Nama Lengkap
                                    </label>
                                    <input type="text" name="nama_lengkap" id="firstname"
                                               class="gui-input"
                                               placeholder="Nama Lengkap">
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="col-md-6 ph10">
                                    <label for="lastname" class="field prepend-icon">
                                        Gelar AKademik

                                    </label>
                                    <input type="text" name="gelar"  class="gui-input"
                                               placeholder="Gelar">
                                </div>

                                <!-- -------------- /section -------------- -->
                            </div>
                            <!-- -------------- /section -------------- -->
                            <div class="section row">
                                <div class="col-md-6 ph10">
                                    <label for="firstname" class="field prepend-icon">
                                       Tempat Lahir
                                    </label>
                                    <select name="tempat_lahir" id="" class="gui-input select2" required>
                                            <option value="">Tempat Lahir</option>
                                            @foreach (\Indonesia::allCities() as $key)
                                        <option value="{{$key->name}}">{{$key->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="col-md-6 ph10">
                                    <label for="lastname" class="field prepend-icon">
                                     Tanggal Lahir
                                    </label>
                                    <input type="text" name="tgl_lahir"  class="gui-input date"
                                               placeholder="Tanggal Lahir Th-Bln-Tgl" >
                                </div>

                                <!-- -------------- /section -------------- -->
                            </div>
                            <div class="section row">
                                <div class="col-md-6 ph10">
                                    <label for="firstname" class="field prepend-icon">
                                        Jabatan
                                    </label>
                                    <select name="jabatan" id="" class="gui-input select2" required>
                                            <option value="">Jabatan</option>
                                            @foreach ($jabatan as $key)
                                        <option value="{{$key->id}}">{{$key->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <!-- -------------- /section -------------- -->

                                <div class="col-md-6 ph10">
                                    <label for="lastname" class="field prepend-icon">
                                        Gander
                                    </label>
                                    <select name="service" id="" class="gui-input select2" required">
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>

                                    </select>

                                </div>


                                <!-- -------------- /section -------------- -->
                            </div>
                            <div class="section row">
                                    <div class="col-md-6 ph10">
                                        <label for="firstname" class="field prepend-icon">
                                            Jenis Identitas
                                        </label>
                                        <select name="jenis_identitas" id="" class="gui-input select2" required>
                                                <option value="KTP">KTP</option>
                                                <option value="Passport">Passport</option>
                                            </select>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-6 ph10">
                                        <label for="lastname" class="field prepend-icon">
                                            Nomor Identitas
                                        </label>
                                        <input type="text" class="gui-input" maxlength="16" name="no_identitas" onkeypress="return angka(event)">

                                    </div>


                                    <!-- -------------- /section -------------- -->
                                </div>
                                <div class="section row">
                                        <div class="col-md-6 ph10">
                                                <label for="lastname" class="field prepend-icon">
                                                    Nomor SK Pengangkatan
                                                </label>
                                                <input type="text" class="gui-input"  name="no_sk">

                                            </div>
                                        <!-- -------------- /section -------------- -->

                                        <div class="col-md-6 ph10">
                                            <label for="lastname" class="field prepend-icon">
                                                Nomor NPWP
                                            </label>
                                            <input type="text" class="gui-input" maxlength="20" name="npwp" onkeypress="return angka(event)">

                                        </div>


                                        <!-- -------------- /section -------------- -->
                                    </div>
                            <div class="section">
                                <label for="email" class="field prepend-icon">
                                   Alamat Sesuai Identitas
                                </label>
                                <textarea name="alamat_rumah" id="" cols="30" rows="10" class="gui-input"></textarea>

                            </div>
                            <div class="section">
                                    <label for="email" class="field prepend-icon">
                                       Alamat Kantor
                                    </label>
                                    <textarea name="alamat_kantor" id="" cols="30" rows="10" class="gui-input"></textarea>

                                </div>
                                <div class="section">
                                        <label for="email" class="field prepend-icon">
                                          Wilayah Tugas
                                        </label>
                                        <select name="wilayah" class="gui-input select2" id="">
                                            <option value=""></option>
                                                @foreach (\Indonesia::allCities() as $key)
                                                <option value="{{$key->id}}">{{$key->name}}</option>
                                                    @endforeach
                                        </select>
                                    </div>
                            <!-- -------------- /section -------------- -->
                            <div class="section row">
                                    <div class="col-md-6 ph10">
                                            <label for="lastname" class="field prepend-icon">
                                                Lampiran File SK
                                            </label>
                                            <input type="file" class="gui-input"  name="file_sk">

                                        </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="col-md-6 ph10">
                                        <label for="lastname" class="field prepend-icon">
                                            Lampiran File Identitas
                                        </label>
                                        <input type="file" class="gui-input" maxlength="20" name="file_ktp" onkeypress="return angka(event)">

                                    </div>


                                    <!-- -------------- /section -------------- -->
                                </div>


                            <div class="section">
                                <div class="bs-component pull-left mt10">
                                    <div class="checkbox-custom checkbox-primary mb5">
                                        <input type="checkbox" checked="" id="agree">
                                        <label for="agree">I agree to the
                                            <a href="#"> terms of use. </a></label>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-bordered btn-primary">I Accept - Create Account
                                    </button>
                                </div>
                            </div>
                            <!-- -------------- /section -------------- -->

                        </div>
                        <!-- -------------- /Form -------------- -->
                        <div class="panel-footer">

                        </div>
                        <!-- -------------- /Panel Footer -------------- -->
                        @csrf
                    </form>
                </div>
            </div>

@endsection
@section('script')
<script>

    $(document).ready(function() {
        "use strict";
        $(".select2").select2({
            placeholder:'Pilih',
            allowClear: true
        });
        $('.select3').multiselect({
            enableFiltering: true
        });
        // $('.date').datepicker({
        //     format: 'dd/mm/yyyy',
        //     clearBtn: true,
        // });
        $('.date').mask("9999-99-99");

    });
    function angka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
    return true;
    }
</script>
@endsection
