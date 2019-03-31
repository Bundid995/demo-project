<template>
  <v-app>
    <v-toolbar
      app
      color="#041E30"
    ></v-toolbar>
    <v-content>
        <v-container>
          <v-layout justify-center>
            <v-flex
              xs12
              sm8
            >
              <v-card>
                <v-card-title class="light-blue darken-4">
                  <span class="headline white--text">Coin Locker</span>
                </v-card-title>
              </v-card>

              <v-spacer></v-spacer>

              <Stepper/>
            </v-flex>
          </v-layout>
        </v-container>

    </v-content>
    <v-footer
      app
      color="#041E30"
    ></v-footer>
  </v-app>
</template>


<script>

// import Stepper from "@/js/components/templates/Stepper";

// export default {
//   name: 'App',
//   components: {
//     Stepper
//   },
//   data () {
//     return {
//       e1: 0
//     }
//   }
// }
</script>
