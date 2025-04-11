
@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow-md rounded-xl mt-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Criar Nova Tarefa</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
        </form>
    </div>

    <form method="POST" action="{{ route('tasks.store') }}" class="space-y-4">
        @csrf

        <div>
            <label class="block text-gray-700">Título</label>
            <input type="text" name="title" class="w-full border rounded px-4 py-2 mt-1" required>
        </div>

        <div>
            <label class="block text-gray-700">Descrição</label>
            <textarea name="description" class="w-full border rounded px-4 py-2 mt-1"></textarea>
        </div>

        <div>
            <label class="block text-gray-700">Data de Vencimento</label>
            <input type="date" name="due_date" class="w-full border rounded px-4 py-2 mt-1" required>
        </div>

        <div>
            <label class="block text-gray-700">Status</label>
            <select name="status" class="w-full border rounded px-4 py-2 mt-1">
                <option value="pendente">Pendente</option>
                <option value="em_andamento">Em andamento</option>
                <option value="concluido">Concluído</option>
            </select>
        </div>

        <div class="text-right">
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Salvar</button>
        </div>
    </form>
</div>
@endsection