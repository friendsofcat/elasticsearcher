<?php

use ElasticSearcher\Fragments\Queries\TermsQuery;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class TermsQueryTest extends PHPUnit_Framework_TestCase
{
	public function testBody()
	{
		$term = new TermsQuery('name', ['elasticsearch', 'github']);

		$this->assertEquals(['terms' => ['name' => ['elasticsearch', 'github']]], $term->getBody());
	}
}
