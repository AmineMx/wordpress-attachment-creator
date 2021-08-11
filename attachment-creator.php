<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Attachment creator
 
 * Description:        
 * Version:           1.0.0
 * Author:            Amine Kaddache
 * Author URI:        https://github.com/AmineMx
 * License:           MIT
 * Text Domain:       attachemnt-creator
 */

use AttachmentCreator\Plugin;

defined('ABSPATH') || exit;
require_once('vendor/autoload.php');

function atCreator(): Plugin
{
    static $instance = null;
    if ($instance) return $instance;
    return $instance = new Plugin();
}

atCreator();
