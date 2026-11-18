<?php
/**
 * The start of every page, up to its content.
 *
 * @package Stepper
 */

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
	<body>
		<?php wp_body_open(); ?>
		<div class="app-page">
			<main class="app-content">
