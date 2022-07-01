<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;
class Task extends Model
{
    use HasFactory;
public function owner(){
    return $this->HasOne(Owner::class);
}
}
