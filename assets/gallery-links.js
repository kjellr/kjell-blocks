
/*
 * Wrap gallery images in the links from their captions.
 * Based on https://github.com/WordPress/gutenberg/issues/10057#issuecomment-697637513
 */
jQuery('.blocks-gallery-item').each(function () {
	if (jQuery(this).find('figure figcaption').length) {
		let link = jQuery(this).find('figure figcaption a').attr("href");
		if( typeof link != 'undefined' ) {
			jQuery(this).find('img').wrap('<a href="' + link + '"></a>');
		}
	}
});