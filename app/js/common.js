$(function() {

	window.onload = function () {

	    if (window.pageYOffset === 0) {
            setToZeroBGcolor();
        }

        if ($(this).width() >= 768) {
            setEqualHeight($('.card'));
        }

	    $("#go, .header-a").on("click", function (event) {
            event.preventDefault();

            var id = $(this).attr('href'),
                top = $(id).offset().top - 84;
            $('body, html').animate({scrollTop: top}, 1500);
        });

    };

	window.onscroll = function () {
        (window.pageYOffset === 0)
            ? setToZeroBGcolor()
            : setToFiveBGcolor()
    };

    var swiper = new Swiper('.swiper-container', {
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    baguetteBox.run('.gallery', {
        animation: 'fadeIn',
        noScrollbars: true,
    });

    if ($(this).width() >= 576) {
        new WOW().init();
    }

    // Email
    $("form.callback").submit(function () {
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: th.serialize()
        }).done(function () {
            $(th).find(".success").addClass('active').css('display', 'flex').hide().fadeIn();
            setTimeout(function () {
                $(th).find(".success").removeClass('active').fadeOut();
                th.trigger("reset");
            }, 3000);
        });
        return false;
    });

});

function setToZeroBGcolor () {
    $(".block-menu").css('background-color', 'rgba(0, 0, 0, 0.0)');
}

function setToFiveBGcolor () {
    $(".block-menu").css('background-color', 'rgba(0, 0, 0, 0.5)');
}

function setEqualHeight(list) {
    let tallestcolumn = 0;
    list.each(
        function () {
            let currentHeight = $(this).height();
            if (currentHeight > tallestcolumn) {
                tallestcolumn = currentHeight;
            }
        }
    );
    list.height(tallestcolumn);
}
