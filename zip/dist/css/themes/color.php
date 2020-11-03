<?php
	header("content-type:text/css");

require_once '../../../admin/includes/connect.php';
	$data = mysql_fetch_array(mysql_query("SELECT `color` FROM `main` WHERE `id`='1'"));
	$color = $data['0'];

?>

<style type='text/css'>

/*----------------------------
*
*
*
-------------- Header --------------
*
*
*
----------------------------*/


/*Top Bar (login, search etc.)
------------------------------------*/
.top {
	padding:7px 0 8px;
}

.loginbar {
	margin:0;
	padding:0;
	z-index:9999;
	list-style:none;
	position:relative;
}

.loginbar li {
	display:inline;
	list-style:none;
	padding-bottom:15px;
}

.loginbar li a, 
.loginbar li a:hover {
	color:#7c8082;
	font-size:11px;
	text-transform:uppercase;
}

.loginbar li.devider { 
	top:-1px;
	padding:0;
	font-size:8px;
	position:relative;
	margin:0 6px 0 2px;
	border-right:solid 1px #bbb;
}

.loginbar i {
	color:#999;
	font-size:18px;
	margin-top:3px;
	cursor:pointer;
}

/*Lenguages*/
.loginbar li ul { 
	top:30px; 
	margin:0;
	left:-6px;
	display:none; 
	padding-top:4px;
	position:absolute; 
	border-radius:3px;
	padding-bottom:4px;
	background:#f0f0f0;
}

.loginbar li:hover ul { 
	display:block; 
}

.loginbar li ul li { 
	padding-bottom:0;
	display:list-item;
	position:relative;
	margin-bottom:1px;
}

.loginbar li ul li a { 
	color:#555;
	display:block;
	min-width:85px; 
	font-size:10px;
	padding:2px 12px;
	background:#f0f0f0;
	text-decoration:none;
}

.loginbar li ul li a:hover, 
.loginbar li ul li.active a {
	opacity:1 !important;
	color:#555 !important;
	font-size:10px !important;
	text-shadow:none !important;
	background:#fafafa !important;
}

.loginbar li ul li.active i {
	top:2px; 
	right:-5px;
	font-size:14px;
	cursor:default;
	position:absolute;
	text-shadow:0 1px 0 #e9e9e9;
}

.loginbar i.icon-globe {
	color:#bbb;
	font-size:13px;
	margin:3px 3px 0 0;
}

.loginbar li i.icon-sort-up {
	top:21px; 
	left:-1px;
	color:#eee;
	display:none;
	font-size:14px;
	cursor:default;
	position:absolute;
}

.loginbar li:hover i.icon-sort-up {
	display:block;
}

.loginbar li:hover i.icon-ok {
	top:-2px;
	color:#aaa;
}

/*Header (logo and menu)
------------------------------------*/
.header {
	z-index:999;
	position:relative;
	border-bottom:solid 2px #eee;
	margin-top: 20px;
}

.header .container {
	position:relative;
}

.logo {
    margin-bottom: 7px;
}

.logo h1 {
	color: <?php echo $color; ?>!important;
}

.btn-register{
	background-color: <?php echo $color; ?>;
}

.btn-main, .btn-pricing {
    background-color: <?php echo $color; ?>;
}

.navbar-toggle {
	margin-right: 0px!important;
    margin-top: 20px!important;
}



.navbar, 
.navbar-inner, 
.nav,
.navbar-inverse {
	background:#fff;
	filter:none;
	border:none;
	padding:0;
	-webkit-box-shadow: none;
       -moz-box-shadow: none;
            box-shadow: none;
}

.nav i.icon-sort-up { 
	position:absolute; 
	font-size:13px;
	bottom:-6px;
}

.navbar-inner {
	padding-left: 0px !important;
	padding-right: 0px !important;
}

.navbar .nav > li { 
	display:block; 
	position:relative;
}
.navbar .nav > li > a {
	display:block;
	font-size:15px;
	font-weight:400;
	color: #687074;
	text-shadow:none;
	
	text-transform:uppercase;
	border-bottom:solid 2px #eee;
    -webkit-transition:all 0.4s ease-in-out;
    -moz-transition:all 0.4s ease-in-out;
    -o-transition:all 0.4s ease-in-out;
    transition:all 0.4s ease-in-out;
}

.nav>li>a:focus, .nav>li>a:hover {
    background-color: transparent;
}

.bg-color-custom {
	color:#fff!important;
	background: <?php echo $color; ?>!important;
}

.text-color-custom {
	color: <?php echo $color; ?>!important;
}

.collapse.in li a:hover,
.collapse.in li a.dropdown-toggle { 
	border-bottom:solid 2px <?php echo $color; ?> !important;
	background:none;
}

.collapse.in ul.dropdown-menu {
	margin-bottom:5px;
}

.collapse.in ul.dropdown-menu a {
	padding:5px;
	border-bottom:solid 1px #bbb; 
}

.nav-collapse .nav > li > a, .nav-collapse .dropdown-menu a, .nav >li {
	margin:0 !important;
	border-radius:0 !important;
}


.navbar .nav > li > a:focus,
.navbar .nav > li > a:hover {
  	color:<?php echo $color; ?>;
	border-bottom:solid 2px <?php echo $color; ?>;
}

.navbar .nav > .active > a,
.navbar .nav > .active > a:focus {
  	color:<?php echo $color; ?>;	
  	text-decoration:none;
	border-bottom:solid 2px <?php echo $color; ?>;
  	background:none;	
  	-webkit-box-shadow:none;
       -moz-box-shadow:none;
          	box-shadow:none;
}

.navbar .nav > .active > a:hover {	
  	color:<?php echo $color; ?>;	
	background:none;		
	border-bottom:solid 2px <?php echo $color; ?>;
  	-webkit-box-shadow:none;
       -moz-box-shadow:none;
          	box-shadow:none;
}

/*Arrow for menu*/
.navbar .nav > li > a .caret {
  margin:9px 0 0 3px !important;	
  border-top-color: <?php echo $color; ?>!important;	
  border-bottom-color: <?php echo $color; ?> !important;
}

/*Dropdown Menu*/
.dropdown-menu { 
	padding:0;
	border:none;
	margin-top:-2px; 
	min-width:200px;
	border-radius:0; 
	border-top:solid 2px <?php echo $color; ?>; 
	border-bottom:solid 2px #687074; 
	z-index: 9999 !important;
}
.dropdown-menu li a { 
	color:#687074; 
	font-size:13px; 
	font-weight:400; 
	padding:6px 15px; 
	border-bottom:solid 1px #eee;
}
.dropdown-menu li > a:hover,
.dropdown-menu li > a:focus,
.dropdown-submenu:hover > a {
  color:#ffffff;
  background:#687074 !important;
    -webkit-transition:all 0.2s ease-in-out;
    -moz-transition:all 0.2s ease-in-out;
    -o-transition:all 0.2s ease-in-out;
    transition:all 0.2s ease-in-out;
	filter:none !important;
}

.dropdown-menu .active > a {
	color:#ffffff !important;
  	background:#687074 !important;
	filter:none !important;
}

.navbar .btn-navbar {
	padding:10px 15px;
	margin-top:1px;
	margin-right:0;
	background:<?php echo $color; ?>;
	border:none !important;	
}
.navbar .btn-navbar:hover {
	background:#5fb611;
}
.navbar .btn-navbar span, 
.navbar .btn-navbar:hover span { 
	background:#fff !important;
	box-shadow:none !important;
}

.navbar .nav > li > .dropdown-menu:after {
	left:19px;
}
.navbar .nav > li > .dropdown-menu:before {
	left:18px;
	border-bottom:none;
}
.navbar .nav > li > .dropdown-menu:after {
	left:19px;
	border-top-color: <?php echo $color; ?> !important;
	border-bottom-color: <?php echo $color; ?> !important;
}

/*Serach*/
.navbar .search-open {
	right:0; 
	top:44px; 
	display:none;
	padding:15px; 
	position:absolute; 
	background:#fcfcfc; 
	border-top:solid 2px #eee; 
}

.navbar .search-open form,
.navbar .search-open .input-append {
	margin:0 !important;	
}

.navbar a.search i.icon-remove {
	top:2px;
	font-size:18px;
	position:relative;
}

.navbar .nav > li > a.search {
	color:#aaa;
	cursor:pointer;
	background:#f7f7f7;
	padding:8px 12px 10px;
	border-bottom-color:#aaa;
}
.navbar .nav > li > a.search:hover {
	color:<?php echo $color; ?>;
	border-bottom-color:<?php echo $color; ?>;
}

/*Fancybox for gallery page*/
.fancybox-overlay.fancybox-overlay-fixed {
	z-index:9999;
}





/*----------------------------
*
*
*
-------------- color --------------
*
*
*
----------------------------*/

a:focus, 
a:hover, 
a:active {
	color: <?php echo $color; ?>;
}

.color-green {
	color: <?php echo $color; ?>;
}

a.read-more:hover { 
	color:<?php echo $color; ?>; 
}

.linked:hover {
	color:<?php echo $color; ?>;
}

/*Slider
------------------------------------*/
.da-slide h2 i {
	background:url(../../plugins/parallax-slider/img/bg-heading.png) repeat;
}

/*Purchase
------------------------------------*/
.purchase a.btn-dash {
	background:<?php echo $color; ?>;
	text-shadow:0 1px 0 #272727;		
}
.purchase a.btn-dash:hover {
	background:#272727;
} 

/*Buttons
------------------------------------*/
.btn-custom {
	color:#fff;
	background: <?php echo $color; ?>;
}

.btn-u {
	background: <?php echo $color; ?>;
}

.btn-u:hover {
	background: #272727;
}

/*Service
------------------------------------*/
.service i {
	color:<?php echo $color; ?>;	
}

/*Welcome Block*/
.servive-block .span4 h4 a:hover {
	color:<?php echo $color; ?>;
}

.servive-block .span4:hover h4,
.servive-block .span4:hover i {
	color:<?php echo $color; ?>;
}
.servive-block-in .span4 i {
	color:<?php echo $color; ?>;
}

/*Service Blocks*/
.service-alternative .service:hover { 
	background:<?php echo $color; ?>;
} 

/*Thumbnail (Recent Work)
------------------------------------*/
.thumbnail-style h3 a:hover {
	color:<?php echo $color; ?>;
}

.thumbnail-style a.btn-more {
	background:<?php echo $color; ?>;
}
.thumbnail-style a.btn-more:hover {
	box-shadow:0 0 0 2px #dfdfdf;
}

/*Carousel (Recent Work)*/
.recent-work a:hover span {
	border-bottom:solid 2px <?php echo $color; ?>;
}

.bx-wrapper .bx-prev {
	background-image: url(../../plugins/bxslider/images/controls.png);
}
.bx-wrapper .bx-next {
	background-image: url(../../plugins/bxslider/images/controls.png);
}

/*Typography
------------------------------------*/
/*Heading*/
.headline h1,
.headline h2,
.headline h3, 
.headline h4 {
	border-bottom:2px solid <?php echo $color; ?>;
}

/*Blockquote*/
blockquote:hover {
	border-left-color:<?php echo $color; ?>; 
}

.hero {
	border-left-color: <?php echo $color; ?>;
}

/*Carousel
------------------------------------*/
.carousel-arrow a.carousel-control:hover {
	color: <?php echo $color; ?>;
}

/*Footer
------------------------------------*/
.copyright a,
.copyright a:hover {
	color: <?php echo $color; ?>;
}


/*Blog Posts
------------------------------------*/
.posts .dl-horizontal:hover { 
	border-right:solid 2px <?php echo $color; ?>;
}
.posts .dl-horizontal a:hover { 
	color:<?php echo $color; ?>; 
}
.posts .dl-horizontal:hover dt img,
.posts .dl-horizontal:hover dd a { 
	color:<?php echo $color; ?>;
	border-color:<?php echo $color; ?> !important;
}

/*Tabs
------------------------------------*/
.nav-tabs li.active a, 
.nav-tabs li.active a:hover,
.nav-tabs > .active > a, 
.nav-tabs > .active > a:hover, 
.nav-tabs > .active > a:focus { 
	background:<?php echo $color; ?>; 
}
.nav-tabs > li > a:hover { 
	background:<?php echo $color; ?>; 
}
.tab-content { 
	border-top:solid 2px <?php echo $color; ?>; 
}

/*Accardion
------------------------------------*/
.acc-home a.active,
.acc-home a.accordion-toggle:hover { 
	color:<?php echo $color; ?>; 
}
.acc-home .collapse.in { 
	border-bottom:solid 1px <?php echo $color; ?>; 
}

/*Testimonials
------------------------------------*/
.testimonal-arrow a {
	color:<?php echo $color; ?>;
}
.testimonal-arrow a:hover {
	background:<?php echo $color; ?> !important;
}

/*Breadcrumb
------------------------------------*/
.breadcrumb li.active,
.breadcrumb li a:hover {
	color:<?php echo $color; ?>;
}

/*About Page
------------------------------------*/
.team .thumbnail-style:hover h3 a {
	color:<?php echo $color; ?> !important;
}

/*Social Icons*/
.team ul li i:hover {
	background:<?php echo $color; ?>;
}	

/*Pricing Page
------------------------------------*/
/*Pricing Head*/
.pricing:hover h4 {
	color:#55c931;
}

.pricing-head h3 {
	background:#55c931;
	text-shadow:0 1px 0 #32a20f;
	border-bottom:solid 1px #41b91c;
}
.pricing-head h4 {
	color:#999;
	background:#fbfef2;
	border-bottom:solid 1px #f5f9e7;
}
	
/*Pricing Content*/
.pricing-content li {
	border-bottom:solid 1px #f5f9e7;
}
.pricing-content li i {
	color:<?php echo $color; ?>;
}

/*Pricing Footer*/
.pricing-footer a,
.pricing-footer button {
	background:<?php echo $color; ?>;
	text-shadow:0 1px 0 #38b312;
	border-bottom:solid 2px #41b91c;
}
.pricing-footer a:hover,
.pricing-footer button:hover {
	background:#40ba1a;
}

/*Priceing Active*/
.price-active h4 {
	color:#55c931;
}

.no-space-pricing .price-active .pricing-head h4,
.no-space-pricing .pricing:hover .pricing-head h4 {
	color:#55c931;
}

/*Right Sidebar
------------------------------------*/
/*Right Sidebar*/
.who li i,
.who li:hover i, 
.who li:hover a { 
	color:<?php echo $color; ?>; 
}

/*Privacy Page
------------------------------------*/
.privacy a:hover {
	color:<?php echo $color; ?>; 
}

/*Portfolio Page
------------------------------------*/
.sort li a:hover { 
	color: <?php echo $color; ?>; 
	border-bottom: 1px dotted <?php echo $color; ?>; 
}
.sort li a.selected { 
	color: <?php echo $color; ?>; 
	border-bottom: 1px solid <?php echo $color; ?>;
}

.view a.info:hover {
	background: <?php echo $color; ?>;
}

/*Blog Page
------------------------------------*/
.blog h3 {
	color:<?php echo $color; ?>;
}
.blog li a:hover {
	color:<?php echo $color; ?>;
}

/*Blog Tags*/
ul.blog-tags a:hover,
ul.blog-tags a:hover i {
	color:<?php echo $color; ?>;
}

/*Blog Ads*/
.blog-ads li img:hover {
	box-shadow:0 0 0 4px <?php echo $color; ?>;
}

/*Blog Latest Tweets*/
.blog-twitter p a {
	color:<?php echo $color; ?>;
}

/*Blog Item Page
------------------------------------*/
.blog-item h4.media-heading span a {
	color:<?php echo $color; ?>;
}

/*Coming Soon Page
------------------------------------*/
.coming-soon-border {
	border-top: solid 3px <?php echo $color; ?>;
}

/*Search Page
------------------------------------*/
.booking-blocks p a {
	color: <?php echo $color; ?>;
}

/*Icons Page
------------------------------------*/
.icon-page li:hover { 
	color:<?php echo $color; ?>;
}

/*Glyphicons*/
.glyphicons-demo a:hover {
	color: <?php echo $color; ?>;
	text-decoration: none;
}


.i-color i{
	color:<?php echo $color; ?>;
}

.tag-box {
	border-left: solid 2px <?php echo $color; ?>;
}

.title-v2:after {
    background: <?php echo $color; ?>;
}

</style>