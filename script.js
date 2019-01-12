$('.page-scroll').on('click', function (e) {

    // ambil isi href
    var tujuan = $(this).attr('href');
    // tangkap element
    var elemetntujuan = $(tujuan);

    // pindahkan scroll
    // $('html,body').scrollTop('700');

    // console.log(elemetntujuan);
    // jarak element ke atas
    // console.log(elemetntujuan.offset().top);


    // console.log($('html,body').scrollTop());
    // console.log($('html,body').scrollTop());
    $('html,body').animate({
        scrollTop: elemetntujuan.offset().top - 50
    }, 1000, 'easeInOutExpo');

    e.preventDefault();
});


$(window).scroll(function () {
    var wScroll = $(this).scrollTop();
    // portfolio
    if (wScroll > $('.galeri').offset().top - 250) {
        $('.galeri .card').each(function (i) {
            setTimeout(function () {
                $('.galeri .card').eq(i).addClass('muncul');
            }, 300 * (i + 1));
        });
        // $('.portfolio .thumbnail').addClass('muncul');
    }
});