<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\IsActiveScope;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        "id",
        "name",
        "description",
        "is_active"
    ];

    protected static function booted(): void
    {
        parent::booted();
        self::addGlobalScope(new IsActiveScope());
    }
}
