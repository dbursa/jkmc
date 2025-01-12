<template>
    <div class="container-jkmc">
        <h2>Nabízíme</h2>

        <div class="btn-wrapper d-flex flex-column flex-lg-row">
            <b-tabs
                nav-class="gap-3 flex-column flex-lg-row align-items-start w-100"
                content-class="mt-5"
                pills
            >
                <b-tab @click="scrollToContent('cnc-wood')" title-link-class="w-100 mw-100" title="CNC obrábění dřeva" active>
                <div id="cnc-wood"  class="content">
                    <div class="text">
                        <p>
                            Třískové obrábění dřeva, materiálů na bázi dřeva na 3 osém (4 osém) nestingovém centru od značky SCM  (upínání dílu přes prodyšnou MDF desku a pomocí podtlaku uchycení deskového materiálu).
                            K dispozici máme i pneumatické svěráky včetně vakuových podložek použivaných na trámcových CNC.
                            Takto lze desku frézovat na požadované tvary a provést všechny operace (frézování, vrtání, řezání) na jedno založení.
                            Pokud nemáte dostatečně velký protah, jsme schopni formátovat desky do rozměru 3000x1500 mm.
                        </p>

                        <strong>Technické parametry stoje (velikost pracovní plochy):</strong>
                        <ul>
                            <li>X - 3000 mm</li>
                            <li>Y - 1500 mm</li>
                            <li>Z - 250 mm</li>
                        </ul>

                        <strong>Kapacita zásobníku nástrojů:</strong>
                        <ul>
                            <li>12 pozic</li>
                        </ul>

                        <p>Stroj je vybaven vrtací hlavou HITECO s 12-ti vrtáky (9 – vertikálních, 3 horizontální) a drážkovacím kotoučem. Pro obrábění používáme kvalitní nástroje od firmy FREUD a DORMER PRAMET.</p>

                        <strong>Obrábíme:</strong>
                        <ul>
                            <li>Masiv (smrk, borovice, buk, dub, jasan, …)</li>
                            <li>Lamino, dřevotřískové desky laminované a dýhované</li>
                            <li>Překližka</li>
                            <li>Corian desky, kompaktní desky</li>
                            <li>Dřevoplast</li>
                        </ul>

                        <p>Domunentaci dodávat ideálně ve 3D modelech ve formátu .stp případně 2 D formát .dxf. Poradíme si ale i náčtem tužka-papír.</p>
                    </div>
                </div>
                </b-tab>
                <b-tab @click="scrollToContent('cnc-plastic')" title-link-class="w-100 mw-100" title="CNC obrábění plastů">
                <div id="cnc-plastic" class="content">
                    <div class="text">
                        <p>
                            Třískové obrábění plastů  na 3 osém (4 osém) nestingovém centru od značky SCM  (upínání dílu přes prodyšnou MDF desku a pomocí podtlaku uchycení deskového materiálu).
                            K dispozici máme i pneumatické svěráky včetně vakuových podložek použivaných na trámcových CNC.
                            Takto lze desku frézovat na požadované tvary a provést všechny operace (frézoání, vrtání, řezání) na jedno založení.
                            Na obrobených dílech jsme schopni dodělat dle požadavku zahloubení, závity, závitové vložky, …
                        </p>

                        <strong>Technické parametry stoje (velikost pracovní plochy):</strong>
                        <ul>
                            <li>X - 3000 mm</li>
                            <li>Y - 1500 mm</li>
                            <li>Z - 250 mm</li>
                        </ul>

                        <strong>Kapacita zásobníku nástrojů:</strong>
                        <ul>
                            <li>12 pozic</li>
                        </ul>

                        <p>
                            Stroj je vybaven vrtací hlavou HITECO s 12-ti vrtáky (9 – vertikálních, 3 horizontální) a drážkovacím kotoučem.
                            Pro obrábění používáme kvalitní nástroje od firmy FREUD a DORMER PRAMET.
                        </p>

                        <strong>Obrábíme:</strong>
                        <ul>
                            <li>Technické plasty  na bázi polyethylen (PE), polypropylenu (PP), PVC, PVDF…</li>
                            <li>Plexi sklo</li>
                        </ul>

                        <p>Co nelze obrobit na CNC jsme schopni uříznout na velkoformátové pile SCM  class si 350</p>
                    </div>
                </div>
                </b-tab>
                <b-tab @click="scrollToContent('cnc-stairs')" title-link-class="w-100 mw-100" title="CNC výroba dřevěných schodišť">
                <div id="cnc-stairs" class="content">
                    <div class="text">
                        <p>Provádíme návrh a výrobu dřevěných schodišť.</p>
                        <p>V případě požadavku zákazníka možná kombinace s kovem, sklem.</p>
                        <p>Pro návrh a 3D vizualizaci používáme prgram od německého výrobce <a href="https://www.sema-soft.de/cz/software/" target="_blank" rel="noopener noreferrer">SEMASOFT</a>.</p>
                        <p>3D návrh je možno poslat zákazníkovi e-mailem a ten si může v pohodlí domova návrh prohlédnout, zkontrolovat, proměřit.</p>
                        <p>Pro TRUHLÁŘE nabízíme spolupráci, tedy pouze dílčí výrobu - CNC frézování.</p>
                    </div>
                </div>
                </b-tab>
                <b-tab @click="scrollToContent('other-production')" title-link-class="w-100 mw-100" title="Ostatní výroba">
                <div id="other-production" class="content">
                    <div class="text">
                        <strong>Provádíme standardní tluhlářské práce:</strong>
                        <ul>
                            <li>řezání na formátovací pile SCM class SI 350</li>
                            <li>hoblování (srovnávání) na srovnávací frézce SCM class f 410</li>
                            <li>hoblování (tloušťkování, protahování) na tloušťkovací frézce class s 630</li>
                            <li>kolikování (spojování) pomocí Festool Domino</li>
                        </ul>

                        <p>Pro výrobu používáme nové dřevoobráběcí stroje od italské firmy SCM, které zaručují přesnost, kvalitu a následně spokojenost našich zákazníků.</p>
                        <p>Profesionální nářadí používáme od firem Festool a Milwaukee.</p>
                    </div>
                </div>
                </b-tab>
            </b-tabs>
        </div>
    </div>
</template>
<script>
 export default {
     data() {
         return {
         }
     },
     methods: {
        scrollToContent(index) {
            const targetElement = document.getElementById(index);
            if (targetElement && window.innerWidth < 1200) {
                targetElement.scrollIntoView({ behavior: "smooth" });
            }
        },
    },
 }

</script>