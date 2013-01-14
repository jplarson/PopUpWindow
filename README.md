PopUpWindow
==========
![Screenshot](http://www.jpl-consulting.com/projects/MooTools/PopUpWindow/ScreenShots/PopUpWindow0.jpg)

Easy-to-use pop up window widget.

Supports dragging, closing, resizing, CSS styling, and loading content from AJAX.

How to Use
----------

PopUpWindow at its heart requires only a title and a content for the body to use.  The content can be supplied as a string of HTML,
a DOM element, or the response from an AJAX call.  The simplest example is to pull the content as a DOM element (presumably on domready, so that it doesn't show in the normal page flow):

	#HTML
	<div id="popUpContent">
	  <p>This is simple, static content for my pop up window.</p>
	</div>

Our JavaScript to create a pop up window is this:

	#JS
	var myPopUp = new PopUpWindow('My PopUp Window', { contentDiv: 'popUpContent' });

To open it:

	#JS
	myPopUp.open();
	
PopUpWindow offers a few convenience methods for positioning the window:

- setPosition(options) is a wrapper for calling Element.position on the pop up window div.
- positionTo(relativeTo, xOffset, yOffset), a lazy man's shortcut to a useful set of Element.position() options.  Useful when a pop up should appear in proximity to the button or link which triggered its opening.


PopUpWindow Options
------------------

There are a few options of PopUpWindow to customize its behavior:

- width, top, left and zIndex control corresponding CSS properties of the window div.
- isDraggable, isClosable and isResizable control the behaviors available to the window.
- resizeLimits describes the min and max sizes along the x and y axis (applicable only for resizable windows).
- contentDiv, when supplied, is used to load content from a DOM element (and remove it from its original position in the document body).
- URL, when supplied, is used to load content via AJAX.
- onOpen, onClose, and onResize are event handlers.

Screenshots
-----------

![Screenshot](http://www.jpl-consulting.com/projects/MooTools/PopUpWindow/ScreenShots/PopUpWindow1.jpg)
![Screenshot](http://www.jpl-consulting.com/projects/MooTools/PopUpWindow/ScreenShots/PopUpWindow2.jpg)
![Screenshot](http://www.jpl-consulting.com/projects/MooTools/PopUpWindow/ScreenShots/PopUpWindow3.jpg)

Dependencies
------------
	core:1.4.2/Events
	core:1.4.2/Options
	core:1.4.2/Element.Event
	core:1.4.2/Element.Style
	core:1.4.2/Element.Dimensions
	more:1.4.0.1/Drag.Move
	more:1.4.0.1/Element.Position