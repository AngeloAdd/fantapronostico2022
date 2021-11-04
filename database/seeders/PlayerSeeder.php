<?php

namespace Database\Seeders;

use App\Models\Database\v1\Player;
use App\Models\Database\v1\Team;
use Illuminate\Database\Seeder;

/**
 * Class PlayerSeeder.
 */
final class PlayerSeeder extends Seeder
{
    /**
     * @var array
     */
    private const DEFENDER = [
        'number' => 8,
        'name' => 'Difensore',
    ];

    /**
     * @var array
     */
    private const FORWARD = [
        'number' => 6,
        'name' => 'Attaccante',
    ];

    /**
     * @var array
     */
    private const GOALKEEPER = [
        'number' => 3,
        'name' => 'Portiere',
    ];

    /**
     * @var array
     */
    private const MIDFIELDER = [
        'number' => 8,
        'name' => 'Centrocampista',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        /** @var Team $teams */
        $teams = Team::all();

        /** @var Team $team */
        foreach ($teams as $team) {
            $this->getGoalkeepers($team);

            $this->getDefenders($team);

            $this->getMidfielders($team);

            $this->getForwards($team);
        }
    }

    /**
     * @param Team $team
     */
    private function getDefenders(Team $team): void
    {
        $this->getPlayerSeededByRole(self::DEFENDER, $team);
    }

    /**
     * @param Team $team
     */
    private function getForwards(Team $team): void
    {
        $this->getPlayerSeededByRole(self::FORWARD, $team);
    }

    /**
     * @param Team $team
     */
    private function getGoalkeepers(Team $team): void
    {
        $this->getPlayerSeededByRole(self::GOALKEEPER, $team);
    }

    /**
     * @param Team $team
     */
    private function getMidfielders(Team $team): void
    {
        $this->getPlayerSeededByRole(self::MIDFIELDER, $team);
    }

    /**
     * @param array $role
     * @param Team $team
     */
    private function getPlayerSeededByRole(array $role, Team $team): void
    {
        Player::factory($role['number'])
              ->for($team)
              ->create(['role' => $role['name']]);
    }
}
