<template>
  <body>
    <header>
      <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../public/spotify.png" alt="logo" height="50" width="50" />
          </a>
        </div>
      </nav>
    </header>

    <main>
      <div class="container">
        <div
          class="
            row row-cols-1 row-cols-sm-2 row-cols-md-6
            g-4
            justify-content-center
          "
        >
          <div
            class="col bg-dark text-white p-4 m-1 text-center"
            v-for="(card, index) in cards"
            :key="index"
          >
            <img class="img-fluid" :src="card.poster" :alt="card.title" />
            <div class="card-body">
              <h6 class="card-title text-uppercase fw-bold">
                {{ card.title }}
              </h6>
              <small class="card-text text-secondary">{{ card.author }}</small>
              <div>
                <small class="card-text text-secondary">{{ card.year }}</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
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
      .get("http://localhost/PHP/php-ajax-dischi/php/api.php")
      .then((response) => {
        this.cards = response.data;
        this.loading = false;
        JSON.parse(this.cards);
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
