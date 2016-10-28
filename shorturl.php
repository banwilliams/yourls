<?php
/*
 * YOURLS API
 *
 * Note about translation : this file should NOT be translation ready
 * API messages and returns are supposed to be programmatically tested, so default English is expected
 *
 */

define( 'YOURLS_API', true );
require_once( dirname( __FILE__ ) . '/includes/load-yourls.php' );
//yourls_maybe_require_auth();
include("/home/yourls_fordham/fordh.am/yourls-cas-plugin-1.0/fordham_cas_custom.php");
?>
<!DOCTYPE html>
<head>
<title>Fordh.am</title>
 <link rel="stylesheet" href="https://www.fordham.edu/site/styles/generic/site-css.min.css">
<link rel="stylesheet" href="https://www.fordham.edu/site/styles/generic/base.css">
    <link rel="stylesheet" href="https://www.fordham.edu/site/styles/standard.css">
 <link rel="stylesheet" href="//fordh.am/css/font.css">
<link rel="stylesheet" href="//fordh.am//css/font-awesome.css">
<style type="text/css">
<!--
/* ==================================================== */
hr {  border:0;  border-top: 1px solid #999999;  height: 0;  background: #DDDDDD; }
/* ==================================================== */
body {					margin-left: 0px; margin-top: 0px; margin-right: 0px; margin-bottom: 0px; 
						}
/* ==================================================== */
#logo-short{float:left;}


#header_new{max-width:1200px;margin:auto;}
#header_new_left{width:40%;float:left;padding:1em 0 .5em 1em;}
#header_new_right{width:55%;float:right;padding:.5em 1em .5em 0;}
.header_rule{ border:0;  border-top: 9px solid #900028;  height: 0;  background: #900028;width:100%;margin-bottom: 0; }
#tbl_topnav, #tbl_topnav a {width:100%;margin:0;color:#ffffff;}
.clear{clear:both;float:none;}

#tbl_hd1{width:100%;}
#tbl_hd2{min-width:770px;margin:1em auto 1em auto;}
#tbl_tbl{max-width:1200px;}
#tbl_toplinks{margin:0;background-color:#a09d8b;}
#top_maroon_line{background-color:#900028;height:1em;}


#tbl_leftnav{min-width:100px;width:20%;border-right:1px solid #c9c9c9;}
#tbl_leftnav_inner{width:100%;}
#tbl_rightnav{width:80%;}


#content{margin:0 15%;font-family:arial;font-size:100%;line-height:120%;min-height:630px;}
#contenthead{font-family:arial;font-weight:bold;font-size:24px;color:#900028;margin-top:2em;}
/* ==================================================== */

-->
</style>
</head>
<body>
<!--header start-->
<div id="header_new">
<div id="header_new_left">
<a href="http://www.fordham.edu"><img src="/images/logo-universal.png" alt="Fordham"></a>
</div>
<div id="header_new_right">

</div><!--end header_new_right-->
</div><!--end header_new-->

<div class="clear"></div>
<hr class="header_rule">
<!--header_end-->

<div id="content">
<div id="contenthead">Fordh.am</div><br /><br />
1. Enter the full URL starting with "http://"<br /><br />
2. Do not use URL "shortcuts" or "redirects"<br /><br />
3. Do not enter URLs for pages that require a log in<br /><br />

<form action="shorturl-api.php" method="post">
<table>
<tr><td>Enter URL to shorten:</td><td><input type="text" name="url" size="45">
<input type="hidden" name="title" size="1">
<input type="hidden" name="format" value="json" size="1">
<input type="hidden" name="action" value="shorturl" size="1"></td></tr>
<tr><td colspan=2><input type="submit" name="submit" value="Submit"></td></tr>
</table>
</form>
</div>
<!-- googleoff: index -->
        <footer class="footer">
            <div class="row twelve-hun-max">
                <div class="small-12 columns no-lr-pad-large">
                    <div class="small-12 large-9 column no-l-pad">
                        <div class="small-12 large-5 column no-lr-pad logo"><a href="http://www.fordham.edu" title=""><img src="/images/logo-white.png" title="" alt="Fordham University"></a> </div>
                        <div class="small-12 large-7 column slogan"><span>New York is my campus. Fordham is my school.</span></div>
                        <ul class="social inline no-list-style small-12 column no-l-pad">
                                <li><a href="http://www.fordham.edu/socialmedia"><i class="fa fa-twitter"></i><span class="hidden">Twitter</span></a></li>
                                <li><a href="http://www.fordham.edu/socialmedia"><i class="fa fa-facebook"></i><span class="hidden">Facebook</span></a></li>
                                <li><a href="http://www.fordham.edu/socialmedia"><i class="fa fa-linkedin"></i><span class="hidden">Linkedin</span></a></li>
                                <li><a href="http://www.fordham.edu/socialmedia"><i class="fa fa-youtube"></i><span class="hidden">Youtube</span></a></li>
                                <li><a href="http://www.fordham.edu/socialmedia"><i class="fa fa-instagram"></i><span class="hidden">Instagram</span></a></li>
                        </ul>
                    </div>
                    <div class="small-12 medium-12 large-3 max-250 column list-links">
                        <a href="http://my.fordham.edu" title="Login to My Fordham">Log in to My.Fordham</a>
                        <a href="http://www.fordham.edu/contact_us">Contact Us</a>
                        <a href="http://www.fordham.edu/maps_and_directions">Maps and Directions</a>
                    </div>
                </div>

            </div>
            <div class="copyright show-for-small">&copy; <?php echo date("Y"); ?> Fordham University</div>
            <a href="http://www.fordham.edu/info/20088/fordham_facts#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
        </footer>
<!-- googleon: index -->
    </div>
</body>
</html>
