<template>
  <v-stepper v-model="e1">
    <v-stepper-header>
      
      <v-stepper-step :complete="e1 > 1" step="1">step 1</v-stepper-step>

      <v-divider></v-divider>

      <v-stepper-step :complete="e1 > 2" step="2">step 2</v-stepper-step>

      <v-divider></v-divider>

      <v-stepper-step step="3">step 3</v-stepper-step>
    </v-stepper-header>

    <v-stepper-items>
      <v-stepper-content step="1">
        <v-container fluid grid-list-md>
           <Card/>
          </v-container>

            <!-- <v-card
          class="mb-5"
          color="grey lighten-1"
          height="200px"
        >
          <Locker/>
        </v-card> -->
        <v-btn
          color="primary"
          @click="e1 = 2"
        >
          Continue
        </v-btn>

        <v-btn flat>Cancel</v-btn>
      </v-stepper-content>

      <v-stepper-content step="2">
        <!-- <v-card
          class="mb-5"
          color="grey lighten-1"
          height="200px"
        ></v-card> -->
         <v-sheet
          class="mb-5"
          color="teal lighten-3"
          height="300px"
        >
         </v-sheet>
        <v-btn
          color="primary"
          @click="e1 = 3"
        >
          Continue
        </v-btn>

        <v-btn flat>Cancel</v-btn>
      </v-stepper-content>

      <v-stepper-content step="3">
       <v-sheet
          class="mb-5"
          color="teal lighten-3"
          height="300px"
        >
         </v-sheet>

        <v-btn
          color="primary"
          @click="e1 = 1"
        >
          Continue
        </v-btn>

        <v-btn flat>Cancel</v-btn>
      </v-stepper-content>
    </v-stepper-items>
  </v-stepper>
</template>

<script>

// import Locker from "../components/templates/Locker";
import Card from "../templates/Card";

  export default {
      name: 'Stepper',
      components: {
    // Locker,
    Card
  },
  
    data () {
      return {
        e1: 0
      }
    }
  }
  
</script>

<style>
 
</style>