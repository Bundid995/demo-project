<template>
    <div>
 <v-container>
    <v-layout
      flex-child
      wrap
    >
      <v-flex
        xs12
        md4
        d-flex
      >
        <v-sheet
          class="d-flex"
          color="green lighten-3"
          height="200"
        >
          <sheet-footer>
           (SIZE - S)
          </sheet-footer>
        </v-sheet>
   
      </v-flex>
       <v-flex
        xs12
        md4
        d-flex
      >
        <v-sheet
          class="d-flex"
          color="yellow lighten-3"
          height="200"
        >
       
          <sheet-footer>
            (SIZE - M)
          </sheet-footer>
        </v-sheet>
       
      </v-flex>

       <v-flex
        xs12
        md4
        d-flex
      >
        <v-sheet
          class="d-flex"
          color="purple lighten-3"
          height="200"
        >
          <sheet-footer>
            (SIZE - L)
          </sheet-footer>
        </v-sheet>
       
      </v-flex>
    
    </v-layout>
  </v-container>
    </div>
</template>

<script>

import Locker from "../templates/Locker";
import axios from 'axios';
export default {

    components: {
      Locker,
      SheetFooter: {
        functional: true,

        render (h, { children }) {
          return h('v-sheet', {
            staticClass: 'mt-auto align-center justify-center d-flex',
            props: {
              color: 'rgba(0, 0, 0, .36)',
              dark: true,
              height: 50
            }
          }, children)
        }
      }
    }
  }
</script>
