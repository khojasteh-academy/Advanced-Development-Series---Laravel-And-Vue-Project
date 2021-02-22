<?php


namespace Modules\Images\Repositories\Repositories;


use Modules\Core\Repositories\Base\BaseRepository;
use Modules\Images\Repositories\Contracts\ImageContract;
use Modules\Images\Services\ImageMaker;
use Modules\Posts\Entities\Posts;
use File;

class ImageRepository extends BaseRepository implements ImageContract
{

    public function entity()
    {
        return Posts::class;
    }

    public function createSingleImage($imgURL, $allowWidth, $imgWidth, $allowHeight, $imgHeight, $path)
    {
        $name = time().'.' . explode('/', explode(':', substr($imgURL, 0, strpos($imgURL, ';')))[1])[1];

        $imgMaker = new ImageMaker();
        $imgMaker->createImage($imgURL, true, public_path().$path, 'lazy_'.$name, $allowWidth, $imgWidth, $allowHeight, $imgHeight);
        $imgMaker->createImage($imgURL, false, public_path().$path, $name, $allowWidth, $imgWidth, $allowHeight, $imgHeight);

        return [
            'imgData'   =>  [
                'normal'    =>  $path.'/'.$name,
                'lazy'    =>  $path.'/'.'lazy_'.$name
            ],
            'imgName'   =>  $name
        ];


    }

    public function getPhysicalImages($onlyImages, $path, $all)
    {
        $file_size = 0;
        $files = array();
        $allFiles = $all ? File::allFiles(public_path($path)) : File::files(public_path($path));

        foreach ($allFiles as $file) {
            if ($file->getExtension() == 'jpeg' || $file->getExtension() == 'png') {
                $file_size += $file->getSize();
                array_push($files,$this->pushItems(
                    strstr($file->getPath(), '\images'),
                    $file->getFilename(),
                    $file->getExtension(),
                    strstr($file->getLinkTarget(), '\images'),
                    number_format($file->getSize() / 1048576, 3)
                ));
            }else {
                $file_size += $file->getSize();
                array_push($files, $this->pushItems(
                    strstr($file->getPath(), '\images'),
                    $file->getFilename(),
                    $file->getExtension(),
                    strstr($file->getLinkTarget(), '\images'),
                    number_format($file->getSize() / 1048576, 2)
                ));
            }
        }

        $file_size = number_format($file_size / 1048576, 2);
        return [
            'files' =>  $files,
            'total' =>  count($files),
            'sizes' =>  $file_size
        ];

    }

    public function pushItems($filePath, $fileName, $fileExtension, $fileLinkTarget, $fileSize)
    {
        return [
            'fileType'  =>  'file',
            'getPath'  =>  $filePath,
            'getFileName'  =>  $fileName,
            'getExtension'  =>  $fileExtension,
            'getLinkTarget'  =>  $fileLinkTarget,
            'getSize'  =>  $fileSize,
            'imageDialog'  =>  false,
        ];
    }

    public function deletePhysicalImage($imgURL)
    {
        return File::delete(public_path().$imgURL);
    }

    public function getFolders($path)
    {
        $folders = File::directories($path);
        $foldArray  =    array();
        foreach ($folders as $directory) {
            $parts = explode('\\', $directory);
            $folderName = $parts[count($parts)-1];
            $childFolder    =   File::directories($directory);
            $childFiles =   $this->getPhysicalImages(false, $directory, false);
            if (!!!count($childFolder) && !!!$childFiles['total']) {
                $folderIcon = 'bx bx-folder';
            } elseif (!!count($childFolder) && !!$childFiles['total']) {
                $folderIcon = 'bx bxs-folder-open';
            } elseif (!!count($childFolder) && !!!$childFiles['total']) {
                $folderIcon = 'bx bx-folder-open';
            } elseif (!!!count($childFolder) && !!$childFiles['total']) {
                $folderIcon = 'bx bxs-folder';
            }

            array_push($foldArray, [
                'fileType'  =>  'directory',
                'folderName'  =>  $folderName,
                'folderPath'  =>  $directory,
                'childDirectoryCount'  =>  count($childFolder),
                'childFilesCoun'  =>  $childFiles['total'],
                'folderIcon'  =>  $folderIcon,
            ]);
        }

        return $foldArray;
    }
}
