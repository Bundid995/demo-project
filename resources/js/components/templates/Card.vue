<template>
    <div>
       <v-layout row wrap>
              <v-flex
                v-for="card in cards"
                :key="card.title"
                v-bind="{ [`xs${card.flex}`]: true }"
                @click="selecteds =  card.selected"
              >
                <v-card 
                hover
                
                >
                  <v-img
                  
                    :src="card.src"
                    :height="card.height"
                  >
                    <v-container
                      fill-height
                      fluid
                      pa-2
                    >
                      <v-layout fill-height>
                        <v-flex xs12 align-end flexbox>
                          <span class="headline white--text" v-text="card.title"></span>
                        </v-flex>
                      </v-layout>
                    </v-container>
                  </v-img>
  
                  <!-- <v-card-actions> -->
                    <!-- <v-spacer></v-spacer> -->
                    <!-- <v-btn icon>
                      <v-icon>favorite</v-icon>
                    </v-btn>
                    <v-btn icon>
                      <v-icon>bookmark</v-icon>
                    </v-btn>
                    <v-btn icon>
                      <v-icon>share</v-icon>
                    </v-btn> -->
                  <!-- </v-card-actions> -->
                </v-card>
                
              </v-flex>
              <div class="mt-3">Selected: <strong>{{a}}</strong></div>
            </v-layout>
             
    </div>
</template>

<script>

export default {
   

    data: () => ({
      newdata: {
      selected: null
    },
     
      cards: [
        { title: 'Size - S1', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', flex: 3, title_name: '1', height: "150px", selected: 1},
        { title: 'Size - S4', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', flex: 3, title_name: '2', height: "150px", selected: 2  },
        { title: 'Size - S7', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', flex: 3, title_name: '3', height: "150px", selected: 3},
        { title: 'Size - S10', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', flex: 3, title_name:'4', height: "150px", selected: 4},
        { title: 'Size - M2', src: 'https://cdn.vuetifyjs.com/images/cards/road.jpg', flex: 3, title_name:'5', height: "250px", selected: 5 },
        { title: 'Size - M5', src: 'https://cdn.vuetifyjs.com/images/cards/road.jpg', flex: 3, title_name: '6', height: "250px", selected: 6},
        { title: 'Size - M8', src: 'https://cdn.vuetifyjs.com/images/cards/road.jpg', flex: 3, title_name: '7', height: "250px", selected: 7},
        { title: 'Size - M11', src: 'https://cdn.vuetifyjs.com/images/cards/road.jpg', flex: 3, title_name: '8', height: "250px", selected: 8},
        { title: 'Size - L3', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg', flex: 3, title_name: '9', height: "380px", selected: 9},
        { title: 'Size - L6', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg', flex: 3, title_name: '10', height: "380px", selected: 10},
        { title: 'Size - L9', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg', flex: 3, title_name: '11', height: "380px", selected: 11},
        { title: 'Size - L12', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg', flex: 3, title_name: '12', height: "380px", selected: 12},
       
      ]
      
    }),
   
    methods: {
       selecteds: function(event) {

   
    }
  }
      
  }
</script>