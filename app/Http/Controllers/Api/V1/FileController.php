<?php

namespace App\Http\Controllers\Api\V1;

use Wx\File\Repo\FileRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
	protected $file;

	public function __construct(FileRepo $file)
	{
		$this->file = $file;
	}

    public function upload(Request $request)
    {
    	$this->file->upload($request->file);
    	$this->file->save($request->input);
    }
}
