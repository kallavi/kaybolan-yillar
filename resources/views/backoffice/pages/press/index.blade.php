@extends('backoffice.layouts.main')
@section('content')

    <div class="py-10">
        <form action="{{ route('admin.press.update', 1) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h1 class="anchor fw-bold mb-5" id="form_title" data-kt-scroll-offset="50">
                Site Ayarları Düzenle</h1>
            <div class="row">
                <div class="mb-5 col-lg-10">

                   
                    <div class="mb-5">
                        <label>PDF (Maksimum dosya boyutu: 2MB)</label>
                      <br>
                        <a href="{{ asset($press->pdf) }}" target="_blank" class="btn btn-primary btn-sm mt-3 mb-3">Döküman</a>
                        
                        <input type="file"   name="pdf" id="title" class="form-control file-input-validation"
                            accept=".pdf">

                    </div>

                    <div class="mb-5">
                        <label>Video URL (Youtube url'sindeki ='den sonraki kod girilmelidir)</label>
                        <input type="text" name="video" id="title" class="form-control"  value="{{$press->video}}" placeholder="örn: j6jL95BaSeM" required>
                    </div>


 

                </div>

            </div>







            <div class="mb-5">
                <button type="submit" name="kaydet" value="Kaydet" class="btn btn-primary">Kaydet</button>
            </div>
        </form>
    </div>
@stop
