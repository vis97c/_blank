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
	// INICIA LIFEHOOKS
	// para mas detalles revise la documentacion de vue.js 2.0
	beforeCreate(){},
	created() {
		// el contenido ha sido creado y ahora hace parte del virtualDOM
		// free land
	},
	beforeMount(){},
	mounted() {
		// La plantilla a sido montada en el DOM
	},
	beforeUpdate() {},
	updated() {},
	beforeDestroy() {
		// window.removeEventListener('scroll');
	},
	destroyed() {}
	// TERMINA LIFEHOOKS
}
</script>
