<!--suppress ES6UnusedImports -->
<script setup>
import Layout from "@/Shared/Layout.vue";
import {Link} from "@inertiajs/vue3";
import Pagination from "@/Shared/Pagination.vue";

defineProps({
	users: Object
})
</script>
<template>
	<Layout>
		<Link v-if="false"/>
		<div class="bg-gray-900">
			<div class="mx-auto max-w-7xl">
				<div class="bg-gray-900 py-10">
					<div class="px-4 sm:px-6 lg:px-8">
						<div class="mt-8 flow-root">
							<div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
								<div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
									<table class="min-w-full divide-y divide-gray-700">
										<tbody class="divide-y divide-gray-800">
										<tr v-for="user in users.data" :key="user.id">
											<td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-0">{{ user.name }}</td>
											<td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
												<a class="text-indigo-400 hover:text-indigo-300" href="#">Edit<span class="sr-only">, Lindsay Walton</span></a>
											</td>
										</tr>
										
										<!-- More people... -->
										</tbody>
									</table>
									<Pagination :links="users.links"/>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</Layout>


</template>

<style scoped>

</style>