@extends('backoffice.layouts.main')
@section('content')


    <div class="py-10">
        <form action="{{ route('admin.project.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="anchor fw-bold mb-5" id="form_title" data-kt-scroll-offset="50">
                Yeni Proje Ekle</h1>
            <div class="row">
                <div class="mb-5 col-lg-10">
                    <div class="mb-5">
                        <label>Öne Çıkan Resim (Maksimum dosya boyutu: 2MB)</label>
                        <input type="file" onchange="validateSize(this)" name="image" id="title" class="form-control file-input-validation"
                            accept=".png, .jpg, .jpeg, .svg">

                    </div>
                    <div class="mb-5">
                        <label>Proje Adı</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="mb-5">
                        <label>Proje Alt Başlık (Kırmızı Başlık)</label>
                        <input type="text" name="subtitle" id="subtitle"  class="form-control" required>
                    </div>

                    <div class="mb-5">
                        <label>Proje İçeriği</label>
                        <textarea rows="5" name="description" id="title" class="form-control"></textarea>

                    </div>
 
                    <div class="row mb-6">
                        <div class="col-lg-12 fv-row">
                            <div class="form-check form-check-custom form-check-solid">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="highlighted">
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
                            <option value="1">Aktif</option>
                            <option value="0">Pasif</option>
                        </select>
                    </div>
 
                    <div class="mb-5">
                        <label>Sıra No</label>
                        <input type="number" name="sort" id="title" class="form-control" min="1">
                    </div>
                    
                </div>
            </div>

 
            <div class="mb-5">
                <button type="submit" name="kaydet" value="Kaydet" class="btn btn-primary">Kaydet</button>
            </div>
        </form>
    </div>

@stop
