<template>
 

  <main>
    <div class="container">
      <div
        class="
          row row-cols-1 row-cols-sm-2 row-cols-md-6
          g-4
          justify-content-center
        "
      >
        <div class="col bg-dark text-white p-4 m-1" v-for="(card, index) in cards" :key="index">
           <img :src="card.poster" :alt="card.title" />
          <div class="card-body">
            <h5 class="card-title"></h5>
            <small class="card-text text-secondary"> </small>
            <small class="card-text text-secondary"> </small>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import axios from "axios";

export default {
  name: "App",
  data() {
    return {
      cards: null,
    };
  },

  mounted() {
    axios
      .get("http://localhost/PHP/php-ajax-dischi/db.php")
      .then((response) => {
        this.cards = response.data;
        this.loading = false;
      })

      .catch((error) => {
        console.log(error);
        this.error = `Sorry There is a problem! ${error.message}`;
      });
  },
};
</script>

<style lang="scss">
@import "@/assets/scss/style.scss";
</style>
