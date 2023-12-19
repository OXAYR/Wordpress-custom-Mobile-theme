<footer class="footer bg-dark text-white">
    <div class="container">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'secondary',
            'container_class' => 'footer-menu',
            'menu_class' => 'list-inline',
        ));
        ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
