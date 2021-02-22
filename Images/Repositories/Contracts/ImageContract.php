<?php


namespace Modules\Images\Repositories\Contracts;


interface ImageContract
{

    public function createSingleImage(
        $imgURL, $allowWidth, $imgWidth, $allowHeight, $imgHeight, $path
    );

    public function getPhysicalImages($onlyImages, $path, $all);

    public function deletePhysicalImage($imgURL);

    public function getFolders($path);

}
