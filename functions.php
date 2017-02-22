<?php
/**
 * Get user profile
 * @return array|mixed
 */
function getProfile(){
    $filePath = __DIR__ . '/telephone_db.json';
    if (!file_exists($filePath)){
        return [];
    }
    $fileData = file_get_contents($filePath);
    $profiles = json_decode($fileData, true);
    if (!$profiles){
        return [];
    }
    return $profiles;
}
