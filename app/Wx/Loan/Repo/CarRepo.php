<?php

namespace Wx\Loan\Repo;

use Wx\Loan\Car;

class CarRepo extends BaseRepo
{
	public function model()
	{
		return new Car;
	}

	public function save($input)
	{
		$user = \Auth::user();
		$user->real_name = $input['real_name'];
		$user->save();

		$merged = array_merge($input, ['user_id' => \Auth::user()->id]);
	    $this->model->create($merged);
	    return redirect('/wechat/plist');
	}
}
