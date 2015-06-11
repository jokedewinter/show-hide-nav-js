# show-hide-nav-js
Show / Hide a menu using only pure JavaScript, no jQuery. Because sometimes there is no need to load the whole of jQuery just for a menu like that.

I can't claim all the credit for this, found help here: [jsFiddle](http://jsfiddle.net/fyUJc/31/).

###Update June 11, 2015
Added a fix for the show menu button. It needed clicking twice for the magic to kick in. 
If the viewport is below 600px, the menu is set to display: none.

If the viewport is resized from wide to narrow, the menu might disappear.
I have added an event listener to fix this.