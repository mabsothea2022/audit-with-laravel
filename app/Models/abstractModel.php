<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class abstractModel extends Model
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
}
