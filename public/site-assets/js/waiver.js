	/*
THIS CODE IS THE SOLE AND EXCLUSIVE PROPERTY OF SW DEVELOPMENT, LLC, ALL RIGHTS TO WHICH ARE SPECIFICALLY RESERVED, AND IS PROTECTED TO THE FULLEST EXTENT PURSUANT TO THE U.S. COPYRIGHT ACT OF 1976.  ANY UNAUTHORIZED USE IS STRICTLY PROHIBITED AND MAY SUBJECT YOU TO LIABILITY FOR DAMAGES, INJUNCTIVE RELIEF, ATTORNEY'S FEES AND COSTS. YOUR USE OF THIS CODE, OR ANY PART THEREOF, IS SOLELY PURSUANT TO A NONEXCLUSIVE LICENSE GRANTED TO YOU BY SW DEVELOPMENT, LLC, WHICH NONEXCLUSIVE LICENSE MAY BE TERMINATED BY SW DEVELOPMENT, LLC FOR ANY REASON IN ITS SOLE DISCRETION.  BY USING THIS CODE OR ANY PART THEREOF, YOU ADDITIONALLY AGREE TO THE SMARTWAIVER TERMS OF SERVICE, WHICH IS FOUND AT http://www.smartwaiver.com/about/tos/
HAVE A NICE DAY!



-----------------------------------------------



	*/

(function() {
  // Variables for customization.
  var
      iframe_url = 'https://www.smartwaiver.com/w/59dd6a437080e/web/',
      css_url = './site-assets/css/waiver.css',
      floater_position = 'right',
      floater_text = "Try a Free Class!",
      prevent_scrolling = true;

  var link_el = document.createElement('link');
  link_el.rel = 'stylesheet';
  link_el.type = 'text/css';
  link_el.href = css_url;
  document.getElementsByTagName('head')[0].appendChild(link_el);

  var container = document.createElement('div'),
  container_bg = document.createElement('div'),
  floater = document.createElement('div'),
  floater_arrow,
  floater_is_open = false,
  html = document.documentElement,
  page_scroll = null;

  container.id = 'smartwaiver_container';
  container_bg.id = 'smartwaiver_container_bg';

  var close_floater = function() {
    // Remove the <html>'s class preventing scrolling and scroll back to where
    // we were.
    if (html.className.indexOf(' smartwaiver_noscroll') != -1) {
      html.className = html.className.replace(' smartwaiver_noscroll', '');
    }
    // Restore scrolling position.
    window.scrollTo(page_scroll[0], page_scroll[1]);
    // Move the floater donw.
    floater.className = floater.className.replace('open', 'closed');
    // Change the floater's arrow to point up.
    floater_arrow.innerHTML = '+';
    // Clean up containers.
    document.body.removeChild(container);
    document.body.removeChild(container_bg);
    container.innerHTML = '';
  };

  // Load the iframe and move the floater to the top. Called when the bottom
  // floater is clicked on.
  var open_floater = function() {
    // Save current scrolling position (to be restored once the iframe is closed).
    page_scroll = [window.pageXOffset || html.scrollLeft, window.pageYOffset || html.scrollTop];
    // Add a class to <html> to try to prevent the user from scrolling the
    // background page (only if there is a scrollbar present).
    if (prevent_scrolling && (html.offsetHeight > html.clientHeight ||
        html.scrollHeight > html.offsetHeight ||
        document.body.scrollHeight > document.body.offsetHeight)) {
      // Get current scrolling position (use scrollLeft and scrollTop for <=IE8).
      html.className += ' smartwaiver_noscroll';
      html.style.left = -page_scroll[0] + 'px';
      html.style.top = -page_scroll[1] + 'px';
    }

    // Deal with the iframe.
    // Iframe for the |iframe_url| page.
    var iframe = document.createElement('iframe');
    
    // Create an iframe_onload function to be called when loading is complete.
    var iframe_onload = function() {
      // Fix iframe height if it isn't taking the full height of the
      // container (IE7 only).
      if (window.navigator.userAgent.indexOf(' MSIE 7.') != -1 && window.attachEvent) {
        var resize_iframe = function() {
          iframe.style.height = container.clientHeight + 'px';
        };
        window.attachEvent('onresize', resize_iframe);
        resize_iframe();
      }
      // Make the iframe visibile.
      iframe.style.display = '';
    };
 
    // IE7-8 don't react when the event is assigned to iframe.onload, so use
    // attachEvent.
    if (iframe.attachEvent) {
      iframe.attachEvent('onload', iframe_onload);
    }
    else {
      iframe.onload = iframe_onload;
    }
    // Hide the iframe while it is loading.
    iframe.style.display = ''; //used to be hide but causing problems with height calcs
    
    iframe.src = iframe_url; 
    iframe.id = 'smartwaiver_iframe';

var isRGP=false;    var poweredby = document.createElement('div');
    poweredby.id = 'smartwaiver_poweredby';
    if (isRGP) {
        poweredby.innerHTML = 'Powered By <a href="https://www.smartwaiver.com/" target="_blank" id="smartwaiver_poweredby_link">Smartwaiver</a> and <a href="https://www.rockgympro.com/" target="_blank" id="smartwaiver_poweredby_link">Rock Gym Pro</a>';
    } else {
        poweredby.innerHTML = 'Powered By <a href="https://www.smartwaiver.com/" target="_blank" id="smartwaiver_poweredby_link">Smartwaiver</a>';
    }

    // Add the iframe to the container, so it starts loading.
    container.appendChild(iframe);
    container.appendChild(poweredby);

    // Floater's arrow points down.
    floater_arrow.innerHTML = '-';
 
    // Create a dummy floater for animation.
    var dummy_floater = floater.cloneNode(true),
        // The floater's height.
        floater_height = floater.offsetHeight;
     
    // Pixels from the top of the window to floater's intial position. We
    // will decrement this variable during animation.
    var px_from_top = floater.offsetTop;
    
    // Prepare our dummy floater for moving.
    dummy_floater.style.top = px_from_top + 'px';
    dummy_floater.style.bottom = 'auto';
    
    // Hide the real floater and move it up by changing its CSS class.
    floater.style.visibility = 'hidden';
    floater.className = floater.className.replace('closed', 'open');
    
    // Pixels from the top of the window to floater's target position.
    var floater_target = parseInt((window.getComputedStyle ? window.getComputedStyle(floater) : floater.currentStyle).top, 10);
    
    // Add the floater dummy to the page.
    document.body.appendChild(dummy_floater);

    // Prepare our container and the pages' background for moving.
    container.style.top = (px_from_top + floater_height) + 'px';
    container_bg.style.top = container.style.top;
    
    document.body.appendChild(container_bg);
    document.body.appendChild(container);  

    // Do |steps| iterations (animate() calls).
    var steps = 8,
        // One step will move by |step_px| pixels.
        step_px = (px_from_top - floater_target) / steps,
        // Call the animation function every |tick| miliseconds.
        tick = 6;
    // The animation function moves the dummy floater, container and the
    // semi-transparent page's background from bottom to top, until it reaches
    // floater_target.
    var animate = function() {
      if (px_from_top - step_px > floater_target) {
        px_from_top -= step_px;
        dummy_floater.style.top = px_from_top + 'px';
        container.style.top = (px_from_top + floater_height) + 'px';
        container_bg.style.top = (px_from_top + floater_height) + 'px';
        window.setTimeout(animate, tick);
      }
      // Animation complete, set some final states.
      else {
        // Finish moving the container and the page's background.
        container.style.top = (floater_target + floater_height) + 'px';
        container_bg.style.top = '0px';
        // Make the real floater visible.
        floater.style.visibility = 'visible';
        // Remove animation dummies.
        document.body.removeChild(dummy_floater);
      }
    };
    animate();
  };

  // Create the bottom floater. Called when the page is fully loaded.
  var add_floater = function() {
    floater.id = "smartwaiver_floater";
    floater.className = 'smartwaiver_floater_' + floater_position + 
      ' smartwaiver_floater_closed';
    floater.innerHTML = floater_text + '<span class="smartwaiver_floater_arrow"><span>+</span></span>';
    // The arrow entity will have to be replaced when the floater is clicked on.
    floater_arrow = floater.childNodes[1].firstChild;
    document.body.appendChild(floater);
    // Open the iframe URL in a separate window on mobile devices.
    if (/iphone|ipod|ipad|android|blackberry|mini|windows\sce|palm/i.test(window.navigator.userAgent)) {
      floater.onclick = function() {
        window.open(iframe_url);
      };
      document.getElementById("free-class").onclick = function() {
        window.open(iframe_url);
      };      
    }
    // On other devices, open the iframe in an iframe container on the same page.
    else {
      floater.onclick = function() {
        if (floater_is_open) {
          close_floater();
        }
        else {
          open_floater();
        }
        floater_is_open = !floater_is_open;
      };

      document.getElementById("free-class").onclick = function() {
        if (floater_is_open) {
          close_floater();
        }
        else {
          open_floater();
        }
        floater_is_open = !floater_is_open;
      };      
    }
    
    // If the floater has to be centered, we resort to Javascript and
    // recalculate the floater's position on each resize (there is no clean way
    // to do this with CSS).
    if (floater_position == 'center') {
        var center_floater = function() {
        floater.style.left = (document.body.offsetWidth / 2 - floater.offsetWidth / 2) + 'px';
      };
      if (document.addEventListener) {
        window.addEventListener('resize', center_floater, false);
      }
      else {
        window.attachEvent('onresize', center_floater);
      }
      center_floater();
    }
  };

  // If the page is already fully loaded, call add_floater() (this is needed
  // when adding this script dynamically or calling from a bookmarklet).
  if (document.readyState === "complete") {
    add_floater();
  }
  // Call add_floater() when the page is fully loaded.
  else if (document.addEventListener) {
    window.addEventListener('load', add_floater, false);
  }
  // Call add_floater() when the page is fully loaded (<IE9).
  else {
    window.attachEvent('onload', add_floater);
  }
})();
