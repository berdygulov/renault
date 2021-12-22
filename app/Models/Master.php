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

    public function services()
    {
        return $this->belongsToMany(Service::class, 'master_service');
    }

    public function getShortNameAttribute()
    {
        return $this->name . ' ' . $this->surname[0] . '.';
    }

}
