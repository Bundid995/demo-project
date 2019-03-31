<template>
    <component :is="component">
        <slot />
    </component>
</template>

<script>
    import HomeLayout from '../layouts/HomeLayout'

    export default {
        name: 'App',

        components: {
            HomeLayout
        },

        computed: {
            component () {
                return HomeLayout
            }
        }
    }
</script>
