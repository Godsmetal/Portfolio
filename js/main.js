//On document load
$(function() {

    /* -------- Navigation -------- */
    
    //activate the current page on the navigation panel
    //current path
    var current = location.pathname.split('/').pop();

    //iterate each link
    $('.sidenav a').each(function() {
        //curent link
        var $this = $(this);
        
        //if current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1) {
            $this.addClass('active');
        }
    });
    
    /* -------- Mobile navigation -------- */
    $('#menu').click(function(){
        $(this).toggleClass('active');
        $('.mobileNav').toggleClass('active');
        
        if($('.mobileNav').hasClass('active')) {
            
        }
    });
        
    
    
    
    
    
    /* -------- Owl Carousel -------- */
    //If owl carousel exists, setup the projects page
    if($('.owl-carousel').length) {
        $('.owl-carousel').owlCarousel({
            autoHeight: false,
            loop: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            items: 1
        });
    }
});