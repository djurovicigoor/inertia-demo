<script>

</script>
<script setup>
import Layout from "@/Shared/Layout.vue";
import {Head} from "@inertiajs/vue3";

defineProps({
	name: String,
	frameworks: Array
});
</script>
<template>
	<Head title="App inertia"/>
	<Layout>
		<h2 class="text-xl font-semibold">Home view</h2>
	</Layout>
</template>

<style>

</style>