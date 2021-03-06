<?php
/*
*      Robo Gallery     
*      Version: 1.0
*      By Robosoft
*
*      Contact: https://robosoft.co/robogallery/ 
*      Created: 2015
*      Licensed under the GPLv2 license - http://opensource.org/licenses/gpl-2.0.php
*
*      Copyright (c) 2014-2016, Robosoft. All rights reserved.
*      Available only in  https://robosoft.co/robogallery/ 
*/

if ( ! defined( 'ABSPATH' ) ) exit;

class ROBO_GALLERY_STATS{

    protected $postType;
    protected $assetsUri;

    public function __construct($postType){
        $this->postType = $postType;
        $this->assetsUri = plugin_dir_url(__FILE__);
        add_action('admin_enqueue_scripts', array($this, 'enqueueScripts'));
    }

    public function enqueueScripts(){ 
        if ( 
        		rbs_gallery_get_current_post_type() == ROBO_GALLERY_TYPE_POST && 
        		rbs_gallery_is_edit_page('list') 
        ) {
            wp_enqueue_script(
	            'robo-gallery-stats-js',
	            $this->assetsUri . '/js/script.js',
	            array(),
	            false,
	            true
	        );
        }
    }
}
