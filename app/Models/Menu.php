<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
    	'language_id',
        'name',
        'link',
        'on_off_submenu',
        'submenu',
        'order'
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
