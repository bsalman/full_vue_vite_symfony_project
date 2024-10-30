<template>
  <div
    class="container max-w-md mx-auto rounded-xl shadow-md overflow-hidden md:max-w-2xl bg-gray-100">
    <div class="text-3xl font-bold underline">hallo</div>
  </div>
</template>
<script setup>
import { onMounted, ref } from "vue";
import axios from "axios";

// onMounted(async () => {
//   await axios.get("/api/test").then((response) => {
//     console.log(response);
//   });
//   await axios
//     .post("/api/form", {
//       firstName: "Fred",
//       lastName: "Flintstone"
//     })
//     .then(function (response) {
//       console.log(response);
//     })
//     .catch(function (error) {
//       console.log(error);
//     });
// });
</script>
