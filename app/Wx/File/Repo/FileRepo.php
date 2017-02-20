<?php

namespace Wx\File\Repo;

use Wx\File\File;

class FileRepo
{
	protected $file;
	protected $path;

	public function __construct(File $file)
	{
		$this->file = $file;
	}

	public function upload($file)
	{
		$path = $file->store('public/upload/file');
		return $this->path = \Storage::url($path);
	}

	public function save($input)
	{
		$data = array_merge($input, ['path'=>$this->path]);
		$this->file->save($data);
	}

	public function paginate($num)
	{
		return $this->file->paginate($num);
	}
}