<?php declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Database\v1\User;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder.
 */
class DatabaseSeeder extends Seeder
{
    /**
     * @var int
     */
    private const USER_NUMBER = 10;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory(self::USER_NUMBER)
            ->create();
    }
}
