<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getFullNameAttribute()
    {
        if ($this->patronymic) {
            return "{$this->surname} {$this->name} {$this->patronymic}";
        }
        return "{$this->surname} {$this->name}";
    }

    public function getShortNameAttribute()
    {
        return "{$this->surname} {$this->name[0]}.";
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'master_service');
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}
