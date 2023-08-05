<script setup>

import {Link} from "@inertiajs/vue3";
</script>

<template>
	<nav>
		<ul>
			<li>
				<Link class="hover:underline" href="/">Home</Link>
			</li>
			<li>
				<Link class="hover:underline" href="/users">Users</Link>
			</li>
			<li>
				<Link class="hover:underline" href="/settings">Settings</Link>
			</li>
			<li>
				<Link as="button" class="hover:underline mt-4" href="/logout" method="post">Log Out</Link>
			</li>
		</ul>
	</nav>
</template>

<style scoped>

</style>