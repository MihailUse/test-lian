$(document).ready(function () {


    $('#slides .carousel-indicator span:first').click(function () {
        $('#slides').carousel('prev');
    });

    $('#slides .carousel-indicator span:last').click(function () {
        $('#slides').carousel('next');
    });


    $('#close').click(function () {
        $('.map-inf').hide(200);
    });

    $('.img-fluid').click(function () {
        $('.map-inf').show(200);
    });


    if (window.location.href.indexOf('/index') > -1 ||
        window.location.href.indexOf('/portfolio') > -1) {


        $('.details, .card-info').hide(); //скрыть инф о карточке

        let index;
        $('.card-columns .card').click(function () {

            index = $('.card-columns .card').index(this);
            showIt();
            setImgInfo(index);
            setImg(index);
            $('#portfolio-img').carousel(0);
            return index;
        });

        $('#hideIt').click(function () {
            hideIt();
        });


        // останавливает слайдер при наведении на кнопки/
        $('#next, #previous, .details').hover(function () {
                $('#portfolio-img').carousel('pause');
            }, function () {
                $('#portfolio-img').carousel('cycle');
            }
        );

        //кнопки для смены картинки
        $('#next').click(function () {
            if (index === 9) {
                index = 0;
            } else {
                index++;
            }
            setImg(index, true);
            // $('.carousel').carousel(0);
        });

        $('#previous').click(function () {
            if (index === -8) {
                index = 0;
            } else {
                index--;
            }
            setImg(index, false);
            //$('.carousel').carousel(0);
        });


        //отображает информацию о картинке
        function setImgInfo(index) {
            blockImg = $('.card-info').eq(index).html();
            $('.details div').first().html(blockImg).wrapInner('<div class="img-info"></div>');
        }

        //получает и заманяет адрес картинки
        function setImg(index) {
            for (let i = 0; i < 4; i++) {
                SrcImg = $('.card img').eq(index).attr('src');
                $('.cousel-indicator-img img').eq(i).attr('src', SrcImg);
                $('#portfolio-img .carousel-inner .carousel-item img').eq(i).attr('src', SrcImg);
                if (index == 9) {
                    index = 0;
                }
                index++;
            }
        }

        function showIt() {
            $('.nav-img').show(300);
            $('.nav').first().hide(200);
            $('.details').show(300);
        }

        function hideIt() {
            $('.nav-img').hide(300);
            $('.nav').first().show(200);
            $('.details').hide(300);
        }
    }

});
