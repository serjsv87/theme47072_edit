<?php /* Wrapper Name: Footer */ ?>
<div class="row copyright">
	<div class="span4">	
		<div data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
			<?php get_template_part("static/static-footer-nav"); ?>
		</div>	
		<div data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
			<?php get_template_part("static/static-footer-text"); ?>
		</div>	
	</div>
	<!-- Social Links -->
	<div class="span3 social-nets-wrapper" data-motopress-type="static" data-motopress-static-file="static/static-social-networks.php">
		<?php get_template_part("static/static-social-networks"); ?>
	</div>
	<!-- /Social Links -->
	<div class="span5" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar">
		<?php dynamic_sidebar("footer-sidebar"); ?>
	</div>
</div>