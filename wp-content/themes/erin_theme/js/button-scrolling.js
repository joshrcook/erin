var scrollingDiv = jQuery('.gallery-x');
var scrollRate = 750;

jQuery(document).ready(function($) {

    $(".button-right").bind('mousedown touchstart', function (e) {
        e.preventDefault();
        animateContentHorizontal('right');
    }).bind('mouseup touchend', function() {
        scrollingDiv.stop();
        console.log('stopped');
    });

    $(".button-left").bind('mousedown touchstart', function (e) {
        e.preventDefault();
        animateContentHorizontal('left');
    }).bind('mouseup touchend', function() {
        scrollingDiv.stop();   
        console.log('stopped'); 
    });
});

function animateContent(direction) {  
    var animationOffset = $('.container').height() - $('.content').height();
    if (direction == 'up') {
        animationOffset = 0;
    }
    
    $('.content').animate({ "marginTop": animationOffset + "px" }, 10000, 'linear');
}

function animateContentHorizontal(direction) {
    console.log('scrolling ' + direction);
    divWidth = scrollingDiv.width();

    // get the scrollwidth of the element - maximum possible value of scrollLeft()
    scrollWidth = getScrollWidth(scrollingDiv);
    console.log('scrollWidth = ' + scrollWidth);
    // get the current scrolled position
    scrollPosition = getCurrentScrollPos(scrollingDiv);
    console.log('scrollLeft = ' + scrollPosition);

    if(direction == 'left') {
        scrollingDiv.animate({
            scrollLeft: 0
        }, getConstantScroll(direction), 'linear');
    } else if(direction == 'right') {
        scrollingDiv.animate({
            scrollLeft: scrollWidth
        }, getConstantScroll(direction), 'linear');
    }
}

function getScrollWidth(scrollingDiv) {
    return scrollingDiv[0].scrollWidth - scrollingDiv.width();
}

function getCurrentScrollPos(scrollingDiv) {
    return scrollingDiv.scrollLeft();
}

function getScrollDistance(direction) {
    if(direction == 'left') {
        return scrollPosition;
    } else if(direction == 'right') {
        return scrollWidth - scrollPosition;
    }
}

function getConstantScroll(direction) {
    return getScrollDistance(direction) * 1000 / scrollRate;
}