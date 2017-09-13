<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>News</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="News" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="News" />
	<meta name="og:description" content="" />
	<meta name="og:image" content="" />
	<meta name="og:type" content="article" />
	<meta name="og:url" content="{{curr_url}}" />
	<!-- Facebook Open Graph end -->
		
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js?v=1.0.14" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.68" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1505227538" rel="stylesheet" type="text/css" />
	<link href="css/news.css?ts=1505227538" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_cs_row_56" class="wb-cs-row"><div id="wb_cs_col_57" class="wb-cs-col"><div id="wb_cs_row_58" class="wb-cs-row"><div id="wb_cs_col_59" class="wb-cs-col"><div id="wb_element_instance37" class="wb_element wb_element_picture wb-cs-elem"><img alt="gallery/painel-solar_1156-646" src="gallery_gen/97a4269808e9a14fe85b0ed33d6c76ca_160x140.jpg"></div></div><div id="wb_cs_col_60" class="wb-cs-col"><div id="wb_element_instance36" class="wb_element wb-cs-elem" style=" line-height: normal;"><h5 class="wb-stl-subtitle">Energy Explorer</h5>
</div></div><div class="wb-cs-clear"></div></div></div><div id="wb_cs_col_61" class="wb-cs-col wb-cs-right"><div id="wb_element_instance35" class="wb_element wb-menu wb-menu-mobile wb-cs-elem"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Explorer/" target="_self" title="Explorer">Explorer</a></li><li><a href="Contacts/" target="_self" title="Contacts">Contacts</a></li></ul><div class="clearfix"></div></div></div><div class="wb-cs-clear"></div></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance39" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(news);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance39");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance39").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 150px;">
	
<div id="wb_cs_row_62" class="wb-cs-row"><div id="wb_cs_col_63" class="wb-cs-col"><div id="wb_element_instance38" class="wb_element wb-cs-elem" style=" line-height: normal;"><p class="wb-stl-footer">© 2017 <a href="http://energyexplorer.000webhostapp.com">energyexplorer.000webhostapp.com</a></p></div></div><div class="wb-cs-clear"></div></div><div id="wb_element_instance40" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.css({height: ""});
				}
			});
			</script></div></div><div class="wb_sbg"></div></div>{{hr_out}}</body>
</html>
