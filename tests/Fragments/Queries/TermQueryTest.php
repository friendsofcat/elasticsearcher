<?php

use ElasticSearcher\Fragments\Queries\TermQuery;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class TermQueryTest extends PHPUnit_Framework_TestCase
{
	public function testBody()
	{
		$term = new TermQuery('name', 'elasticsearch');

		$this->assertEquals(['term' => ['name' => 'elasticsearch']], $term->getBody());
	}
}
