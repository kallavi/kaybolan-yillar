@extends('layout.layout')

@section('content')
    <section id="homeSection"
        class="position-relative min-h-screen 2xl:pt-[10.4vh] xl:pt-[8.4vh] lg:pt-[6.4vh] 2xl:pb-[2.5vh] xl:pb-[1.5vh] lg:pb-[1vh] pt-[60px]">
        <div class="headTitle w-100 text-center">
            <img class="d-none d-md-block mx-auto" src="{{ asset('assets/images/kaybolan-yillar-title.svg') }}"
                alt="">
            <img class="d-block d-md-none mx-auto" src="{{ asset('assets/images/kaybolan-yillar-title-mobile.svg') }}"
                alt="">
        </div>
        <div class="carouselWrapper md:pt-[25px]">
            <div class="kaybolanYillarSlide cards lg:px-[0.5rem] h-100">
                <div class="slideItem card wow animate__animated animate__fadeInUp animate__delay-1s" data-bs-toggle="modal"
                    data-bs-target="#cardModal">
                    <div class="card-body">
                        <div class="imageFrame">
                            <img src="{{ asset('assets/images/slider/01.png') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="count">200+</span>
                            <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                        </div>
                    </div>
                </div>
                <div class="slideItem card wow animate__animated animate__fadeInUp animate__slow" data-bs-toggle="modal"
                    data-bs-target="#cardModal">
                    <div class="card-body">
                        <div class="imageFrame">
                            <img src="{{ asset('assets/images/slider/02.png') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="count">16.50TL</span>
                            <div class="tag"><span class="wrap1"><span class="wrap2">EN PAHALI SU</span></span></div>
                        </div>
                    </div>
                </div>
                <div class="slideItem card wow animate__animated animate__fadeInUp animate__fast" data-bs-toggle="modal"
                    data-bs-target="#cardModal">
                    <div class="card-body">
                        <div class="imageFrame">
                            <img src="{{ asset('assets/images/slider/03.png') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="count">45 DK+</span>
                            <div class="tag"><span class="wrap1"><span class="wrap2">OTOBÜS BEKLEME</span></span></div>
                        </div>
                    </div>
                </div>
                <div class="slideItem card wow animate__animated animate__fadeInUp animate__slow" data-bs-toggle="modal"
                    data-bs-target="#cardModal">
                    <div class="card-body">
                        <div class="imageFrame">
                            <img src="{{ asset('assets/images/slider/04.png') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="count">9.90TL</span>
                            <div class="tag"><span class="wrap1"><span class="wrap2">EN PAHALI YOLCU</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slideItem card wow animate__animated animate__fadeInUp animate__delay-1s" data-bs-toggle="modal"
                    data-bs-target="#cardModal">
                    <div class="card-body">
                        <div class="imageFrame">
                            <img src="{{ asset('assets/images/slider/05.png') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="count">6 KAT</span>
                            <div class="tag"><span class="wrap1"><span class="wrap2">DEPREM BÜTÇESİ
                                        KÜÇÜLTÜLDÜ</span></span></div>
                        </div>
                    </div>
                </div>
                <div class="slideItem card wow animate__animated animate__fadeInUp" data-bs-toggle="modal"
                    data-bs-target="#cardModal">
                    <div class="card-body">
                        <div class="imageFrame">
                            <img src="{{ asset('assets/images/slider/05.png') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="count">200+</span>
                            <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                        </div>
                    </div>
                </div>
                <div class="slideItem card" data-bs-toggle="modal" data-bs-target="#cardModal">
                    <div class="card-body">
                        <div class="imageFrame">
                            <img src="{{ asset('assets/images/slider/05.png') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="count">200+</span>
                            <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                        </div>
                    </div>
                </div>
                <div class="slideItem card" data-bs-toggle="modal" data-bs-target="#cardModal">
                    <div class="card-body">
                        <div class="imageFrame">
                            <img src="{{ asset('assets/images/slider/05.png') }}" alt="">
                        </div>
                        <div class="desc">
                            <span class="count">200+</span>
                            <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="yearCounter" class="w-100 text-center wow animate__animated animate__fadeInUp animate__fast"></div>
        <div class="scroll_down d-inline-flex mx-auto  wow animate__animated animate__fadeInUp animate__fast">
            <a href="#allCardsSection">
                <img src="{{ asset('assets/images/statics/icons/arrow.svg') }}" alt="">
            </a>
        </div>
    </section>
    <section id="allCardsSection" class="md:pb-[214px] pb-[54px]">
        <div class="cards d-flex justify-content-center flex-wrap">
            <div class="card wow animate__animated animate__fadeInUp animate__faster" data-bs-toggle="modal"
                data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/01.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card wow animate__animated animate__fadeInUp animate__fast" data-bs-toggle="modal"
                data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/06.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card wow animate__animated animate__fadeInUp animate__slow" data-bs-toggle="modal"
                data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/03.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card wow animate__animated animate__fadeInUp animate__slower" data-bs-toggle="modal"
                data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/04.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card wow animate__animated animate__fadeInUp animate__delay-1s" data-bs-toggle="modal"
                data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/05.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card wow animate__animated animate__fadeInUp animate__delay-2s" data-bs-toggle="modal"
                data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/01.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/01.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/05.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/02.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/05.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/01.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/06.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/03.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/04.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/05.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/01.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/05.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>
            <div class="card" data-bs-toggle="modal" data-bs-target="#cardModal">
                <div class="card-body">
                    <div class="imageFrame">
                        <img src="{{ asset('assets/images/cards/02.png') }}" alt="">
                    </div>
                    <div class="desc">
                        <span class="count">200+</span>
                        <div class="tag"><span class="wrap1"><span class="wrap2">HURDA OTOBÜS</span></span></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!----Detay Modal Başlangıc-->
    <div class="modal fade" id="cardModal" tabindex="-1" aria-labelledby="cardModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" class="btn-close shadow-none hover:shadow-none ms-auto" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="modal-body row gx-0 mx-0 xl:flex flex-column flex-xl-row align-items-center">
                    <div class="imageFrame col-sm-14">
                        <img src="{{ asset('assets/images/slider/big/01.png') }}" alt="">
                    </div>
                    <div class="paragraph col-sm-10">
                        <p><span class="wrap1"><span class="wrap2">Arızalanan İETT otobüsleri trafiği kilitleme devam
                                    ediyor.</span></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----Detay Modal Bitiş-->
@endsection