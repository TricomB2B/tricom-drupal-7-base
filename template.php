<?php
/**
 * THEME FUNCTIONS
 */

// return the URL to the given file (generally used for images in theme)
function tricom_get_url ($path) {
  return file_create_url(path_to_theme() . '/' . $path);
}
