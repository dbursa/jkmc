import './bootstrap';
import {createApp} from 'vue';
import TestVueComponent from './components/TestVueComponent.vue';

const app = createApp({
    components: {
        TestVueComponent
    }
})

app.mount('#app')