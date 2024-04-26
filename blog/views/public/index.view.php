<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/header.php') ?>
	
	<main>
		<!-- header section -->
		<div class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0">
		<div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
			<svg class="absolute left-0 hidden h-full text-white transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
			<path d="M50 0H100L50 100H0L50 0Z"></path>
			</svg>
			<img
			class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full"
			src="./assets/images/header_home.jpg"
			alt="header_img"
			/>
		</div>
		<div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
			<div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">
			<p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
				Welcome to our blog
			</p>
			<h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
				Everything you<br class="hidden md:block" />
				can imagine
				<span class="inline-block text-deep-purple-accent-400">is real</span>
			</h2>
			<p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">
				Welcome to our blog, where insightful articles await! Dive into a world of knowledge, with topics ranging from technology to culture. Stay informed, inspired, and engaged with our curated content.
			</p>
			<div class="flex items-center">
				<a
				href="/register"
				class="getstr_btn inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md  focus:shadow-outline focus:outline-none"
				>
				Get started
				</a>
				<a href="/about" aria-label="" class="inline-flex items-center font-semibold text-gray-800 transition-colors duration-200 hover:text-deep-purple-accent-700">Learn more</a>
			</div>
			</div>
		</div>
		</div>

		<!-- page -->
		<div class="page px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
			<div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
				<h2 class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:mb-6 group">
				<span class="font-serif font-4xl inline-block mb-1 sm:mb-4">
					In the<br class="hidden md:block" />
					Spotlight...
				</span>
				<div class="h-1 ml-auto duration-300 origin-left transform bg-deep-purple-accent-400 scale-x-30 group-hover:scale-x-100"></div>
				</h2>
				<p class="text-gray-700 lg:text-sm lg:max-w-md">
					Explore diverse perspectives on current affairs, tech trends, and lifestyle hacks. Whether you're a seasoned expert or a curious learner, there's something for everyone here. Join our community of thinkers, innovators, and enthusiasts as we embark on a journey of discovery together.
				</p>
			</div>
			
			
			<div class="grid gap-6 row-gap-5 mb-8 lg:grid-cols-4 sm:row-gap-6 sm:grid-cols-2">
				<?php foreach ($four_posts_info as $post) : ?>
					<a href="/blog?id=<?= $post['id'] ?>" aria-label="View Item">
					<div class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
						<img class="object-cover w-full h-56 md:h-64 xl:h-80" src="./assets/uploads/<?= $post['img'] ?>" alt="bg_img" />
						<div class="absolute inset-0 px-6 py-4 transition-opacity duration-200 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
						<p class="mb-4 text-lg font-bold text-gray-100"><?= $post['title'] ?></p>
						<p class="text-sm tracking-wide text-gray-300">
							<?= $post['author'];?><br>
							<?= $post['publishedAt']?>
						</p>
						</div>
					</div>
					</a>
				<?php endforeach; ?>
			</div>
			
			<div class="text-center">
				<a href="/register" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
				Become one of our bloggers
				<svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
					<path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
				</svg>
				</a>
			</div>
		</div>

		<!-- 3rd part -->
		<div>
			<div class="flex flex-col px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20 lg:flex-row">
				<div class="mb-5 lg:w-1/3 lg:mb-0 lg:mr-20">
				<h2 class="relative mb-4 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
					<span class="relative inline-block">
					<svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
						<defs>
						<pattern id="6bfa0e57-faa2-4bb2-ac0e-310782e5eb2d" x="0" y="0" width=".135" height=".30">
							<circle cx="1" cy="1" r=".7"></circle>
						</pattern>
						</defs>
						<rect fill="url(#6bfa0e57-faa2-4bb2-ac0e-310782e5eb2d)" width="52" height="24"></rect>
					</svg>
					<span class="relative">The</span>
					</span>
					Zen Blog
				</h2>
				<p class="mb-4 text-gray-900 lg:mb-6">
					Dive into our rich assortment of blog categories, covering everything from technology and science to lifestyle and culture. Explore insightful articles curated to inform, inspire, and entertain you on a wide range of topics. Find your passion, expand your horizons, and join the conversation today
				</p>
				<a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">
					Learn more
					<svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
					<path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
					</svg>
				</a>
				</div>
				<div class="flex-grow pt-1">
				<div class="flex items-center mb-3">
					<span class="font-bold tracking-wide text-gray-900">Categories</span>
					<span class="ml-1">
					<svg class="w-5 h-5 mt-px text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
						<polygon stroke-width="4" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
					</svg>
					</span>
				</div>
				<div class="grid grid-cols-2 row-gap-6 sm:grid-cols-4">
					<ul class="space-y-2">
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Computers</a>
					</li>
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Health</a>
					</li>
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Reference</a>
					</li>
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">World</a>
					</li>
					</ul>
					<ul class="space-y-2">
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">eCommerce</a>
					</li>
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Business</a>
					</li>
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Portfolio</a>
					</li>
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Video</a>
					</li>
					</ul>
					<ul class="space-y-2">
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Brochure</a>
					</li>
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Nonprofit</a>
					</li>
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Educational</a>
					</li>
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Sports</a>
					</li>
					</ul>
					<ul class="space-y-2">
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Infopreneur</a>
					</li>
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Health</a>
					</li>
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Web</a>
					</li>
					<li>
						<a href="/" class="transition-colors duration-300 hover:text-deep-purple-accent-700">Personal</a>
					</li>
					</ul>
				</div>
				</div>
			</div>
			<div class="relative">
				<img class="object-cover w-full h-56 sm:h-96" src="https://images.pexels.com/photos/3184419/pexels-photo-3184419.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" alt="" />
				<div class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
			</div>
		</div>

	</main>
	

	
<?php require('partials/footer.php') ?>