		<footer id="main-footer">
			<div class="max-width-content">
				<p>footer</p>
				<small>DiWeb © <?php echo date("Y") ?></small>
			</div>
		</footer>
	</div>
	<?php
   /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */
    wp_footer();
	?>
</body>
</html>