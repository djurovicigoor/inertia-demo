<script setup>
defineProps({
	links: Array
})
</script>

<template>
	<div class="mt-6">
		<Component
			:is="link.url ? 'Link' : 'span'"
			v-for="link in links"
			:class="{
			 'text-gray-100' : !link.url , 'font-bold' : link.active
			}"
			:href="link.url"
			class="px-1"
			v-html="link.label"
		/>
		
		<!--										<Link v-for="link in users.links" v-if="link.url" :href="link.url" v-html="link.label"/>-->
	</div>
</template>

<style scoped>

</style>