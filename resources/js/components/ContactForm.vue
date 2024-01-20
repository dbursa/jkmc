<template>
    <div class="container">
        <h2>Požádat o nabídku</h2>

        <form action="POST">
            <div class="input-wrapper">
                <input type="text" name="name" placeholder="Jméno*"/>
                <input type="email" name="email" placeholder="E-mail*" />
                <input type="text" name="phone" placeholder="Telefonní číslo" />
            </div>
            
            <textarea name="" id="" placeholder="Text vaší zprávy*"></textarea>

            <div class="mandatory">
                <span>*Povinné pole</span>
            </div>
    
            <div class="btn-wrapper">
                <button class="secondary" type="submit"><span>Odeslat</span></button>
            </div>
        </form>
    </div>
</template>
<script setup>
//TODO: pridavat class error/success
    
</script>