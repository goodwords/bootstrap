<?php

if (! function_exists('built_asset')) {

function built_asset($file)
{
    static $useManifest = null;
    static $manifest = null;

    if (is_null($useManifest)) {
        $manifestFile = app()->basePath('public/rev-manifest.json');
        $useManifest = is_file($manifestFile);

        if ($useManifest) {
            $manifest = json_decode(file_get_contents($manifestFile), true);
        }
    }

    if (!$useManifest) {
        return app('url')->asset($file);
    }

    if (isset($manifest[$file])) {
        return app('url')->asset($manifest[$file]);
    }

    throw new Exception("File {$file} not defined in asset manifest.");
}

}
