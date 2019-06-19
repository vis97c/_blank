<template>
	<div id="app">
		<Hello></Hello>
	</div>
</template>

<script>
import Hello from './components/HelloWorld.vue'

export default {
	name: 'app',
	components: {
		Hello
	},
	data() {
		return {
			// variable: 'valor';
		}
	},
	methods: {
		// metodo: function(section) {
		// 	let _this = this;
		// 	//tu funcion
		// 	return
		// },
	},
	computed: {
		// computado(){
		// 	//contenido
		// },
	},
	created() {
		//free land
	},
	beforeDestroy() {
		// window.removeEventListener('scroll');
	}

}
</script>
