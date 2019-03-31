<template>
    <div>
        <div class="container">
        <h2 class="text-center">info</h2>
        <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>province</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        <tr v-for="user in users" :key="user.id">
        <td> {{user.id}}</td>
        <td> {{user.name}}</td>
        <td> {{user.city}}</td>
        <td><a href="#" class="btn btn-primary">Edit</a></td>
        <td><a href="#" class="btn btn-warning">Delete</a></td>
        </tr>
        </table>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        this.getUserData();

    },
    methods: {
        getUserData(){
            axios.get('api/users').then(response=>{
                this.users = response.data;
            });
        }
    },
    data() {
        return {
            users:[],
            user:{
                id:0,
                name:'',
                city:''
            }
        }
    },
}
</script>