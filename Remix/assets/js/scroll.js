<script type="text/javascript">

		    $('#main-nav').onePageNav({
                 currentClass: 'active',
                 changeHash: false,
                 scrollSpeed: 1200,
                 scrollOffset: 80,
				 filter: ':not(.sub-menu a, .not-home)'
            });

			$('.carousel').carousel({
		        interval: 8000
		    })	

			/*  - wow animation wow.js 
		    ---------------------------------------------------*/
		    var wow = new WOW (
		    {
		          boxClass:     'wow',      // animated element css class (default is wow)
		          animateClass: 'animated', // animation css class (default is animated)
		          offset:       0,          // distance to the element when triggering the animation (default is 0)
		          mobile:       false       // trigger animations on mobile devices (true is default)
		      }
		    );
		    wow.init();

		    /*  - wow animation wow.js End 
		    ---------------------------------------------------*/

		</script>