@extends('layout.layout')

@section('content')
    <section id="homeSection" class="position-relative min-h-screen 2xl:pt-[7.5vh] xl:pt-[8.4vh] lg:pt-[6.4vh] 2xl:pb-[2.5vh] xl:pb-[1.5vh] lg:pb-[1vh] pt-[60px]">
        <div class="headTitle w-100 text-center">
            <img class="d-none d-md-block mx-auto" src="{{ asset('assets/images/kaybolan-yillar-title.svg') }}" alt="">
            <img class="d-block d-md-none mx-auto" src="{{ asset('assets/images/kaybolan-yillar-title-mobile.svg') }}" alt="">
        </div>
        <div class="carouselWrapper md:pt-[25px]">
            <div class="kaybolanYillarSlide cards">
                @php
                    $count = 0;
                @endphp
                @foreach ($highlighted as $item)
                    @if ($loop->index < 5)
                        <div class="slideItem card wow animate__animated animate__fadeInUp" data-wow-delay="1.{{ $count }}s" data-bs-toggle="modal"
                            data-bs-target="#cardModal" data-image="{{ $item->image }}" data-description="{{ $item->description }}" data-subtitle="{{ $item->subtitle }}">
                            <div class="card-body">
                                <div class="imageFrame">
                                    <img data-lazy="{{ asset($item->image) }}" alt="">
                                </div>
                                <div class="desc">
                                    <span class="count">{{ $item->subtitle }}</span>
                                    <div class="tag"><span class="wrapWrapper"><span class="wrap1"><span class="wrap2">{{ $item->title }}</span></span></span></div>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="slideItem card wow animate__animated animate__fadeInUp" data-wow-delay="1s" data-bs-toggle="modal"
                        data-bs-target="#cardModal" data-image="{{ $item->image }}" data-description="{{ $item->description }}" data-subtitle="{{ $item->subtitle }}">
                        <div class="card-body">
                            <div class="imageFrame">
                                <img src="{{ asset($item->image) }}" alt="">
                            </div>
                            <div class="desc">
                                <span class="count">{{ $item->subtitle }}</span>
                                <div class="tag"><span class="wrapWrapper"><span class="wrap1"><span class="wrap2">{{ $item->title }}</span></span></span></div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @php
                        $count++;
                        $count++;
                         
                    @endphp
                @endforeach

            </div>
        </div>
        <div id="yearCounter" class="w-100 text-center wow animate__animated animate__fadeInUp animate__fast"></div>
        <div class="scroll_down d-inline-flex mx-auto  wow animate__animated animate__fadeInUp animate__fast">
            <a href="#allCardsSection">
                <img src="{{ asset('assets/images/statics/icons/arrow.svg') }}" alt="">
            </a>
        </div>
    </section>
    <section id="allCardsSection" class="md:pb-[110px] pb-[54px] lg:px-[1.75rem] ">
        <div class="cards d-flex justify-content-center flex-wrap cardDiv" id="cardDiv">


            {{-- @foreach ($project as $item)
                <div class="card wow animate__animated animate__fadeInUp animate__faster" data-bs-toggle="modal" data-bs-target="#cardModal" data-image="{{ $item->image }}"
                    data-description="{{ $item->description }}">
                    <div class="card-body">
                        <div class="imageFrame">
                            <img src="{{ asset($item->image) }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="count">{{ $item->subtitle  }}</span>
                            <div class="tag"><span class="wrap1"><span class="wrap2">{{ $item->title }}</span></span></div>
                        </div>
                    </div>
                </div>
            @endforeach --}}

        </div>
    </section>

    <div class="mx-auto text-center w-100 md:pb-[70px] pb-[40px]">
        <button class="btn btn-primary load-more shadow-none hover:shadow-none rounded-none p-0 rounded-tl-0 rounded-bl-0"><span class="wrap1"><span class="wrap2">Daha
                    Fazla</span></span></button>
    </div>
    <!----Detay Modal Başlangıc-->
    <div class="modal fade" id="cardModal" tabindex="-1" aria-labelledby="cardModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" class="btn-close shadow-none hover:shadow-none ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body row gx-0 mx-0 xl:flex flex-column flex-xl-row align-items-center">
                    <div class="imageFrame col-sm-14">
                        <img id="modal-image" src="{{ asset('assets/images/slider/big/01.png') }}" alt="">
                    </div>
                    <div class="paragraph col-sm-10">
                        <span class="count d-none" id="modal-subtitle">45 DK+</span>
                        <p><span class="wrapWrapper"><span class="wrap1">
                                    <span class="wrap2" id="modal-description">Arızalanan İETT otobüsleri trafiği kilitleme devam
                                        ediyor.</span></span></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="cardModal2" tabindex="-1" aria-labelledby="cardModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" class="btn-close shadow-none hover:shadow-none ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body row gx-0 mx-0 xl:flex flex-column flex-xl-row align-items-center">
                    <div class="imageFrame col-sm-22">
                        <img id="modal-image2" src="{{ asset('assets/images/slider/big/01.png') }}" alt="">
                    </div>
                    {{-- <div class="paragraph col-sm-10">
                        <span class="count d-none" id="modal-subtitle">45 DK+</span>
                        <p><span class="wrapWrapper"><span class="wrap1">
                                    <span class="wrap2" id="modal-description">Arızalanan İETT otobüsleri trafiği kilitleme devam
                                        ediyor.</span></span></span></p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!----Detay Modal Bitiş-->
@endsection
