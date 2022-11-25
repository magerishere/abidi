
// after submit textarea editor need to append data into hidden inputs
const textAreaHandler = (editorSelector,hiddenSelector) => {
    const _initFormSubmit = () => {
        $('form').each(function() {
            const form = $(this);
            form.submit(function(e) {
                form.find('.editor-wrapper').each(function() {
                    const editorElm = $(this);
                    const hiddenElm = editorElm.parent().find('textarea');
                    hiddenElm.html(editorElm.html());
                });
            });
        });
    }
    const _initLoadContent = () => {
        $('.editor-wrapper').each(function() {
            $(this).html($(this).attr('content'));
        });
    }

    return {
        init: () => {
            _initFormSubmit();
            _initLoadContent();
        }
    }
}

// sometimes you may wish a tag submit form
// only need to do is set 'data-form-submitter' attribute into tag
// example <a href="#" data-form-submitter >Form Submitter</a>
const formSubmitter = () => {
    const _initAddSubmitEvent = () => {
        $("[data-form-submitter]").each(function() {
            console.log('click')
            const that = $(this);
            console.log(that)

            const parentForm =  that.parents('form');
            that.click(() => {
                console.log('click')

                parentForm.submit();
            })
        });
    }

    return {
        init: () => {
            _initAddSubmitEvent();
        }
    }
}


// Runner helpers
textAreaHandler().init();
formSubmitter().init();
