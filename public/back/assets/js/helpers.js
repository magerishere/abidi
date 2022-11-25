
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
// Runner helpers
textAreaHandler().init();
