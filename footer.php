<?php
/**
 * Footer Template
 *
 * This template is used to display the footer section of the site.
 *
 * @package Straww
 */

?>
<footer>
	<div class="site-footer container">
		<p>&copy; 
			<?php
			// Use date_i18n for proper escaping and timezone handling.
			echo esc_html( date_i18n( 'Y' ) );
			?>
			<?php bloginfo( 'name' ); ?>. All rights reserved.
		</p>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>