//On document load
$(function() {

    /* -------- Desktop navigation -------- */
    
    //activate the current page on the navigation panel
    //current path
    var current = location.pathname.split('/').pop();

    //iterate each link
    $('.nav a').each(function() {
        //current link
        var $this = $(this);
        
        //if current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1) {
            $this.toggleClass('active');
        }
    });
    
    /* -------- Mobile navigation -------- */
    $('#menu').click(function(){
        $(this).toggleClass('active');
        $('.mobileNav').toggleClass('active');
        
        //Iterate through link tags
        $('.mobileNav').find('a').each(function() {
           //current link
            var $this = $(this);
            if($this.attr('href').indexOf(current) !== -1) {
                //Add active tag to icon
                $this.children(':first').addClass('active');
            }
        });
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