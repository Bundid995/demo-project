import './bootstrap'
import router from './router'
import App from './components/App.vue'



const app = new Vue({
    el: '#app',
    router,
    template: '<App/>',
    components: {App}
})
export default{

}
