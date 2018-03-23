


<!DOCTYPE HTML>
<html>
	<head>

		<!-- Meta. -->
		
		
			<meta charset="utf-8" />

<link rel="apple-touch-icon" href="touch-icon-iphone.png" />
<link rel="apple-touch-icon" sizes="72x72" href="http://cs.everyaware.eu/resources/template/noise/img/touch-icon-ipad.png" />
<link rel="apple-touch-icon" sizes="114x114" href="http://cs.everyaware.eu/resources/template/noise/img/touch-icon-iphone-retina.png" />
<link rel="apple-touch-icon" sizes="144x144" href="http://cs.everyaware.eu/resources/template/noise/img/touch-icon-ipad-retina.png" />

<meta name="application-name" content="EveryAware CS"/> 
<meta name="msapplication-TileColor" content="#222222"/> 
<meta name="msapplication-TileImage" content="http://cs.everyaware.eu/resources/template/noise/img/touch-icon-windows.png"/> 

<link rel="shortcut icon" type="image/ico" href="http://cs.everyaware.eu/resources/template/noise/img/favicon.ico" />
<meta name="msapplication-starturl" content="http://cs.everyaware.eu/" />
<meta name="msapplication-navbutton-color" content="#222222" />
<meta name="msapplication-tooltip" content="Go to the case study page of the EveryAware research project" />

<meta name="msapplication-task"
content="name=Overview;
action-uri=http://cs.everyaware.eu/event/overview/;
icon-uri=http://cs.everyaware.eu/resources/template/noise/img/favicon.ico" />
     
<meta name="msapplication-task"
content="name=WideNoise;
action-uri=http://cs.everyaware.eu/event/widenoise/;
icon-uri=http://cs.everyaware.eu/resources/template/noise/img/favicon.ico" />
     
<meta name="msapplication-task"
content="name=AirProbe;
action-uri=http://cs.everyaware.eu/event/airprobe/;
icon-uri=http://cs.everyaware.eu/resources/template/noise/img/favicon.ico" />

<meta name="viewport" content="width=device-width, initial-scale=1">

		
			<meta name="apple-itunes-app" content="app-id=657693514">
		
			<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
		

		<!-- Title -->
		<title>
			WideNoise
		</title>

		<!-- CSS. -->
		
		
			<!-- CSS - Base. -->
<link rel="stylesheet" type="text/css" href="http://cs.everyaware.eu/resources/template/base/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="http://cs.everyaware.eu/resources/template/base/css/bootstrap.custom.css" />
<link rel="stylesheet" type="text/css" href="http://cs.everyaware.eu/resources/template/base/css/base.css" />
		
			<link type="text/css" rel="stylesheet" href="http://cs.everyaware.eu/resources/template/everyaware/theme/noise/layout/css/noise.css" />
		
			<link type="text/css" rel="stylesheet" href="http://cs.everyaware.eu/resources/template/noise/js/openlayers/theme/default/style.css" />
<link type="text/css" rel="stylesheet" href="http://cs.everyaware.eu/resources/template/noise/js/openlayers/theme/default/google.css" />
<link type="text/css" rel="stylesheet" href="http://cs.everyaware.eu/resources/template/noise/css/topbar.mobile.css" />
<link type="text/css" rel="stylesheet" href="http://cs.everyaware.eu/resources/template/noise/js/jquery/ui/css/ui-lightness/jquery-ui-1.8.16.custom.css" />

<link type="text/css" rel="stylesheet" href="http://cs.everyaware.eu/resources/template/everyaware/common/view/css/map.css" />
		
		
		<!-- Java Script. -->
		
		
			

<!-- Java Script - Base. -->
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/base/js/jquery/jquery-1.8.3.min.js">
	//
</script>
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/base/js/jquery.data-href.js">
	//
</script>
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/base/js/twitter/bootstrap-dropdown.js">
	//
</script>
<script type="text/javascript">
	// making some variables accessable to Java Script
	
	Base = {};
	
	Base.projectHome = "http://cs.everyaware.eu";
	Base.eventName = "widenoise";
	Base.eventHome = Base.projectHome + "/" + "event/widenoise";

	Base.resdir = "http://cs.everyaware.eu/resources";

	Base.isLoggedIn = false;
		
	
	$.parseDHRef();
</script>
		
			<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/noise/js/Mapper.js"></script>

<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/everyaware/common/layout/js/noise.js"></script></script>
		
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/noise/js/openlayers/OpenLayers.js"></script>
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/noise/js/openlayers/OpenLayers.ZoomStrategy.js"></script>
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/noise/js/date.format.js"></script>
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/noise/js/jsrender.js"></script>
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/noise/js/Mapper.js"></script>
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/noise/js/MapEnv.js"></script>
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/noise/js/jquery/jquery.tagcloud.js"></script>
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/noise/js/jquery/jquery.tinysort.min.js"></script>
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/noise/js/Environment.js"></script>
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/noise/js/Statistics.Noise.TagCloud.js"></script>
<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/noise/js/jquery/ui/js/jquery-ui-1.8.16.custom.min.js"></script>

<script type="text/javascript" src="http://cs.everyaware.eu/resources/template/everyaware/theme/noise/view/js/map.js"></script>
		
			<script id="tmpl" type="text/x-jquery-tmpl">
<div id="map-popup">

<div id="map-cluster-zoom" class="btn" title="Zoom into cluster."></div>

<h2>Statistics</h2>
These values are an average of several recordings:

<ul>
	<li><div style="display:inline-block; width: 120px;">Average dB Value:</div>{{=avgDB}}</li>
	<li><div style="display:inline-block; width: 120px;">Recordings:</div> {{=count}}</li>
	<li><div style="display:inline-block; width: 120px;">Begin:</div> {{=oldest}}</li>
	<li><div style="display:inline-block; width: 120px;">End:</div> {{=youngest}}</li>
</ul>

Perception: 
<ul>
	<li><div style="display:inline-block; width: 50px;">Love</div>
		<div id="feeling" title="{{=p_feeling}}" style="display:inline-block; width: 120px; margin-right: 10px;"></div> 
		Hate</li>
	<li><div style="display:inline-block; width: 50px;">Calm</div>
		<div id="disturbance" title="{{=p_disturbance}}" style="display:inline-block; width: 120px; margin-right: 10px;"></div> 
		Hectic</li>
	<li><div style="display:inline-block; width: 50px;">Alone</div> 
		<div id="isolation" title="{{=p_isolation}}" style="display:inline-block; width: 120px; margin-right: 10px;"></div> 
		Social</li>
	<li><div style="display:inline-block; width: 50px;">Nature</div> 
		<div id="artificial" title="{{=p_artificial}}" style="display:inline-block; width: 120px; margin-right: 10px;"></div> 
		Man-Made</li>
</ul>
Tags: <div id="cluster-tags" style="display:inline-block;"></div>
</div>
</script>
		
			<script id="tmpl_single" type="text/x-jquery-tmpl">
<div id="map-popup">

<div id="map-cluster-zoom" class="btn" title="Zoom closer."></div>

<h2>Single Recording</h2>

<ul>
	<li><div style="display:inline-block; width: 120px;">dB Value:</div> {{=avgDB}}</li>
	<li><div style="display:inline-block; width: 120px;">Date:</div> {{=youngest}}</li>
</ul>

Perception: 
<ul>
	<li><div style="display:inline-block; width: 50px;">Love</div>
		<div id="feeling" title="{{=p_feeling}}" style="display:inline-block; width: 120px; margin-right: 5px;"></div> 
		Hate</li>
	<li><div style="display:inline-block; width: 50px;">Calm</div>
		<div id="disturbance" title="{{=p_disturbance}}" style="display:inline-block; width: 120px; margin-right: 5px;"></div> 
		Hectic</li>
	<li><div style="display:inline-block; width: 50px;">Alone</div> 
		<div id="isolation" title="{{=p_isolation}}" style="display:inline-block; width: 120px; margin-right: 5px;"></div> 
		Social</li>
	<li><div style="display:inline-block; width: 50px;">Nature</div> 
		<div id="artificial" title="{{=p_artificial}}" style="display:inline-block; width: 120px; margin-right: 5px;"></div> 
		Man-Made</li>
</ul>
Tags: <div id="cluster-tags" style="display:inline-block;"></div>
</div>
</script>
		

	</head>
	<body>
		<nav>
			<div class="topbar">
				<div class="topbar-inner">
					<div class="container">
					
						<!-- Event selection. -->
						<ul>
							<li class="dropdown" data-dropdown="dropdown">
								<a class="brand dropdown-toggle" href="http://cs.everyaware.eu/event/widenoise" title="Menu">
									<img alt="Menu" src="http://cs.everyaware.eu/resources/template/base/img/nav/menu.png" /><span class="text">&#032;&#032;WideNoise</span>
								</a>
								<ul class="dropdown-menu">
									
										<li><a href="http://cs.everyaware.eu/event/overview">Overview</a></li>
									
										<li><a href="http://cs.everyaware.eu/event/widenoise">WideNoise</a></li>
									
										<li><a href="http://cs.everyaware.eu/event/airprobe">AirProbe</a></li>
									
										<li><a href="http://cs.everyaware.eu/event/gears">Gears</a></li>
									
										<li><a href="http://cs.everyaware.eu/event/questionnaire">Quest</a></li>
									
								</ul>
							</li>
						</ul>
							
						<!-- Navigation. -->
						
<ul class="nav">
	<li id="nav-home" class=''><a href="http://cs.everyaware.eu/event/widenoise" title="Home"><img alt="Home" src="http://cs.everyaware.eu/resources/template/noise/img/nav/home.png" /><span class="text">&#032; Home</span></a></li>
	<li id="nav-map" class='active'><a href="http://cs.everyaware.eu/event/widenoise/map" title="Map"><img alt="Map" src="http://cs.everyaware.eu/resources/template/noise/img/nav/map.png" /><span class="text">&#032; Map</span></a></li>
	<li id="nav-statistics" class=''><a href="http://cs.everyaware.eu/event/widenoise/statistics" title="Statistics"><img alt="Statistics" src="http://cs.everyaware.eu/resources/template/noise/img/nav/statistics.png" /><span class="text">&#032; Statistics</span></a></li>
	<li id="nav-about" class=''><a href="http://cs.everyaware.eu/event/widenoise/about" title="About"><img alt="About" src="http://cs.everyaware.eu/resources/template/noise/img/nav/about.png" /><span class="text">&#032; About</span></a></li>
</ul>
					
						<!-- User management. -->
						
							<p class="pull-right">
								<span class="text">You are not logged in!</span> <a href="http://cs.everyaware.eu/event/widenoise/login?redirectOnSuccess=http://cs.everyaware.eu/event/widenoise">Login</a> | <a href="http://cs.everyaware.eu/event/widenoise/register">Register</a> &nbsp;
							</p>
						
						
					</div>
				</div>
			</div>
		</nav>
		


<header>
	
	
</header>

<article>
	<div id="content" class="container">
		
<div id="track" class="map-box square track-inactive pointable" title="Track incoming recordings.">
</div>

<div id="cluster" class="map-box square cluster-inactive pointable" title="Cluster.">
</div>

<div id="map-social2">
	<div id="map-social2-inner">share</div>
</div>

<div id="map-share-dialog">
	<div id="map-share-dialog-inner">
		<h2>Share</h2>
		<div id="map-share-permalink-div">
			Share the current map location and zoom level.
			<br />
			<div id="map-share-link-image" class="pointable"></div>
			<a href="#" id="map-share-permalink-anchor"></a>
			<input id="map-share-permalink" type="text" readonly="readonly" />
		<br />
		</div>
		<br />
		
		<!-- Filled with Java Script. -->
		<div id="map-twitter">
		</div>
		
		<!-- Filled with Java Script. -->
		<div id="map-facebook">
		</div>
	</div>
</div>

<div id="map-soundscape">
	<div id="scape-6" class="scape"></div>
	<div id="scape-5" class="scape"></div>
	<div id="scape-4" class="scape"></div>
	<div id="scape-3" class="scape"></div>
	<div id="scape-2" class="scape"></div>
	<div id="scape-1" class="scape"></div>
	<div id="scape-0" class="scape"></div>
</div>

<div id="map-loading" class="centered map-box">
	<img class="middle" alt="Loading ..." src="http://cs.everyaware.eu/resources/template/noise/img/loading.gif"><span id="map-loading-text">Loading ...</span>
</div>

<div id="promotion-webpage" class="promotion map-box map-overlay">
	<img class="middle qr-code-image" alt="QR Code: Home" src="http://cs.everyaware.eu/resources/template/noise/img/qr.cs.everyaware.eu.map.png">
</div>

<div id="promotion-webpage-label" class="promotion map-box map-overlay">
	<h2>map</h2>
</div>

<div id="promotion-android-label" class="promotion map-box map-overlay">
	<img class="middle" alt="QR Code: Home" src="http://cs.everyaware.eu/resources/template/noise/img/icon-android.png">
</div>

<div id="promotion-apple-label" class="promotion map-box map-overlay">
	<img class="middle" alt="QR Code: Home" src="http://cs.everyaware.eu/resources/template/noise/img/icon-apple.png">
</div>

<div id="promotion-apple" class="promotion map-box map-overlay">
	<img class="middle qr-code-image" alt="QR Code: Home" src="http://cs.everyaware.eu/resources/template/noise/img/qr.widenoise.app.apple.png">
</div>

<div id="promotion-android" class="promotion map-box map-overlay">
	<img class="middle qr-code-image" alt="QR Code: Home" src="http://cs.everyaware.eu/resources/template/noise/img/qr.widenoise.app.android.png">
</div>

<div id="map-tags" class="map-box">
	<span id="map-tags-close" class="pointable">X</span>
	<h2 id="map-tags-heading">Tagcloud</h2>
	<div id="tags"></div>
</div>

<div id="map-info">
</div>

<div id="map-notice" class="centered map-box">
</div>

<div id="map-kml" class="map-overlay map-box map-dialog map-padding">
	<form id="map-kml-form" action="">
	</form>
</div>

<div id="map"></div>

<div id="map-search" class="pointable">
	<div id="map-search-inner">Search</div>
</div>

<div id="map-search-dialog">
	<div id="map-search-dialog-inner">
	<form id="map-search-form">
		<input type="text" id="map-search-input" />
		<input type="submit" id="map-search-submit" value="Submit" />
		<div id="autocomplete-menu"></div>
	</form>
	</div>
</div>

<div id="vector" class="map-box square pointable vector-inactive"
	title="Vector Toolbar."></div>
<div id="vector-dialog" class="map-box">
	<div id="vector-dialog-inner">
		<div id="vector-dialog-controls-label">Vector Controls</div>
		<div id="vector-dialog-controls">
			<div id="vector-controls" class="olControlEditingToolbar"></div>
			<br />
		</div>
		<br />
		<div id="vector-dialog-input-label" class="vector-dialog-label pointable
			 collapsed">+ Input Configuration</div>
		<div id="vector-dialog-input" class="vector-inner">
			Format
			<select name="formatType" id="formatType" class="vector-select">
				<option value="geojson" selected="selected">GeoJSON</option>
				<option value="atom">Atom</option>
				<option value="kml">KML</option>
				<option value="georss">GeoRSS</option>
				<option value="gml2">GML (v2)</option>
				<option value="gml3">GML (v3)</option>
				<option value="wkt">Well-Known Text (WKT)</option>
				<option value="gpx">GPX</option>
			</select><br />
			Pretty print 
			<input id="prettyPrint" type="checkbox"
				name="prettyPrint" value="1" />
			<br />
			<br />
			Input Projection: <select id="inproj" class="projection vector-select">
				<option value="EPSG:4326" selected="selected">EPSG:4326</option>
				<option value="EPSG:900913">Spherical Mercator</option>
			</select>
			<br />
			Output Projection: <select id="outproj" class="projection vector-select">
				<option value="EPSG:4326" selected="selected">EPSG:4326</option>
				<option value="EPSG:900913">Spherical Mercator</option>
			</select>
			<br />
			<br />
			<textarea id="vector-input-text" class="vector-textarea">paste text here...</textarea>
			<br />
			<br />
			<input type="button" value="Add Feature" id="add-feature" />
		</div>
		<div id="vector-dialog-output-label" class="vector-dialog-label pointable collapsed">+ Output Configuration</div>
		<div id ="vector-dialog-output" class="vector-inner">
			Output
			<textarea id="vector-output-text" class="vector-textarea"> </textarea>
		</div>
	</div>
</div>
<div id="map-mouse-control"></div>
<div id="map-tags-button" class="map-box square pointable" title="Show TagCloud."></div>
	</div>
</article>

<footer>
	
</footer>
		<script type="text/javascript">
			$(function() {
			    $("#_logout_link").on("click", function(event) {
			        event.preventDefault();
			        $("#_hidden_logout_form").submit();
				})
			})
		</script>
	</body>
</html> 
