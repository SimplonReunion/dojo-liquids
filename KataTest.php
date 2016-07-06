<?php

require 'kata.php';

class KataTest extends \PHPUnit_Framework_TestCase
{

    protected $liquidsProperties;

    public function setUp(){
      $this->liquidsProperties = ['H'=>1.36, 'W'=>1.00, 'A'=>0.87,'O'=>0.80];
    }

    public function testHandle3Liquids()
    {
      $glass = [['H', 'H', 'W', 'O'],['W','W','O','W'],['H','H','O','O']];
      $resultSortedLiquids = [['O', 'O', 'O', 'O'],['W','W','W','W'],['H','H','H','H']] ;
      $this->assertEquals($resultSortedLiquids, separateLiquids($glass, $this->liquidsProperties));
    }

    public function testHandle4Liquids()
    {
        $this->markTestSkipped();
        $glass = [['A','A','O','H'],['A', 'H', 'W', 'O'],['W','W','A','W'],['H','H','O','O']];
        $resultSortedLiquids = [['O','O','O','O'],['A', 'A', 'A', 'A'],['W','W','W','W'],['H','H','H','H']] ;
        $this->assertEquals($resultSortedLiquids, separateLiquids($glass, $this->liquidsProperties));
    }

    public function testHandleOneRow()
    {
        $this->markTestSkipped();
        $glass = [['A','H','W','O']];
        $resultSortedLiquids = [['O','A','W','H']] ;
        $this->assertEquals($resultSortedLiquids, separateLiquids($glass, $this->liquidsProperties));
    }

    public function testHandleOneColumn()
    {
        $this->markTestSkipped();
        $glass = [['A'],['H'],['W'],['O']];
        $resultSortedLiquids = [['O'],['A'],['W'],['H']] ;
        $this->assertEquals($resultSortedLiquids, separateLiquids($glass, $this->liquidsProperties));
    }

    public function testEmptyArray()
    {
        $this->markTestSkipped();
        $glass = [];
        $resultSortedLiquids = [];
        $this->assertEquals($resultSortedLiquids, separateLiquids($glass, $this->liquidsProperties));
    }



}
