<?php
$hoverEffects = array(
	'Slide left to right'	=>	'slide-left-to-right',
	'Slide right to left'	=>	'slide-right-to-left',
	'Slide top to bottom'	=>	'slide-top-to-bottom',
	'Slide bottom to top'	=>	'slide-bottom-to-top',
	'Image flip up'			=>	'image-flip-up',
	'Image flip down'		=>	'image-flip-down',
	'Image flip right'		=>	'image-flip-right',
	'Image flip left'		=>	'image-flip-left',
	'Rotate image down'		=>	'rotate-image-down',
	'Image turn around'		=>	'image-turn-around',
	'Zoom and pan'			=>	'zoom-and-pan',
	'Tilt image'			=>	'tilt-image',
	'Morph'					=>	'morph',
	'Move image right'		=>	'move-image-right',
	'Move image left'		=>	'move-image-left',
	'Move image top'		=>	'move-image-top',
	'Move image bottom'		=>	'move-image-bottom',
	'Image squeez right'	=>	'image-squeez-right',
	'Image squeez left'		=>	'image-squeez-left',
	'Image squeez top'		=>	'image-squeez-top',
	'Image squeez bottom'	=>	'image-squeez-bottom',
	'No Effect'				=>	'no-effect',
);

$settings_params = array(
	array(
		"type" 			=> 	"attach_image",
		"heading" 		=> 	__("Image"),
		"param_name" 	=> 	"image_id",
		"description" 	=> 	__("Select the image"),
		"group" 		=> 	'Image',
	),
	array(
		"type" 			=> "textfield",
		"heading" 		=> __("Title"),
		"param_name" 	=> "image_title",
		"description" 	=> __("Will be used as title attribute of img tag"),
		"group" 		=> 'Image',
	),
	array(
		"type" 			=> "textfield",
		"heading" 		=> __("Alternate Text"),
		"param_name" 	=> "image_alt",
		"description" 	=> __("Will be used as alt attribute of img tag"),
		"group" 		=> 'Image',
	),

	/* Caption */

	array(
		"type" 			=> "textarea_html",
		"heading" 		=> __("Caption Text"),
		"param_name" 	=> "content",
		"description" 	=> __("Caption for Image"),
		"group" 		=> 'Caption',
		"value"			=> '<h2>Caption Text Here</h2>'
	),
	array(
		"type" 			=> "colorpicker",
		"heading" 		=> __("Caption Background Color"),
		"param_name" 	=> "caption_bg",
		"description" 	=> __("Caption Background Color"),
		"group" 		=> 'Caption',
	),
	array(
		"type" 			=> "colorpicker",
		"heading" 		=> __("Caption Text Color"),
		"param_name" 	=> "caption_text_color",
		"description" 	=> __("Caption Text Color"),
		"group" 		=> 'Caption',
	),
	array(
		"type" 			=> "textfield",
		"heading" 		=> __("URL"),
		"param_name" 	=> "caption_url",
		"description" 	=> __("Leave blank to disable link"),
		"group" 		=> 'Caption',
	),
	array(
		"type" 			=> "textfield",
		"heading" 		=> __("Link Target"),
		"param_name" 	=> "caption_url_target",
		"description" 	=> __("Write _blank for opening link in new window"),
		"group" 		=> 'Caption',
	),

	/* Border */

	array(
		"type" 			=> "textfield",
		"heading" 		=> __("Border Width"),
		"param_name" 	=> "border_width",
		"description" 	=> __("Width of border, eg: 15px. Leaving blank will disable border"),
		"group" 		=> 'Border',
	),

	array(
		"type" 			=> "dropdown",
		"heading" 		=> __("Border Type"),
		"param_name" 	=> "border_type",
		"description" 	=> __("Some styles may depend on border color"),
		"group" 		=> 'Border',
		"value" 		=> array(
				"Solid"		=> "solid", 
				"Dotted" 	=> "dotted", 
				"Dashed" 	=> "dashed", 
				"Double" 	=> "double",
				"Groove" 	=> "groove", 
				"Ridge"  	=> "ridge",
				"Inset"  	=> "inset", 
				"Outset"	=> "outset"
		)
	),

	array(
		"type" 			=> "colorpicker",
		"heading" 		=> __("Border Color"),
		"param_name" 	=> "border_color",
		"description" 	=> __("Select the color for border"),
		"group" 		=> 'Border',
	),

	array(
		"type" 			=> "textfield",
		"heading" 		=> __("Border Radius"),
		"param_name" 	=> "border_radius",
		"description" 	=> __("Radius of border eg: 5px or 50%"),
		"group" 		=> 'Border',
	),

	array(
		"type" 			=> "textfield",
		"heading" 		=> __("Shadow"),
		"param_name" 	=> "border_shadow",
		"description" 	=> __("Box Shadow for border. (h-shadow v-shadow blur spread color)"),
		"group" 		=> 'Border',
	),

	array(
		"type" 			=> "dropdown",
		"heading" 		=> __("Hover Effect"),
		"param_name" 	=> "hover_effect",
		"description" 	=> __("Select the hover effect"),
		"group" 		=> 'Hover Effects',
		"value" 		=> $hoverEffects,
	),
);

?>