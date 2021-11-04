<?php declare(strict_types=1);

namespace Tests\Feature\Database\v1;

use App\Models\Database\v1\User;
use Tests\TestCase;

/**
 * Class UserTest.
 *
 * @coversDefaultClass \App\Models\Database\v1\User
 */
class UserTest extends TestCase
{
    /**
     * Test if User can be persisted.
     *
     * @test
     * @testdox Test if User can be persisted.
     *
     * @return void
     */
    public function it_can_be_persisted(): void
    {
        /** @var User $user */
        $user = User::factory()
                    ->create();

        $this->assertNotNull($user->id());
    }
}
