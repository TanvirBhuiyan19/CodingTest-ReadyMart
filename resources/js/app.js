require('./bootstrap');

window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app',
    data: { 
        contents: [
            { name: "Post", id: 1 },
            { name: "Video", id: 2 }
        ],
        selectedContent: null
    
    },
    methods: {
         changeContent (event) {
      this.selectedContent = event.target.options.selectedIndex
    }
         
    }
    
});
