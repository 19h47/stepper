<?php
/**
 * Any page but the landing: not found.
 *
 * @package Stepper
 */

get_header();
?>
<header class="app-header">
	<h1>Not found</h1>
	<p>Nothing is public here but <a href="<?php echo esc_url( home_url( '/' ) ); ?>">the landing</a>.</p>
</header>
<?php
get_footer();
