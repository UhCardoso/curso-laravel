<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = ['Product 01', 'Product 02', 'Product 03'];

        return $products;
    }

    public function show($id) {
        return "Exibindo o produto de id: {$id}";
    }

    public function create() {
        return "Exibir formulario de cadastrar produto";
    }

    public function edit($id) {
        return "Editar produto: {$id}";
    }

    public function store() {
        return "Cadastrando produto";
    }

    public function update($id) {
        return "Editando produto: {$id}";
    }

    public function destroy($id) {
        return "Deletando produto: {$id}";
    }
}
