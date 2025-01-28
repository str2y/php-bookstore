<form class="w-full flex space-x-2 mt-6">
    <input type="text" name="pesquisar" class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" placeholder="Pesquisar...">
    <button type="submit">🔍</button>
</form>
<!-- lista de livros -->
<section class="flex grid grid-cols-1 md:grid-cols-2 lg:grid-cols- gap-4">
    <?php foreach ($livros as $livro) {
        require 'partials/_livro.php';
    } ?>
</section>