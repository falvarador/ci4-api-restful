<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'description',
        'price',
        'stock',
    ];

    protected $validationRules = [
        'name'       => 'required|max_length[100]',
        'price'      => 'required|numeric',
        'stock'      => 'required|integer',
    ];
}
