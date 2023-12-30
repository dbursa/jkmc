import './bootstrap';
import {createApp} from 'vue';
import ContactForm from './components/ContactForm.vue';
import Instagram from './components/Instagram.vue'

const app = createApp({
    components: {
        ContactForm,
        Instagram
    }
})

app.mount('#app')