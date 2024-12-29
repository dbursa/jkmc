import './bootstrap';
import {createApp} from 'vue';
import { BootstrapVue3 } from 'bootstrap-vue-3'
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

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue-3/dist/bootstrap-vue-3.css'

app.use(BootstrapVue3)

app.mount('#app')

const hamburgerNav = document.querySelector('.hamburger');
    hamburgerNav.addEventListener('click', () => {
    document.querySelector('.nav-content').classList.add('active');
    document.querySelector('.close').classList.add('active');
    hamburgerNav.classList.remove('active')
});

const closeNav = document.querySelector('.close');
closeNav.addEventListener('click', () => {
    document.querySelector('.nav-content').classList.remove('active');
    document.querySelector('.close').classList.remove('active');
    hamburgerNav.classList.add('active')
});

//TODO: zavrit navbar kdyz na mobilnim zarizeni na neco kliknu



const arrowUp = document.querySelector('.arrow-up');
arrowUp.addEventListener('click', () => {
    window.scrollTo(0,0);
});
    
window.addEventListener('scroll', function() {
    if (window.scrollY > 0) {
        arrowUp.classList.add('show');
    } else {
        arrowUp.classList.remove('show');
    }
}, true);
