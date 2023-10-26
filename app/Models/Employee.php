<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function department(): BelongsTo
    {
        return $this->beLongsTo(Department::class);
    }

    public function city(): BelongsTo
    {
        return $this->beLongsTo(City::class);
    }

    public function state(): BelongsTo
    {
        return $this->beLongsTo(State::class);
    }

    public function country(): BelongsTo
    {
        return $this->beLongsTo(Country::class);
    }
}
