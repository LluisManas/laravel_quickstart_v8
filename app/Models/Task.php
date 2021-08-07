<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /**
     * Attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = ['name'];

    /** Attributes that should be cast to native types
     * 
     * @var array
    */
    protected $cast = [
        'user_id' => 'int',
    ];

    /**
     * Get user from task
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
