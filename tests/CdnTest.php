<?php

namespace YiiCdn\Tests;

use PHPUnit_Framework_TestCase;
use YiiCdn\Cdn;

class CdnTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->config = array(
			'params' => array(
				'static' => array(
					'urls' => array(
						'images' => 'http://images.static.cdn.com',
						'css' => 'http://css.static.cdn.com',
						'js' => 'http://js.static.cdn.com'
					)
				)
			)
		);

		\Yii::createWebApplication($this->config);
	}

	public function testGenerateUrlCss()
	{
		$url = Cdn::Css("files.css");
		$urlStatic = 'http://css.static.cdn.com/file.css';
		$this->assertTrue($url == $urlStatic);
	}
}
