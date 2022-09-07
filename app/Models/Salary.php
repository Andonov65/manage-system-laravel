<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @method static create(string[] $array)
 * @method static groupBy(string $string)
 */
class Salary extends Model
{
    use HasFactory;

    protected $fillable = ['sum', 'date_of_payment'];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
