<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the framework's
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @see: https://codeigniter4.github.io/CodeIgniter4/
 */
function backendAssets($relative){
    return base_url("assets/backend/{$relative}");
}

function frontendAsset($relative_path){
    $theme = env('DEFAULT_THEME') ?? null;
    $fromDb = false;
    if($fromDb){
        $theme = $fromDb;
    }
    return base_url("assets/frontend/{$theme}/{$relative_path}");
}