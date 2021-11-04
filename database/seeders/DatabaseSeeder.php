<?php declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Database\v1\Team;
use App\Models\Database\v1\User;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder.
 */
final class DatabaseSeeder extends Seeder
{
    /**
     * @var int
     */
    private const TEAMS_NUMBER = 24;

    /**
     * @var int
     */
    private const USERS_NUMBER = 10;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory(self::USERS_NUMBER)
            ->create();

        Team::factory(self::TEAMS_NUMBER)
            ->create();
    }
}
