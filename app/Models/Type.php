<?php

namespace App\Models;

use App\Enums\TypeBacEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_bac',
        'type_bac',
    ];
    protected function casts(): array
    {
        return [
        'type' => TypeBacEnum::class,
        'race' => TypeBacEnum::class,
        ];
    }
    public function bacs()
    {
        return $this->hasMany(Bac::class);
    }
}
