<div id="footer">
<div id="footer-content" class="clearfix">
<div id="footer-widgets" class="clearfix">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>
<?php endif; ?>
</div> <!-- end #footer-widgets -->
<div id="axel"
<p>Axel Bahnsen &copy; 2015.  All Rights Reserved</p>
</div>

<div id="lwm">
<p style="text-align: right;">Designed by <a href="http://www.listentothewindmedia.com">Listen to the Wind Media</a></p>
</div>
</div> <!-- end #footer-content -->
</div> <!-- end #footer -->
</div> <!-- end #container -->
<?php get_template_part('includes/scripts'); ?>
<?php wp_footer(); ?>

</body>
</html>