/* 

THEME JS

DO NOT UPDATE THIS FILE. It is for reference only. All JS updates should be made in the WP Dashboard (which automatically minifies and forces a JS update).

*/



// VARIABLES



// FUNCTIONS

// Theme

function tspSetHeadingTopMargin() {
	var headingTopMargin = (jQuery(window).height() * 0.75) - jQuery('section.section1.fullScreen .container').height();
  	if (headingTopMargin > jQuery('header').height()) {
  		jQuery('section.section1.fullScreen .container').css("margin-top", headingTopMargin + "px");
  	} else {
  		jQuery('section.section1.fullScreen .container').css("margin-top", jQuery('header').height() + "px");
  	}
}



// DOCUMENT READY

jQuery(document).ready(function($){

    // Theme
    
    /*
    // ACF JS API - see https://www.advancedcustomfields.com/resources/javascript-api/#acf.condition-choices
            
    if ( typeof acf !== 'undefined' ) {
    	console.log( 'ACF is defined', acf );
    */
    
    // Confirm JS loaded
    $('#js-loaded').text("true"); // This will prevent "No JS" file from being loaded in footer.php (which is a fallback in case JS doesn't execute)
    
    
    // Animations
    let heading1 = document.querySelector('.kokako h1');
    let heading2s = document.querySelectorAll('.kokako h2');
    let textAndImageImages = document.querySelectorAll('.kokako.textAndImage .image');
    let columns = document.querySelectorAll('.kokako.columns .col');
    let rows = document.querySelectorAll('.kokako.rows .col');
    let posts = document.querySelectorAll('.kokako.posts .col.blog-grid');
    
    /* heading2s.forEach(
    	(item) => ( item.style.animationDelay = (Math.random() * 0.5) + 's' )
    ); */
    
    function inViewPort(el) {
    	if ( el ) {
    		let rect = el.getBoundingClientRect();
    		if ( rect ) {
    			return (
    				(rect.top <= 0 && rect.bottom >= 0) ||
    				(rect.bottom >= window.innerHeight && rect.top <= window.innerHeight) ||
    				(rect.top >= 0 && rect.bottom <= window.innerHeight)
    			);
    		} else {
    			return false;
    		}
    	} else {
    		return false;
    	}
    }
    
    function animateOnScroll() {
    
    	// let windowScroll = jQuery(window).scrollTop(); // Maybe should be .pageYOffset() these days? See chapter "Parallax scrolling with JS"
    	// let windowHeight = jQuery(window).height();
    	// let windowViewable = windowScroll + windowHeight;
    	let animationDelayInitial = 0.2;
    	let animationDelayIncrease = 0.2;
    	let parentSection = "";
    	let previousParentSection = "";
    
    	// Heading 1
    	if ( inViewPort(heading1) ) {
    		heading1.classList.add('appear');
    	}
    
    	// Heading 2s
    	if ( 0 == jQuery('.woocommerce').length ) { // Don't fade in h2's on Woocommerce pages
    		let animationDelay = animationDelayInitial; // Will add animationDelayInitial (in seconds) in case h1 and first h2 are in view together
    		heading2s.forEach(function(heading2) {
    			if ( inViewPort(heading2) ) {
    				if ( performance.now() < 4000) { // If page has recently loaded, add a variation, so that headings in view don't display all at the same time
    					heading2.style.animationDelay = animationDelay + 's'; // Animation delay doesn't need to be removed, as this code is only executing when a heading is in view within 4 seconds of the page loading, and the animation is never being re-triggered
    					animationDelay += animationDelayIncrease;
    				}			
    				if ( !heading2. classList.contains('hide') ) {
    					heading2.classList.add('appear');
    				}
    			}
    		});
    	}
    
    	// Text And Image - images
    	animationDelay = animationDelayInitial; // Will add 300ms in case h1 and first h2 are in view together, to match headings
    	textAndImageImages.forEach(function(taiImage) {
    		if ( inViewPort(taiImage) ) {
    			if ( performance.now() < 4000) { // If page has recently loaded, add a variation, so that headings in view don't display all at the same time
    				taiImage.style.animationDelay = animationDelay + 's'; // Animation delay doesn't need to be removed, as this code is only executing when a heading is in view with 4 seconds of the page loading, and the animation is never being re-triggered
    				animationDelay += animationDelayIncrease;
    			}			
    			taiImage.classList.add('appear');
    		}
    	});
    
    	// Columns columns
    	animationDelay = animationDelayInitial;
    	parentSection = "";
    	previousParentSection = "";
    	columns.forEach(function(columnsCol) {
    		if ( inViewPort(columnsCol) ) {
    			if ( jQuery(window).outerWidth() > 767 ) {
    				parentSection = jQuery(columnsCol).parent().parent().parent("section").attr("class");
    				if ( ( "" == previousParentSection) || ( parentSection == previousParentSection ) ) {
    					columnsCol.style.animationDelay = animationDelay + 's'; // Animation delay doesn't need to be removed, as this code is only executing when a heading is in view with 4 seconds of the page loading, and the animation is never being re-triggered
    					animationDelay += animationDelayIncrease;
    				} else {
    					animationDelay = animationDelayInitial;
    					columnsCol.style.animationDelay = animationDelay + 's'; // Animation delay doesn't need to be removed, as this code is only executing when a heading is in view with 4 seconds of the page loading, and the animation is never being re-triggered
    					animationDelay += animationDelayIncrease;
    				}
    				previousParentSection = parentSection;
    			}
    			columnsCol.classList.add('appear');
    		}
    	});
    
    	// Rows rows
    	animationDelay = animationDelayInitial;
    	rows.forEach(function(rowsRow) {
    		if ( inViewPort(rowsRow) ) {
    			if ( jQuery(window).outerWidth() > 767 ) {
    				rowsRow.style.animationDelay = animationDelay + 's'; // Animation delay doesn't need to be removed, as this code is only executing when a heading is in view with 4 seconds of the page loading, and the animation is never being re-triggered
    				animationDelay += animationDelayIncrease;
    			}
    			rowsRow.classList.add('appear');
    		}
    	});
    
    	// Posts columns
    	animationDelay = animationDelayInitial;
    	posts.forEach(function(postsPost) {
    		if ( inViewPort(postsPost) ) {
    			if ( jQuery(window).outerWidth() > 767 ) {
    				postsPost.style.animationDelay = animationDelay + 's'; // Animation delay doesn't need to be removed, as this code is only executing when a heading is in view with 4 seconds of the page loading, and the animation is never being re-triggered
    				animationDelay += animationDelayIncrease;
    			}
    			postsPost.classList.add('appear');
    		}
    	});
    
    	window.requestAnimationFrame(animateOnScroll);
    }
    window.requestAnimationFrame(animateOnScroll);
    
    
    // Custom Animations
    /* let scrollMagicController = new ScrollMagic.Controller();
    
    if ( jQuery('.kokako.textWithCircularPhoto').length ) {
    
    	let textWithCircularPhotoMotifTween = TweenMax.from('.kokako.textWithCircularPhoto .background-motif', {
    		x: 25, // 25
    		y: 25, // 50
    		ease: Sine.easeInOut, // See https://greensock.com/docs/v2/Easing
    	});
    	let textWithCircularPhotoImageTween = TweenMax.from('.kokako.textWithCircularPhoto .image', {
    		x: -25, // -50
    		y: -25,
    		ease: Sine.easeInOut,
    	});
    
    	new ScrollMagic.Scene({
    		triggerElement: '.kokako.textWithCircularPhoto',
    		duration: ( jQuery(window).height() * 1.5),
    		triggerHook: 0.5,
    		offset: ( jQuery(window).height() / -2 ),
    	})
    		.setTween(textWithCircularPhotoMotifTween)
    		.addTo(scrollMagicController);
    		// .addIndicators(); // For debugging, see https://scrollmagic.io/docs/debug.addIndicators.html#Scene.addIndicators
    
    	new ScrollMagic.Scene({
    		triggerElement: '.kokako.textWithCircularPhoto',
    		duration: ( jQuery(window).height() * 1.5),
    		triggerHook: 0.5,
    		offset: ( jQuery(window).height() / -2 ),
    	})
    		.setTween(textWithCircularPhotoImageTween)
    		.addTo(scrollMagicController);
    		// .addIndicators(); // For debugging, see https://scrollmagic.io/docs/debug.addIndicators.html#Scene.addIndicators
    }
    
    if ( jQuery('.kokako.contact-footer').length ) {
    
    	let contactFooterMotifTween = TweenMax.from('.kokako.contact-footer .foreground-motif', {
    		x: -25,
    		y: 50,
    		ease: Sine.easeInOut,
    	});
    
    	let contactFooterImageTween = TweenMax.from('.kokako.contact-footer img', {
    		x: 0,
    		y: -50,
    		ease: Sine.easeInOut,
    	});
    
    	new ScrollMagic.Scene({
    		triggerElement: '.kokako.contact-footer',
    		duration: ( jQuery(window).height() * 1.5),
    		triggerHook: 0.5,
    		offset: ( jQuery(window).height() / -2 ),	
    	})
    		.setTween(contactFooterMotifTween)
    		.addTo(scrollMagicController);
    
    	new ScrollMagic.Scene({
    		triggerElement: '.kokako.contact-footer',
    		duration: ( jQuery(window).height() * 1.5),
    		triggerHook: 0.5,
    		offset: ( jQuery(window).height() / -2 ),
    	})
    		.setTween(contactFooterImageTween)
    		.addTo(scrollMagicController);
    } */
    
    
    /*
    // Adjust fixed Header size on scroll
    if (($(document).scrollTop() > 50) && ($(window).outerWidth() > 575)) {
    	jQuery('header').addClass("scrolled");			
    	// jQuery('section.section1').addClass("scrolled"); // No longer required
    } else {
    	jQuery('header').removeClass("scrolled");			
    	// jQuery('section.section1').removeClass("scrolled"); // No longer required
    }
    $(window).scroll(function(){
    	if (($(document).scrollTop() > 50) && ($(window).outerWidth() > 575)) {
    		jQuery('header').addClass("scrolled");			
    		// jQuery('section.section1').addClass("scrolled"); // No longer required
    	} else {
    		jQuery('header').removeClass("scrolled");			
    		// jQuery('section.section1').removeClass("scrolled"); // No longer required
    	}
    });
    $(window).on("resize", function() {
    	if (($(document).scrollTop() > 50) && ($(window).outerWidth() > 575)) {
    		jQuery('header').addClass("scrolled");			
    		// jQuery('section.section1').addClass("scrolled"); // No longer required
    	} else {
    		jQuery('header').removeClass("scrolled");			
    		// jQuery('section.section1').removeClass("scrolled"); // No longer required
    	}
    });
    */

});



// WINDOW LOAD

jQuery(window).on('load', function(){

    // Theme
    
    /* // Set top margin of heading in top Section
    if (jQuery('section.section1.fullScreen').length) {
    	tspSetHeadingTopMargin();
    	jQuery(window).resize(function(){
    		tspSetHeadingTopMargin();
    	});
    	jQuery('section.section1.fullScreen').stellar();
    } */
    
    // Accordion functionality
    jQuery('.accordion-toggle').click(function(){
    	jQuery(this).find('i.icon-plus').toggleClass('open');	
    	jQuery(this).next('div.accordion-content').slideToggle(400);	
    });
    
    /*
    // CODE REMOVED AT THIS STAGE AS NEEDS TO BE UPDATED TO INCLUDE ON SCROLL EVENT THAT CAN ALSO REMOVE THE BOTTOM-ALIGN CLASS
    // Position footer to bottom of window on shorter pages
    if ((jQuery(window).height() == jQuery(document).height()) || ((jQuery(window).height() > jQuery(document).height() - 50) && (jQuery('#wpadminbar').is(':visible')))) { // See https://stackoverflow.com/questions/14035819/window-height-vs-document-height - doc height is set to window height when it is less than he window height
    	jQuery('footer').addClass('bottom-align');
    }
    */

});