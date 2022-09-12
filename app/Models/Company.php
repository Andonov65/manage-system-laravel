<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

/**
 * @method static create(string[] $array)
 * @method static find(int $int)
 * @method static paginate()
 * @property mixed $id
 */
class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address'];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }

    public function salaries(): HasManyThrough
    {
        return $this->hasManyThrough(Salary::class, Employee::class);
    }
}
