<?php

namespace Hillel\Str\Tests;

use Hillel\Str\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
//    public function testAfter()
//    {
//        $this->assertEquals(
//            'This is my name',
//            Str::after('This is my name', 'something')
//        );
//
//        $this->assertEquals(
//            ' my name',
//            Str::after('This is my name', 'This is')
//        );
//    }

//    public function testAfterLast()
//    {
//        $this->assertEquals(
//            'App\Http\Controllers\Controller',
//            Str::afterLast('App\Http\Controllers\Controller', 'Model')
//        );
//
//        $this->assertEquals(
//            'Controller',
//            Str::afterLast('App\Http\Controllers\Controller', '\\')
//        );
//    }

//    public function testBefore()
//    {
//        $this->assertEquals(
//            'This is ',
//            Str::before('This is my name', 'my name')
//        );
//
//        $this->assertEquals(
//            'App',
//            Str::before('App\Http\Controllers\Controller', '\\')
//        );
//    }

//    public function testBeforeLast()
//    {
//        $this->assertEquals(
//            'App\Http\Controllers\Controller',
//            Str::beforeLast('App\Http\Controllers\Controller', 'Model')
//        );
//
//        $this->assertEquals(
//            'App\Http\Controllers',
//            Str::beforeLast('App\Http\Controllers\Controller', '\\')
//        );
//    }

//    public function testBetween()
//    {
//        $this->assertEquals(
//            ' is my ',
//            Str::between('This is my name', 'This', 'name')
//        );
//
//        $this->assertEquals(
//            'App\Http\Controllers\Controller',
//            Str::between('App\Http\Controllers\Controller', 'Lib', 'Model')
//        );
//    }

//    public function testLength()
//    {
//        $this->assertEquals(
//            4,
//            Str::length('test')
//        );
//
//        $this->assertEquals(
//            4,
//            Str::length('тест')
//        );
//
//        $this->assertEquals(
//            8,
//            Str::length('тест', '8bit')
//        );
//    }

//    public function testLower()
//    {
//        $this->assertEquals(
//            'test',
//            Str::lower('TEST')
//        );
//
//        $this->assertEquals(
//            'тест',
//            Str::lower('Тест')
//        );
//
//        $this->assertNotEquals(
//            'TEST',
//            Str::lower('test')
//        );
//    }

//    public function testReplace()
//    {
//        $this->assertEquals(
//            'PHP 8.1',
//            Str::replace('5.4', '8.1', 'PHP 5.4')
//        );
//
//        $this->assertEquals(
//            'PHP 8.1, MySQL 8.0',
//            Str::replace(['5.4', '5.7'], ['8.1', '8.0'], 'PHP 5.4, MySQL 5.7')
//        );
//    }

//    public function testUpper()
//    {
//        $this->assertEquals(
//            'TEST',
//            Str::upper('test')
//        );
//
//        $this->assertEquals(
//            'ТЕСТ',
//            Str::upper('тест')
//        );
//    }

//    public function testTitle()
//    {
//        $this->assertEquals(
//            'A Nice Title Uses The Correct Case',
//            Str::title('a nice title uses the correct case')
//        );
//
//        $this->assertEquals(
//            'Давно Выяснено, Что При Оценке Дизайна И Композиции Читаемый Текст Мешает Сосредоточиться.',
//            Str::title('Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться.')
//        );
//    }

//    public function testRemove()
//    {
//        $this->assertEquals(
//            'Ptr Pipr pickd a pck of pickld ppprs.',
//            Str::remove('e', 'Peter Piper picked a peck of pickled peppers.')
//        );
//
//        $this->assertEquals(
//            'eter iper picked a peck of pickled peppers.',
//            Str::remove('P', 'Peter Piper picked a peck of pickled peppers.', true)
//        );
//
//        $this->assertEquals(
//            'Pt Pip pickd a pck of pickld ppps.',
//            Str::remove(['e', 'r'], 'Peter Piper picked a peck of pickled peppers.')
//        );
//
//        $this->assertEquals(
//            'В рзультат сгнрированный Lorem Ipsum выглядит правдоподобно.',
//            Str::remove('е', 'В результате сгенерированный Lorem Ipsum выглядит правдоподобно.')
//        );
//
//        $this->assertEquals(
//            ' результате сгенерированный Lorem Ipsum выглядит правдоподобно.',
//            Str::remove('В', 'В результате сгенерированный Lorem Ipsum выглядит правдоподобно.', true)
//        );
//    }

//    public function testPadBoth()
//    {
//        $this->assertEquals(
//            '__James___',
//            Str::padBoth('James', 10, '_')
//        );
//
//        $this->assertEquals(
//            '  James   ',
//            Str::padBoth('James', 10)
//        );
//    }

//    public function testPadLeft()
//    {
//        $this->assertEquals(
//            '-=-=-James',
//            Str::padLeft('James', 10, '-=')
//        );
//
//        $this->assertEquals(
//            '     James',
//            Str::padLeft('James', 10)
//        );
//    }

//    public function testPadRight()
//    {
//        $this->assertEquals(
//            'James-----',
//            Str::padRight('James', 10, '-')
//        );
//
//        $this->assertEquals(
//            'James     ',
//            Str::padRight('James', 10)
//        );
//    }
}
