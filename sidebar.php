<?php
/**
 * Sidebar Template
 *
 * This template is used to display the sidebar section of the site.
 *
 * @package Straww
 */

?>
<aside class="sidebar container">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php endif; ?>
</aside>
