<?php $__env->startSection('content'); ?>
<div class="min-h-screen flex items-center justify-center bg-gray-100 py-12 px-4">
    <div class="max-w-md w-full bg-white p-8 rounded-xl shadow-md">
        <h2 class="text-center text-3xl font-bold text-gray-800 mb-6">Criar Conta</h2>

        <form method="POST" action="<?php echo e(route('register')); ?>" class="space-y-4">
            <?php echo csrf_field(); ?>

            <div>
                <label class="block text-gray-700">Nome</label>
                <input type="text" name="name" required
                    class="w-full border rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" required
                    class="w-full border rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div>
                <label class="block text-gray-700">Senha</label>
                <input type="password" name="password" required
                    class="w-full border rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div>
                <label class="block text-gray-700">Confirmar Senha</label>
                <input type="password" name="password_confirmation" required
                    class="w-full border rounded px-4 py-2 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <button type="submit"
                class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-200">
                Registrar
            </button>
        </form>

        <p class="mt-4 text-center text-sm text-gray-600">
            Já tem uma conta?
            <a href="<?php echo e(route('login')); ?>" class="text-blue-600 hover:underline">Entrar</a>
        </p>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\marco\OneDrive\Área de Trabalho\Laravel Test\todo-app\resources\views/auth/register.blade.php ENDPATH**/ ?>