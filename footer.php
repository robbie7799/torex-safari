    </main>
    
    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4><?php esc_html_e( 'About TOREX SAFARI', 'torex-safari' ); ?></h4>
                    <p><?php esc_html_e( 'Your premium gateway to Uganda\'s most incredible wildlife and adventure experiences.', 'torex-safari' ); ?></p>
                    <div class="social-links">
                        <a href="#" target="_blank" rel="noopener"><?php esc_html_e( 'Facebook', 'torex-safari' ); ?></a>
                        <a href="#" target="_blank" rel="noopener"><?php esc_html_e( 'Instagram', 'torex-safari' ); ?></a>
                        <a href="#" target="_blank" rel="noopener"><?php esc_html_e( 'Twitter', 'torex-safari' ); ?></a>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h4><?php esc_html_e( 'Attractions', 'torex-safari' ); ?></h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/attraction' ) ); ?>"><?php esc_html_e( 'All Attractions', 'torex-safari' ); ?></a></li>
                        <li><a href="#"><?php esc_html_e( 'Bwindi Impenetrable', 'torex-safari' ); ?></a></li>
                        <li><a href="#"><?php esc_html_e( 'Kidepo National Park', 'torex-safari' ); ?></a></li>
                        <li><a href="#"><?php esc_html_e( 'Murchison Falls', 'torex-safari' ); ?></a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4><?php esc_html_e( 'Packages', 'torex-safari' ); ?></h4>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/safari-package' ) ); ?>"><?php esc_html_e( 'All Packages', 'torex-safari' ); ?></a></li>
                        <li><a href="#"><?php esc_html_e( 'Budget Safaris', 'torex-safari' ); ?></a></li>
                        <li><a href="#"><?php esc_html_e( 'Luxury Packages', 'torex-safari' ); ?></a></li>
                        <li><a href="#"><?php esc_html_e( 'Group Tours', 'torex-safari' ); ?></a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h4><?php esc_html_e( 'Contact', 'torex-safari' ); ?></h4>
                    <p>
                        <?php esc_html_e( 'Email:', 'torex-safari' ); ?> <a href="mailto:info@torexsafari.com">info@torexsafari.com</a><br>
                        <?php esc_html_e( 'Phone:', 'torex-safari' ); ?> <a href="tel:+256700000000">+256 (0) 700 000 000</a><br>
                        <?php esc_html_e( 'Uganda Tourism Board Registered', 'torex-safari' ); ?>
                    </p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved. Proudly serving Uganda\'s tourism industry.', 'torex-safari' ); ?></p>
            </div>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>
