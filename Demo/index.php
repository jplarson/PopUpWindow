<?
	$a = isset($_REQUEST['a']) ? $_REQUEST['a'] : '';
	
	switch($a) {
		case 'time':	DisplayTime();		break;
		default:		DisplayDemoPage();
	}
	exit();


function DisplayTime() {
	echo "It is now " . date('m/d/y, g:i:sa') . ".";
}

function DisplayDemoPage() {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <link rel="SHORTCUT ICON" HREF="images/favicon.gif" type="image/ico">
  <title>MooTools PopUpWindow Demo</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link href="css/public.css" media="screen" rel="Stylesheet" type="text/css" />
  
  <script type="text/javascript" src="scripts/mootools-core-1.4.2.js"></script>
  <script type="text/javascript" src="scripts/mootools-more-1.4.0.1.js"></script>
  <script type="text/javascript" src="scripts/PopUpWindow.js"></script>
</head>
<body>
  <h2>PopUpWindow Demo</h2>
  <p style="width: 450px; margin: 0 auto 20px auto;">
    Widget for pop up windows.  Can feature content loaded from a DOM element or the result of an AJAX call.
  </p>
<div class="mainWindow">
  <div class="viewPort" id="viewPort">
    <div class="page"><div class="inner">
      <?=JSLink('Open pop up window', 'App.popUp1.open(); App.popUp1.positionTo(this, 200, 0);')?>
      <br />
  	  <br />
      <?=JSLink('AJAX load pop up.', "App.popUp2.openURL('?a=time'); App.popUp2.positionTo(this, 220, 0);")?>
      <br />
  	  <br />
      <?=JSLink('Differently styled pop up', 'App.popUp3.open(); App.popUp3.positionTo(this, 240, 0);')?>
      <br />
  	  <br />
      <?=JSLink('Resizable pop up', 'App.popUp4.open(); App.popUp4.positionTo(this, 260, 0);')?>
  	</div></div>
  </div><!--viewPort-->
</div><!--mainWindow-->

  <div id="staticDiv">
  	<p>In the HTML of this page, this div is here, just chillin'.  But on the domready function our code to create a PopUpWindow
  	  effectively snatches that content out of the div, and into the pop-up window you see now.</p>
  </div><!--staticDiv-->

  <div id="zenDiv">
  	<p>The CSS model of PopUpWindow is pretty comprehensive, so you can style to your heart's content.</p>
  	<p>With the option to set the className for windows in the contructor you can even have multiple stylings of pop up windows
  	  at the same time (all though the only use case I've encountered for this is this demo!).</p>
  </div><!--zenDiv-->

  <div id="resizeDiv">
  	<p>This window is resizable using the icon in the lower-right corner.</p>
  	<p>'Nuff said.</p>
  </div><!--resizeDiv-->
  
<script type="text/javascript">
	App = {};
	window.addEvent('domready', function() {
		App.popUp1 = new PopUpWindow('Static Content', { contentDiv: 'staticDiv', width: 200 });
		App.popUp2 = new PopUpWindow('AJAX Loding');
		App.popUp3 = new PopUpWindow('CSS Styling', { contentDiv: 'zenDiv', className: 'zenPopUpWindow' });
		App.popUp4 = new PopUpWindow('Resizable', { contentDiv: 'resizeDiv', isResizable: true });
	});
</script>
</body>
</html>
<?
}

function JSLink($text, $onclick, $class = "button") {
	return "<a href=\"JavaScript:void(0);\" onclick=\"$onclick\" class=\"$class\">$text</a>";
}
?>