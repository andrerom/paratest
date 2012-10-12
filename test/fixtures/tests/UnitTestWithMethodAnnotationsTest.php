<?php
class UnitTestWithMethodAnnotationsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @group fixtures
     */
    public function testTruth()
    {
        $this->assertTrue(true);
    }

    /**
     * @runParallel
     * @group fixtures
     */
    public function testFalsehood()
    {
        $this->assertFalse(true);
    }

    /**
     * @runParallel
     * @group fixtures
     */
    public function testArrayLength()
    {
        $elems = [1,2,3,4,5];
        $this->assertEquals(5, sizeof($elems));
    }
}