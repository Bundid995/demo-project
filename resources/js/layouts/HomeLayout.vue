<template>
    <v-app>
      <v-toolbar
      app
      color="primary"
      flat
    ></v-toolbar>
         <v-toolbar
           color="primary"
           dark
           extended
           extension-height="300"
           flat
        >
       
            <v-toolbar-title class="mx-auto" slot="extension">
               
                <h2>Welcome to Coin Locker!</h2>
                <v-layout row>
                    <v-flex wrap>
                        <v-btn outline large fab color="white" class="outine-2">
                            <i class="fab fa-bootstrap fa-2x"></i>
                        </v-btn>

                        <v-btn outline large fab color="white" class="outine-2">
                            <i class="fab fa-vuejs fa-3x"></i>
                        </v-btn>
                    
                        <v-btn outline large fab color="white" class="outine-2">
                            <i class="fab fa-laravel fa-2x"></i>
                        </v-btn>

                        
                    </v-flex>
                </v-layout>
            </v-toolbar-title>
             <v-btn icon>
             <v-icon>more_vert</v-icon>
            </v-btn>
        </v-toolbar>

        <v-container>
            <v-layout row>
                <v-flex xs12 md8 offset-md2>
                 <v-container fluid grid-list-lg
                 class="card--flex-toolbar"
                 >

                 <!-- <Stepper/>   -->
                 <!-- <Content/>   -->
                 <Test/>
                </v-container>
                </v-flex>
            </v-layout>
        </v-container>

        <v-footer
         app
         color="primary"
        >
        </v-footer>
    </v-app>
</template>

<script>

// import Stepper from "../components/templates/Stepper";
// import Content from "../components/templates/Content";
import Test from "../components/templates/Test";



export default {
    name: 'HomeLayouts',
    components: {
    // Stepper,
    // Content,
    Test
  },
     data () {
            return {
                // links: [
                //     {
                //         id: '1',
                //         title: 'Dashboard',
                //         description: 'Get detailed anlytics to measure and analyze how users engage with your app',
                //         color: 'orange'
                //     },
                //     {
                //         id: '2',
                //         title: 'Storage',
                //         description: 'Store and retrieve user-generated content, such as images, audio, and videos, without server-side code.',
                //         color: 'teal'
                //     },
                //     {
                //         id: '3',
                //         title: 'Notifications',
                //         description: 'Manage your notification campaigns and send messages to reach the right users at the right time',
                //         color: 'blue'
                //     },
                //     {
                //         id: '4',
                //         title: 'Authentification',
                //         description: 'Authenticate and manage users from a variety of providers without server-side-code',
                //         color: 'purple'
                //     }
                // ]
            }
        }
}
</script>

<style scoped>
    .outine-2 {
        border: 2px solid white;
    }

    .card--flex-toolbar {
        /* margin-top: -104px; */
        /* margin-top: 50px;
        margin-bottom: 50px; */
        background-color: #F5F5F5;

    }

    .learn-more-btn {
        text-transform: initial;
        text-decoration: underline;
    }
    
</style>