<?php

namespace App\Http\Controllers\Backend;

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

    public function index()
    {
    	$files = $this->file->paginate(10);
    	return view('backend.file.index');
    }
}
