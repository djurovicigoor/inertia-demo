<script setup>

import NavLink from "@/Shared/NavLink.vue";
</script>

<template>
	<nav>
		<ul class="flex space-x-4 ">
			<li>
				<NavLink :active="$page.component === 'Home'" href="/">Home</NavLink>
			</li>
			<li>
				<NavLink :active="$page.component === 'Users'" href="/users">Users</NavLink>
			</li>
			<li>
				<NavLink :active="$page.component === 'Settings'" href="/settings">Settings</NavLink>
			</li>
			<li>
				<NavLink as="button" href="/logout" method="post">Logout</NavLink>
			</li>
		</ul>
	</nav>
</template>

<style scoped>

</style>