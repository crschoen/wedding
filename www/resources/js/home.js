me = $(self);


me.resize(function() {
    console.log(content.offset().top);
    var a = 0 > content.offset().top - 5;
    var b = 0 > content.offset().left - 5;
    if (a) {
        content.addClass('sticktop');
        height = me.height();
    }
    
    if (me.height() > height) {
        content.removeClass('sticktop');
    }
    
    if (b) {
        content.toggleClass('stickleft', b);
        width = me.width();
    }

    if (me.width() > width) {
        content.removeClass('stickleft');
    }
});

height = null;
width = null;
content = $('#content');

