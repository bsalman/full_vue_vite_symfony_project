<script setup>
import { onMounted, ref } from "vue";
import axios from "axios";

onMounted(async () => {
  await axios.get("/api/test").then((response) => {
    console.log(response);
  });
  await axios
    .post("/api/form", {
      firstName: "Fred",
      lastName: "Flintstone"
    })
    .then(function (response) {
      console.log(response);
    })
    .catch(function (error) {
      console.log(error);
    });
});
defineProps({
  msg: String
});

const count = ref(0);
</script>

<template>
  <h1>{{ msg }}</h1>
</template>

<style scoped>
.read-the-docs {
  color: #888;
}
</style>
