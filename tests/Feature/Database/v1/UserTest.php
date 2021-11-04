<?php declare(strict_types=1);

namespace Tests\Feature\Database\v1;

use App\Models\Database\v1\User;

/**
 * Class UserTest.
 *
 * @coversDefaultClass \App\Models\Database\v1\User
 */
class UserTest extends TestCase
{
    /**
     * @var int
     */
    private const USERS_NUMBER = 10;

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
        /** @var User[] $users */
        $users = User::factory(self::USERS_NUMBER)
                     ->create();

        $this->assertDatabaseCount(
            (new User())->getTable(),
            self::USERS_NUMBER
        );

        /** @var User $user */
        foreach ($users as $user) {
            $user->refresh();

            $this->assertNotNull($user->id);
            $this->assertIsInt($user->id);

            $this->assertNotNull($user->name);
            $this->assertIsString($user->name);

            $this->assertNotNull($user->email);
            $this->assertIsString($user->email);
        }
    }
}
