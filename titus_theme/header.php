<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
<div id="header">
<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1037" height="380">
  <param name="movie" value="assets/flash/header.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="transparent">
  <param name="swfversion" value="9.0.45.0" />
  <param name="FlashVars" value="page=1"/>
    <!-- Parameter FlashVars sa posiela do Flash hlavicky ktora podla jeho hodnoty zistuje na akej stranke sa nachadzem. Cize ak sme na stranke aktuality a aktuality su druha polozka v menu tak potom page=2. Cize podla toho akej polozke v menu zobrazena stranka prislucha treba priradit hodnotu page. -->
  <param name="expressinstall" value="assets/scripts/expressInstall.swf" />
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="header.swf" width="1037" height="380">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="FlashVars" value="page=1"/>
    <!-- Parameter FlashVars sa posiela do Flash hlavicky ktora podla jeho hodnoty zistuje na akej stranke sa nachadzem. Cize ak sme na stranke aktuality a aktuality su druha polozka v menu tak potom page=2. Cize podla toho akej polozke v menu zobrazena stranka prislucha treba priradit hodnotu page. -->
    <param name="wmode" value="transparent">
    <param name="swfversion" value="9.0.45.0" />
    <param name="expressinstall" value="assets/scripts/expressInstall.swf" />
    <div id="header-png">
    <div id="menu">
    <ul>

    <?php wp_list_pages('title_li=' )?>
    </ul>

<!--    <a href="tituszeman.html" class="menu-item">Titus Zeman</a>
    <a href="aktuality.html" class="menu-item">Aktuality</a>
    <a href="oprocese.html" class="menu-item">O procese</a>
    <a href="svedectva.html" class="menu-item">Svedectvá</a>
    <a href="galeria.html" class="menu-item">Galéria</a>
    <a href="napisali.html" class="menu-item">Napísali</a>
    <a href="kontakt.html" class="menu-item-end">Kontakt</a> -->
    </div> 
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
</div>
<div id="content">
<!-- end header -->
