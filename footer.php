	<footer class="mt-5"> 

		<div class="container-fluid footer-content">
		
			<div class="row">

				<div class="col-md-6 text-center text-md-left footer-address">
					<?php
						if( is_active_sidebar('footer-address') ) {
							dynamic_sidebar('footer-address');
						}
					?>
				</div>

				<div class="col-md-6 text-center text-md-left footer-social-media">
					<?php
						if( is_active_sidebar('footer-social-media') ) {
							dynamic_sidebar('footer-social-media');
						}
					?>
				</div>

			</div>

		</div>

		<div class="container-fluid footer-copyright">
			<div class="row">

			</div>
		</div>

		<?php wp_footer(); ?>
	</body>
</html>
