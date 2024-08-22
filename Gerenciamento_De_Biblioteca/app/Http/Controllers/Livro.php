<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    // Exibe a lista de livros
    public function index()
    {
        // Lógica para listar livros
        return view('livros.listar'); // Retorna a view para listar livros
    }

    // Exibe o formulário para editar um livro
    public function edit()
    {
        // Lógica para exibir o formulário de edição
        return view('livros.editar'); // Retorna a view para editar livros
    }

    // Remove um livro
    public function destroy()
    {
        // Lógica para remover um livro
        return view('livros.remover'); // Retorna a view para remover livros
    }

    // Exibe o formulário para adicionar um livro
    public function create()
    {
        // Lógica para exibir o formulário de adição
        return view('livros.adicionar'); // Retorna a view para adicionar livros
    }
}

