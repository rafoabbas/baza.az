/***********************************************************************************
 * Add Array.indexOf                                                                *
 ***********************************************************************************/
(function () {
    if (typeof Array.prototype.indexOf !== 'function') {
        Array.prototype.indexOf = function (searchElement, fromIndex) {
            for (var i = (fromIndex || 0), j = this.length; i < j; i += 1) {
                if ((searchElement === undefined) || (searchElement === null)) {
                    if (this[i] === searchElement) {
                        return i;
                    }
                } else if (this[i] === searchElement) {
                    return i;
                }
            }
            return -1;
        };
    }
})();
/**********************************************************************************/

(function ($,undefined) {
    const obj = {
        success: {
            img: 'images/Group1313.svg',
            color: 'success-color',
            leftBorderContainer: 'success-color-left-border',
        },
        failed: {
            img: 'images/Group1314.svg',
            color: 'failed-color',
            leftBorderContainer: 'failed-color-left-border'
        },
        warning: {
            img: 'images/Group2323.svg',
            color: 'warning-color',
            leftBorderContainer: 'warning-color-left-border'
        },
        info: {
            img: 'images/Group2327.svg',
            color: 'info-color',
            leftBorderContainer: 'info-color-left-border'
        }
    };
    var toasting =
        {
            gettoaster : function () {
                var toaster = $('#' + settings.toaster.id);

                if (toaster.length < 1) {
                    toaster = $(settings.toaster.template).attr('id', settings.toaster.id).css(settings.toaster.css).addClass(settings.toaster['class']);

                    if ((settings.stylesheet) && (!$("link[href=" + settings.stylesheet + "]").length)) {
                        $('head').appendTo('<link rel="stylesheet" href="' + settings.stylesheet + '">');
                    }

                    $(settings.toaster.container).append(toaster);
                }

                return toaster;
            },

            notify : function (title, message, priority) {
                const option = obj[priority ? priority : 'success'];
                const $toaster  = this.gettoaster();
                const delimiter = (title && message) ? settings.toast.defaults.delimiter : '';
                const $toast    = $(settings.toast.custom_template
                    .replace('%priority%', priority)
                    .replace('%delimiter%', delimiter)
                    .replace('%title%', title)
                    .replace('%img%', option.img)
                    .replace('%color%', option.color)
                    .replace('%leftBorderContainer%', option.leftBorderContainer)
                    .replace('%message%', message))
                    .hide()
                    .css(settings.toast.css)
                    .addClass(settings.toast['class']);

                // $('.title', $toast).css(settings.toast.csst).html(title);
                // $('.message', $toast).css(settings.toast.cssm).html(message);

                if ((settings.debug) && (window.console)) {
                    console.log(toast);
                }

                $toaster.append(settings.toast.display($toast));

                $toast.find("[data-dismiss=\"alert\"]").on('click', () => {
                    settings.toast.remove($toast, function () {
                        $toast.remove();
                    });
                });
                if (settings.donotdismiss.indexOf(priority) === -1) {
                    var timeout = (typeof settings.timeout === 'number')
                        ? settings.timeout
                        : ((typeof settings.timeout === 'object') && (priority in settings.timeout))
                            ? settings.timeout[priority]
                            : 3000;
                    setTimeout(function () {
                        settings.toast.remove($toast, function () {
                            $toast.remove();
                        });
                    }, timeout);
                }
            }
        };

    const defaults =
        {
            'toaster'         :
                {
                    'id'        : 'toaster',
                    'container' : 'body',
                    'template'  : '<div></div>',
                    'class'     : 'toaster',
                    'css'       :
                        {
                            'position' : 'fixed',
                            'top'      : '10px',
                            'right'    : '10px',
                            'width'    : '400px',
                            'zIndex'   : 50000
                        }
                },

            'toast'       :
                {
                    'template' :
                        '<div class="alert alert-%priority% alert-dismissible" role="alert">' +
                        '<button type="button" class="close" data-dismiss="alert">' +
                        '<span aria-hidden="true">&times;</span>' +
                        '<span class="sr-only">Close</span>' +
                        '</button>' +
                        '<span class="title"></span>%delimiter% <span class="message"></span>' +
                        '</div>',
                    'custom_template' :
                        `<div class="wt-toast-container">` +
                        `<div class="toast-border-left %leftBorderContainer%"></div>` +
                        `<div class="toast-content-container">` +
                        `<div class="toast-content %color%">` +
                        `<img src="%img%" alt="">` +
                        `<span class="toast-status-text">%message%</span>` +
                        `</div>` +
                        `<div class="toast-close-btn-container">` +
                        `<button type="button" class="toast-close-btn" data-dismiss="alert">` +
                        `<i class="fa-solid fa-xmark"></i>` +
                        `</button>` +
                        `</div>` +
                        `</div>` +
                        `</div>`,

                    'defaults' :
                        {
                            'title'     : 'Notice',
                            'priority'  : 'success',
                            'delimiter' : ':'
                        },

                    'css'      : {
                        'display': 'flex',
                    },
                    'cssm'     : {},
                    'csst'     : { 'fontWeight' : 'bold' },

                    'fade'     : 'slow',

                    'display'    : function ($toast) {
                        return $toast.addClass('show');
                        // return $toast.fadeIn(settings.toast.fade);
                    },

                    'remove'     : function ($toast, callback) {
                        $toast.removeClass('show');
                        setTimeout(() => {
                            $toast.remove();
                        }, 600)
                    }
                },

            'debug'        : false,
            'timeout'      : 3000,
            'stylesheet'   : null,
            'donotdismiss' : []
        };

    var settings = {};
    $.extend(settings, defaults);

    $.toaster = function (options) {
        if (typeof options === 'object') {
            if ('settings' in options) {
                settings = $.extend(true, settings, options.settings);
            }
        } else {
            var values = Array.prototype.slice.call(arguments, 0);
            var labels = ['message', 'title', 'priority'];
            options = {};

            for (var i = 0, l = values.length; i < l; i += 1) {
                options[labels[i]] = values[i];
            }
        }

        var title    = (('title' in options) && (typeof options.title === 'string')) ? options.title : settings.toast.defaults.title;
        var message  = ('message' in options) ? options.message : null;
        var priority = (('priority' in options) && (typeof options.priority === 'string')) ? options.priority : settings.toast.defaults.priority;

        if (message !== null) {
            toasting.notify(title, message, priority);
        }
    };

    $.toaster.reset = function () {
        settings = {};
        $.extend(settings, defaults);
    };
})(jQuery);
