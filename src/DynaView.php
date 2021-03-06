<?php
/**
 * Created by PhpStorm.
 * User: gzonemacpro
 * Date: 2019-03-04
 * Time: 23:39
 */

namespace Picory\Dynahtml;

use Illuminate\Http\Request;
use Picory\Dynahtml\FileSystem\FileSystem;

class DynaView
{
    public $request;
    public $fileSystem;

    public $cachePath;
    public $htmlPath;

    public $params = [];

    public function __construct(Request $request, FileSystem $file)
    {
        $this->request = $request;
        $this->fileSystem = $file;
    }

    public function make()
    {
        // 원본 디자인 파일 가져오기
        $source = $this->fileSystem->get();
    }
}