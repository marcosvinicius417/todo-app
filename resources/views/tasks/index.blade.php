@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-xl mt-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Minhas Tarefas</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
        </form>
    </div>

    {{-- Filtro --}}
    <form method="GET" action="{{ route('tasks.index') }}" class="mb-6 flex flex-col md:flex-row items-center gap-4">
        <select name="status" class="border rounded px-4 py-2">
            <option value="">Todos</option>
            <option value="pendente" {{ request('status') == 'pendente' ? 'selected' : '' }}>Pendente</option>
            <option value="em_andamento" {{ request('status') == 'em_andamento' ? 'selected' : '' }}>Em andamento</option>
            <option value="concluido" {{ request('status') == 'concluido' ? 'selected' : '' }}>Concluído</option>
        </select>

        <input type="date" name="due_date" value="{{ request('due_date') }}" class="border rounded px-4 py-2">

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Filtrar</button>

        <a href="{{ route('tasks.create') }}" class="ml-auto bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">+ Nova Tarefa</a>
    </form>

    {{-- Lista de tarefas --}}
    @forelse ($tasks as $task)
        <div class="border p-4 rounded-lg mb-4 bg-gray-50 shadow-sm">
            <h2 class="text-xl font-semibold text-gray-700">{{ $task->title }}</h2>
            <p class="text-gray-600">{{ $task->description }}</p>
            <p class="text-sm text-gray-500">Vencimento: {{ $task->due_date->format('d/m/Y') }}</p>
            <span class="inline-block px-3 py-1 mt-2 text-sm rounded-full
                {{ 
                    $task->status == 'pendente' ? 'bg-yellow-100 text-yellow-800' :
                    ($task->status == 'em_andamento' ? 'bg-blue-100 text-blue-800' :
                    'bg-green-100 text-green-800') 
                }}">
                {{ $task->status_formatted }}
            </span>
        </div>
    @empty
        <p class="text-gray-500">Nenhuma tarefa encontrada.</p>
    @endforelse
</div>
@endsection
