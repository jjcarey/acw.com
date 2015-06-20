(function ($, Drupal) {

  Drupal.behaviors.STARTER = {
    attach: function(context, settings) {

    	   ////////////////////////////////////////
    	  // Removed .displaycount from bottom  //
    	 //  Prepended it to the block circles //
    	////////////////////////////////////////
    	if (jQuery( "body" ).hasClass( "logged-in" )) {
    		jQuery('.displayCount').css("display", "none");

    	} else {
    		var $photo = jQuery('.block-views-rsvp-block .views-row-2');
	    	var $user = jQuery('.block-views-rsvp-block .views-row-3');
	    	var $message = jQuery('.block-views-rsvp-block .views-row-4');

	    	var $photoNum = jQuery('.displayCount .photoUpNum');
	    	var $userNum = jQuery('.displayCount .userNum');
	    	var $messageNum = jQuery('.displayCount .messageNum h1');

	    	$photo.prepend($photoNum);
	    	$user.prepend($userNum);
	    	$message.prepend($messageNum);

	    	// Remove container
	    	jQuery('.displayCount').remove('.messageNum');
    	}
		  /////////
		 // END //
		/////////

		if (jQuery('section.block-views').hasClass('block-views-locations-block-1')) {
    		jQuery('.block-views-locations-block #locations').removeAttr('id');
    		jQuery('.block-views-locations-block').css("display", "none");
    	}

    	jQuery('#edit-mail').removeAttr('size');

		  ///////////////////////////////////////
		 // Logo Link for front and not-front //
		///////////////////////////////////////
		var $logo = jQuery('.front .nameLogo');
		var $home = jQuery('.not-front .nameLogo');

		$logo.click(function() {
			var $target = jQuery('.page');

			jQuery('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 900, 'swing', function () {
				window.location.hash = 'home';
			});
		});

		$home.click(function() {
			document.location.href = "/";
		});

		  /////////
		 // END //
		/////////

		   ////////////////////////////////////
		  // Added Data Equalizer to select //
		 //  items for consistent height   //
		////////////////////////////////////

		// The Couple
		jQuery( '.view-couple' ).attr( 'data-equalizer', '' ); 						// ROW
		jQuery( '.view-couple .views-row' ).attr( 'data-equalizer-watch', '' ); 	// COLUMNS

		// RSVP
		jQuery( '.view-rsvp.view-display-id-block_1' ).attr( 'data-equalizer', '' ); 						// ROW
		jQuery( '.view-rsvp.view-display-id-block_1 .views-row-2' ).attr( 'data-equalizer-watch', '' ); 	// COLUMNS
		jQuery( '.view-rsvp.view-display-id-block_1 .views-row-3' ).attr( 'data-equalizer-watch', '' ); 	// COLUMNS
		jQuery( '.view-rsvp.view-display-id-block_1 .views-row-4' ).attr( 'data-equalizer-watch', '' ); 	// COLUMNS

		// Locations
		jQuery( '.view-locations' ).attr( 'data-equalizer', '' ); 						// ROW
		jQuery( '.view-locations .views-row' ).attr( 'data-equalizer-watch', '' ); 	// COLUMNS

		// Reinitialize Equalizer
		jQuery(document).foundation('equalizer', 'reflow');
		  /////////
		 // END //
		/////////

		   ////////////////////////////////////////
		  //   Change the text on RSVP page     //
		 //  and btn for better User feedback  //
		////////////////////////////////////////

		if (jQuery( "body" ).hasClass( "page-user-register" )) {
			jQuery( 'body.page-user-register h1#page-title' ).text("Reply if you Please");
			jQuery( 'body.page-user-register button#edit-submit' ).text("RSVP");
		}

		  /////////
		 // END //
		/////////



    }
  };

})(jQuery, Drupal);

