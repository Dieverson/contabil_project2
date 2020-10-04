<template>
  <v-app>
    <div class="main-layout">
      <navbar />

      <div class="container mt-4">
        <child />
      </div>
    </div>
  </v-app>
</template>

<script>
import Navbar from "~/components/Navbar";

export default {
  name: "MainLayout",

  components: {
    Navbar,
  },
};
</script>
