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
                <h3>CNC obrábění dřeva</h3>
            </div>
            <div class="content">
                <div class="description">
                    <p>Nabízíme CNC obrábění na 3 osém (4 osém) stoji od značka SCM, s NESTINGOVÝM stolem, který může být doplněn vakuovými podložkami nebo pneumatickými svěráky.</p>
                    <span>velikost pracovni plochy:</span>
                    <ul>
                        <li>X – 3000 mm, Y – 1500 mm, Z – 400 mm</li>
                    </ul>
                    <p>Stroj je vybaven vrtací hlavou HITECO s 12-ti vrtáky (9 – vertikálních, 3 horizontální) a drážkovacím kotoučem.</p>
                    <p>Pro obrábění používáme kvalitní nástroje od firmy FREUD a DORMER PRAMET.</p>

                    <span class="types">Provádíme CNC obrábění:</span>
                    <ul>
                        <li>Masiv (DUB, BUK, JASAN,…)</li>
                        <li>Lamino, dřevotřískové desky laminované a dýhované</li>
                        <li>MDF a HDF</li>
                        <li>Překližka</li>
                        <li>Corian desky, kompaktní pracovní desky</li>
                    </ul>
                </div>
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
                <h3>CNC obrábění plastů</h3>
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
                <h3>CNC obrábění schodišť</h3>
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
                <h3>Ostatní výroba</h3>
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