{{-- resources/views/auth/login.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4">
    <div class="max-w-md w-full bg-white p-8 rounded-xl shadow-md">
        <h2 class="text-center text-3xl font-bold text-gray-800 mb-6">Entrar na sua conta</h2>

        @if(session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" required autofocus
                    class="w-full border rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div>
                <label class="block text-gray-700">Senha</label>
                <input type="password" name="password" required
                    class="w-full border rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-200">
                Entrar
            </button>
        </form>

        @if (Route::has('register'))
            <p class="mt-4 text-center text-sm text-gray-600">
                Não tem uma conta?
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Cadastre-se</a>
            </p>
        @endif
    </div>
</div>
@endsection
