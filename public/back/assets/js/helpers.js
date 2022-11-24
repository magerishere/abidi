
// after submit textarea editor need to append data into hidden inputs
const textAreaHandler = (editorSelector,hiddenSelector) => {
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
// Runner helpers
textAreaHandler();
