

let dropWrapper = $('.img-preview');
let validLength = dropWrapper.data('length');
let icon = dropWrapper.find('.icon');
let spinner = dropWrapper.find('.spinner-border');
let route = dropWrapper.data('route');
let name = dropWrapper.data('name');
let id = dropWrapper.data('id');
let imageList = dropWrapper.parent('.img-preview-div').siblings('.img-list');


$(".img-preview-file").on("change", function() {
    console.log('sdasdsaa')
    dropWrapper = $(this).parent('.img-preview')
    validLength = dropWrapper.data('length');
    icon = dropWrapper.find('.icon');
    spinner = dropWrapper.find('.spinner-border');
    route = dropWrapper.data('route');
    name = dropWrapper.data('name');
    id = dropWrapper.data('id');
    imageList = dropWrapper.parent('.img-preview-div').siblings('.img-list');
    icon.addClass('d-none');
    spinner.removeClass('d-none');

    console.log({
        a: "Hello world",
    })
    uploadFile(this.files[0], validLength, name);
    spinner.addClass('d-none');
    icon.removeClass('d-none');
});

dropWrapper.on("dragover", function(e){
    e.preventDefault();

    dropWrapper.addClass("active");

    return false;
})

dropWrapper.on("dragleave", function(e){
    dropWrapper.removeClass("active");
})

dropWrapper.on("drop", function(e){
    e.preventDefault();
    icon.addClass('d-none');
    spinner.removeClass('d-none');

    if (e.originalEvent.dataTransfer.files.length > validLength){
        swal.fire({
            text: 'You can only upload '+validLength+' image(s)',
            icon: 'error'
        });
        spinner.addClass('d-none');
        icon.removeClass('d-none');
        return false;
    }

    uploadFile(e.originalEvent.dataTransfer.files[0], validLength, name);

    spinner.addClass('d-none');
    icon.removeClass('d-none');
    dropWrapper.removeClass("active");
})



function uploadFile(file, validLength, name)
{
    var formData = new FormData();

    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));

    formData.append('file', file);

    $.ajax({
        url : route,
        type : 'POST',
        data : formData,
        processData: false,  // tell jQuery not to process the data
        contentType: false,  // tell jQuery not to set contentType
        success : function(response) {
            if (validLength == 1){
                imageList.html(imageItem(response.data, validLength, name));
            }else {
                imageList.append(imageItem(response.data, validLength, name));
            }
        }
    });
}

function imageItem(data, validLength, name)
{
    let fileName = validLength == 1 ? name : name + '['+data.id+']';
    return `<div class="img-item  mt-2" data-preview-id="${data.id}">
                <div class="img-item-preview">
                    <img class="img-fluid" src="${data.url}">
                </div>
                <div class="img-item-information ps-2 d-flex flex-column align-center">
                    <span class="name">${data.name.substring(0,20)}</span>
                    <span class="size">${data.extension}</span>
                </div>
                <div class="img-item-action">
                    <button data-toggle="remove-preview" type="button" class="btn btn-danger btn-sm" onclick="removeImage('${data.id}')"><i class="fas fa-trash"></i></button>
                </div>
                <input type="hidden" name="${fileName}" id="" value="${data.path}" >
                <input type="hidden" name="preview-${fileName}" id="" value="${data.id}" >
            </div>`;
}

function getImages(route, images, validLength, name, imageListId) {
    $.ajax({
        url : route,
        type : 'POST',
        data : {
            _token: $('meta[name="csrf-token"]').attr('content'),
            images: JSON.parse(images)
        },
        success : function(response) {
            let imageList = $(imageListId);
            for (let i = 0; i < response.data.length; i++) {
                imageList.append(imageItem(response.data[i], validLength, name));
            }
        }
    });
}

window.removeImage = (id) =>
{
    if (validLength == 1){
        imageList.html('');
    }else {
        imageList.find("[data-preview-id='" + id + "']").remove();
    }
}
