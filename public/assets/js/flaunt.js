	

;(function($) {

	// DOM ready
	$(function() {
		
		// Append the mobile icon nav
	var navMobile = $('<div class="nav-mobile"><div class="nav-mobile-inner"><span></span><span></span><span></span><span></span></div></div>');
$('.nav').append(navMobile);
		// Add a <span> to every .menu-item that has a <ul> inside
		$('.menu-item').has('ul').prepend('<span class="nav-click"><i class="nav-arrow"></i></span>');
		
		// Click to reveal the nav
		$('.nav-mobile').click(function(){
			$('.nav-list').toggle();
			 navMobile.toggleClass('cross-btn');
		});
	
		// Dynamic binding to on 'click'
		$('.nav-list').on('click', '.nav-click', function(){
		
			// Toggle the nested nav
			$(this).siblings('.sub-menu').toggle();
			
			// Toggle the arrow using CSS3 transforms
			$(this).children('.nav-arrow').toggleClass('nav-rotate');
			
		});
	    
	});
	
})(jQuery);




/*;(function($) {
  // DOM ready
  $(function() {
    // Append the mobile icon nav
    var navMobile = $('<div class="nav-mobile"><div class="nav-mobile-inner"><span></span><span></span><span></span><span></span></div></div>');
    $('.nav').append(navMobile);

    // Add a <span> to every .menu-item that has a <ul> inside
    $('.menu-item').has('ul').prepend('<span class="nav-click"><i class="nav-arrow"></i></span>');

    // Click to reveal the nav
    $('.nav-mobile').click(function() {
      $('.nav-list').toggle();
      navMobile.toggleClass('cross-btn'); // Add your desired class name here
    });

    // Dynamic binding to on 'click'
    $('.nav-list').on('click', '.nav-click', function() {
      // Toggle the nested nav
      $(this).siblings('.sub-menu').toggle();

      // Toggle the arrow using CSS3 transforms
      $(this).children('.nav-arrow').toggleClass('nav-rotate');
    });
  });
})(jQuery);
*/