<script setup>

import {Link} from "@inertiajs/vue3";

defineProps({
	active: Boolean
})
</script>

<template>
	<Link :class="{'text-bold text-lime-300' : active}" class="hover:underline" href="/">
		<slot></slot>
	</Link>

</template>

<style scoped>

</style>