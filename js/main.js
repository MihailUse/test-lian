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

    var limit = 5;
    var filter = '';

    function getPosts(limit, filter) {
        $.ajax({
            type: 'GET',
            url: '../php/main.php',
            data: {'limit': limit, 'filter': filter},
            dataType: 'json',
            success: function (data) {
                if (data['message']) {
                    alert(data['message']);
                } else {
                    outputPosts(data);
                }

                //$(document).scrollTop(0);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                alert('ошибка: ' + textStatus + '\n' + errorMessage);
            }
        });
    }

    getPosts(limit, filter);

    /* post filter */
    $('.breadcrumb input').change(function () {
        $('.card-columns').empty();

        filter = $(this).val();
        getPosts(5, filter);

        /*Множественный выбор*/
        /*var checkboxes = $('.breadcrumb input');
        if ($(this).val() == 'All') {
            for (let i = 1; i < checkboxes.length; i++) {
                checkboxes[i].checked = false;
            }
            getPosts(5);
        } else {
            checkboxes[0].checked = false;
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    filter.push(checkboxes[i].value);
                }
            }
            getPosts(5, filter);
        }*/
    });

    function outputPosts(data) {
        let post = '';
        for (let i = 0; i < data.length; i++) {
            post += `
            <div class="card" >
                <img src="../images/index/card-${data[i]['id']}.jpg" alt="${data[i]['title']}" class="card-img">
                <a><i class="fa fa-plus"></i></a>
                <div class="d-none">
                    <h1>${data[i]['title']}(${data[i]['id']})</h1>
                    <h2>${data[i]['subtitle']}</h2>
                    <hr>
                    <h3>${data[i]['date']}<i class="fa fa-heart ml-5"></i>  ${data[i]['likes']} likes</h3>
                    <p>${data[i]['text']}</p>
                    <hr>
                    <h4>Role On Project:</h4>
                    <h5>${data[i]['role']}</h5>
                    <h4>Tags:</h4>
                    <h5>${data[i]['tags']}</h5>                          
                </div>
            </div>
            `;
        }
        $('.card-columns').html(post);
    }

    $('.card-columns').on('click', '.card', function () {
        var thisObj = $(this);

        setText(thisObj);
        setImg(thisObj);

        $('#next').click(function () {
            if (thisObj.is(':last-child')) {
                thisObj = $('.card-columns .card').first();
            } else {
                thisObj = thisObj.next();
            }
            setText(thisObj);
            setImg(thisObj);
            $('#portfolio-img').carousel(0);
        });

        $('#prev').click(function () {
            if (thisObj.is(':first-child')) {
                thisObj = $('.card-columns .card').last();
            } else {
                thisObj = thisObj.prev();
            }
            setText(thisObj);
            setImg(thisObj);
            $('#portfolio-img').carousel(0);
        });

        /* settings of slider */
        $('#portfolio-img').carousel(0);
        $('#portfolio-img').carousel('pause');

        showDetails();
    });

    function setText(thisObj) {
        let text = thisObj.children('div').html();
        $('.img-info').html(text);
    }

    /*Отображает фото в слайдере */
    function setImg(thisObj) {
        let SrcImg;
        for (let i = 0; i < 4; i++) {
            SrcImg = thisObj.children('img').attr('src');
            AltImg = thisObj.children('img').attr('alt');
            $('.cousel-indicator-img img').eq(i).attr('src', SrcImg);
            $('.cousel-indicator-img img').eq(i).attr('alt', AltImg);
            $('#portfolio-img .carousel-inner .carousel-item img').eq(i).attr('src', SrcImg);
            $('#portfolio-img .carousel-inner .carousel-item img').eq(i).attr('alt', AltImg);
            if (thisObj.is(':last-child')) {
                thisObj = $('.card-columns .card').first();
            } else {
                thisObj = thisObj.next();
            }
        }
    }

    function showDetails() {
        $('.nav-img').show();
        $('.details').css('display', 'flex');
        $('.filter').hide();
    }

    function hideDetails() {
        $('.nav-img, .details').hide();
        $('.filter').show();
    }

}