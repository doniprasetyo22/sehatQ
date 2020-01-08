<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    protected $table = 'purchase_history';
    protected $fillable = ['user_id','prod_id'];
    protected $primaryKey = 'id';
}
