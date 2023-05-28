
window.codio = {
    toast: options => {
        let type = options?.type || 'success';
        $.toast({
            text: options?.text || '',
            icon: type,
            loader: true,
            loaderBg: options?.backgroundColor || (type === 'success' ? 'green' : 'red'),
            position: options?.position ?? 'bottom-right'
        })
    },
    slugify: str => {
        str = str.replace(/^\s+|\s+$/g, '');
        str = str.toLowerCase();
        let from = "üöğıəçşàáäâèéëêìíïîòóöôùúüûñç·/_,:;";
        let to   = "uogiecsaaaaeeeeiiiioooouuuunc------";
        for (let i=0, l=from.length ; i<l ; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }
        return str.replace(/[^a-z0-9 -]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
    },
    alert: options => {
        options.onConfirm = options?.onConfirm || function(){};
        options.onCancel = options?.onCancel || function(){};
        options.showCancelButton = options?.showCancelButton == null || options?.showCancelButton == true;
        Swal.fire({
            type: options?.type || 'success',
            title: options?.title || '',
            text: options?.text || '',
            cancelButtonText: options?.cancelButtonText || 'Cancel',
            showCancelButton: options.showCancelButton,
            confirmButtonText: options?.confirmButtonText || 'Yes',
            cancelButtonColor: '#d33',
            reverseButtons: true,
        }).then(result => {
            console.log(result)
            if (result?.value) {
                options?.onConfirm();
            } else {
                options?.onCancel();
            }
        });
    }
}
