<script setup>

import Nav from "@/Shared/Nav.vue";
</script>

<template>
	<section class="p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent">
		<header class="flex justify-between">
			<div class="flex items-center">
				<h1 class="font-bold text-lg">My app</h1>
				<p class="text-sm ml-2">
					Welcome back, {{ $page.props.auth.user.username }}
				</p>
			</div>
			<Nav/>
		</header>
	</section>
	
	<section>
		<div class="max-w-3xl mx-auto">
			<slot/>
		</div>
	</section>
	<!--	<div class="max-w-7xl mx-auto p-6 lg:p-8">-->
	<!--		<h2 class="text-xl font-semibold">Home view</h2>-->
	<!--		<div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">-->
	<!--			<div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
</template>

<style scoped>

</style>