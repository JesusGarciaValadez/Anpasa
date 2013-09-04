<?php return array (
  '5cb5302e64419f4acbbd1ab236bdf19b' => 
  array (
    'criteria' => 
    array (
      'name' => 'prettygallery',
    ),
    'object' => 
    array (
      'name' => 'prettygallery',
      'path' => '{core_path}components/prettygallery/',
      'assets_path' => '',
    ),
  ),
  '8f72f5ec12170c2d7b9b4b2818afcfb4' => 
  array (
    'criteria' => 
    array (
      'category' => 'PrettyGallery',
    ),
    'object' => 
    array (
      'id' => 7,
      'parent' => 0,
      'category' => 'PrettyGallery',
    ),
    'files' => 
    array (
      0 => '/var/www/vhosts/anpasa.com/httpdocs/assets/',
    ),
  ),
  '11bea544d073645dd00ea8cef39dbfe5' => 
  array (
    'criteria' => 
    array (
      'name' => 'prettyGallery',
    ),
    'object' => 
    array (
      'id' => 19,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'prettyGallery',
      'description' => 'Enable Pretty Gallery',
      'editor_type' => 0,
      'category' => 7,
      'cache_type' => 0,
      'snippet' => '[[!Gallery? &album=`[[*prettyGalleryAlbum]]` &thumbTpl=`prettyGalleryImageTpl` &thumbWidth=`[[*prettyThumbnailWidth]]` &thumbHeight=`[[*prettyThumbnailHeight]]` &useCss=`0`]]',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '[[!Gallery? &album=`[[*prettyGalleryAlbum]]` &thumbTpl=`prettyGalleryImageTpl` &thumbWidth=`[[*prettyThumbnailWidth]]` &thumbHeight=`[[*prettyThumbnailHeight]]` &useCss=`0`]]',
    ),
  ),
  '0338a2ae84d25bc9364fee807cbe7be7' => 
  array (
    'criteria' => 
    array (
      'name' => 'prettyGalleryCss',
    ),
    'object' => 
    array (
      'id' => 20,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'prettyGalleryCss',
      'description' => 'CSS Stylesheet for Pretty Gallery',
      'editor_type' => 0,
      'category' => 7,
      'cache_type' => 0,
      'snippet' => '<link rel="stylesheet" href="assets/prettyGallery/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />

<link rel="stylesheet" href="assets/prettyGallery/prettyPhoto/css/style.css" type="text/css" media="screen" charset="utf-8" />',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<link rel="stylesheet" href="assets/prettyGallery/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />

<link rel="stylesheet" href="assets/prettyGallery/prettyPhoto/css/style.css" type="text/css" media="screen" charset="utf-8" />',
    ),
  ),
  'f00340d7de8880c1b98686819a7acb9a' => 
  array (
    'criteria' => 
    array (
      'name' => 'prettyGalleryImageTpl',
    ),
    'object' => 
    array (
      'id' => 21,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'prettyGalleryImageTpl',
      'description' => 'Template for each image',
      'editor_type' => 0,
      'category' => 7,
      'cache_type' => 0,
      'snippet' => '<a href="[[+image_absolute]]" rel="prettyPhoto[pp_gal]" class="prettyGalleryThumb"><img src="[[+thumbnail]]" alt="[[+name]]" /></a>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<a href="[[+image_absolute]]" rel="prettyPhoto[pp_gal]" class="prettyGalleryThumb"><img src="[[+thumbnail]]" alt="[[+name]]" /></a>',
    ),
  ),
  'f5be42dd2d0e9d83e5a1b369af511d8d' => 
  array (
    'criteria' => 
    array (
      'name' => 'prettyGalleryScripts',
    ),
    'object' => 
    array (
      'id' => 22,
      'source' => 0,
      'property_preprocess' => 0,
      'name' => 'prettyGalleryScripts',
      'description' => 'Contains all Pretty Gallery Javascripts',
      'editor_type' => 0,
      'category' => 7,
      'cache_type' => 0,
      'snippet' => '<script src="assets/prettyGallery/prettyPhoto/js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>

<script src="assets/prettyGallery/prettyPhoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8">

	$(document).ready(function(){
		$("a[rel^=\'prettyPhoto\']").prettyPhoto({
			animation_speed: \'normal\', /* fast/slow/normal */
			slideshow: \'[[*prettyGallerySlideshowPause]]\', /* false OR interval time in ms */
			autoplay_slideshow: \'[[*prettyGalleryAutoSlideshow]]\', /* true/false */
			opacity: 0.80, /* Value between 0 and 1 */
			show_title: true, /* true/false */
			allow_resize: true, /* Resize the photos bigger than viewport. true/false */
			default_width: [[*prettyThumbnailWidth]],
			default_height: [[*prettyThumbnailHeight]],
		  	counter_separator_label: \'/\', /* The separator for the gallery counter 1 "of" 2 */
			theme: \'[[*prettyGalleryTheme]]\', /* pp_default/ light_rounded / dark_rounded / light_square / dark_square / facebook */
			horizontal_padding: 20, /* The padding on each side of the picture */
			hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
			wmode: \'opaque\', /* Set the flash wmode attribute */
			autoplay: true, /* Automatically start videos: True/False */
			modal: false, /* If set to true, only the close button will close the window */
			deeplinking: true, /* Allow prettyPhoto to update the url to enable deeplinking. */
			overlay_gallery: [[*prettyGalleryThumbnails]], /* If set to true, a gallery will overlay the fullscreen image on mouse over */
			keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
			ie6_fallback: true,
		  	social_tools: false
			/*custom_markup: \'\',*/
			
		});
	  $(\'.fullResImage\').css({\'width\':\'[[*prettyImageWidth]]px\'})
	});
</script>
		',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '<script src="assets/prettyGallery/prettyPhoto/js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>

<script src="assets/prettyGallery/prettyPhoto/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8">

	$(document).ready(function(){
		$("a[rel^=\'prettyPhoto\']").prettyPhoto({
			animation_speed: \'normal\', /* fast/slow/normal */
			slideshow: \'[[*prettyGallerySlideshowPause]]\', /* false OR interval time in ms */
			autoplay_slideshow: \'[[*prettyGalleryAutoSlideshow]]\', /* true/false */
			opacity: 0.80, /* Value between 0 and 1 */
			show_title: true, /* true/false */
			allow_resize: true, /* Resize the photos bigger than viewport. true/false */
			default_width: [[*prettyThumbnailWidth]],
			default_height: [[*prettyThumbnailHeight]],
		  	counter_separator_label: \'/\', /* The separator for the gallery counter 1 "of" 2 */
			theme: \'[[*prettyGalleryTheme]]\', /* pp_default/ light_rounded / dark_rounded / light_square / dark_square / facebook */
			horizontal_padding: 20, /* The padding on each side of the picture */
			hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
			wmode: \'opaque\', /* Set the flash wmode attribute */
			autoplay: true, /* Automatically start videos: True/False */
			modal: false, /* If set to true, only the close button will close the window */
			deeplinking: true, /* Allow prettyPhoto to update the url to enable deeplinking. */
			overlay_gallery: [[*prettyGalleryThumbnails]], /* If set to true, a gallery will overlay the fullscreen image on mouse over */
			keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
			ie6_fallback: true,
		  	social_tools: false
			/*custom_markup: \'\',*/
			
		});
	  $(\'.fullResImage\').css({\'width\':\'[[*prettyImageWidth]]px\'})
	});
</script>
		',
    ),
  ),
  '63a59edbec27a3812e69911650cc8e29' => 
  array (
    'criteria' => 
    array (
      'templatename' => 'prettyGallery',
    ),
    'object' => 
    array (
      'id' => 7,
      'source' => 0,
      'property_preprocess' => 0,
      'templatename' => 'prettyGallery',
      'description' => 'prettyGallery Template',
      'editor_type' => 0,
      'category' => 7,
      'icon' => '',
      'template_type' => 0,
      'content' => '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>[[++site_name]] | [[*pagetitle]]</title>
  <meta http-equiv="Content-Type" content="text/html; charset=[[++modx_charset]]" />

[[!If? &subject=`[[*prettyGalleryAlbum]]` &operator=`!empty` &then=`[[$prettyGalleryCss]]`]]

</head>
<body>


[[!If? &subject=`[[*prettyGalleryAlbum]]` &operator=`!empty` &then=`[[$prettyGallery]]`]]

  
  [[!If? &subject=`[[*prettyGalleryAlbum]]` &operator=`!empty` &then=`[[$prettyGalleryScripts]]`]]


</body>
</html>',
      'locked' => 0,
      'properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
    ),
  ),
  'c6b2b88230d328bd7b3317842cb945e1' => 
  array (
    'criteria' => 
    array (
      'name' => 'prettyGalleryAlbum',
    ),
    'object' => 
    array (
      'id' => 1,
      'source' => 0,
      'property_preprocess' => 0,
      'type' => 'galleryalbumlist',
      'name' => 'prettyGalleryAlbum',
      'caption' => 'Album Selector',
      'description' => 'Select Album To Display',
      'editor_type' => 0,
      'category' => 7,
      'locked' => 0,
      'elements' => '',
      'rank' => 1,
      'display' => 'default',
      'default_text' => '',
      'properties' => 'a:0:{}',
      'input_properties' => 'a:14:{s:10:"allowBlank";s:5:"false";s:4:"sort";s:4:"rank";s:3:"dir";s:4:"DESC";s:5:"limit";s:1:"0";s:5:"start";s:1:"0";s:8:"showNone";s:4:"true";s:9:"showCover";s:4:"true";s:6:"parent";s:0:"";s:5:"width";s:3:"400";s:9:"listWidth";s:0:"";s:9:"typeAhead";s:5:"false";s:14:"typeAheadDelay";s:3:"250";s:14:"forceSelection";s:5:"false";s:13:"listEmptyText";s:0:"";}',
      'output_properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '',
    ),
  ),
  '85c0d855e9d64ef3f9327ea69db7ef97' => 
  array (
    'criteria' => 
    array (
      'name' => 'prettyGalleryThumbnails',
    ),
    'object' => 
    array (
      'id' => 2,
      'source' => 0,
      'property_preprocess' => 0,
      'type' => 'listbox',
      'name' => 'prettyGalleryThumbnails',
      'caption' => 'Thumbnails',
      'description' => 'Enable Thumbnails On Hover',
      'editor_type' => 0,
      'category' => 7,
      'locked' => 0,
      'elements' => 'Yes==true||No==false',
      'rank' => 3,
      'display' => 'default',
      'default_text' => 'false',
      'properties' => 'a:0:{}',
      'input_properties' => 'a:7:{s:10:"allowBlank";s:5:"false";s:9:"listWidth";s:0:"";s:5:"title";s:0:"";s:9:"typeAhead";s:5:"false";s:14:"typeAheadDelay";s:3:"250";s:14:"forceSelection";s:5:"false";s:13:"listEmptyText";s:0:"";}',
      'output_properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => 'false',
    ),
  ),
  'f670da221cfe8492d8eec7af171f3275' => 
  array (
    'criteria' => 
    array (
      'name' => 'prettyGalleryTheme',
    ),
    'object' => 
    array (
      'id' => 3,
      'source' => 0,
      'property_preprocess' => 0,
      'type' => 'listbox',
      'name' => 'prettyGalleryTheme',
      'caption' => 'Theme Selector',
      'description' => 'Select Theme To Use For Images',
      'editor_type' => 0,
      'category' => 7,
      'locked' => 0,
      'elements' => 'Default==pp_default||Light Rounded==light_rounded||Dark Rounded==dark_rounded||Light Square==light_square||Dark Square==dark_square||Facebook==facebook',
      'rank' => 2,
      'display' => 'default',
      'default_text' => 'pp_default',
      'properties' => 'a:0:{}',
      'input_properties' => 'a:7:{s:10:"allowBlank";s:5:"false";s:9:"listWidth";s:0:"";s:5:"title";s:0:"";s:9:"typeAhead";s:5:"false";s:14:"typeAheadDelay";s:3:"250";s:14:"forceSelection";s:5:"false";s:13:"listEmptyText";s:0:"";}',
      'output_properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => 'pp_default',
    ),
  ),
  '4b5cfff45daf059a1b07ece06210c575' => 
  array (
    'criteria' => 
    array (
      'name' => 'prettyGalleryAutoSlideshow',
    ),
    'object' => 
    array (
      'id' => 4,
      'source' => 0,
      'property_preprocess' => 0,
      'type' => 'listbox',
      'name' => 'prettyGalleryAutoSlideshow',
      'caption' => 'Auto Start Slideshow',
      'description' => 'Select if you want to enable auto playback',
      'editor_type' => 0,
      'category' => 7,
      'locked' => 0,
      'elements' => 'Yes==true||No==false',
      'rank' => 6,
      'display' => 'default',
      'default_text' => 'false',
      'properties' => 'a:0:{}',
      'input_properties' => 'a:7:{s:10:"allowBlank";s:4:"true";s:9:"listWidth";s:0:"";s:5:"title";s:0:"";s:9:"typeAhead";s:5:"false";s:14:"typeAheadDelay";s:3:"250";s:14:"forceSelection";s:5:"false";s:13:"listEmptyText";s:0:"";}',
      'output_properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => 'false',
    ),
  ),
  'ca4ea6657a0880993cac7a4405dfcdb9' => 
  array (
    'criteria' => 
    array (
      'name' => 'prettyGallerySlideshowPause',
    ),
    'object' => 
    array (
      'id' => 5,
      'source' => 0,
      'property_preprocess' => 0,
      'type' => 'number',
      'name' => 'prettyGallerySlideshowPause',
      'caption' => 'Slideshow Pause',
      'description' => 'Insert how long to pause between images (insert time in milliseconds, default is 5000)',
      'editor_type' => 0,
      'category' => 7,
      'locked' => 0,
      'elements' => '',
      'rank' => 7,
      'display' => 'default',
      'default_text' => '5000',
      'properties' => 'a:0:{}',
      'input_properties' => 'a:7:{s:10:"allowBlank";s:5:"false";s:13:"allowDecimals";s:2:"No";s:13:"allowNegative";s:2:"No";s:16:"decimalPrecision";s:1:"2";s:16:"decimalSeparator";s:1:".";s:8:"maxValue";s:0:"";s:8:"minValue";s:0:"";}',
      'output_properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '5000',
    ),
  ),
  'c3278062850110e48c11acaac2214fc9' => 
  array (
    'criteria' => 
    array (
      'name' => 'prettyThumbnailWidth',
    ),
    'object' => 
    array (
      'id' => 6,
      'source' => 0,
      'property_preprocess' => 0,
      'type' => 'number',
      'name' => 'prettyThumbnailWidth',
      'caption' => 'Thumbnail Width',
      'description' => 'Specify the width of the thumbnail',
      'editor_type' => 0,
      'category' => 7,
      'locked' => 0,
      'elements' => '',
      'rank' => 4,
      'display' => 'default',
      'default_text' => '100',
      'properties' => 'a:0:{}',
      'input_properties' => 'a:7:{s:10:"allowBlank";s:5:"false";s:13:"allowDecimals";s:2:"No";s:13:"allowNegative";s:2:"No";s:16:"decimalPrecision";s:1:"2";s:16:"decimalSeparator";s:1:".";s:8:"maxValue";s:0:"";s:8:"minValue";s:0:"";}',
      'output_properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '100',
    ),
  ),
  'ae2b09abcc63dd809819f85d7cbbfd3c' => 
  array (
    'criteria' => 
    array (
      'name' => 'prettyThumbnailHeight',
    ),
    'object' => 
    array (
      'id' => 7,
      'source' => 0,
      'property_preprocess' => 0,
      'type' => 'number',
      'name' => 'prettyThumbnailHeight',
      'caption' => 'Thumbnail Height',
      'description' => 'Specify the height of the thumbnail',
      'editor_type' => 0,
      'category' => 7,
      'locked' => 0,
      'elements' => '',
      'rank' => 5,
      'display' => 'default',
      'default_text' => '100',
      'properties' => 'a:0:{}',
      'input_properties' => 'a:7:{s:10:"allowBlank";s:5:"false";s:13:"allowDecimals";s:2:"No";s:13:"allowNegative";s:2:"No";s:16:"decimalPrecision";s:1:"2";s:16:"decimalSeparator";s:1:".";s:8:"maxValue";s:0:"";s:8:"minValue";s:0:"";}',
      'output_properties' => 'a:0:{}',
      'static' => 0,
      'static_file' => '',
      'content' => '100',
    ),
  ),
);