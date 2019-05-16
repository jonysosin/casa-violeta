function goContent (selector) {
    if (!selector) {
        selector = '.product-page-content';
    }

    var distance = $(selector).offset().top - 100;
    var body = $("html, body");
    body.stop().animate({ scrollTop: distance }, 500, 'swing');
    
    return false;
}

var shouldScroll = !document.querySelector('body.home-page');
if (shouldScroll) {
    goContent();
}

$('#btn-go-content').click( goContent.bind(this, '#products-categories-list') );