<?php

namespace Tests\Feature\Database\v1;

use App\Models\Database\v1\Team;

/**
 * Class TeamTest.
 *
 * @coversDefaultClass \App\Models\Database\v1\Team
 */
final class TeamTest extends TestCase
{
    /**
     * @var int
     */
    private const SHORT_NAME_LENGTH = 3;

    /**
     * @var int
     */
    private const TEAMS_NUMBER = 12;

    /**
     * Test if Team can be persisted.
     *
     * @test
     * @testdox Test if Team can be persisted.
     *
     * @return void
     */
    public function it_can_be_persisted(): void
    {
        /** @var Team[] $teams */
        $teams = Team::factory(self::TEAMS_NUMBER)
                     ->create();

        $this->assertDatabaseCount(
            (new Team())->getTable(),
            self::TEAMS_NUMBER
        );

        /** @var Team $team */
        foreach ($teams as $team) {
            $team->refresh();

            $this->assertNotNull($team->id);
            $this->assertIsInt($team->id);

            $this->assertNotNull($team->name);
            $this->assertIsString($team->name);

            $this->assertNotNull($team->short_name);
            $this->assertIsString($team->short_name);
            $this->assertSame(self::SHORT_NAME_LENGTH, strlen($team->short_name));

            $this->assertNotNull($team->flag);
            $this->assertStringContainsString('flag', $team->flag);
        }
    }
}
