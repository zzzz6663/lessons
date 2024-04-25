import './bootstrap';
function stop_animation() {
    if ($('.modal-mask').length) {
        $('.modal-mask').remove()
    }
}
function load_animation() {
    var loading = new Loading({

        // 'ssssssssssver' or 'hsssor'
        direction: 'ver',

        // loading title
        title: 'در حال پردازش اطلاعات',

        // text color
        titleColor: '#FFF',

        // font size
        titleFontSize: 14,

        // extra class(es)
        titleClassName: undefined,

        // font family
        titleFontFamily: undefined,

        // loading description
        discription: 'لطفا صبر گنید',

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
$('input[name="pricech"]')  .click(function (e) {
    let val =$(this).val()
    $('#amount').val(val)
});



$('#image_f')  .change(function (e) {
    let el =$(this)
    if(el.get(0).files.length ){
        var filename = $('#image_f').val().split('\\').pop();
        $('#name_img').text(filename)
    }

});

$('.lang-listc .lang-list li').click(function() {
    var a = $(this).find('.top').text();
    var b = $(this).find('.id').text();
    console.log(a)
    console.log(b)
    $('.lang-listc input').val(a);
    // $('#la_d').val(a);
    $('.lang-listc .lang-list').fadeOut();
    $('#lang_id').val(b)
})

$('input[type=radio][name=test_session_status]').change(function() {
    if (this.value == 'nofree') {
        $('.clas_sec').show(400)
    } else {
        $('.clas_sec').hide(400)
    }
});

$('.remove_post')  .click(function (e) {
    let el =$(this)
    let id=el.data("id")
    let yes=el.data("confirm")
    let no=el.data("reject")
    let message=el.data("message")
    Swal.fire({
        title: message,
        showDenyButton: true,
        confirmButtonText: yes,
        denyButtonText: no
      }).then((result) => {
        if (result.isConfirmed) {
            $.ajax('/panel/remove_write/'+ id, {
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



if( $('.select_2').length){
    $('.select_2').select2({
        dir: "ltr",
    })
}
