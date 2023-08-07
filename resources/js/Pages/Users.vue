<script setup>
import Layout from "@/Shared/Layout.vue";

defineProps({
	users: Array
})
</script>
<template>
	<Layout>
		<h2 class="text-xl font-semibold">Users view</h2>
	</Layout>
	
	<ul>
		<li v-for="user in users" :key="user.id" v-text="user.name"></li>
	</ul>
</template>

<style scoped>

</style>