<?php
global $photonic_flickr_options;

$photonic_flickr_options = array(
	array("name" => "Flickr settings",
		"desc" => "Control settings for Flickr",
		"category" => "flickr-settings",
		"type" => "section",),

	array("name" => "Flickr API Key",
		"desc" => "To make use of the Flickr functionality you have to use your Flickr API Key.
					You can <a href='http://www.flickr.com/services/api/misc.api_keys.html'>obtain a key online</a> if you don't have one.
					Note that you are responsible for following all of the Flickr API's <a href='http://www.flickr.com/services/api/tos/'>Terms of Service</a>",
		"id" => "flickr_api_key",
		"grouping" => "flickr-settings",
		"type" => "text",
		"std" => ""),

	array("name" => "Flickr API Secret",
		"desc" => "To make use of authenticated Flickr functionality you have to use your Flickr API secret.
					You can <a href='http://www.flickr.com/services/api/misc.api_keys.html'>obtain a key online</a> if you don't have one.
					Note that you are responsible for following all of the Flickr API's <a href='http://www.flickr.com/services/api/tos/'>Terms of Service</a>",
		"id" => "flickr_api_secret",
		"grouping" => "flickr-settings",
		"type" => "text",
		"std" => ""),

	array("name" => "Private Photos",
		"desc" => "Let visitors of your site login to Flickr to see private photos for which they have permissions (will show a login button if they are not logged in)",
		"id" => "flickr_allow_oauth",
		"grouping" => "flickr-settings",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Login Box Text",
		"desc" => "If private photos are enabled, this is the text users will see before the login button (you can use HTML tags here)",
		"id" => "flickr_login_box",
		"grouping" => "flickr-settings",
		"type" => "textarea",
		"std" => "Some photos that you are trying to see may be visible to logged in users of Flickr only. Please login if you want to see them."),

	array("name" => "Login Button Text",
		"desc" => "If private photos are enabled, this is the text users will see before the login button (you can use HTML tags other than &lt;a&gt; here)",
		"id" => "flickr_login_button",
		"grouping" => "flickr-settings",
		"type" => "text",
		"std" => "Login"),

	array("name" => "Thumbnail size",
		"desc" => "Flickr lets you display a thumbnail in the following sizes:",
		"id" => "flickr_thumb_size",
		"grouping" => "flickr-settings",
		"type" => "select",
		"options" => array("s" => "Small square, 75x75px", "t" => "Thumbnail, 100px on longest side", "m" => "Small, 240px on longest side"),
		"std" => "s"),

	array("name" => "Expanded size",
		"desc" => "When you click on a thumbnail this size will be displayed if you are using a slideshow. If you are not using a slideshow you will be taken to the Flickr page:",
		"id" => "flickr_main_size",
		"grouping" => "flickr-settings",
		"type" => "select",
		"options" => array(
			"none" => "Medium, 500px on the longest side",
			"z" => "Medium, 640px on longest side",
			"b" => "Large, 1024px on longest side (not always available)",
		),
		"std" => "z"),

	array("name" => "Flickr Collection Thumbnails",
		"desc" => "Control settings for Flickr collection thumbnails",
		"category" => "flickr-collections",
		"type" => "section",),

	array("name" => "What is this section?",
		"desc" => "Options in this section are in effect when you use the shortcode format <code>[gallery type='flickr' user_id='abc' view='collections']</code> or <code>[gallery type='flickr' user_id='abc' collection_id='xyz']</code>. They are used to control the collection's thumbnail display.",
		"grouping" => "flickr-collections",
		"type" => "blurb",),

	array("name" => "Hide Empty Collection Details",
		"desc" => "This will hide the collection header if your collection has no sets. Nested collections will be displayed, however.",
		"id" => "flickr_hide_empty_collection_details",
		"grouping" => "flickr-collections",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Hide Collection Thumbnail",
		"desc" => "This will hide the thumbnail that is auto-generated by Flickr for your collection.",
		"id" => "flickr_hide_collection_thumbnail",
		"grouping" => "flickr-collections",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Hide Collection Title",
		"desc" => "This will hide the title for your Flickr collection.",
		"id" => "flickr_hide_collection_title",
		"grouping" => "flickr-collections",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Hide Number of Sets",
		"desc" => "This will hide the number of Photosets in your Flickr collection.",
		"id" => "flickr_hide_collection_set_count",
		"grouping" => "flickr-collections",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Collection Thumbnail Border",
		"desc" => "Setup the border of collection thumbnail.",
		"id" => "flickr_coll_thumb_border",
		"grouping" => "flickr-collections",
		"type" => "border",
		"options" => array(),
		"std" => array(
			'top' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'right' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'bottom' => array('colortype' => 'custom', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 1, 'border-width-type' => 'px'),
			'left' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
		),
	),

	array("name" => "Collection Thumbnail - Padding between border and image",
		"desc" => "Setup the padding between the collection thumbnail and its border.",
		"id" => "flickr_coll_thumb_padding",
		"grouping" => "flickr-collections",
		"type" => "padding",
		"options" => array(),
		"std" => array(
			'top' => array('padding' => 0, 'padding-type' => 'px'),
			'right' => array('padding' => 0, 'padding-type' => 'px'),
			'bottom' => array('padding' => 0, 'padding-type' => 'px'),
			'left' => array('padding' => 0, 'padding-type' => 'px'),
		),
	),

	array("name" => "Flickr Photoset Thumbnails (with other Photosets)",
		"desc" => "Control settings for Flickr Photoset thumbnails",
		"category" => "flickr-sets",
		"type" => "section",),

	array("name" => "What is this section?",
		"desc" => "Options in this section are in effect when you use the shortcode format <code>[gallery type='flickr' user_id='abc' view='photosets']</code> or <code>[gallery type='flickr' user_id='abc' collection_id='xyz']</code> or <code>[gallery type='flickr' user_id='abc' view='collections']</code>. They are used to control the Photoset's thumbnail display",
		"grouping" => "flickr-sets",
		"type" => "blurb",),

	array("name" => "Photoset Title Display",
		"desc" => "How do you want the title of the Photoset?",
		"id" => "flickr_collection_set_title_display",
		"grouping" => "flickr-sets",
		"type" => "select",
		"options" => array(
			"regular" => "Normal title display using the HTML \"title\" attribute",
			"below" => "Below the thumbnail",
			"tooltip" => "Using the <a href='http://bassistance.de/jquery-plugins/jquery-plugin-tooltip/'>JQuery Tooltip</a> plugin",
		),
		"std" => "tooltip"),

	array("name" => "Hide Photo Count in Title Display",
		"desc" => "This will hide the number of photos in your Photoset's title.",
		"id" => "flickr_hide_collection_set_photos_count_display",
		"grouping" => "flickr-sets",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Constrain Photosets Per Row",
		"desc" => "How do you want the control the number of photoset thumbnails per row? This can be overridden by adding the '<code>columns</code>' parameter to the '<code>gallery</code>' shortcode.",
		"id" => "flickr_collection_set_per_row_constraint",
		"grouping" => "flickr-sets",
		"type" => "select",
		"options" => array("padding" => "Fix the padding around the thumbnails",
			"count" => "Fix the number of thumbnails per row",
		),
		"std" => "padding"),

	array("name" => "Constrain by padding",
		"desc" => " If you have constrained by padding above, enter the number of pixels here to pad the thumbs by",
		"id" => "flickr_collection_set_constrain_by_padding",
		"grouping" => "flickr-sets",
		"type" => "text",
		"hint" => "Enter the number of pixels here (don't enter 'px'). Non-integers will be ignored.",
		"std" => "15"),

	array("name" => "Constrain by number of thumbnails",
		"desc" => " If you have constrained by number of thumbnails per row above, enter the number of thumbnails",
		"id" => "flickr_collection_set_constrain_by_count",
		"grouping" => "flickr-sets",
		"type" => "slider",
		"options" => array("range" => "min", "min" => 1, "max" => 25, "step" => 1, "size" => "400px", "unit" => ""),
		"std" => 5),

	array("name" => "Photoset Thumbnail Border",
		"desc" => "Setup the border of Photoset thumbnail when the Photoset is a part of a larger group of photosets (not listed under collections). This is valid for the short-code usage <code>[gallery type='flickr' user_id='abc' view='photosets']</code>",
		"id" => "flickr_sets_set_thumb_border",
		"grouping" => "flickr-sets",
		"type" => "border",
		"options" => array(),
		"std" => array(
			'top' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'right' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'bottom' => array('colortype' => 'custom', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 1, 'border-width-type' => 'px'),
			'left' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
		),
	),

	array("name" => "Photoset Thumbnail - Padding between border and image",
		"desc" => "Setup the padding between the photoset thumbnail and its border.",
		"id" => "flickr_sets_set_thumb_padding",
		"grouping" => "flickr-sets",
		"type" => "padding",
		"options" => array(),
		"std" => array(
			'top' => array('padding' => 0, 'padding-type' => 'px'),
			'right' => array('padding' => 0, 'padding-type' => 'px'),
			'bottom' => array('padding' => 0, 'padding-type' => 'px'),
			'left' => array('padding' => 0, 'padding-type' => 'px'),
		),
	),

	array("name" => "Flickr Photoset Thumbnails - \"In-page\" view for standalone Photosets",
		"desc" => "Control settings for Flickr Photosets when displayed in your page",
		"category" => "flickr-set",
		"type" => "section",),

	array("name" => "What is this section?",
		"desc" => "Options in this section are in effect when you use the shortcode format <code>[gallery type='flickr' user_id='abc' photoset_id='xyz']</code>. In other words, the gallery output for the Photoset is directly on the page and you want to control your Photoset's thumbnail.",
		"grouping" => "flickr-set",
		"type" => "blurb",),

	array("name" => "Hide Photoset Thumbnail",
		"desc" => "This will hide the thumbnail for your Flickr Photoset.",
		"id" => "flickr_hide_set_thumbnail",
		"grouping" => "flickr-set",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Hide Photoset Title",
		"desc" => "This will hide the title for your Flickr Photoset.",
		"id" => "flickr_hide_set_title",
		"grouping" => "flickr-set",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Hide Number of Photos",
		"desc" => "This will hide the number of photos in your Flickr Photoset.",
		"id" => "flickr_hide_set_photo_count",
		"grouping" => "flickr-set",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Photoset Thumbnail Border",
		"desc" => "Setup the border of Photoset thumbnail when the Photoset is displayed by itself with its photos. This is valid for the short-code usage <code>[gallery type='flickr' user_id='abc' photoset_id='xyz']</code>",
		"id" => "flickr_set_alone_thumb_border",
		"grouping" => "flickr-set",
		"type" => "border",
		"options" => array(),
		"std" => array(
			'top' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'right' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'bottom' => array('colortype' => 'custom', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 1, 'border-width-type' => 'px'),
			'left' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
		),
	),

	array("name" => "Photoset Thumbnail - Padding between border and image",
		"desc" => "Setup the padding between the photoset thumbnail and its border.",
		"id" => "flickr_set_alone_thumb_padding",
		"grouping" => "flickr-set",
		"type" => "padding",
		"options" => array(),
		"std" => array(
			'top' => array('padding' => 0, 'padding-type' => 'px'),
			'right' => array('padding' => 0, 'padding-type' => 'px'),
			'bottom' => array('padding' => 0, 'padding-type' => 'px'),
			'left' => array('padding' => 0, 'padding-type' => 'px'),
		),
	),

	array("name" => "Flickr Photoset Thumbnails - \"Popup\" view",
		"desc" => "Control settings for Flickr Photosets when displayed through a popup",
		"category" => "flickr-set-pop",
		"type" => "section",),

	array("name" => "What is this section?",
		"desc" => "Options in this section are in effect when you click a Photoset thumbnail on a page to open a popup. You can control how the photoset's thumbnail is displayed in the popup.",
		"grouping" => "flickr-set-pop",
		"type" => "blurb",),

	array("name" => "Hide Photoset Thumbnail",
		"desc" => "This will hide the thumbnail for your Flickr Photoset.",
		"id" => "flickr_hide_set_pop_thumbnail",
		"grouping" => "flickr-set-pop",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Hide Photoset Title",
		"desc" => "This will hide the title for your Flickr Photoset.",
		"id" => "flickr_hide_set_pop_title",
		"grouping" => "flickr-set-pop",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Hide Number of Photos",
		"desc" => "This will hide the number of photos in your Flickr Photoset.",
		"id" => "flickr_hide_set_pop_photo_count",
		"grouping" => "flickr-set-pop",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Photoset Thumbnail Border",
		"desc" => "Thumbnail border, if the thumbnail is displayed.",
		"id" => "flickr_set_pop_thumb_border",
		"grouping" => "flickr-set-pop",
		"type" => "border",
		"options" => array(),
		"std" => array(
			'top' => array('colortype' => 'transparent', 'color' => '#333333', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'right' => array('colortype' => 'transparent', 'color' => '#333333', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'bottom' => array('colortype' => 'custom', 'color' => '#333333', 'style' => 'none', 'border-width' => 1, 'border-width-type' => 'px'),
			'left' => array('colortype' => 'transparent', 'color' => '#333333', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
		),
	),

	array("name" => "Photoset Thumbnail - Padding between border and image",
		"desc" => "Thumbnail padding, if the thumbnail is displayed.",
		"id" => "flickr_set_pop_thumb_padding",
		"grouping" => "flickr-set-pop",
		"type" => "padding",
		"options" => array(),
		"std" => array(
			'top' => array('padding' => 0, 'padding-type' => 'px'),
			'right' => array('padding' => 0, 'padding-type' => 'px'),
			'bottom' => array('padding' => 0, 'padding-type' => 'px'),
			'left' => array('padding' => 0, 'padding-type' => 'px'),
		),
	),

	array("name" => "Flickr Gallery Thumbnails (with other Galleries)",
		"desc" => "Control settings for Flickr Gallery thumbnails",
		"category" => "flickr-galleries",
		"type" => "section",),

	array("name" => "What is this section?",
		"desc" => "Options in this section are in effect when you use the shortcode format <code>[gallery type='flickr' user_id='abc' view='galleries']</code>. They are used to control the Gallery's thumbnail display",
		"grouping" => "flickr-galleries",
		"type" => "blurb",),

	array("name" => "Gallery Title Display",
		"desc" => "How do you want the title of the Gallery?",
		"id" => "flickr_gallery_title_display",
		"grouping" => "flickr-galleries",
		"type" => "select",
		"options" => array(
			"regular" => "Normal title display using the HTML \"title\" attribute",
			"below" => "Below the thumbnail",
			"tooltip" => "Using the <a href='http://bassistance.de/jquery-plugins/jquery-plugin-tooltip/'>JQuery Tooltip</a> plugin",
		),
		"std" => "tooltip"),

	array("name" => "Hide Photo Count in Title Display",
		"desc" => "This will hide the number of photos in your Gallery's title.",
		"id" => "flickr_hide_gallery_photos_count_display",
		"grouping" => "flickr-galleries",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Constrain Galleries Per Row",
		"desc" => "How do you want the control the number of gallery thumbnails per row? This can be overridden by adding the '<code>columns</code>' parameter to the '<code>gallery</code>' shortcode.",
		"id" => "flickr_galleries_per_row_constraint",
		"grouping" => "flickr-galleries",
		"type" => "select",
		"options" => array("padding" => "Fix the padding around the thumbnails",
			"count" => "Fix the number of thumbnails per row",
		),
		"std" => "padding"),

	array("name" => "Constrain by padding",
		"desc" => " If you have constrained by padding above, enter the number of pixels here to pad the thumbs by",
		"id" => "flickr_galleries_constrain_by_padding",
		"grouping" => "flickr-galleries",
		"type" => "text",
		"hint" => "Enter the number of pixels here (don't enter 'px'). Non-integers will be ignored.",
		"std" => "15"),

	array("name" => "Constrain by number of thumbnails",
		"desc" => " If you have constrained by number of thumbnails per row above, enter the number of thumbnails",
		"id" => "flickr_galleries_constrain_by_count",
		"grouping" => "flickr-galleries",
		"type" => "slider",
		"options" => array("range" => "min", "min" => 1, "max" => 25, "step" => 1, "size" => "400px", "unit" => ""),
		"std" => 5),

	array("name" => "Gallery Thumbnail Border",
		"desc" => "Setup the border of Gallery thumbnail when the Gallery is a part of a larger group of galleries. This is valid for the short-code usage <code>[gallery type='flickr' user_id='abc' view='galleries']</code>",
		"id" => "flickr_galleries_gallery_thumb_border",
		"grouping" => "flickr-galleries",
		"type" => "border",
		"options" => array(),
		"std" => array(
			'top' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'right' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'bottom' => array('colortype' => 'custom', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 1, 'border-width-type' => 'px'),
			'left' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
		),
	),

	array("name" => "Gallery Thumbnail - Padding between border and image",
		"desc" => "Setup the padding between the thumbnail and its border.",
		"id" => "flickr_galleries_gallery_thumb_padding",
		"grouping" => "flickr-galleries",
		"type" => "padding",
		"options" => array(),
		"std" => array(
			'top' => array('padding' => 0, 'padding-type' => 'px'),
			'right' => array('padding' => 0, 'padding-type' => 'px'),
			'bottom' => array('padding' => 0, 'padding-type' => 'px'),
			'left' => array('padding' => 0, 'padding-type' => 'px'),
		),
	),

	array("name" => "Flickr Gallery Thumbnails - \"In-page\" view for standalone Gallery",
		"desc" => "Control settings for Flickr Galleries when displayed in your page",
		"category" => "flickr-gallery",
		"type" => "section",),

	array("name" => "What is this section?",
		"desc" => "Options in this section are in effect when you use the shortcode format <code>[gallery type='flickr' user_id='abc' gallery_id='xyz']</code>. In other words, the output for the Flickr Gallery is directly on the page and you want to control your Gallery's thumbnail.",
		"grouping" => "flickr-gallery",
		"type" => "blurb",),

	array("name" => "Hide Gallery Thumbnail",
		"desc" => "This will hide the thumbnail for your Flickr Gallery.",
		"id" => "flickr_hide_gallery_thumbnail",
		"grouping" => "flickr-gallery",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Hide Gallery Title",
		"desc" => "This will hide the title for your Flickr Gallery.",
		"id" => "flickr_hide_gallery_title",
		"grouping" => "flickr-gallery",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Hide Number of Photos",
		"desc" => "This will hide the number of photos in your Flickr Gallery.",
		"id" => "flickr_hide_gallery_photo_count",
		"grouping" => "flickr-gallery",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Gallery Thumbnail Border",
		"desc" => "Setup the border of Gallery thumbnail when the Gallery is displayed by itself with its photos. This is valid for the short-code usage <code>[gallery type='flickr' user_id='abc' gallery_id='xyz']</code>",
		"id" => "flickr_gallery_alone_thumb_border",
		"grouping" => "flickr-gallery",
		"type" => "border",
		"options" => array(),
		"std" => array(
			'top' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'right' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'bottom' => array('colortype' => 'custom', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 1, 'border-width-type' => 'px'),
			'left' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
		),
	),

	array("name" => "Gallery Thumbnail - Padding between border and image",
		"desc" => "Setup the padding between the gallery thumbnail and its border.",
		"id" => "flickr_gallery_alone_thumb_padding",
		"grouping" => "flickr-gallery",
		"type" => "padding",
		"options" => array(),
		"std" => array(
			'top' => array('padding' => 0, 'padding-type' => 'px'),
			'right' => array('padding' => 0, 'padding-type' => 'px'),
			'bottom' => array('padding' => 0, 'padding-type' => 'px'),
			'left' => array('padding' => 0, 'padding-type' => 'px'),
		),
	),

	array("name" => "Flickr Gallery Thumbnails - \"Popup\" view",
		"desc" => "Control settings for Flickr Galleries when displayed through a popup",
		"category" => "flickr-gallery-pop",
		"type" => "section",),

	array("name" => "What is this section?",
		"desc" => "Options in this section are in effect when you click a Gallery thumbnail on a page to open a popup. You can control how the gallery's thumbnail is displayed in the popup.",
		"grouping" => "flickr-gallery-pop",
		"type" => "blurb",),

	array("name" => "Hide Gallery Thumbnail",
		"desc" => "This will hide the thumbnail for your Flickr Gallery.",
		"id" => "flickr_hide_gallery_pop_thumbnail",
		"grouping" => "flickr-gallery-pop",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Hide Gallery Title",
		"desc" => "This will hide the title for your Flickr Gallery.",
		"id" => "flickr_hide_gallery_pop_title",
		"grouping" => "flickr-gallery-pop",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Hide Number of Photos",
		"desc" => "This will hide the number of photos in your Flickr Gallery.",
		"id" => "flickr_hide_gallery_pop_photo_count",
		"grouping" => "flickr-gallery-pop",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Gallery Thumbnail Border",
		"desc" => "Thumbnail border, if the thumbnail is displayed.",
		"id" => "flickr_gallery_pop_thumb_border",
		"grouping" => "flickr-gallery-pop",
		"type" => "border",
		"options" => array(),
		"std" => array(
			'top' => array('colortype' => 'transparent', 'color' => '#333333', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'right' => array('colortype' => 'transparent', 'color' => '#333333', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'bottom' => array('colortype' => 'custom', 'color' => '#333333', 'style' => 'none', 'border-width' => 1, 'border-width-type' => 'px'),
			'left' => array('colortype' => 'transparent', 'color' => '#333333', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
		),
	),

	array("name" => "Gallery Thumbnail - Padding between border and image",
		"desc" => "Thumbnail padding, if the thumbnail is displayed.",
		"id" => "flickr_gallery_pop_thumb_padding",
		"grouping" => "flickr-gallery-pop",
		"type" => "padding",
		"options" => array(),
		"std" => array(
			'top' => array('padding' => 0, 'padding-type' => 'px'),
			'right' => array('padding' => 0, 'padding-type' => 'px'),
			'bottom' => array('padding' => 0, 'padding-type' => 'px'),
			'left' => array('padding' => 0, 'padding-type' => 'px'),
		),
	),

	array("name" => "Flickr Photos - \"In-page\" View",
		"desc" => "Control settings for Flickr Photos when displayed in your page",
		"category" => "flickr-photos",
		"type" => "section",),

	array("name" => "What is this section?",
		"desc" => "Options in this section are in effect when you use the shortcode format <code>[gallery type='flickr' user_id='abc' photoset_id='xyz']</code> or <code>[gallery type='flickr' user_id='abc' view='photos']</code>. In other words, the photos are printed directly on the page.",
		"grouping" => "flickr-photos",
		"type" => "blurb",),

	array("name" => "Photo Title Display",
		"desc" => "How do you want the title of the photos?",
		"id" => "flickr_photo_title_display",
		"grouping" => "flickr-photos",
		"type" => "select",
		"options" => array(
			"regular" => "Normal title display using the HTML \"title\" attribute",
			"below" => "Below the thumbnail",
			"tooltip" => "Using the <a href='http://bassistance.de/jquery-plugins/jquery-plugin-tooltip/'>JQuery Tooltip</a> plugin",
		),
		"std" => "tooltip"),

	array("name" => "Disable lightbox linking",
		"desc" => "Check this to disable linking the photo title in the lightbox to the original photo page.",
		"id" => "flickr_disable_title_link",
		"grouping" => "flickr-photos",
		"type" => "checkbox",
		"std" => ""),

	array("name" => "Constrain Photos Per Row",
		"desc" => "How do you want the control the number of photo thumbnails per row? This can be overridden by adding the '<code>columns</code>' parameter to the '<code>gallery</code>' shortcode.",
		"id" => "flickr_photos_per_row_constraint",
		"grouping" => "flickr-photos",
		"type" => "select",
		"options" => array("padding" => "Fix the padding around the thumbnails",
			"count" => "Fix the number of thumbnails per row",
		),
		"std" => "padding"),

	array("name" => "Constrain by padding",
		"desc" => " If you have constrained by padding above, enter the number of pixels here to pad the thumbs by",
		"id" => "flickr_photos_constrain_by_padding",
		"grouping" => "flickr-photos",
		"type" => "text",
		"hint" => "Enter the number of pixels here (don't enter 'px'). Non-integers will be ignored.",
		"std" => "15"),

	array("name" => "Constrain by number of thumbnails",
		"desc" => " If you have constrained by number of thumbnails per row above, enter the number of thumbnails",
		"id" => "flickr_photos_constrain_by_count",
		"grouping" => "flickr-photos",
		"type" => "slider",
		"options" => array("range" => "min", "min" => 1, "max" => 25, "step" => 1, "size" => "400px", "unit" => ""),
		"std" => 5),

	array("name" => "Photo Thumbnail Border",
		"desc" => "Setup the border of photo thumbnail when the photo is displayed as a part of a photoset or in a photo-stream. This is valid for the short-code usage <code>[gallery type='flickr' photoset_id='xyz']</code>, or <code>[gallery type='flickr' user_id='abc' view='photos']</code>.",
		"id" => "flickr_photo_thumb_border",
		"grouping" => "flickr-photos",
		"type" => "border",
		"options" => array(),
		"std" => array(
			'top' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'right' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'bottom' => array('colortype' => 'custom', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 1, 'border-width-type' => 'px'),
			'left' => array('colortype' => 'transparent', 'color' => '#c0c0c0', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
		),
	),

	array("name" => "Photo Thumbnail - Padding between border and image",
		"desc" => "Setup the padding between the photo thumbnail and its border.",
		"id" => "flickr_photo_thumb_padding",
		"grouping" => "flickr-photos",
		"type" => "padding",
		"options" => array(),
		"std" => array(
			'top' => array('padding' => 0, 'padding-type' => 'px'),
			'right' => array('padding' => 0, 'padding-type' => 'px'),
			'bottom' => array('padding' => 0, 'padding-type' => 'px'),
			'left' => array('padding' => 0, 'padding-type' => 'px'),
		),
	),

	array("name" => "Flickr Photos - \"Popup\" View",
		"desc" => "Control settings for Flickr Photos when displayed in a popup",
		"category" => "flickr-photos-pop",
		"type" => "section",),

	array("name" => "What is this section?",
		"desc" => "Options in this section are in effect when you click on a Photoset thumbnail to launch an overlaid gallery. In other words, the photos are printed directly on a popup.",
		"grouping" => "flickr-photos-pop",
		"type" => "blurb",),

	array("name" => "Photo Title Display",
		"desc" => "How do you want the title of the photos?",
		"id" => "flickr_photo_pop_title_display",
		"grouping" => "flickr-photos-pop",
		"type" => "select",
		"options" => array(
			"regular" => "Normal title display using the HTML \"title\" attribute",
			"below" => "Below the thumbnail",
			"tooltip" => "Using the <a href='http://bassistance.de/jquery-plugins/jquery-plugin-tooltip/'>JQuery Tooltip</a> plugin",
		),
		"std" => "tooltip"),

	array("name" => "Constrain Photos Per Row",
		"desc" => "How do you want the control the number of photo thumbnails per row? This can be overridden by adding the '<code>columns</code>' parameter to the '<code>gallery</code>' shortcode.",
		"id" => "flickr_photos_pop_per_row_constraint",
		"grouping" => "flickr-photos-pop",
		"type" => "select",
		"options" => array("padding" => "Fix the padding around the thumbnails",
			"count" => "Fix the number of thumbnails per row",
		),
		"std" => "padding"),

	array("name" => "Constrain by padding",
		"desc" => " If you have constrained by padding above, enter the number of pixels here to pad the thumbs by",
		"id" => "flickr_photos_pop_constrain_by_padding",
		"grouping" => "flickr-photos-pop",
		"type" => "text",
		"hint" => "Enter the number of pixels here (don't enter 'px'). Non-integers will be ignored.",
		"std" => "15"),

	array("name" => "Constrain by number of thumbnails",
		"desc" => " If you have constrained by number of thumbnails per row above, enter the number of thumbnails",
		"id" => "flickr_photos_pop_constrain_by_count",
		"grouping" => "flickr-photos-pop",
		"type" => "slider",
		"options" => array("range" => "min", "min" => 1, "max" => 25, "step" => 1, "size" => "400px", "unit" => ""),
		"std" => 5),

	array("name" => "Photo Thumbnail Border",
		"desc" => "Setup the border of photo thumbnail when the photo is displayed in a popup gallery. This is valid when you click on a Photoset thumbnail to launch a popup gallery.",
		"id" => "flickr_pop_photo_thumb_border",
		"grouping" => "flickr-photos-pop",
		"type" => "border",
		"options" => array(),
		"std" => array(
			'top' => array('colortype' => 'transparent', 'color' => '#333333', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'right' => array('colortype' => 'transparent', 'color' => '#333333', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'bottom' => array('colortype' => 'transparent', 'color' => '#333333', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
			'left' => array('colortype' => 'transparent', 'color' => '#333333', 'style' => 'none', 'border-width' => 0, 'border-width-type' => 'px'),
		),
	),

	array("name" => "Photo Thumbnail - Padding between border and image",
		"desc" => "Setup the padding between the photo thumbnail and its border.",
		"id" => "flickr_pop_photo_thumb_padding",
		"grouping" => "flickr-photos-pop",
		"type" => "padding",
		"options" => array(),
		"std" => array(
			'top' => array('padding' => 0, 'padding-type' => 'px'),
			'right' => array('padding' => 0, 'padding-type' => 'px'),
			'bottom' => array('padding' => 0, 'padding-type' => 'px'),
			'left' => array('padding' => 0, 'padding-type' => 'px'),
		),
	),
);
?>