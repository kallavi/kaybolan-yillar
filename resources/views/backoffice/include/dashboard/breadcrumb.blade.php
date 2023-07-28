<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack flex-wrap flex-md-nowrap">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_toolbar_container'}" class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="{{route('dashboard.index')}}" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">{{$breadcrumb['viewTitle']}}</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Action group-->
        <div class="d-flex align-items-center overflow-auto">
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center flex-shrink-0">

            </div>
            <!--end::Wrapper-->
            <!--begin::Separartor-->
            <div class="bullet bg-secondary h-35px w-1px mx-5"></div>
            <!--end::Separartor-->
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center">
                @if(isset($addButtonRoute) && $addButtonRoute)
                <!--begin::Label-->
                <div class="d-flex align-items-center ms-3">
                    <a class="btn btn-success btn-sm" href="{{ $addButtonRoute }}"><i class="bi bi-plus-circle-fill fs-2"></i><span>{{ $addRouteButtonValue??' Ekle' }} </span> </a>
                </div>
                <!--end::Actions-->
                @endif
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Action group-->
    </div>
    <!--end::Toolbar container-->
</div>
