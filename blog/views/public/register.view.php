<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

	<main>
		<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
		<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
			<div class="sm:mx-auto sm:w-full sm:max-w-sm">
				<img class="mx-auto h-10 w-auto" src="./assets/icons/zen_icon.svg" alt="company_logo">
				<h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register here</h2>
			</div>

			<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
				<form class="space-y-6" action="#" method="POST">

					<div>
						<label for="firstName" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
						<div class="mt-2">
							<input id="name" name="firstName" type="text" autocomplete="name"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
							<p></p>
						</div>
					</div>

					<div>
						<label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
						<div class="mt-2">
							<input id="email" name="email" type="email" autocomplete="email"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
							<p></p>
						</div>
					</div>

					<div>
						<div class="flex items-center justify-between">
							<label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
						</div>
						<div class="mt-2">
							<input id="password" name="passwordHash" type="password" autocomplete="current-password"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
							<p></p>
						</div>
					</div>
					<div>
						<div class="flex items-center justify-between">
							<label for="re_password" class="block text-sm font-medium leading-6 text-gray-900">Repeat password</label>
						</div>
						<div class="mt-2">
							<input id="repassword" name="re_passwordHash" type="password" autocomplete="current-password"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
							<p></p>
						</div>
					</div>
					<div>
						<button type="submit" class="btn flex w-full justify-center rounded-md bg-emerald-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-emerald-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-600">Register</button>
					</div>
				</form>
			</div>
		</div>

		<?php if(isset($_GET['succ'])): ?>
		<?php echo "<p class='succ flex width-full justify-center font-bold text-emerald-500'>" . $_GET['succ'] ."</p>" ?>
		<?php endif; ?>
		<?php foreach ($err as $error): ?>
		<p class='flex width-full justify-center font-bold text-red-500'>"<?= $error; ?>"</p>	
		<?php endforeach; ?>
	</main>
	
	<script src="../../assets/public/js/validate_register.js"></script>
<?php require('partials/footer.php') ?>