<?php require('./views/public/partials/head.php') ?>
<?php require('./views/public/partials/nav.php') ?>
<?php require('./views/public/partials/header.php') ?>

    <main>
    <?php if(isset($_GET['succ'])): ?>
	<?php echo "<p class='succ mt-6 flex width-full justify-center font-bold text-emerald-500'>" . $_GET['succ'] ."</p>" ?>
	<?php endif; ?>
    <h2 class="flex justify-center mb-2 mt-0 text-4xl font-medium leading-tight text-primary">These are your posts:</h2>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <ul class="flex flex-row gap-2">
            <?php foreach ($logged_user_posts as $post) : ?>
                <li class="max-width-64">
                    <div class="block rounded-lg bg-white shadow-secondary-1">
                        <a href="/show?id=<?= $post['id'] ?>">
                            <img
                            class="postimg rounded-t-lg"
                            src="assets/uploads/<?= $post['img'] ?>"
                            alt="post_img" />
                        </a>
                        <div class="p-6 text-surface dark:text-white">
                            <h5 class="mb-2 text-xl font-medium leading-tight"><?= $post['title'] ?></h5>

                            <a href="/show?id=<?= $post['id'] ?>" class="text-black-500 hover:underline">
                                Click me to read the post
                            </a>
                            <span class="block w-full mt-6 text-gray-500">Published date and time:</span>
                            <div class="mt-6 font-bold"><?= $post['publishedAt']; ?></div>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>

            <a href="/post/create?id=<?= $user_id ?>" class="text-red-500 hover:underline mt-10 inline-block text-lg">Create New Post</a>
        </div>
    </main>

<?php require('./views/public/partials/footer.php') ?>