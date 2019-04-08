<template>
  <div>
    <v-layout
      row
      wrap
    >
      <v-flex
        xs4
        v-for="unit of units"
        :key="unit.id"
      >
        <v-card class="card--content">
         
            
              <v-flex xs12>
                <span
                  class="headline white--text"
                  v-text="unit.size "
                ></span>
                <v-img
                 :aspect-ratio="16/9"
                  src="https://cdn.vuetifyjs.com/images/cards/halcyon.png"
                 
                ></v-img>
                   <span>{{ unit.price }}</span>
              </v-flex>
           

         
          <v-divider light></v-divider>
          <v-card-actions class="pa-3">

            <v-spacer></v-spacer>
          
                <!-- <v-btn
                  flat
                  icon
                >
                  <i class="fas fa-suitcase-rolling fa-2x"></i>

                </v-btn>
                <v-btn
                  flat
                  icon
                >
                  <i class="fas fa-suitcase-rolling fa-2x"></i>
                </v-btn>
                <v-btn
                  flat
                  icon
                >
                  <i class="fas fa-suitcase-rolling fa-2x"></i>
                </v-btn>

                <v-btn
                  flat
                  icon
                >
                  <i class="fas fa-suitcase-rolling fa-2x"></i>
                </v-btn> -->
    
            <v-btn
              flat
              dark
            >Listen now</v-btn>

          </v-card-actions>
        </v-card>
      </v-flex>

      <!-- <v-flex
        xs-12
        v-for="locker of lockers"
        :key="locker.unit_name"
      >
        <v-card class="card--content">

          <p>{{locker.unit_name}}</p>
          <p>{{locker.is_available}}</p>

        </v-card>
      </v-flex>

      <v-flex xs-12>
        <v-card
          class="card--content"
          color="blue-grey"
        >
          BB
        </v-card>
      </v-flex> -->

      <!-- <section v-if="errored">
    <p>We're sorry, we're not able to retrieve this information at the moment, please try back later</p>
  </section> -->

      <!-- <section v-else>
    <div v-if="loading">Loading...</div> -->
      <!-- <v-flex xs-12>
        <v-card class="card--content">
          <div
            v-for="unit of units"
            :key="unit.id"
          >
          
              <p>ID: {{ unit.id }}</p>
              <p>STATUS: {{ unit.size }}</p>
              <p>unit: {{ unit.price }}</p>
          

          </div>
        </v-card>
      </v-flex>
      <v-flex xs-12>
        <v-card class="card--content">
        
        </v-card>
      </v-flex> -->
      <!-- </section> -->

    </v-layout>
  </div>
</template>
  

<script>
import axios from 'axios';

export default {
  data: () => ({
    cards: [
      { title: 'Size - S', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', id: 1 },
      { title: 'Size - M', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', id: 2 },
      { title: 'Size - L', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', id: 3 },

    ],
    money:[
      {id:1, price:1 },
      {id:2, price:2 },
      {id:3, price:5 },
      {id:4, price:10 },
      {id:5, price:20 },
      {id:6, price:50 },
      {id:7, price:100 },
      {id:8, price:500 },
      {id:9, price:1000 },
      ],
    lockers: [],
    units: null,
    errored: false,
    loading: false
  }),
  mounted () {
    axios
      .get('api/units')
      .then(response => {
        this.units = response.data.data

      })
      .catch(error => {
        console.log(error)
        this.errored = true
      })

  },
  methods: {
    getLockers: function () {
      this.loading = true;
      axios.get("api/lockers")
        .then((response) => {
          this.loading = false;
          this.lockers = response.data.data;
        }, (error) => {
          this.loading = false;
        })
    }
  }

}
</script>

<style scoped>
.card--content {
  border-radius: 10px;
  height: 400px;
  background: goldenrod;
  color: black;
  box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.37);
}
</style>