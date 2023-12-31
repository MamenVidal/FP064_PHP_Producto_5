<?php
/**
 * The template for displaying the footer.
 *
 * @package Go
 */
?>

</main>

<footer id="site-footer" class="site-footer" role="contentinfo">
    <div class="footer__content" style="text-align: center;">
        <?php
        // Agregar la imagen personalizada al footer
        $footer_image_url = get_stylesheet_directory_uri() . '/logo2.jpg';
        ?>
        <img src="<?php echo esc_url( $footer_image_url ); ?>" alt="Footer Image" style="max-width: 200px; height: auo;" />
		<p>&copy; <?php echo date( 'Y' ); ?> Todos los derechos reservados.</p>
    </div>
</footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
