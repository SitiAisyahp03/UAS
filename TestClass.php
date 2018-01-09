<?php_
	class TestClass extends PHPUnit_Framework_TestCase

{
	public function testFile()
	{
		include 'file.php'
		$content = $data;

		$this->assertEquals(12, $content);
	}

	public function testname()
	{
		include 'file.php';
		$content = $nopnya;
		$this->assertEquals('cool', $content);
	}
