<?php

use hemric\Murmur;
use PHPUnit\Framework\TestCase;

class MurmurTest extends TestCase {

    public function testHash3_int(): void
    {
      self::assertEquals(236294829, Murmur::hash3_int("The quick brown fox jumps over the lazy dog", 1234567), "hash3_int");
    }

    public function testHash3(): void
    {
      self::assertEquals('cnd0ue', Murmur::hash3("Hello World"), "hash3");
    }

}
