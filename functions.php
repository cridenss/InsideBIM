<?php
// Inclusion automatique des fichiers dans /inc
foreach (glob(get_template_directory() . '/inc/*.php') as $file) {
    require_once $file;
}


 