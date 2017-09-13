<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Explorer</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!-- Facebook Open Graph -->
	<meta name="og:title" content="Explorer" />
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
	<link href="css/5.css?ts=1505227538" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_cs_row_37" class="wb-cs-row"><div id="wb_cs_col_38" class="wb-cs-col"><div id="wb_cs_row_39" class="wb-cs-row"><div id="wb_cs_col_40" class="wb-cs-col"><div id="wb_element_instance26" class="wb_element wb_element_picture wb-cs-elem"><img alt="gallery/painel-solar_1156-646" src="gallery_gen/97a4269808e9a14fe85b0ed33d6c76ca_160x140.jpg"></div></div><div id="wb_cs_col_41" class="wb-cs-col"><div id="wb_element_instance25" class="wb_element wb-cs-elem" style=" line-height: normal;"><h5 class="wb-stl-subtitle">Energy Explorer</h5>
</div></div><div class="wb-cs-clear"></div></div></div><div id="wb_cs_col_42" class="wb-cs-col wb-cs-right"><div id="wb_element_instance24" class="wb_element wb-menu wb-menu-mobile wb-cs-elem"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li class="active"><a href="Explorer/" target="_self" title="Explorer">Explorer</a></li><li><a href="Contacts/" target="_self" title="Contacts">Contacts</a></li></ul><div class="clearfix"></div></div></div><div class="wb-cs-clear"></div></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_cs_row_45" class="wb-cs-row"><div id="wb_cs_col_46" class="wb-cs-col"><div id="wb_element_instance28" class="wb_element wb-cs-elem" style=" line-height: normal;"><h1 class="wb-stl-heading1">Explorer</h1>
</div></div><div class="wb-cs-clear"></div></div><div id="wb_cs_row_47" class="wb-cs-row"><div id="wb_cs_col_48" class="wb-cs-col"><div id="wb_cs_row_49" class="wb-cs-row"><div id="wb_cs_col_50" class="wb-cs-col"><div id="wb_element_instance30" class="wb_element wb-cs-elem" style=" line-height: normal;"><h2 class="wb-stl-heading2">Search your region below and check your potential by legend:</h2>
</div></div><div class="wb-cs-clear"></div></div><div id="wb_cs_row_51" class="wb-cs-row"><div id="wb_cs_col_52" class="wb-cs-col"><div id="wb_element_instance29" class="wb_element wb-cs-elem" style=" overflow: hidden;">


<title>Brasil_Solar - Google Fusion Tables</title><style type="text/css">
html, body, #googft-mapCanvas {
  height: 100%;
  margin: 0;
  padding: 0;
}
#googft-legend{background-color:#fff;border:1px solid #000;font-family:Arial,sans-serif;font-size:12px;margin:5px;padding:10px 10px 8px}#googft-legend p{font-weight:bold;margin-top:0}#googft-legend div{margin-bottom:5px}.googft-legend-swatch{border:1px solid;float:left;height:12px;margin-right:8px;width:20px}.googft-legend-range{margin-left:0}.googft-dot-icon{margin-right:8px}.googft-paddle-icon{height:24px;left:-8px;margin-right:-8px;position:relative;vertical-align:middle;width:24px}.googft-legend-source{margin-bottom:0;margin-top:8px}.googft-legend-source a{color:#666;font-size:11px}
</style><script type="text/javascript" src="https://maps.google.com/maps/api/js?v=3"></script><script type="text/javascript">
  function initialize() {
    google.maps.visualRefresh = true;
    var isMobile = (navigator.userAgent.toLowerCase().indexOf('android') > -1) ||
      (navigator.userAgent.match(/(iPod|iPhone|iPad|BlackBerry|Windows Phone|iemobile)/));
    if (isMobile) {
      var viewport = document.querySelector("meta[name=viewport]");
      viewport.setAttribute('content', 'initial-scale=1.0, user-scalable=no');
    }
    var mapDiv = document.getElementById('googft-mapCanvas');
    mapDiv.style.width = isMobile ? '100%' : '2000px';
    mapDiv.style.height = isMobile ? '100%' : '700px';
    var map = new google.maps.Map(mapDiv, {
      center: new google.maps.LatLng(-12.19,-20.00),
      zoom: 4,
      mapTypeControl: true,
      mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
       },
       zoomControl: true,
       zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_CENTER
       },
       fullscreenControl: true
    });
    map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(document.getElementById('googft-legend-open'));
    map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(document.getElementById('googft-legend'));

    layer = new google.maps.FusionTablesLayer({
      map: map,
      heatmap: { enabled: false },
      query: {
        select: "col1",
        from: "1pAyuWUSyOmsEMsM4LEPBRgXBkBW3KCaydeDGFCXf",
        where: ""
      },
      options: {
        styleId: 2,
        templateId: 2
      }
    });

    if (isMobile) {
      var legend = document.getElementById('googft-legend');
      var legendOpenButton = document.getElementById('googft-legend-open');
      var legendCloseButton = document.getElementById('googft-legend-close');
      legend.style.display = 'none';
      legendOpenButton.style.display = 'block';
      legendCloseButton.style.display = 'block';
      legendOpenButton.onclick = function() {
        legend.style.display = 'block';
        legendOpenButton.style.display = 'none';
      }
      legendCloseButton.onclick = function() {
        legend.style.display = 'none';
        legendOpenButton.style.display = 'block';
      }
    }
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script><div id="googft-mapCanvas"></div>
  <input id="googft-legend-open" style="display:none" type="button" value="Legend"><div id="googft-legend">
    <p id="googft-legend-title">Potential (kWh/m2/day)</p>
    <div>
      <img class="googft-dot-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJCAYAAADgkQYQAAAAiklEQVR42mNgQIAoIF4NxGegdCCSHAMzEC81M4v6n56++n9V1RkwbWgY+B8oPhOmKM3WNu3/zJn/MbCFRSxIYSxI0YHi4gNYFRUW7gUp2gtS9LC9/SFWRc3Nt0GKbhNtUizIbmyKjIxCQIpCYI6fD/JdVtZGsO8yMtbBfDeNAQ2AwmkjNJzWIYcTAMk+i9OhipcQAAAAAElFTkSuQmCC"><span class="googft-legend-range">4.17</span>
    </div>
    <div>
      <img class="googft-dot-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJCAYAAADgkQYQAAAAiElEQVR42mNgQIAoIF4NxGegdCCSHAMzEC81izL7n746/X/VmSowbRho+B8oPhOmKM02zfb/TCzQItYCpDAWpOhA8YFirIoK9xaCFO0FKXrY/rAdq6Lm280gRbeJNikWZDc2RUYhRiBFITDHzwf5LmtjFth3GesyYL6bxoAGQOG0ERpO65DDCQDX7ovT++K9KQAAAABJRU5ErkJggg=="><span class="googft-legend-range">4.63</span>
    </div>
    <div>
      <img class="googft-dot-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJCAYAAADgkQYQAAAAi0lEQVR42mNgQIAoIF4NxGegdCCSHAMzEC+NijL7v3p1+v8zZ6rAdGCg4X+g+EyYorS0NNv////PxMCxsRYghbEgRQcOHCjGqmjv3kKQor0gRQ8fPmzHquj27WaQottEmxQLshubopAQI5CiEJjj54N8t3FjFth369ZlwHw3jQENgMJpIzSc1iGHEwB8p5qDBbsHtAAAAABJRU5ErkJggg=="><span class="googft-legend-range">5.09</span>
    </div>
    <div>
      <img class="googft-dot-icon" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAJCAYAAADgkQYQAAAAiklEQVR42mNgQIAoIF4NxGegdCCSHAMzEC+NUlH5v9rF5f+ZoCAwHaig8B8oPhOmKC1NU/P//7Q0DByrqgpSGAtSdOCAry9WRXt9fECK9oIUPXwYFYVV0e2ICJCi20SbFAuyG5uiECUlkKIQmOPng3y30d0d7Lt1bm4w301jQAOgcNoIDad1yOEEAFm9fSv/VqtJAAAAAElFTkSuQmCC"><span class="googft-legend-range">5.55</span>
    </div>
    <input id="googft-legend-close" style="display:none" type="button" value="Hide"></div>


</div></div><div class="wb-cs-clear"></div></div><div id="wb_cs_row_53" class="wb-cs-row"><div id="wb_cs_col_54" class="wb-cs-col"><div id="wb_element_instance32" class="wb_element wb-cs-elem" style=" line-height: normal;"><p class="wb-stl-normal"><span style="color:#616161;"><em>Source: http://sonda.ccst.inpe.br/publicacoes/atlas_solar.html</em></span></p>
</div></div><div class="wb-cs-clear"></div></div></div><div id="wb_cs_col_55" class="wb-cs-col"><div id="wb_element_instance31" class="wb_element wb-cs-elem" style=" overflow: hidden;">

  
    <title></title><script type="text/javascript">
    window.onload = function(){
     
    var i = function(id){ return document.getElementById(id); }
     
    i("calc").onclick = function(){
    
    var potencial_valor = i("potential").value;
    var consumption_valor = i("consumption").value;
    var pot_total_valor = (parseFloat(potencial_valor) * parseFloat(consumption_valor))/1000;
    i("pot_total").innerHTML = pot_total_valor;

    var num_cells_valor = parseInt((pot_total_valor * 1000) / 260);
    i("num_cells").innerHTML = num_cells_valor;

    var annual_prod_valor = num_cells_valor * 33.33 * 12;
    i("annual_prod").innerHTML = parseInt(annual_prod_valor);

    var area_valor = num_cells_valor * 2.15; 
    i("area").innerHTML = parseInt(area_valor * 100) / 100;
    
    var gen_mon_valor = num_cells_valor * 33.33; 
    i("gen_mon").innerHTML = parseInt(gen_mon_valor);

    var cost_min_valor = num_cells_valor * 530; 
    i("cost_min").innerHTML = parseInt(cost_min_valor * 100) / 100;

    var cost_max_valor = num_cells_valor * 650; 
    i("cost_max").innerHTML = parseInt(cost_max_valor * 100) / 100;
    }
    }
    </script><div>
      <span style="font-size:22px;"><span style="color:#0d3c5e;"><span style="font-family:arial,helvetica,sans-serif;">Fill in the form below to know the feasibility of installing solar panel in your locality.</span></span></span></div>
    <div>
       </div>
    <p>
       </p>
    <p>
      <span style="font-size:16px;"><span style='color: rgb(51, 51, 51); font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; font-weight: bold; background-color: rgb(255, 255, 255);'>P<span style="font-family:arial,helvetica,sans-serif;">otential found:</span></span></span></p>
    <p>
      <span style="font-family:arial,helvetica,sans-serif;"><span style="color: rgb(51, 51, 51); font-size: 14px; font-weight: bold; background-color: rgb(255, 255, 255);"><input maxlength="4" name="potential" id="potential" size="5" type="text"></span><span style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); font-size: 14px;"> <span style="font-size:16px;">kWh/m2/day</span></span></span></p>
    <p>
      <span style="font-size:16px;"><span style="font-family:arial,helvetica,sans-serif;"><span style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); font-weight: bold;">Put down your monthly energy consumption:</span></span></span></p>
    <p>
      <span style="font-family:arial,helvetica,sans-serif;"><span style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); font-size: 14px; font-weight: bold;"><input maxlength="5" name="consumption" id="consumption" size="5" type="text"></span> <span style="font-size:16px;"><span style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51);">kWh</span></span></span></p>
    <p>
      <span style="font-family:arial,helvetica,sans-serif;"><span style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); font-size: 14px;"><input name="calc" id="calc" type="button" value="Calculate"></span></span></p>
    <p>
       </p>
    <p>
       </p>
    <p>
      <span style="font-size:18px;"><span style="font-family:arial,helvetica,sans-serif;"><u><span style="background-color: rgb(255, 255, 255); color: rgb(51, 51, 51); font-weight: bold;">

      RESULT</span></u></span></span></p>
    <table align="left" border="0" cellpadding="0" cellspacing="1" dir="ltr" id="tab" style="width: 700px; height: 400px"><tbody><tr><td>
            <strong style="font-size: 16px;"><span style="font-family: arial, helvetica, sans-serif;">To service the system you need a power of:</span></strong></td>
          <td>
            <fieldset><span id="pot_total" style="font-family: arial, helvetica, sans-serif; font-weight: bold;"></span><span style="font-family: arial, helvetica, sans-serif;">  kWp</span></fieldset></td>
        </tr><tr><td>
            <strong style="font-size: 16px;"><span style="font-family: arial, helvetica, sans-serif;">Number of photovoltaic panels: </span></strong></td>
          <td>
            <fieldset><span id="num_cells" style="font-family: arial, helvetica, sans-serif; font-weight: bold;"></span><span style="font-family: arial, helvetica, sans-serif;">  of 260W</span></fieldset></td>
        </tr><tr><td>
            <strong style="font-size: 16px;"><span style="font-family: arial, helvetica, sans-serif;">Annual energy production:</span></strong></td>
          <td>
            <fieldset><span id="annual_prod" style="font-family: arial, helvetica, sans-serif; font-weight: bold;"></span><span style="font-family: arial, helvetica, sans-serif;">  kWh / year aprox.</span></fieldset></td>
        </tr><tr><td>
            <strong style="font-size: 16px;"><span style="font-family: arial, helvetica, sans-serif;">Minimum area occupied by the system:</span></strong></td>
          <td>
            <fieldset><span id="area" style="font-family: arial, helvetica, sans-serif; font-weight: bold;"></span><span style="font-family: arial, helvetica, sans-serif;">  m<sup>2</sup></span></fieldset></td>
        </tr><tr><td>
            <strong style="font-size: 16px;"><span style="font-family: arial, helvetica, sans-serif;">Monthly energy generation (in kWh):</span></strong></td>
          <td>
            <fieldset><span id="gen_mon" style="font-family: arial, helvetica, sans-serif; font-weight: bold;"></span><span style="font-family: arial, helvetica, sans-serif;">  kWh / month aprox.</span></fieldset></td>
        </tr><tr><td>
            <strong style="font-size: 16px;"><span style="font-family: arial, helvetica, sans-serif;">Average cost of this system in the market:</span></strong></td>
          <td>
            <fieldset><span style="font-family: arial, helvetica, sans-serif; font-weight: bold;"> US$ </span><span id="cost_min" style="font-family: arial, helvetica, sans-serif; font-weight: bold;"></span><span style="font-family: arial, helvetica, sans-serif;">   -  </span><span style="font-family: arial, helvetica, sans-serif; font-weight: bold;"> US$ </span><span id="cost_max" style="font-family: arial, helvetica, sans-serif; font-weight: bold;"></span></fieldset></td>
        </tr></tbody></table><p>
       </p>
  
</div></div><div class="wb-cs-clear"></div></div><div id="wb_element_instance33" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(5);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance33");
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
					$("#wb_element_instance33").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 150px;">
	
<div id="wb_cs_row_43" class="wb-cs-row"><div id="wb_cs_col_44" class="wb-cs-col"><div id="wb_element_instance27" class="wb_element wb-cs-elem" style=" line-height: normal;"><p class="wb-stl-footer">© 2017 <a href="http://energyexplorer.000webhostapp.com">energyexplorer.000webhostapp.com</a></p></div></div><div class="wb-cs-clear"></div></div><div id="wb_element_instance34" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
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
