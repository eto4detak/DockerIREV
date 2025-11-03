<?php wp_footer(); ?>
<footer>
    <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <ul id="sidebar">
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </ul>
    <?php endif; ?>
    
</footer>
</body>
</html>