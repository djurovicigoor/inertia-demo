<script setup>

import Nav from "@/Shared/Nav.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
	time: String
})
</script>

<template>
	<div class="max-w-7xl mx-auto p-6 lg:p-8">
		<h2 class="text-xl font-semibold">Users view</h2>
		<div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
			<div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
				<Nav></Nav>
			</div>
		</div>
		
		<div style="margin-top: 600px">
			<p>The current time is: {{ time }}</p>
		</div>
		<Link href="/users" preserve-scroll>Refresh</Link>
	</div>

</template>

<style scoped>

</style>