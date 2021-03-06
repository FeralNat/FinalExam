<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublishingCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'Name',
        'Creator',
        'CurrentOwner'
    ];
}
