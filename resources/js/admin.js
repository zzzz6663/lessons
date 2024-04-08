window.onload = function() {
    if (window.jQuery) {

        $(".translate").on("keyup change", function(e) {
            let el=$(this)
            let lang=el.data("lang")
            let short=el.data("short")
            let translate=el.val()
            $.ajax('/admin/translate_short/'+short, {
                headers: {
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                },
                type: 'post',
                data: {translate:translate,language_id:lang},
                datatype: 'json',
                success: function (data) {
                    console.log(data)
                },
                error: function (request, status, error) {
                    console.log(request);
                }
            })

           })







































    } else {
        console.log(122122222221)
    }
}
