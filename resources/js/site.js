import './bootstrap';
function stop_animation() {
    if ($('.modal-mask').length) {
        $('.modal-mask').remove()
    }
}


function updateTimer(element, endTime) {
    function calculateTimeRemaining(endTime) {
        const now = new Date().getTime();
        const timeRemaining = endTime - now;

        const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

        return { days, hours, minutes, seconds, timeRemaining };
    }

    function updateDisplay(timeRemaining) {
        const displaySections = element.getElementsByClassName('displaySection');

        displaySections[0].getElementsByClassName('numberDisplay')[0].textContent = String(timeRemaining.days).padStart(2, '۰');
        displaySections[1].getElementsByClassName('numberDisplay')[0].textContent = String(timeRemaining.hours).padStart(2, '۰');
        displaySections[2].getElementsByClassName('numberDisplay')[0].textContent = String(timeRemaining.minutes).padStart(2, '۰');
        displaySections[3].getElementsByClassName('numberDisplay')[0].textContent = String(timeRemaining.seconds).padStart(2, '۰');
    }

    const endTimeMs = new Date(endTime).getTime();

    function tick() {
        const timeRemaining = calculateTimeRemaining(endTimeMs);
        updateDisplay(timeRemaining);

        if (timeRemaining.timeRemaining > 0) {
            requestAnimationFrame(tick);
        } else {
            // Handle countdown end if needed
            updateDisplay({ days: 0, hours: 0, minutes: 0, seconds: 0 });
        }
    }

    tick();
}

function initializeTimers() {
    const timers = document.querySelectorAll('.timerDisplay');
    timers.forEach(timer => {
        const endTime = timer.getAttribute('data-endtime');
        updateTimer(timer, endTime);
    });
}





function load_animation() {
    let ms3 = $("#sens").data("mes3");
    var loading = new Loading({

        // 'ssssssssssver' or 'hsssor'
        direction: 'ver',

        // loading title
        title: ms3,

        // text color
        titleColor: '#FFF',

        // font size
        titleFontSize: 14,

        // extra class(es)
        titleClassName: undefined,

        // font family
        titleFontFamily: undefined,

        // loading description
        discription: "",

        // text color
        discriptionColor: '#FFF',

        // font size
        discriptionFontSize: 14,

        // extra class(es)
        discriptionClassName: undefined,

        // font family
        directionFontFamily: undefined,

        // width/height of loading indicator
        loadingWidth: 'auto',
        loadingHeight: 'auto',

        // padding in pixels
        loadingPadding: 20,

        // background color
        loadingBgColor: '#252525',

        // border radius in pixels
        loadingBorderRadius: 12,

        // loading position
        loadingPosition: 'fixed',

        // shows/hides background overlay
        mask: true,

        // background color
        maskBgColor: 'rgba(0, 0, 0, .6)',

        // extra class(es)
        maskClassName: undefined,

        // mask position
        maskPosition: 'fixed',

        // 'image': use a custom image

        // path to loading spinner
        animationSrc: undefined,

        // width/height of loading spinner
        animationWidth: 40,
        animationHeight: 40,
        animationOriginWidth: 4,
        animationOriginHeight: 4,

        // color
        animationOriginColor: '#FFF',

        // extra class(es)
        animationClassName: undefined,

        // auto display
        defaultApply: true,

        // animation options
        animationIn: 'animated fadeIn',
        animationOut: 'animated fadeOut',
        animationDuration: 1000,

        // z-index property
        zIndex: 0,

    });
}

stop_animation()
if ($('.timerDisplay').length) {
    console.log('start timmer');
    document.addEventListener('DOMContentLoaded', initializeTimers);

}

$("#menu1").metisMenu({
    preventDefault: false
});

$('#menu2').metisMenu({
toggle: false
});

$('#menu3').metisMenu();





$("form").submit(function (e) {
    if (!$(this).hasClass("no_link")) {
        load_animation()
    }
});

$("a").click(function (e) {
    if (!$(this).hasClass("no_link")) {
        load_animation()
    }
});
$('input[name="pricech"]').click(function (e) {
    let val = $(this).val()
    $('#amount').val(val)
});



$('#image_f').change(function (e) {
    let el = $(this)
    if (el.get(0).files.length) {
        var filename = $('#image_f').val().split('\\').pop();
        $('#name_img').text(filename)
    }

});

$('.edit_meet').click(function () {
    let el = $(this)
    let name = el.data("name")
    let time = el.data("time")
    let url = el.data("url")
    console.log(name, time, url);
    $('.e_name').text(name)
    $('.e_time').text(time)
    $('#edit_pop').slideDown(400)
    $('.edit_yes').click(function () {
        window.location.href = url
    });
});



$('.cancel_meet').click(function () {
    let el = $(this)
    let name = el.data("name")
    let time = el.data("time")
    let url = el.data("url")
    console.log(name, time, url);
    $('.e_name').text(name)
    $('.e_time').text(time)
    $('#cancel_pop').slideDown(400)
    $('.resson_yes').click(function () {
        $('#cancel_pop').slideUp(200)
        $('#reason_pop').slideDown(400)
    });


    $('.cancel_yes').click(function () {
        let me=$(this).data("ms")
        let reason=$('#reason').val()
        console.log(reason.length)
        if (Number(reason.length)<5) {
            const Toast = Swal.mixin({
                toast: true,
                position: "cebter",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: me
            });
        }else{

            window.location.href = url+"?reason="+reason

        }
    });
});




$('.lang-listc .lang-list li').click(function () {
    var a = $(this).find('.top').text();
    var b = $(this).find('.id').text();
    console.log(a)
    console.log(b)
    $('.lang-listc input').val(a);
    // $('#la_d').val(a);
    $('.lang-listc .lang-list').fadeOut();
    $('#lang_id').val(b)
})

$('input[type=radio][name=test_session_status]').change(function () {
    if (this.value == 'nofree') {
        $('.clas_sec').show(400)
    } else {
        $('.clas_sec').hide(400)
    }
});

$(document).on('click', '.popupc .close', function () {
    $(this).closest(".popupc").slideUp(400)
    console.log(12)
});
$(document).on('click', '.close_pop', function () {
    $(this).closest(".popupc").slideUp(400)
    console.log(12)
});
$(document).on('click', '.new_reserve', function () {
    let el = $(this)
    let id = el.data("id")
    let ttime = el.data("ttime")
    console.log(ttime)
    if ($('#level1').length) {
        $('#level1').slideDown(400)

    }
    if ($('#nextstep').length) {
        $('#nextstep').show(5)

        setTimeout(() => {

            $([document.documentElement, document.body]).animate({
                scrollTop: $("#nextstep").offset().top
            }, 500);
        }, 200);
    }
    if ($('#meet__id').length) {
        $('#meet__id').val(id)

    }
    if ($('#ttime').length) {
        $('#ttime').text(ttime)

    }
});
$(document).on('change', '[name="class_type"]', function () {
    let el = $(this)
    let val = $('[name="class_type"]:checked').val()
    let price = $('[name="class_type"]:checked').data("price")
    console.log(val)
    console.log(price)
    $('.sum').text(price + " $")
    $('.ho').text(val + " $")
});
$('.reserve_1').click(function (e) {
    let val = $('[name="class_type"]:checked').val()
    let mes = $('#sens').data("mes1")
    console.log(val)
    if (!val) {
        const Toast = Swal.mixin({
            toast: true,
            position: "cebter",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "error",
            title: mes
        });
    } else {
        $('#level1').slideUp(200)
        $('#level2').slideDown(400)
    }

});

$('.go_level_1').click(function (e) {
    console.log(60)
    $('#level2').slideUp(200)
    $('#level1').slideDown(400)
});
$('.go_level_2').click(function (e) {
    console.log(60)
    $('#level3').slideUp(200)
    $('#level2').slideDown(400)
});
$('.go_level_3').click(function (e) {
    console.log(60)
    $('#level3').slideDown(200)
    $('#level2').slideUp(400)
});
$('.go_level_4').click(function (e) {
    console.log(60)
    $('#level3').slideUp(200)
    $('#level4').slideDown(400)
});
$('.form_su').change(function (e) {
    let el = $(this)
    if (el.get(0).files.length) {
        console.log(el.closest('form'))
        el.closest('form').submit()
    }
});
$('.form_su1').change(function (e) {
    let el = $(this)
    console.log(121212)
    if (el.get(0).files.length) {

        el.closest('form').submit()
    }
});
$('.submit_form').change(function (e) {
    let el = $(this)
    console.log(121212)
    el.closest('form').submit()
});
$('.submit_f').click(function (e) {
    let el = $(this)
    el.closest('form').submit()
});
$('body').on('click', '#show_video', function (e) {
    $('#video_tut').show(400)

})
$('#send_pay_for_meet').click(function (e) {
    let el = $(this)
    let val = $('[name="pay"]:checked').val()
    let mes = $('#sens').data("mes2")

    console.log(val)
    if (!val) {

        console.log(val)
        const Toast = Swal.mixin({
            toast: true,
            position: "cebter",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "error",
            title: mes
        });
    } else {
        $('#reserve_f').submit()
    }

});
$('.remove_post').click(function (e) {
    let el = $(this)
    let id = el.data("id")
    let yes = el.data("confirm")
    let no = el.data("reject")
    let message = el.data("message")
    Swal.fire({
        title: message,
        showDenyButton: true,
        confirmButtonText: yes,
        denyButtonText: no
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax('/panel/remove_write/' + id, {
                headers: {
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                },
                type: 'post',
                datatype: 'json',
                success: function (data) {
                    console.log(data)
                    el.closest(".single-article-ad").slideUp(600)
                },
                error: function (request, status, error) {
                    console.log(request)
                }
            })
        } else if (result.isDenied) {
        }
    });
});
$('.fave_teacher').click(function (e) {
    let el = $(this)
    let id = el.data("id")

    $.ajax('/panel/fave_teachers', {
        headers: {
            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
        },
        type: 'post',
        data: { id: id },
        datatype: 'json',
        success: function (data) {
            console.log(data)
            if (data.active) {
                el.find(".icon-heart").addClass("red")
            } else {
                el.find(".icon-heart").removeClass("red")
            }
        },
        error: function (request, status, error) {
            console.log(request)
        }
    })
});



if ($('.select_2').length) {
    $('.select_2').select2({
        dir: "ltr",
    })
}
