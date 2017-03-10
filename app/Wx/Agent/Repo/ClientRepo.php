<?php

namespace Wx\Agent\Repo;

use Wx\Agent\Client;

class ClientRepo
{
	protected $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function create($input)
	{
		$merged = array_merge($input, ['agent_id'=>\Auth::user()->id]);
		return $this->client->create($input);
	}

}