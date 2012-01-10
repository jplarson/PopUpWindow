PopUpWindow
===========

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

CSS
---

Naturally, CSS styling is critical to both functionality and aesthetics.  Here's an example styling that gives the essential structure:

	#CSS
	.popUpWindow {
		border:					2px solid #000000;
		border-radius:			10px;
		background:				#fff;
		box-shadow:				4px 4px 3px #888;
	}
	.popUpWindow .titleBar {
		position:				relative;
		padding:				3px 10px;
		height:					20px;
		font-size:				20px;
		background:				#000;
		color:					#fff;
		border-radius:			8px 8px 0 0;
	}
		.popUpWindow .titleBar span.theTitle {
			font-weight:			900;
		}
	
		.popUpWindow .titleBar span.closeIcon {
			position:				absolute;
			top:					5px;
			right:					7px;
			background:				url(../images/iconWhiteBigX.png) no-repeat;
			height:					23px;
			width:					23px;
			cursor:					pointer;
		}
	
	.popUpWindow div.content {
		padding:				5px 10px;
		position:				relative;
		margin:					0;
		padding:				8px;
		overflow:				auto;
	}
		.popUpWindow div.content span.resizeIcon {
			position:				absolute;
			right:					1px;
			bottom:					1px;
			height:					16px;
			width:					16px;
			background:				transparent url(../images/iconResize.png) no-repeat;
			cursor:					se-resize;
		}

Screenshots
-----------

![Screenshot](http://www.jpl-consulting.com/projects/MooTools/PopUpWindow/ScreenShots/PopUpWindow1.jpg)
![Screenshot](http://www.jpl-consulting.com/projects/MooTools/PopUpWindow/ScreenShots/PopUpWindow2.jpg)
![Screenshot](http://www.jpl-consulting.com/projects/MooTools/PopUpWindow/ScreenShots/PopUpWindow3.jpg)