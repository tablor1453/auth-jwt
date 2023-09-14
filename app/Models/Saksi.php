<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Saksi extends Model
{
    use HasApiTokens, HasFactory;

    protected $table = "saksi";
    protected $guarded = ['id'];
    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKey()})) {
                $model->{$model->getKeyName()} = $model->generateUid();
            }
        });
    }

    public function generateUid($limit = 16)
    {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }

}
