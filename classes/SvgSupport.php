<?php

namespace App;

class SvgSupport
{
    public function __construct()
    {
        add_filter('upload_mimes', [$this, 'add_file_types_to_uploads']);
    }

    public function add_file_types_to_uploads($file_types)
    {
        $new_filetypes = array();
        $new_filetypes['svg'] = 'image/svg+xml';
        return array_merge($file_types, $new_filetypes );
    }
}
