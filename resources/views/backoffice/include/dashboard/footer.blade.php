<div id="kt_app_footer" class="app-footer">
    <!--begin::Footer container-->
    <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
        <!--begin::Copyright-->

        <!--end::Copyright-->
        {{--        <!--begin::Menu--> --}}
        {{--        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1"> --}}
        {{--            <li class="menu-item"> --}}
        {{--                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a> --}}
        {{--            </li> --}}
        {{--        </ul> --}}
        {{--        <!--end::Menu--> --}}
    </div>
    <!--end::Footer container-->
</div>
<script>
    function validateSize(input) {
        const fileSize = input.files[0].size / 1024 / 1024; // in MiB
        if (fileSize > 2) {
            alert('2 MB üstü dosya sisteme yüklenmemektedir');
            $('.file-input-validation').val(''); //for clearing with Jquery
        }
    }
</script>
