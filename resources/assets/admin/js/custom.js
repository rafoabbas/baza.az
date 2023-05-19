$('[data-toggle="select"]').select2();


$('[data-toggle="loader"]').on('click', function(){
    $(".loader").addClass('is-active');
})

$('[data-toggle="pagination"]').change('click',function () {
    var selected = $(this).children("option:selected").val();
    var pathname = $(location).attr('pathname');
    let params = new URLSearchParams(document.location.search.substring(1));
    params.set('perPage',selected);
    $(location).attr('href', pathname+'?'+params.toString())
});

$('[data-toggle="alert"]').on('click', function(){
    let _token = $('#csrf-token').attr('content');
    let url = $(this).attr('data-url');
    let method = $(this).attr('data-method');
    swal.fire({
        title: $(this).attr('data-title'),
        text: $(this).attr('data-message'),
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: $(this).attr('data-btn-confirm'),
        cancelButtonText: $(this).attr('data-btn-cancel'),
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
    }).then(function(result) {
        if(result.value) {
            $.ajax({
                url: url,
                type: method,
                data: {
                    "_token": _token,
                },
                success: function (data){
                    swal.fire({
                        text: data.message,
                        icon: data.icon
                    });

                    if (data.reload){
                        setTimeout(function(){
                            location.reload();
                        }, data.delay);
                    }

                    if (data.redirect){
                        setTimeout(function(){
                            location.reload();
                            $(location).attr('href', data.redirect)
                        }, data.delay);
                    }
                }
            });
        }
    });

});
