<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable =['name', 'content'];
    //protected $guarded = ['slug']; //il mass update prenderà in considerazione tutto tranne lo slug
}
