<template>
	<li>
		<small class="messageName">{{message.name}}</small>
		<div>{{message.message}}</div>
	</li>
</template>
<script>
	export default{
		props:['message']
	}
</script>
<style scoped>
	.messageName{
		font-weight:700;
	}
</style>