<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class STWL extends Model
{
    use HasFactory;

    protected $fillable = [
        'WhName', 'WhCode', 'date', 'time', 'conducted_by', 
        'no_of_labour', 'hc_present', 'topic', 'remarks'
    ];

    protected $table = 's_t_w_l_s';  // Table name is correctly specified
    
    // If your table uses default 'id' as primary key, no need to specify the primary key
    // protected $primaryKey = 'your_custom_primary_key_column_name'; 

    public $timestamps = false;  // Keep this if you're not using created_at and updated_at
}

