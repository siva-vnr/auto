<?php

/*
  Plugin Name: Auto release update plugin
  Description: to check if auto release works
  Version:     1.0.0
  Plugin URI:  https://dev.superbotics.com/
  Author:      sb
  Author URI:  https://dev.superbotics.com/
  Text Domain: auto-release
 */
include 'classes/auto-core.php';
if ( is_admin() ) {
    new AutoCore(__FILE__, 'siva-vnr', 'auto');
}

