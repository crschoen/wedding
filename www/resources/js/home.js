me = $(self);


me.resize(function() {
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

var y = 0 > content.offset().top - 5;
var z = 0 > content.offset().left - 5;

if (y) {
    content.addClass('sticktop');
    height = 640;
}

if (z) {
    content.toggleClass('stickleft', b);
    width = 710;
}




