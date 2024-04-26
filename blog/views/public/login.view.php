<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/header.php') ?>
	
	<main>
		<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
		<div class="sm:mx-auto sm:w-full sm:max-w-sm">
			<img class="mx-auto h-10 w-auto" src="../../assets/icons/zen_icon.svg" alt="company_logo">
			<h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
		</div>

		<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
			<form class="space-y-6" action="#" method="POST">

				<div>
					<label for="login_email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
					<div class="mt-2">
						<input id="lg_email" name="login_email" type="email" autocomplete="email"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
						<p></p>
					</div>
				</div>

				<div>
					<div class="flex items-center justify-between">
						<label for="login_password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
					</div>
					<div class="mt-2">
						<input id="lg_password" name="login_password" type="password" autocomplete="current-password"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
						<p></p>
					</div>
				</div>

				<div>
					<button type="submit" class="login_btn flex w-full justify-center rounded-md bg-emerald-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">Log in</button>
				</div>
			</form>
		</div>
		<p class="flex w-full justify-center mt-4">If you don't have an account<a href="/register" class="font-medium text-blue-600 dark:text-blue-500 hover:underline pl-2"> registere here</a></p>
	</div>
		<?php if(isset($_GET['succ'])): ?>
		<?php echo "<p class='succ flex width-full justify-center font-bold text-emerald-500'>" . $_GET['succ'] ."</p>" ?>
		<?php endif; ?>
		<?php foreach ($err as $error): ?>
		<p class='flex width-full justify-center font-bold text-red-500'>"<?= $error; ?>"</p>	
		<?php endforeach; ?>		
	</main>

	<script src="../../assets/public/js/validate_login.js"></script>
<?php require('partials/footer.php') ?>