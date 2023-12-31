//Wow Animate
new WOW().init();
//Wow Animate Bitiş

//Scroll down click button
$(".scroll_down").click(function (e) {
  $('html,body').animate({
    scrollTop: $("allCardsSection").offset().top + 54
  }, 'slow');
});
//Scroll down click button bitiş
$("#videoModal").on('hidden.bs.modal', function (e) {
  console.log("saafafa");
   $("#videoModal iframe").attr("src", $("#videoModal iframe").attr("src"));
});
//Carousel Slider
$('.kaybolanYillarSlide').on('init reInit afterChange', function(event, slick, currentSlide) {
  var slideCount = slick.slideCount;
  var visibleSlides = slick.options.slidesToShow;
  
  if (slideCount <= visibleSlides) {
    $('.slick-dots').hide(); // Dots'ları gizle
  } else {
    $('.slick-dots').show(); // Dots'ları göster
  }
});
$('.kaybolanYillarSlide').slick({
  dots: true,
  arrows:false,
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 5,
  responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
        dots: true,
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        centerMode:true,
        dots: true,
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode:true
      }
    },
    {
      breakpoint:480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        centerMode:true
      }
    },
  ]
});


document.addEventListener("DOMContentLoaded", function () {
  const yearCounter = document.getElementById("yearCounter");

  function updateYear() {
    let currentYear = parseInt(yearCounter.textContent);

    // 2019'dan 2023'e kadar artırın, ardından tekrar 2019'a dönün
    currentYear = currentYear >= 2019 && currentYear < 2024 ? currentYear + 1 : 2019;

    yearCounter.textContent = currentYear;

    // Yılın değişim hızını belirleyin (ms cinsinden)
    const yearChangeDelay = 1000; // 1 saniye

    // Bir sonraki yılın güncellenmesi için tekrarlayın
    setTimeout(updateYear, yearChangeDelay);
  }

  // İlk olarak sayfa yüklendiğinde sayacı başlatın
  updateYear();
});
