<script setup>

import NavLink from "@/Shared/NavLink.vue";
</script>

<template>
	<nav>
		<ul class="flex list-disc space-x-4 list-inside ">
			<li>
				<NavLink :active="$page.component === 'Home'" href="/">Home</NavLink>
			</li>
			<li>
				<NavLink :active="$page.component === 'Users'" href="/users">Users</NavLink>
			</li>
			<li>
				<NavLink :active="$page.component === 'Settings'" href="/settings">Settings</NavLink>
			</li>
		</ul>
	</nav>
</template>

<style scoped>

</style>