<footer class="site-footer" style="background:#f4f4f4;padding:20px;text-align:center">
  <div class="wrap">
    <?php torex_brand_links(); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> — Built for Uganda tourism. Contact: <?php echo esc_html(get_theme_mod('torex_contact','info@torexsafari.example')); ?></p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>