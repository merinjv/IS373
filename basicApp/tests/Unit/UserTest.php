<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $value1 = 1;
        $value2 = 6;
        $value3 = $value1 + $value2;

        $this->assertEquals(7,$value3);
    }
}
