var date = new Date();
var currentSeconds = Math.floor(date.getTime() * 0.001);
var secondsLeft = secondsTillTet - currentSeconds;

var calculateCountdown = function() {
    var days = Math.floor(secondsLeft / 86400);
    var hours = Math.floor((secondsLeft - (days * 86400)) / 3600);
    var minutes = Math.floor((secondsLeft - (days * 86400) - (hours * 3600)) / 60);
    var seconds = secondsLeft - (days * 86400) - (hours * 3600) - (minutes * 60);

    $('#days').find('.value').text(days);
    $('#hours').find('.value').text(hours);
    $('#minutes').find('.value').text(minutes);
    $('#seconds').find('.value').text(seconds);
    secondsLeft--;
};
calculateCountdown();

var centerContainer = function() {
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    var $container = $('#countdown');
    var top = (windowHeight - $container.height()) / 2;
    var left = (windowWidth - $container.width()) / 2;
    $container.css({top: top, left: left});
};

$(function() {
    // center the count down
    centerContainer();

    $(window).on('resize', function(e) {
        centerContainer();
    });

    setInterval(function() {
        calculateCountdown();
    }, 1000); // run every 1 second
});