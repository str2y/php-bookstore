<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>
        <form class="p-4 space-y-4" method="post">
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">E-mail</label>
                <input
                    type="text"
                    name="email"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    name="senha"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
            </div>
            <button type="submit" class="bg-stone-900 border-stone-800 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">Logar</button>
        </form>
    </div>
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Cadastro</h1>
        <form class="p-4 space-y-4" method="POST" action="/registrar">
            <?php if (isset($mensagem) && strlen($mensagem)): ?>
                <div class="bg-green-900 border-stone-800 text-green-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
                    <?= $mensagem ?>
                </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['validacoes']) && sizeof($_SESSION['validacoes'])): ?>
                <div class="bg-red-900 border-stone-800 text-red-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
                    <ul>
                        <li>Vixe!! Deu ruim Zé!</li>
                        <?php foreach ($_SESSION['validacoes'] as $validacao): ?>
                            <li><?= $validacao ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Nome</label>
                <input
                    type="text"
                    name="nome"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">E-mail</label>
                <input
                    type="text"
                    name="email"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Confirme seu E-mail</label>
                <input
                    type="text"
                    name="email_confirmacao"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
            </div>
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    name="senha"
                    class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
            </div>
            <button type="reset" class="bg-stone-900 border-stone-800 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">Cancelar</button>
            <button type="submit" class="bg-stone-900 border-stone-800 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">Cadastrar</button>
        </form>
    </div>
    <div>

    </div>
</div>