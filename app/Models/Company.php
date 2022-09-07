<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
}
