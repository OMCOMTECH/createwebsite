<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mr creator | Mr Coader | Createwebsite | OMCOm</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic|Roboto+Slab:400,100,700' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	</head>
	<body>
		<!----- start-header---->
			<div id="home" class="header">
					<div class="top-header" id="move-top">
						<div class="container">
						<div class="logo">
							<a href="index.html"><img src="images/logo.png" title="Maguwohost" /></a>
						</div> 
						<!----start-top-nav---->
						 <nav class="top-nav">
							<ul class="top-nav">
								<li><a href="index.html">Home </a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="pricing.html">Hosting</a></li>
								<!--<li><a href="domain.html"> Domain</a></li> -->
								<li class="active"><a href="resourses.html">Resourses</a></li>
							</ul>
							<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
						</nav>
						<!----- contact-info ----->
						<div class="contact-info">
							<p>Do you need Hosting ? Signup Now.</p>
							<div class="contact-info-grids">
								<div class="contact-info-left">
									<a class="chat" href="#">Free Hosting</a>
								</div>
								<div class="contact-info-right">
									<a class="chat" href="#">Cpanel</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<!----- contact-info ----->
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----- //End-header---->
			<!----- Pricing ----->
			<div class="domain">
				<!----- header-section ---->
				<div class="header-section">
					<div class="container">
						<h1>Resourses</h1>
					</div>
				</div>
				<!----- header-section ---->
				<!----- hosting-grids ----->
				<div class="hosting-grids">
					<div class="container">
						<center><form style="padding-top:10px" ; method=post action=http://securesignup.net/register2.php">
<table>
<tr><th style="text-align: left;">Subdomain<td><input type=text name=username size=30 value=""  maxlength="16" onkeyup="return ismaxlength(this)">
<tr><th>&nbsp;<td>&nbsp;
<tr><th style="text-align: left;">Password<td><input type=password name=password size=30 maxlength="8" onkeyup="return ismaxlength(this)">
<tr><th>&nbsp;<td>&nbsp;
<tr><th style="text-align: left;">Email Address<td><input type=text name=email size=30 value="">
<tr><th style="text-align: left;"><td>
<tr><th>&nbsp;<td>
<tr><th style="text-align: left;">Auto-Install Script<td>
<select size="1" name="script">
                                    <optgroup label="No script">
                                       <option value="" selected="selected">Do not install a script</option>
                                    </optgroup>
                                    <optgroup label="Blog / CMS">
                                       <option value="wordpress">WordPress Blog</option>
                                       <option value="joomla">Joomla! CMS</option>
                                       <option value="drupal">Drupal CMS</option>
                                       <option value="bigace">BigAce CMS</option>
                                       <option value="nucleus">Nucleus CMS</option>
                                       <option value="typo3">Typo3 CMS</option>
                                       <option value="b2evolution">B2Evolution Blog & CMS</option>
                                       <option value="geeklog">GeekLog CMS</option>
                                       <option value="kajona">Kajona CMS</option>
                                       <option value="concrete5">Concrete5 CMS</option>
                                       <option value="pivot">Pivot Blog & CMS</option>
                                       <option value="textpattern">TextPattern CMS</option>
                                       <option value="tikiwikigroup">Tiki Wiki CMS Groupware</option>
                                       <option value="modxrevo">MODX Revolution CMS</option>
                                       <option value="pligg">Pligg CMS</option>
                                    </optgroup>
                                    <optgroup label="Forum">
                                       <option value="phpbb">phpBB Forum</option>
                                       <option value="mybb">MyBB Forum</option>
                                       <option value="vanilla">Vanilla Forum</option>
                                    </optgroup>
                                    <optgroup label="E-Commerce">
                                       <option value="opencart">OpenCart E-commerce Shop</option>
                                       <option value="oscommerce">OsCommerce E-commerce Shop</option>
                                       <option value="zencart">ZebCart E-commerce Shop</option>
                                       <option value="hhgmultistore">HHG MultiStore E-commerce Shop</option>
                                       <option value="cubecart">CubeCard E-commerce Shop</option>
                                    </optgroup>
                                    <optgroup label="Others">
                                        <option value="webauction">Web Auction</option>
                                        <option value="faqmaster">FAQ Master</option>
                                    </optgroup>
                                 </select></td>
<tr><th>&nbsp;<td>
<tr><th style="text-align: left;">Site Category<td><select size="1" name="website_category">
<option>Personal</option>
<option>Business</option>
<option>Hobby</option>
<option>Forum</option>
<option>Adult</option>
<option>Dating</option>
<option>Software / Download</option>
</select>
</td>
<tr><th style="text-align: left;"><td>
<tr><th>&nbsp;<td>
<tr><th style="text-align: left;">Site Language<td>
<select size="1" name="website_language">
<option>English</option>
<option>Non-English</option>
</select>
</td>
<tr><th>&nbsp;<td>&nbsp;
<input type=hidden name=id value="<?PHP echo $id; ?>">
<tr><th style="text-align: left;">Security Code<td><img src="http://securesignup.net/image.php?id=<?PHP echo $id; ?>">
<tr><th>&nbsp;<td>&nbsp;
<tr><th style="text-align: left;">Enter Security Code<td><input type=text name=number size=30>
<tr><th>&nbsp;<td>&nbsp;
<tr><th colspan=2><input type=submit value="Register" name=submit>
</table>
</form> </center>
					</div>
				</div>
				<!----- hosting-grids ----->
			</div>
			<!----- About ----->
						<!----- pricing and plan ----->
			<div class="pricing-plan">
				<div class="container">
					<div class="pricing-plan-grids">
						<div class="pricing-plan-left">
							<h2>People often think it is extremely difficult to make a website. That is not the case!</h2>
							<span> Everyone can learn how to make a website.</span>
						</div>
						<div class="pricing-plan-right">
							<a class="price-btn" href="resourses.html">Resourses</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----- pricing and plan ----->
			<!----- footer ----->
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-right">
						<h3>Navigation</h3>
						<ul class="footer-nav">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="pricing.html">Hosting</a></li>
							<li><a href="resourses.html">Resourses</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
						<ul class="footer-social-icons">
							<li><a class="twiter" href="#"><span> </span></a></li>
							<li><a class="photo" href="#"><span> </span></a></li>
							<li><a class="google-pluse" href="#"><span> </span></a></li>
							<div class="clearfix"> </div>
						</ul>
						<a class="to-top" href="#move-top">Back to top</a>
					</div>
					<!----- map-point ----->
					<div class="map-point">
						<a href="#"><span> </span>gujarat, India 395009</a>
					</div>
					<!----- map-point ----->
					<div class="clearfix"> </div>
				</div>
				<!----- copy-right ----->
				<div class="copy-right text-center">
					<a href="#"><img src="images/footer-logo.png" title="Maguwohost" /></a>
					<p>Copyright 2015 createwebsite, Develop by <a href="http://omcom.in">OMCOM</a></p>
				</div>
				<!----- copy-right ----->
			</div>
			<!----- footer ----->
			<!--livechat-->
<script type="text/javascript">
var LHCChatOptions = {};
LHCChatOptions.opt = {widget_height:340,widget_width:300,popup_height:520,popup_width:500,domain:'createwebsite.asia'};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
po.src = '//e2.bitnamiapp.com/livehelperchat/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(check_operator_messages)/true/(top)/350/(units)/pixels/(leaveamessage)/true?r='+referrer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
			<!--livechat-->
			<!---smoth-scrlling---->
			
							<script type="text/javascript">
									$(document).ready(function(){
									$('a[href^="#"]').on('click',function (e) {
									    e.preventDefault();
									    var target = this.hash,
									    $target = $(target);
									    $('html, body').stop().animate({
									        'scrollTop': $target.offset().top
									    }, 1000, 'swing', function () {
									        window.location.hash = target;
									    });
									});
								});
							</script>
					<!---//smoth-scrlling---->
	</body>
</html>