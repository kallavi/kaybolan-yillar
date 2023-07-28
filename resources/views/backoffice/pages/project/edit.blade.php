@extends('backoffice.layouts.main')
@section('content')

    <div class="py-10">
        <form action="{{ route('admin.project.update', $project->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h1 class="anchor fw-bold mb-5" id="form_title" data-kt-scroll-offset="50">
                {{ $project->name }} Adlı Kişiyi Düzenle</h1>
            <div class="row">
                <div class="mb-5 col-lg-10">
                    <div class="mb-5">
                        <label>Resim</label>
                        <br>
                        <img class="m-2" width="200" src="{{ asset($project->image) }}" alt="">
                        <input type="file" onchange="validateSize(this)" name="image" id="title" class="form-control file-input-validation" accept=".png, .jpg, .jpeg">

                    </div>
                    <div class="mb-5">
                        <label>Proje Başlık</label>
                        <input type="text" name="title" id="title" value="{{$project->title}}" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <label>Proje Alt Başlık (Kırmızı Başlık)</label>
                        <input type="text" name="subtitle" id="subtitle" value="{{$project->subtitle}}" class="form-control" required>
                    </div>
 

                    <div class="mb-5">
                        <label>Proje İçeriği</label>
                        <textarea rows="5" name="description" id="title" class="form-control"> {{$project->description}} </textarea>

                    </div>
 
                    <div class="row mb-6">
                        <div class="col-lg-12 fv-row">
                            <div class="form-check form-check-custom form-check-solid">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="highlighted"  {{$project->highlighted=='on'?'checked':''}}>
                                    <span class="form-check-label">
                                        Öne Çıkan Proje
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <label>Yayın Durumu</label>
                        <select name="status" id="title" class="form-control" required>
                            <option {{$project->status==1?'selected':''}} value="1">Aktif</option>
                            <option {{$project->status==0?'selected':''}} value="0">Pasif</option>
                        </select>
                    </div>

                    <div class="mb-5">
                        <label>Sıra No</label>
                        <input type="number" name="sort" id="title" value="{{ $project->sort }}" class="form-control" min="1" >
                    </div>

                </div>

            </div>







            <div class="mb-5">
                <button type="submit" name="kaydet" value="Kaydet" class="btn btn-primary">Kaydet</button>
            </div>
        </form>
    </div>
@stop
