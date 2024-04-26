<?php require('./views/public/partials/head.php') ?>
<?php require('./views/public/partials/nav.php') ?>
<?php require('./views/public/partials/header.php') ?>

    <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <a href="/posts" class="text-blue-500 hover:underline">Go back</a>

        <h2 class="mt-10 font-bold text-2xl text-gray-700"><?= htmlspecialchars_decode($post['content']); ?></h2>

        <a href="/post/edit?id=<?= $post['id'] ?>" class="inline-block mt-5 bg-blue-500 hover:bg-blue-300 text-black-800 font-semibold py-2 px-4 border border-black-400 rounded shadow">Edit post</a>

        <form action="/post/delete" method="POST" class="mt-6">
            <input type="hidden" name="post_id" value="<?= $post['id'] ?>">
  
            <button type="submit" class="bg-red-500 hover:bg-red-300 text-white-800 font-semibold py-2 px-4 border border-black-400 rounded shadow">Delete Post</button>
        </form>

        </div>

        
        
    </main>


<?php require('./views/public/partials/footer.php') ?>