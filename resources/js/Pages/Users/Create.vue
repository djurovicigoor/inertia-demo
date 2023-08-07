<script setup>
import Layout from "@/Shared/Layout.vue";
import {useForm} from '@inertiajs/inertia-vue3';

let form = useForm({
	name: '',
	email: '',
	password: ''
});

let submit = () => {
	form.post('/users', form);
}
</script>

<template>
	<Layout>
		<form class="max-w-md mx-auto mt-8" @submit.prevent="submit">
			<div class="mb-6">
				<label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name"> Name </label>
				
				<input id="name" v-model="form.name" class="border border-gray-400 p-2 w-full text-black" name="name" type="text"/>
				<div v-if="form.errors.name" class="mt-2 text-red-500 text-xs" v-text="form.errors.name"></div>
			</div>
			
			<div class="mb-6">
				<label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email"> Email </label>
				
				<input
					id="email"
					v-model="form.email"
					class="border border-gray-400 p-2 w-full text-black"
					name="email"
					
					type="email"
				/>
				<div v-if="form.errors.email" class="mt-2 text-red-500 text-xs" v-text="form.errors.email"></div>
			
			</div>
			
			<div class="mb-6">
				<label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password"> Password </label>
				
				<input
					id="password"
					v-model="form.password"
					class="border border-gray-400 p-2 w-full text-black"
					name="password"
					
					type="password"
				/>
				<div v-if="form.errors.password" class="mt-2 text-red-500 text-xs" v-text="form.errors.password"></div>
			
			</div>
			
			<div class="mb-6">
				<button :disabled="form.processing" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" type="submit">Submit</button>
			</div>
		</form>
	</Layout>
</template>

<style scoped>

</style>