<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show_product()
    {
        return 'Liste des produits';

    }


    public function get_product_id(string $id)
    {
        return ('Fiche du produit' .$id
        );
    }

}



