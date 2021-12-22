<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'application_service');
    }
    public function getClientFullNameAttribute()
    {
        if ($this->client_patronymic) {
            return "{$this->client_surname} {$this->client_name} {$this->client_patronymic}";
        }
        return "{$this->client_surname} {$this->client_name}";
    }
}
