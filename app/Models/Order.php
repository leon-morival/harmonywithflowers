<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function user()
{
    return $this->belongsTo(User::class);
}

public function remedies()
{
    return $this->belongsToMany(Remedy::class)->withPivot('quantity');
}

}
