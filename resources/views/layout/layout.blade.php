<!--head include-->
@include('include.head')

<body>
    <!---Preloader-->
    <div class="preloader">
        <div class="preloader-spin">
            <img src="{{ asset('assets/images/kaybolan-yillar-title-mobile.svg') }}" alt="">
        </div>
    </div>
    <!---Preloader End-->
    <div id="body" class="container-fluid lg:px-[1.75rem] md:pb-[90px] pb-[54px] gx-0">

        @yield('content')

        <footer class="w-100 text-center">
            <img class="d-none d-lg-block mx-auto" width="301" src="{{ asset('assets/images/kaybolan-yillar-title.svg') }}" alt="">
            <img class="d-block d-md-none mx-auto" width="75" src="{{ asset('assets/images/kaybolan-yillar-title-mobile.svg') }}" alt="">
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="js/jquery-3.7.0.min.js"></script> -->
    <script type="text/javascript">
        $(window).on('load', function() {
            if ($('.preloader').length) {
                $('.preloader').fadeOut('slow');
            }
        });
    </script>
    @vite(['resources/js/app.js'])
    {{-- <script type="module" src="./js/main.js"></script> --}}
    {{-- <!-- <script type="text/javascript" src="{{asset ('assets/plugin/wow/wow.min.js')}}"></script> -->
  <!-- <script type="text/javascript" src="{{asset ('assets/plugin/slick/slick.min.js')}}"></script> --> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
        integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite(['resources/js/script.js'])
    {{-- <script type="module" src="./js/script.js"></script> --}}


    <script>
        $('#cardModal').on('show.bs.modal', function(event) {

            var button = $(event.relatedTarget)
            var id = button.attr('data-id')

            $('#modal-description').html(button.attr('data-description'))
            $('#modal-subtitle').html(button.attr('data-subtitle'))
            $('#modal-image').attr('src', button.attr('data-image'))

        });


        $('.load-more').click(function() {

            loadMore()
        })

        $(document).ready(function() {



        });

        var siteUrl = "{{ url('/') }}";
        var url = "getProject";
        var page = 1; // PAGİNATİON BAŞLANGIÇ SAYFASI
        var paginate = 10; // PAGİNATİON İÇİN HER SEFERİNDE ÇEKİLECEK VERİ SAYISI

        $(document).ready(function() {
            loadMore()
        });
        // DAHA FAZLA BUTONUNA TIKLANDIĞINDA VERİ ÇEKER. PAGINATION YAPAR.
        function loadMore() {

            var fd = new FormData;
            var div = $('#cardDiv');
            fd.append('url', url);
            fd.append('paginate', paginate);



            fd.append('_token', '{{ @csrf_token() }}');



            $.ajax({
                    url: siteUrl + "/getProject" + "?page=" + page,
                    // datatype: "html",
                    processData: false, // Important!
                    contentType: false,
                    type: "post",
                    data: fd,

                })
                .done(function(response) {

                    div.append(response.item)
                    page = response.currentPage + 1

                    // DEVAMI BUTONUNU GİZLER
                    if (response.hasMorePages == false) {
                        $('.load-more').hide()
                    }



                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    console.log('Server error occured');
                });

        }
    </script>
</body>

</html>
