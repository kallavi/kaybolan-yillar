<!DOCTYPE html>
<html lang="tr">
@include('backoffice.include.dashboard.head')
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        @include('backoffice.include.dashboard.header')

        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            @include('backoffice.include.dashboard.sidebar')
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                @if(false)
                    @include('backoffice.include.dashboard.headerSub')
                @endif
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">

                    <!--begin::Toolbar-->
                    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                        <!--begin::Toolbar container-->
                        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                            <!--begin::Page title-->
                            @include('backoffice.include.dashboard.breadcrumb')
                            <!--end::Page title-->
                        </div>
                        <!--end::Toolbar container-->
                    </div>
                    <!--end::Toolbar-->
                    <div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
                        <div class="app-container container-fluid d-flex flex-column flex-lg-row" id="kt_docs_content_container">
                            <div class="card card-docs flex-row-fluid mb-2 flex-wrap p-10">
                                @if (session()->has('message'))
                                    <!--begin::Alert-->
                                    <div class="alert alert-{{ session('status') }} d-flex align-items-center p-5">
                                        <!--begin::Icon-->
                                        <span class="svg-icon svg-icon-2hx svg-icon-primary me-3"><i class="bi bi-bell-fill fs-3"></i></span>
                                        <!--end::Icon-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Title-->
                                            <h4 class="mb-1 text-dark">{{ session('title') }}</h4>
                                            <!--end::Title-->
                                            <!--begin::Content-->
                                            <span>{{ session('message') }}</span>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Alert-->
                                @endif
                                <!--begin::Content-->
                                @yield('content')
                                <!--end::Content-->
                            </div>

                        </div>
                    </div>
                    @yield('secondContent','')
                </div>
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                @include('backoffice.include.dashboard.footer')
                <!--end::Footer-->
            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>


<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{asset('backoffice/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('backoffice/assets/js/scripts.bundle.js')}}"></script>
<script src="{{asset('backoffice/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<!--end::Global Javascript Bundle-->
@yield('js')
<script>

    //CKeditor
    $(function() {
        if(document.querySelector('#kt_docs_ckeditor_classic')) {
            ClassicEditor.create(document.querySelector('#kt_docs_ckeditor_classic'))
                .then(editor => {
                    //console.log(editor);
                })
                .catch(error => {
                    //console.error(error);
                });
        }

        if(document.querySelector('#kt_docs_ckeditor_classic_')) {
            ClassicEditor.create(document.querySelector('#kt_docs_ckeditor_classic_'))
                .then(editor => {
                    //console.log(editor);
                })
                .catch(error => {
                    //console.error(error);
                });
        }
        if(document.querySelector('#kt_docs_ckeditor_classic_1')) {
            ClassicEditor.create(document.querySelector('#kt_docs_ckeditor_classic_1'))
                .then(editor => {
                    //console.log(editor);
                })
                .catch(error => {
                    //console.error(error);
                });
        }
    });
    // Datepicker
    $(function() {
        if(document.querySelector('#kt_daterangepicker')) {
            $("#kt_daterangepicker").daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    minYear: new Date().getFullYear() - 5,
                    maxYear: new Date().getFullYear() + 5,
                    autoUpdateInput:true,
                    autoApply: true,
                    locale: {
                        firstDay: 1,
                        format: 'DD/MM/YYYY',
                        weekLabel: "H",
                        daysOfWeek: [
                            "Paz", "Pts", "Sa", "Çar", "Per", "Cu", "Cts"
                        ],
                        monthNames: [
                            "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"
                        ],

                    },

                },
            );
        }
    });
    if(document.querySelector('#kt_timerangepicker')) {
        $("#kt_timerangepicker").flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
        });
    }
    //Input Mask
    $(function() {
        if(document.querySelector('form')) {
            // Date
            Inputmask({
                "mask" : "99/99/9999"
            }).mask(".kt_date_input");
        }
    });
    // Tagify
    $(function() {
        if(document.querySelector('.tagify')) {
            var inputTag = document.querySelector('.tagify');
            new Tagify(inputTag);
        }
    });

    //Slug
    $(function () {
        if(document.querySelector('form')) {

            var form = $(document).find('form');
            form.find('input[name="title"]').keyup(function (e) {
                form.find('input[name="slug"]').val(convertToSlug($(e.currentTarget).val()));
            });

        }
        function convertToSlug(str) {
            str = str.replace(/^\s+|\s+$/g, ''); // trim
            str = str.toLowerCase();

            // remove accents, swap ñ for n, etc
            var from = "ãàáäâẽèéëêìíïîıõòóöôùúüûñçğşüö·/_,:;";
            var to   = "aaaaaeeeeeiiiiiooooouuuuncgsuo------";
            for (var i = 0, l = from.length; i < l; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
                .replace(/\s+/g, '-') // collapse whitespace and replace by -
                .replace(/-+/g, '-'); // collapse dashes

            return str;
        }
    });

    //Sweet Are You Sure
    $(function () {
        var items=  document.querySelectorAll('.are-you-sure');

        items.forEach(function (item) {
            item.addEventListener('click', function (e) {
                e.preventDefault();
                Swal.fire({
                    title: $(e.currentTarget).data('swal-title'),
                    text: $(e.currentTarget).data('swal-description'),
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: $(e.currentTarget).data('swal-confirm-text'),
                    cancelButtonText: $(e.currentTarget).data('swal-cancel-text'),
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            })
        })
    });

</script>
</body>
</html>
