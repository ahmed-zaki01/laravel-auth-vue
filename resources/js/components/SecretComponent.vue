<template>
  <div class="container">
    <div class="row justify-content-center">
      <!-- login form -->

      <div class="col-6 offset-3 mx-auto mt-3">
        <form action="#" @submit.prevent="handleLogin">
          <div class="form-row">
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="Email Address"
              v-model="formData.email"
            />
          </div>

          <div class="form-row">
            <input
              type="password"
              name="password"
              class="form-control"
              placeholder="Password"
              v-model="formData.password"
            />
          </div>

          <div class="form-row">
            <button type="submit" class="btn btn-primary">Sign In</button>
          </div>
        </form>
      </div>
    </div>
    <!-- secrets list -->

    <div class="row mt-4" v-if="secrets.length">
      <div class="col-6 offset-3">
        <div class="secret" v-for="(secret, index) in secrets" :key="index">
          <em v-text="secret.created_at"></em><br />
          <strong v-text="secret.secret"></strong>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      secrets: [],
      baseUrl: "/laravel-vue-auth/public",
      formData: {
        email: "",
        password: "",
      },
    };
  },
  methods: {
    handleLogin() {
      // send axios request to the login route
      axios.get(`${this.baseUrl}/sanctum/csrf-cookie`).then((response) => {
        axios
          .post(`${this.baseUrl}/login`, this.formData)
          .then((response) => {
            // this.getSecrets();
          })
          .catch((err) => alert(err.response.data.errors.email));
      });
    },
    getSecrets() {
      axios
        .get(`${this.baseUrl}/api/secrets`)
        .then((response) => {
          console.log(response);
          this.secrets = response.data;
        })
        .catch((err) => alert(err.response.data.errors.error));
    },
  },
};
</script>

<style scoped>
.form-row {
  margin-bottom: 8px;
}
</style>
