<?php

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class EnvironmentTest extends PHPUnit_Framework_TestCase
{
	public function testConstructor()
	{
		$env = new ElasticSearcher\Environment(['host' => 'interstellar']);

		$this->assertEquals('interstellar', $env->host);
	}

	public function testSet()
	{
		$env = new ElasticSearcher\Environment([]);

		$env->host = 'interstellar';

		$this->assertEquals('interstellar', $env->host);
	}
}
