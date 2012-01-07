PopUpWindow
===========

Easy-to-use pop up window widget.

Supports dragging, closing, resizing, CSS styling, and loading content from AJAX.

How to Use
----------

PopUpWindow takes some careful setup of HTML elements and CSS, but no more than you would expect for the intended usage.  Consider the following HTML:

  <div id="viewPort">
    <div class="panel"></div>
    <div class="panel"></div>
    <div class="panel"></div>
  </div>

In our CSS we would (presumably) want to set the div.panel elements to have the same size as the #viewPort, and also we will most likely want #viewPort to have overflow: hidden.  Also, if panels are to be lined up horizontally, we must be sure that they are (this is done most easily by a float: left).  So we have, for example:

#viewPort {
	height:		400px;
	width:		300px;
	overflow:		hidden;
}

div.panel {
	height:		400px;
	width:		300px;
	float:		left;
}

Our JavaScript to invoke drag fling action is now a simple matter:

	#JS
	new PopUpWindow(viewPort, { flingAxis: 'x'});

PopUpWindow Options
------------------

There are a few key options of PopUpWindow.  Four of them relate to the physics of sliding, and all have the units pixels per frame: .
 * maxVelocity, slideVelocity, minFlingVelocity, and slideFriction relate to the physics of sliding, and all have the units pixels per frame.
 * flingAxis determines the axis of movement for the panels.  It defaults to 'x', and 'y' may be supplied for vertical movement.
 * onFlingDone is an event handler for when a fling is completed (i.e. when the fling ends due to reaching the threshhold of the next panel).

Screenshots
-----------

![Screenshot](http://www.jpl-consulting.com/projects/MooTools/PopUpWindow/ScreenShots/PopUpWindow1.gif)
![Screenshot](http://www.jpl-consulting.com/projects/MooTools/PopUpWindow/ScreenShots/PopUpWindow2.gif)
![Screenshot](http://www.jpl-consulting.com/projects/MooTools/PopUpWindow/ScreenShots/PopUpWindow3.gif)