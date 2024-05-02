<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'long_description'];

    // protected $guarded = ['secret']; //This makes the `secret` non fillable but This is more dangerous than fillable because it automatically makes all the other properties automatically non fillable. 

    public function toggleComplete(){
        $this->completed = !$this->completed;
        $this->save();
    }
}
