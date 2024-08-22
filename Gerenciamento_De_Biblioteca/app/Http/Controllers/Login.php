<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    // Mostrar o formulário de login que também é a página inicial
    public function showLoginForm()
    {
        return view('home'); // View da sua página inicial, que também é a de login
    }

    // Processar o login
    public function login(Request $request)
    {
        // Validar os dados de entrada
        $request->validate([
            'email_usuario' => 'required|email',
            'senha_usuario' => 'required',
        ]);

        // Tentativa de autenticação
        $credentials = [
            'email_usuario' => $request->input('email_usuario'),
            'password' => $request->input('senha_usuario'),
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->tipo === 'bibliotecario') {
                return redirect()->intended('/bibliotecario');
            } else {
                return redirect()->intended('/usuario');
            }
        } else {
            return redirect()->back()->withErrors([
                'email_usuario' => 'As credenciais fornecidas não correspondem aos nossos registros.',
            ]);
        }
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redireciona de volta para a página de login/home
    }
}
