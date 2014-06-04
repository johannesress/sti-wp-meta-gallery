<?php

$gallery_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_gallery_meta',
	'title' => 'Gallerie anhängen',
	'types' => array('unterkuenfte'), // added only for pages and to custom post type "events"
	'context' => 'normal', // same as above, defaults to "normal"
	'priority' => 'high', // same as above, defaults to "high"
	'mode' => WPALCHEMY_MODE_EXTRACT,
    'prefix' => '_stgallery_',
	'template' => get_stylesheet_directory() . '/metaboxes/gallery-meta.php'
));

/* eof */