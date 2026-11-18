<?php
/**
 * The end of every page, from its content: the footer, with the login.
 *
 * @package Stepper
 */

?>
			</main>
			<footer class="app-footer">
				<a href="https://www.19h47.fr">19h47</a>
				<a href="<?php echo esc_url( wp_login_url() ); ?>">Log in</a>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
