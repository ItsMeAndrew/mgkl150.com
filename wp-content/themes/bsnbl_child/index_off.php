<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title>BSNBL</title>
	<script src="http://dryboy.com//wp-content/themes/drygirl/js/jquery-1.5.min.js"></script>
	<script>
		$(window).load(function() {    

        var theWindow        = $(window),
            $bg              = $("#bg"),
            aspectRatio      = $bg.width() / $bg.height();

        function resizeBg() {

                if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
                    $bg
                        .removeClass()
                        .addClass('bgheight');
                } else {
                    $bg
                        .removeClass()
                        .addClass('bgwidth');
                }

        }

        theWindow.resize(function() {
                resizeBg();
        }).trigger("resize");

});
		
	</script>
	
	<style>
		
		#bg { position: fixed; top: 0; left: 0; }
		#page-wrap {
		font-family: Arial, Helvetica, sans-serif;
		font-size: 50px;
		letter-spacing: -1px;
		
		width: 740px;
		height: 200px;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -100px;
    margin-left: -370px;
    color: #fff;}
    #page-wrap h1,
    #page-wrap span {opacity: 0.5; filter: alpha(opacity = 50); display: block; text-align: center;}
    #page-wrap h1 {margin: 0; padding: 0;text-transform: uppercase;}
    #page-wrap .small {font-size: 20px;}
.bgwidth { width: 100%; }
.bgheight { height: 100%; }
	</style>
</head>

<body>
<img id="bg" src="http://dryboy.com//wp-content/themes/drygirl/images/main-pic4.jpg" />
<div id="page-wrap">
	<h1>COMING SOON</h1>
	<span>&#110;&#97;&#101;&#114;&#105;&#108;&#111;&#118;&#101;&#108;&#101;&#101;&#64;&#98;&#115;&#110;&#98;&#108;&#46;&#99;&#111;&#109;</span>
</div>
</body>
</html>
