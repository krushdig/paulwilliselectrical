<?php
/**
 * General.
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Heading definition.
 */
$options[] = array(
	'name' => _x( 'General Appearance', 'theme-options', 'the7mk2' ),
	'type' => 'heading',
	'id'   => 'general-appearance',
);

/**
 * Layout.
 */
$options[] = array( 'name' => _x( 'Layout', 'theme-options', 'the7mk2' ), 'type' => 'block' );

// text
$options[] = array(
	'name'  => _x( 'Content width', 'theme-options', 'the7mk2' ),
	'id'    => 'general-content_width',
	'std'   => '1200px',
	'type'  => 'number',
	'units' => 'px|%',
);

// radio
$options[] = array(
	'name'    => _x( 'Layout', 'theme-options', 'the7mk2' ),
	'id'      => 'general-layout',
	'std'     => 'wide',
	'type'    => 'images',
	'class'   => 'small',
	'options' => array(
		'wide'  => array(
			'title' => _x( 'Wide', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-layout-wide.gif',
		),
		'boxed' => array(
			'title' => _x( 'Boxed', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-layout-boxed.gif',
		),
	),
);

$options[] = array(
	'name'       => _x( 'Box width', 'theme-options', 'the7mk2' ),
	'id'         => 'general-box_width',
	'std'        => '1320px',
	'type'       => 'number',
	'units'      => 'px|%',
	'dependency' => array(
		'field'    => 'general-layout',
		'operator' => '==',
		'value'    => 'boxed',
	),
);

$options[] = array( 'type' => 'divider' );

$options[] = array(
	'name' => _x( 'Background under the box', 'theme-options', 'the7mk2' ),
	'type' => 'title',
);

$options[] = array(
	'name' => _x( 'Background color', 'theme-options', 'the7mk2' ),
	'type' => 'color',
	'id'   => 'general-boxed_bg_color',
	'std'  => '#ffffff',
);

$options[] = array(
	'name' => _x( 'Add background image', 'theme-options', 'the7mk2' ),
	'type' => 'background_img',
	'id'   => 'general-boxed_bg_image',
	'std'  => array(
		'image'      => '',
		'repeat'     => 'repeat',
		'position_x' => 'center',
		'position_y' => 'center',
	),
);

$options[] = array(
	'name' => _x( 'Fullscreen ', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'id'   => 'general-boxed_bg_fullscreen',
	'std'  => 0,
);

$options[] = array(
	'name' => _x( 'Fixed background ', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'id'   => 'general-boxed_bg_fixed',
	'std'  => 0,
);

/**
 * Background.
 */
$options[] = array( 'name' => _x( 'Background', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options[] = array(
	'name' => _x( 'Color', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'id'   => 'general-bg_color',
	'std'  => '#252525',
	'desc' => _x( '"Opacity" isn\'t compatible with slide-out footer', 'theme-options', 'the7mk2' ),
);

$options[] = array(
	'name' => _x( 'Add background image', 'theme-options', 'the7mk2' ),
	'type' => 'background_img',
	'id'   => 'general-bg_image',
	'std'  => array(
		'image'      => '',
		'repeat'     => 'repeat',
		'position_x' => 'center',
		'position_y' => 'center',
	),
);

$options[] = array(
	'name' => _x( 'Fullscreen', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'id'   => 'general-bg_fullscreen',
	'std'  => 0,
);

$options[] = array(
	'name' => _x( 'Fixed background', 'theme-options', 'the7mk2' ),
	'type' => 'checkbox',
	'id'   => 'general-bg_fixed',
	'std'  => 0,
	'desc' => _x( '"Fixed" setting isn\'t compatible with "overlapping" title area style.', 'theme-options', 'the7mk2' ),
);

/**
 * Content boxes.
 */
$options[] = array( 'name' => _x( 'Content boxes', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options[] = array(
	'name' => _x( 'Background color', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'id'   => 'general-content_boxes_bg_color',
	'std'  => '#FFFFFF',
);

$options[] = array(
	'name'    => _x( 'Decoration', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'id'      => 'general-content_boxes_decoration',
	'std'     => 'none',
	'class'   => 'small',
	'options' => array(
		'none'    => array(
			'title' => _x( 'None', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-content_boxes_decoration-none.gif',
		),
		'shadow'  => array(
			'title' => _x( 'Shadow', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-content_boxes_decoration-shadow.gif',
		),
		'outline' => array(
			'title' => _x( 'Outline', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-content_boxes_decoration-outline.gif',
		),
	),
);

$options[] = array(
	'name'       => _x( 'Decoration outline color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'id'         => 'general-content_boxes_decoration_outline_color',
	'std'        => '#FFFFFF',
	'dependency' => array(
		'field'    => 'general-content_boxes_decoration',
		'operator' => '==',
		'value'    => 'outline',
	),
);

/**
 * Dividers.
 */
$options[] = array( 'name' => _x( 'Dividers', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options['dividers-color'] = array(
	'name' => _x( 'Dividers color', 'theme-options', 'the7mk2' ),
	'type' => 'alpha_color',
	'id'   => 'dividers-color',
	'std'  => '#cccccc',
);

/**
 * Color accent.
 */
$options[] = array( 'name' => _x( 'Color accent', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options['general-accent_color_mode'] = array(
	'name'      => _x( 'Accent color', 'theme-options', 'the7mk2' ),
	'type'      => 'images',
	'id'        => 'general-accent_color_mode',
	'std'       => 'color',
	'class'     => 'small',
	'show_hide' => array(
		'color'    => 'general-accent_color_mode-color',
		'gradient' => 'general-accent_color_mode-gradient',
	),
	'options'   => array(
		'color'    => array(
			'title' => _x( 'Solid color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'gradient' => array(
			'title' => _x( 'Gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
);

$options['general-accent_bg_color'] = array(
	'name'       => '&nbsp;',
	'type'       => 'color',
	'id'         => 'general-accent_bg_color',
	'std'        => '#D73B37',
	'dependency' => array(
		'field'    => 'general-accent_color_mode',
		'operator' => '==',
		'value'    => 'color',
	),
);

$options['general-accent_bg_color_gradient'] = array(
	'name'       => '&nbsp;',
	'type'       => 'gradient_picker',
	'id'         => 'general-accent_bg_color_gradient',
	'std'        => '45deg|#fff 0%|#999 50%|#000 100%',
	'dependency' => array(
		'field'    => 'general-accent_color_mode',
		'operator' => '==',
		'value'    => 'gradient',
	),
);

/**
 * Border radius.
 */
$options[] = array( 'name' => _x( 'Border radius', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options[] = array(
	'name'  => _x( 'Border radius', 'theme-options', 'the7mk2' ),
	'type'  => 'number',
	'id'    => 'general-border_radius',
	'std'   => '8',
	'units' => 'px',
);

/**
 * Beautiful loading.
 */
$options[] = array( 'name' => _x( 'Beautiful loading', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options['general-beautiful_loading'] = array(
	'name'    => _x( 'Beautiful loading', 'theme-options', 'the7mk2' ),
	'type'    => 'images',
	'id'      => 'general-beautiful_loading',
	'class'   => 'small',
	'std'     => 'enabled',
	'options' => array(
		'enabled'  => array(
			'title' => _x( 'Enabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-beautiful_loading-enabled.gif',
		),
		'disabled' => array(
			'title' => _x( 'Disabled', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/general-beautiful_loading-disabled.gif',
		),
	),
);

$options['general-fullscreen_overlay_color_mode'] = array(
	'name'       => _x( 'Fullscreen overlay color', 'theme-options', 'the7mk2' ),
	'id'         => 'general-fullscreen_overlay_color_mode',
	'type'       => 'images',
	'class'      => 'small',
	'std'        => 'accent',
	'options'    => array(
		'accent'   => array(
			'title' => _x( 'Accent', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-accent.gif',
		),
		'color'    => array(
			'title' => _x( 'Custom color', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom.gif',
		),
		'gradient' => array(
			'title' => _x( 'Custom gradient', 'theme-options', 'the7mk2' ),
			'src'   => '/inc/admin/assets/images/color-custom-gradient.gif',
		),
	),
	'dependency' => array(
		'field'    => 'general-beautiful_loading',
		'operator' => '==',
		'value'    => 'enabled',
	),
);

$options['general-fullscreen_overlay_color'] = array(
	'name'       => _x( 'Fullscreen overlay custom color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'id'         => 'general-fullscreen_overlay_color',
	'std'        => '#ffffff',
	'dependency' => array(
		array(
			'field'    => 'general-fullscreen_overlay_color_mode',
			'operator' => '==',
			'value'    => 'color',
		),
		array(
			'field'    => 'general-beautiful_loading',
			'operator' => '==',
			'value'    => 'enabled',
		),
	),
);

$options['general-fullscreen_overlay_gradient'] = array(
	'name'       => _x( 'Fullscreen overlay custom gradient', 'theme-options', 'the7mk2' ),
	'type'       => 'gradient_picker',
	'id'         => 'general-fullscreen_overlay_gradient',
	'std'        => '135deg|#ffffff 30%|#ffffff 100%',
	'dependency' => array(
		array(
			'field'    => 'general-fullscreen_overlay_color_mode',
			'operator' => '==',
			'value'    => 'gradient',
		),
		array(
			'field'    => 'general-beautiful_loading',
			'operator' => '==',
			'value'    => 'enabled',
		),
	),
);

$options['general-fullscreen_overlay_opacity'] = array(
	'name'       => _x( 'Fullscreen overlay opacity', 'theme-options', 'the7mk2' ),
	'type'       => 'slider',
	'id'         => 'general-fullscreen_overlay_opacity',
	'std'        => 100,
	'options'    => array(
		'max'  => 100,
		'min'  => 0,
		'step' => 1,
	),
	'dependency' => array(
		array(
			'field'    => 'general-fullscreen_overlay_color_mode',
			'operator' => '==',
			'value'    => 'accent',
		),
		array(
			'field'    => 'general-beautiful_loading',
			'operator' => '==',
			'value'    => 'enabled',
		),
	),
);

$options['general-spinner_color'] = array(
	'name'       => _x( 'Spinner color', 'theme-options', 'the7mk2' ),
	'type'       => 'alpha_color',
	'id'         => 'general-spinner_color',
	'std'        => '#ffffff',
	'dependency' => array(
		'field'    => 'general-beautiful_loading',
		'operator' => '==',
		'value'    => 'enabled',
	),
);

$options['general-loader_style'] = array(
	'name'       => _x( 'Loader style', 'theme-options', 'the7mk2' ),
	'type'       => 'radio',
	'id'         => 'general-loader_style',
	'std'        => 'double_circles',
	'options'    => array(
		'double_circles'    => _x( 'Spinner', 'theme-options', 'the7mk2' ),
		'square_jelly_box'  => _x( 'Ring', 'theme-options', 'the7mk2' ),
		'ball_elastic_dots' => _x( 'Bars', 'theme-options', 'the7mk2' ),
		'custom'            => _x( 'Custom', 'theme-options', 'the7mk2' ),
	),
	'show_hide'  => array( 'custom' => true ),
	'dependency' => array(
		'field'    => 'general-beautiful_loading',
		'operator' => '==',
		'value'    => 'enabled',
	),
);

$options[] = array( 'type' => 'js_hide_begin' );

$options[] = array(
	'desc' => _x( 'Paste HTML code of your custom pre-loader image in the field below.', 'theme-options', 'the7mk2' ),
	'type' => 'info',
);

$options['general-custom_loader'] = array(
	'id'       => 'general-custom_loader',
	'type'     => 'textarea',
	'std'      => false,
	'sanitize' => 'without_sanitize',
	'settings' => array( 'rows' => 8 ),
);

$options[] = array( 'type' => 'js_hide_end' );

/**
 * Lightbox.
 */
$options[] = array( 'name' => _x( 'Lightbox', 'theme-options', 'the7mk2' ), 'type' => 'block' );

$options['general-lightbox_overlay_opacity'] = array(
	'name'    => _x( 'Lightbox overlay opacity', 'theme-options', 'the7mk2' ),
	'type'    => 'slider',
	'id'      => 'general-lightbox_overlay_opacity',
	'std'     => 85,
	'options' => array(
		'max'  => 100,
		'min'  => 0,
		'step' => 1,
	),
);

$options['general-lightbox_arrow_size'] = array(
	'name'  => _x( 'Arrow size', 'theme-options', 'the7mk2' ),
	'type'  => 'number',
	'id'    => 'general-lightbox_arrow_size',
	'std'   => '62px',
	'units' => 'px',
);
