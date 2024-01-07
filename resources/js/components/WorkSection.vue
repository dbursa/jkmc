<template>
    <div class="container">
        <h2>Nabízíme</h2>

        <div @click="toggleClass" class="detail-wrapper">
            <div class="caption-wrapper">
                <figure>
                    <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.7" d="M1 2.33337L3.57143 5L7 1" stroke="black" stroke-width="1.1" />
                    </svg>
                </figure>
                <h3>Zakázkové truhlářství</h3>
            </div>
            <div class="content">
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                    magnis dis parturient montes.</p>
                <figure>
                    <img src="@images/intro_bcg_mob.webp" alt="">
                </figure>
            </div>
        </div>
        <div @click="toggleClass" class="detail-wrapper">
            <div class="caption-wrapper">
                <figure>
                    <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.7" d="M1 2.33337L3.57143 5L7 1" stroke="black" stroke-width="1.1" />
                    </svg>
                </figure>
                <h3>Výroba nábytku</h3>
            </div>
            <div class="content">
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                    magnis dis parturient montes.</p>
                <figure>
                    <img src="@images/intro_bcg_mob.webp" alt="">
                </figure>
            </div>
        </div>
        <div @click="toggleClass" class="detail-wrapper">
            <div class="caption-wrapper">
                <figure>
                    <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.7" d="M1 2.33337L3.57143 5L7 1" stroke="black" stroke-width="1.1" />
                    </svg>
                </figure>
                <h3>Kuchyně</h3>
            </div>
            <div class="content">
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                    magnis dis parturient montes.</p>
                <figure>
                    <img src="@images/intro_bcg_mob.webp" alt="">
                </figure>
            </div>
        </div>
        <div class="detail-wrapper">
            <div class="caption-wrapper">
                <figure>
                    <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.7" d="M1 2.33337L3.57143 5L7 1" stroke="black" stroke-width="1.1" />
                    </svg>
                </figure>
                <h3>Vestavěné skříně</h3>
            </div>
            <div class="content">
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                    magnis dis parturient montes.</p>
                <figure>
                    <img src="@images/intro_bcg_mob.webp" alt="">
                </figure>
            </div>
        </div>
        <div @click="toggleClass" class="detail-wrapper">
            <div class="caption-wrapper">
                <figure>
                    <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.7" d="M1 2.33337L3.57143 5L7 1" stroke="black" stroke-width="1.1" />
                    </svg>
                </figure>
                <h3>Pergoly</h3>
            </div>
            <div class="content">
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                    magnis dis parturient montes.</p>
                <figure>
                    <img src="@images/intro_bcg_mob.webp" alt="">
                </figure>
            </div>
        </div>
        <div @click="toggleClass" class="detail-wrapper">
            <div class="caption-wrapper">
                <figure>
                    <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.7" d="M1 2.33337L3.57143 5L7 1" stroke="black" stroke-width="1.1" />
                    </svg>
                </figure>
                <h3>Krytá stání</h3>
            </div>
            <div class="content">
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                    magnis dis parturient montes.</p>
                <figure>
                    <img src="@images/intro_bcg_mob.webp" alt="">
                </figure>
            </div>
        </div>
        <div @click="toggleClass" class="detail-wrapper">
            <div class="caption-wrapper">
                <figure>
                    <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.7" d="M1 2.33337L3.57143 5L7 1" stroke="black" stroke-width="1.1" />
                    </svg>
                </figure>
                <h3>Gravírování dřeva</h3>
            </div>
            <div class="content">
                <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et
                    magnis dis parturient montes.</p>
                <figure>
                    <img src="@images/intro_bcg_mob.webp" alt="">
                </figure>
            </div>
    </div>
</div>
</template>
<script>
 export default {
     data() {
         return {
             isActive: null,
         }
     },
 
     methods: {
        toggleClass(event) {
            let classArr = Array.from(event.currentTarget.classList)

            if (!classArr.includes('active')) {                
                event.currentTarget.classList.add('active');
            } else {
                event.currentTarget.classList.remove('active')
            }
        }
     }
 }

</script>