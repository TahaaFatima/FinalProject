<!-- js -->
<script src="<?php echo base_url(); ?>assets/js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<script src="<?php echo base_url(); ?>assets/js/minimal-slider.js"></script>
<!-- flexSlider (for testimonials) -->
<!-- Calendar -->

<script src="https://kit.fontawesome.com/200033bf0c.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
        <script>
						  $(function() {
							$( "#datepicker" ).datepicker();
						  });
				  </script>
				<!-- //Calendar -->
                
                <script defer src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
                <script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->
    
    <!-- script for password match -->
    <script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
    </script>
    <!-- script for password match -->
    <!-- start-smooth-scrolling -->
    <script src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="<?php echo base_url(); ?>assets/js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>