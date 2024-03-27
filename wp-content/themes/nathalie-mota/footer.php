<?php wp_footer(); ?>

<footer class="footer">
    <nav class="footer-menu-container">
        <span class="stick"></span>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'menu_class' => 'menu-footer',
            'container' => false,
        ));
        ?>
    </nav>
</footer>

<!-- Activation modale contact -->
<?php
    get_template_part ('template-parts/modale/modale')
?>

</body>
</html>