

<?php $__env->startSection('content'); ?>
<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-xl mt-10">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Minhas Tarefas</h1>
        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">Logout</button>
        </form>
    </div>

    
    <form method="GET" action="<?php echo e(route('tasks.index')); ?>" class="mb-6 flex flex-col md:flex-row items-center gap-4">
        <select name="status" class="border rounded px-4 py-2">
            <option value="">Todos</option>
            <option value="pendente" <?php echo e(request('status') == 'pendente' ? 'selected' : ''); ?>>Pendente</option>
            <option value="em_andamento" <?php echo e(request('status') == 'em_andamento' ? 'selected' : ''); ?>>Em andamento</option>
            <option value="concluido" <?php echo e(request('status') == 'concluido' ? 'selected' : ''); ?>>Concluído</option>
        </select>

        <input type="date" name="due_date" value="<?php echo e(request('due_date')); ?>" class="border rounded px-4 py-2">

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Filtrar</button>

        <a href="<?php echo e(route('tasks.create')); ?>" class="ml-auto bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">+ Nova Tarefa</a>
    </form>

    
    <?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="border p-4 rounded-lg mb-4 bg-gray-50 shadow-sm">
            <h2 class="text-xl font-semibold text-gray-700"><?php echo e($task->title); ?></h2>
            <p class="text-gray-600"><?php echo e($task->description); ?></p>
            <p class="text-sm text-gray-500">Vencimento: <?php echo e($task->due_date->format('d/m/Y')); ?></p>
            <span class="inline-block px-3 py-1 mt-2 text-sm rounded-full
                <?php echo e($task->status == 'pendente' ? 'bg-yellow-100 text-yellow-800' :
                    ($task->status == 'em_andamento' ? 'bg-blue-100 text-blue-800' :
                    'bg-green-100 text-green-800')); ?>">
                <?php echo e($task->status_formatted); ?>

            </span>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="text-gray-500">Nenhuma tarefa encontrada.</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\marco\OneDrive\Área de Trabalho\Laravel Test\todo-app\resources\views/tasks/index.blade.php ENDPATH**/ ?>