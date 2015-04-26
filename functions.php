<?php
//!Sidebar widgets
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','bonecreek' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','bonecreek' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }


//!Scan functions foldder
$inc = scandir(dirname(__FILE__).'/functions');
foreach($inc as $k=>$v){
	if($k>1 && is_file(dirname(__FILE__) . '/functions/'.$v)) include(dirname(__FILE__).'/functions/'.$v);
}
?>