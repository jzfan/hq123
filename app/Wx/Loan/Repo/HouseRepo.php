<?php

namespace Wx\Loan\Repo;

use Wx\Loan\House;

class HouseRepo extends BaseRepo
{
	public function model()
	{
		return new House;
	}

	public function save($input)
	{
		$user = \Auth::user();
		$user->real_name = $input['real_name'];
		$user->save();

		if ($this->model->where('plate_number', $input['plate_number'])->count() > 0) {
			return response()->json(['date'=>'allready applied', 'code'=>422]);
		}
		$merged = array_merge($input, ['user_id' => \Auth::user()->id]);
	    $this->model->create($merged);
	    return redirect('/wechat/plist');
	}
}
