<?php

namespace App\Models\Database\v1;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Database\Factories\Database\v1\TeamFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
 * @property-read Collection|Player[] $players
 * @property-read int|null $players_count
 */
class Team extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'short_name',
        'flag',
    ];

    /**
     * @return HasMany
     */
    public function players(): HasMany
    {
        return $this->hasMany(Player::class);
    }
}
