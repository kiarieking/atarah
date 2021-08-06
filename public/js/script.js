$(document).ready(function(){
    // navigation toggler
    $('#navbar-toggler').click(function(){
        $('.navbar-collapse').slideToggle(400);
    });
    // hide navbar after clicking a menu-item(mobile)
    $('.nav-item a').on('click', function(){ 
        if($('.navbar-toggler').css('display') !='none'){
            $(".navbar-toggler").trigger( "click" );
        }
    });
    // change navbar bg on scroll
    $(window).scroll(function(){
        let position = $(window).scrollTop();
        if (position>=100){
            $('.navbar').addClass('cng-navbar');
        }
        else{
            $('.navbar').removeClass('cng-navbar');
        }
    });

    $('.clients .owl-carousel').owlCarousel({
        loop:true,
        margin:5,
        autoplay:true,
        dots:true,
        nav:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('.testimonial .owl-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        dots:true,
        nav:false,
        items:1
    })
  
    var images=new Array('http://placehold.it/250x150','http://placehold.it/250x150/123456','http://placehold.it/250x150/dbca98');
    var nextimage=0;

    doSlideshow();

    function doSlideshow()
    {
        if($('.slideshowimage').length!=0)
        {
            $('.slideshowimage').fadeOut(500,function(){slideshowFadeIn();$(this).remove()});
        }
        else
        {
            slideshowFadeIn();
        }
    }
    function slideshowFadeIn()
    {
        $('.slideshow').prepend($('<img class="slideshowimage" src="'+images[nextimage++]+'" style="display:none">').fadeIn(500,function(){setTimeout(doSlideshow,1000);}));
        if(nextimage>=images.length)
            nextimage=0;
    }

}) 