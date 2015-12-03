<?php

if (! function_exists('built_asset_path')) {

function built_asset_path($file)
{
    static $useManifest = null;
    static $manifest = null;

    if (is_null($useManifest)) {

        $manifestFile = (function_exists('base_path'))
            ? base_path('public/rev-manifest.json')
            : app()->basePath('public/rev-manifest.json');

        $useManifest = is_file($manifestFile);

        if ($useManifest) {
            $manifest = json_decode(file_get_contents($manifestFile), true);
        }
    }

    return ($useManifest && isset($manifest[$file])) ? $manifest[$file] : $file;
}

}

if (! function_exists('built_asset')) {

function built_asset($file)
{
    return app('url')->asset(built_asset_path($file));
}

}
