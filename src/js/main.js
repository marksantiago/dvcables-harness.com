/*!
 * DV Cables & Harness site main JS v1.0.0
 * Copyright (c) 2018 Mark Santiago
 * Licensed under MIT (https://github.com/marksantiago/dvcables-harness.com/blob/master/LICENSE)
 */

// Back to top link.

function backToTop() {
  'use strict';

	window.scrollTo(0,0);
	return false; //prevent page from reloading
}


// Allow phone URL to work only on Android or iPhone. 
// http://www.itbrigadeinc.com/post/2013/07/16/How-to-add-phone-links-on-your-jQuery-Mobile-webpages.aspx

(function () {
  'use strict';

  if ( !navigator.userAgent.match(/(iPhone|Android)/) ) {
	  $( 'a.phone-url' ).click(function(e){
      alert ( "Phone link is prevented from working since this is not a smartphone." );
	    e.preventDefault();
	  });
	}

})();
