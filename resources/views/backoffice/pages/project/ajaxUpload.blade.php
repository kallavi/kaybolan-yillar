<div class="row">
    @foreach($items as $item)
        <div class="col-lg-3">
            <div class="card card-bordered">
                <div class="card-header ribbon">
                    <div class="card-title">Resim</div>
                    <div id='silmeButonu' data-id="{{ $item->id }}" onclick="deleteItem('{{ $item->id }}')" class="ribbon-label bg-danger">Sil</div>
                </div>
                <div class="card-body">
                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{  $item->image }}">
                        <!--begin::Image-->
                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{$item->image }}')"></div>
                        <!--end::Image-->
                        <!--begin::Action-->
                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                        </div>
                        <!--end::Action-->
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
