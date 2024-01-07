import './bootstrap';
import {createApp} from 'vue';
import ContactForm from './components/ContactForm.vue';
import Instagram from './components/Instagram.vue';
import WorkSection from './components/WorkSection.vue'

const app = createApp({
    components: {
        ContactForm,
        Instagram,
        WorkSection
    }
})

app.mount('#app')