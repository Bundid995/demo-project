<template>
  <v-item-group>
                <div v-if="lockers && lockers.length">
       <div v-for="locker of lockers" :key="locker.locker_id">
      <p><strong>{{locker.locker_id}}</strong></p>
      <p>{{locker.size}}</p>
      <p>{{locker.price}}</p>
     <p>{{locker.units}}</p>
    </div>
    </div>
    <v-container grid-list-md>
      <v-layout wrap>
      
        <v-flex
          v-for="n in 3"
          :key="n"
          xs12
          md4
        >
          <v-item>
            <v-card
              slot-scope="{ active, toggle }"
              :color="active ? 'primary' : ''"
              class="d-flex align-center"
              dark
              height="300"
              @click="toggle"
              
            >
              <v-scroll-y-transition>
                <div
                  v-if="active"
                  class="display-3 text-xs-center"
                  
                >
                  Active
                </div>
              </v-scroll-y-transition>
            </v-card>
          </v-item>
        </v-flex>
   
      </v-layout>
    </v-container>
     
 
    <!-- <v-btn @click="fetchUsers" >Click</v-btn> -->
  </v-item-group>
 

</template>

<script>
import axios from 'axios';

export default {
  data () {
    return {
      lockers: [],
      errors: []
    }
  },
     created() {
    axios.get('api/lockers')
    .then(response => {
      // JSON responses are automatically parsed.
      this.lockers = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })
    
  }
}
</script>