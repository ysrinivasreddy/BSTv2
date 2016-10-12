<footer id="colophon" class="col-xs-12 col-sm-12 col-md-12 site-footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter" role="contentinfo">
	<div class="container "> 
	<div class="row">
    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>
  <hr/>
  <div class="row">
    <div class="col-lg-12 site-sub-footer">
      <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
    </div>
  </div>
    </div>
</footer>

 <!-- CODE for custom background color-->
<style type="text/css" id="custom-background-css">
body.custom-background { background-color: #<?php echo get_background_color(); ?>; }
</style>

<?php wp_footer(); ?>
</body>
</html>
