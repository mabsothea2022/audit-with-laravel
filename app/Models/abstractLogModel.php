<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Add new
use OwenIt\Auditing\Contracts\Auditable;

class abstractLogModel extends abstractModel implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
}
