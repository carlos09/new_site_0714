
$('main#header').waypoint(function() {
    $('.intro-content p').removeClass('visi-hidden').addClass('animated fadeIn');
},
{
    offset: '75%',
    triggerOnce: true
});

$('section#about').waypoint(function() {
    $('.left-side').removeClass('visi-hidden').addClass('animated fadeIn');
    $('.right-side').removeClass('visi-hidden').addClass('animated fadeInRight');
},
{
    offset: '75%',
    triggerOnce: true
});

$('section#skills').waypoint(function() {
    $('#html').animate({ width: '90%'});
    $('#css').delay(50).animate({ width: '85%'});
    $('#jquery').delay(100).animate({ width: '80%'});
    $('#php').delay(150).animate({ width: '70%'});

    $('#wordpress').animate({ width: '70%'});
    $('#drupal').delay(50).animate({ width: '75%'});
    $('#symfony2').delay(100).animate({ width: '70%'});
    $('#seo').delay(150).animate({ width: '80%'});
},
{
    offset: '50%',
    triggerOnce: true
});

$('section#process').waypoint(function() {
    $('.step-design').removeClass('visi-hidden').addClass('animated fadeIn');
    $('.step-develop').removeClass('visi-hidden').addClass('animated fadeIn');
    $('.step-deliver').removeClass('visi-hidden').addClass('animated fadeIn');
},
{
    offset: '50%',
    triggerOnce: true
});

