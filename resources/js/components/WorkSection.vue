<template>
    <div class="container">
        <h2>Nabízíme</h2>

        <div class="work-wrapper">
            <div class="work-navbar">
                <div class="scroll-container">
                    <ul>
                        <li :class="{'active': this.activeTab === 1 }" @click="switchTabs(1)">CNC obrábění dřeva</li>
                        <li :class="{'active': this.activeTab === 2 }" @click="switchTabs(2)">CNC obrábění plastů</li>
                        <li :class="{'active': this.activeTab === 3 }" @click="switchTabs(3)">CNC obrábění schodišť</li>
                        <li :class="{'active': this.activeTab === 4 }" @click="switchTabs(4)">Ostatní výroba</li>
                    </ul>
                </div>
            </div>
            <div class="work-content-wrapper">
                <div :class="['content', 'work-content-1', {'active': this.activeTab === 1}]">
                    <div class="description">
                        <p>Nabízíme CNC obrábění na 3 osém (4 osém) stoji od značka SCM, s NESTINGOVÝM stolem, který může být doplněn vakuovými podložkami nebo pneumatickými svěráky.</p>
                        
                        <span>Velikost pracovni plochy:</span>
                        <ul>
                            <li>X – 3000 mm</li>
                            <li>Y – 1500 mm</li>
                            <li>Z – 400 mm</li>
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
                <div :class="['content', 'work-content-2', {'active': this.activeTab === 2}]">tab2</div>
                <div :class="['content', 'work-content-3', {'active': this.activeTab === 3}]">tab3</div>
                <div :class="['content', 'work-content-4', {'active': this.activeTab === 4}]">tab4</div>
            </div>
        </div>
</div>
</template>
<script>
 export default {
     data() {
         return {
             isActive: null,
             activeTab: 1
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
        },

        switchTabs(idOfTab) {
            this.activeTab = idOfTab
        }
     }
 }

</script>