<template>
	<div id="app">
		<HelloWorld msg="Welcome to Your Vue.js App"></HelloWorld>
	</div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
	name: 'app',
	components: {
		HelloWorld
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
