<template>
 <ul v-if="posts && posts.length">
    <li v-for="post of posts" :key="post.locker_id">
      <p><strong>{{post.locker_id}}</strong></p>
      <p>{{post.size}}</p>
      <p>{{post.price}}</p>
     <p>{{post.units}}</p>
    </li>
  </ul>


</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      posts: [],
      errors: []
    }
  },

  // Fetches posts when the component is created.
  created() {
    axios.get('api/lockers')
    .then(response => {
      // JSON responses are automatically parsed.
      this.posts = response.data
    })
    .catch(e => {
      this.errors.push(e)
    })

    // async / await version (created() becomes async created())
    //
    // try {
    //   const response = await axios.get(`http://jsonplaceholder.typicode.com/posts`)
    //   this.posts = response.data
    // } catch (e) {
    //   this.errors.push(e)
    // }
  }
}
</script>