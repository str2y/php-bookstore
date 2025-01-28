<h1 class="mt-6 font-bold text-lg">Meus Livros</h1>
<div class="grid grid-cols-4 gap-4">
    <div class="col-span-3 flex flex-col gap-4">
        <?php foreach ($livros as $livro) {
            require 'partials/_livro.php';
        } ?>
    </div>
    <div>
        <div class="border border-stone-700 rounded">
            <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Cadastre um novo livro</h1>
            <form class="p-4 space-y-4" method="post" action="/livro-criar" enctype="multipart/form-data">
                <?php if ($validacoes = flash()->get('validacoes_login')): ?>
                    <div class="bg-red-900 border-stone-800 text-red-400 px-4 py-1 rounded-md border-2 text-sm font-bold">
                        <ul>
                            <li>Vixe!! Deu ruim Zé!</li>
                            <?php foreach ($validacoes as $validacao): ?>
                                <li><?= $validacao ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="flex flex-col">
                    <label class="text-stone-400 mb-1">Imagem</label>
                    <input type="file" name="imagem" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"/>
                </div>
                <div class="flex flex-col">
                    <label class="text-stone-400 mb-1">Título</label>
                    <input type="text" name="titulo" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" />
                </div>
                <div class="flex flex-col">
                    <label class="text-stone-400 mb-1">Autor</label>
                    <input type="input" name="autor" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" />
                </div>
                <div class="flex flex-col">
                    <label class="text-stone-400 mb-1">Descrição</label>
                    <textarea type="text" name="descricao" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"></textarea>
                </div>
                <div class="flex flex-col">
                    <label class="text-stone-400 mb-1">Ano de lançamento</label>
                    <select name="ano_de_lancamento" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
                        <?php foreach (range(-1000, date('Y')) as $ano): ?>
                            <option value="<?= $ano ?>"><?= $ano ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="bg-stone-900 border-stone-800 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">
                    Salvar
                </button>
            </form>
        </div>
    </div>
</div>