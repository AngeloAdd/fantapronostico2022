<?php

use App\Models\Database\v1\Player;
use App\Models\Database\v1\Team;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreatePlayersTable.
 */
final class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(
            (new Player)->getTable(),
            static function (Blueprint $table) {
                $table->id();

                $table->string('name');

                $table->string('surname');

                $table->string('role');

                $table->unsignedBigInteger('team_id')
                      ->nullable();

                $table->foreign('team_id')
                      ->references((new Team)->getKeyName())
                      ->on((new Team)->getTable())
                      ->onUpdate('cascade')
                      ->onDelete('set null');

                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists((new Player)->getTable());
    }
}
