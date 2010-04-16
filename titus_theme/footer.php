<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>
<!-- begin footer -->
<!--</div>-->

<?php get_sidebar(); ?>

</div>
<div id="footer-bg">
<div id="footer-holder">
<div id="footer">

<ul>
    <?php wp_list_pages('title_li='&'sort_column=menu_order' )?>
</ul>

<div id="copyright">Copyright by Titus Zeman. <!--Created by <a href="http://open-nandra.com" target="_blank" class="kinx">open-nandra.com</a>-->   Design by <a href="http://www.kinx.sk" target="_blank" class="kinx">KINX s.r.o</a></div>
</div>
</div>
</div>

<?php wp_footer(); ?>
</body>
</html>
