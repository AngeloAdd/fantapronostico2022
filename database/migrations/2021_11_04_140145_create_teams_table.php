<?php

use App\Models\Database\v1\Team;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateTeamsTable.
 */
final class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(
            (new Team())->getTable(),
            static function (Blueprint $table) {
                $table->id();

                $table->string('name');

                $table->string('short_name');

                $table->string('flag');

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
        Schema::dropIfExists((new Team())->getTable());
    }
}
