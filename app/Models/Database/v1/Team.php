<?php

namespace App\Models\Database\v1;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\Database\v1\TeamFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class Team.
 *
 * @property int $id
 * @property string $name
 * @property string $short_name
 * @property string $flag
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static TeamFactory factory(...$parameters)
 * @method static Builder|Team newModelQuery()
 * @method static Builder|Team newQuery()
 * @method static Builder|Team query()
 * @method static Builder|Team whereCreatedAt($value)
 * @method static Builder|Team whereFlag($value)
 * @method static Builder|Team whereId($value)
 * @method static Builder|Team whereName($value)
 * @method static Builder|Team whereShortName($value)
 * @method static Builder|Team whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Team extends Model
{
    use HasFactory;
}
