<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-col">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.svg' ); ?>" alt="Nexcent" style="filter: brightness(0) invert(1); margin-bottom: 20px;">
                <p>Copyright &copy; <?php echo date('Y'); ?> Nexcent ltd.</p>
                <p>All rights reserved</p>
            </div>
            <div class="footer-col">
                <h4>Company</h4>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'container'      => false,
                ) );
                ?>
            </div>
            <div class="footer-col">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Help center</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Stay up to date</h4>
                <input type="email" placeholder="Your email address" style="padding: 10px; border-radius: 4px; border: none; width: 100%;">
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
