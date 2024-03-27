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

</body>
</html>