<template>
  <div>
    <h2>Požádat o nabídku</h2>

    <form @submit.prevent="submitForm">
      <div class="form-container">
        <div class="input-wrapper">
          <input v-model="form.name" type="text" name="name" placeholder="Jméno*" />
          <input v-model="form.email" type="email" name="email" placeholder="E-mail*" />
          <input v-model="form.phone" type="text" name="phone" placeholder="Telefonní číslo" />
        </div>

        <textarea v-model="form.message" placeholder="Text vaší zprávy*"></textarea>
      </div>

      <div class="mandatory">
        <span>*Povinné pole</span>
      </div>

      <!-- Success & error messages -->
      <div v-if="successMessage">
        {{ successMessage }}
        <!-- TODO: dostylovat -->
      </div>

      <div v-if="errorMessages.length">
        <ul>
          <li v-for="(msg, index) in errorMessages" :key="index">
            {{ msg }}
          </li>
        </ul>
        <!-- TODO: dostylovat -->
      </div>

      <div class="btn-wrapper">
        <button class="secondary btn-jkmc" type="submit" :disabled="loading">
          <span>{{ loading ? "Odesíláme..." : "Odeslat" }}</span>
        </button>
      </div>
    </form>
  </div>
</template>

<script setup>
import { reactive, ref } from "vue";
import axios from "axios";

const form = reactive({
  name: "",
  email: "",
  phone: "",
  message: "",
});

const loading = ref(false);
const successMessage = ref("");
const errorMessages = ref([]); // <-- array instead of string

const submitForm = async () => {
  successMessage.value = "";
  errorMessages.value = [];
  loading.value = true;

  try {
    await axios.post("/api/request-offer", form);
    successMessage.value = "Email byl úspěšně odeslán!";
    // reset form
    form.name = "";
    form.email = "";
    form.phone = "";
    form.message = "";
  } catch (err) {
    if (err.response?.data?.errors) {
      errorMessages.value = Object.values(err.response.data.errors).flat();
    } else {
      errorMessages.value = ["Něco se pokazilo při odesílání."];
    }
  } finally {
    loading.value = false;
  }
};
</script>
