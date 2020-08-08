<template>
    <div class="text-center">
        <div class="jumbotron m-0">
            <h1 class="display-4 mb-4">You have {{unread}} unread messages out of {{total}} total.</h1>
            <p class="lead"><button class="btn btn-warning btn-lg" v-on:click="messagesList">VIEW MESSAGES</button></p>
        </div>
    </div>
</template>

<style>

</style>

<script>

export default {
    name : "Welcome",
    props : ['unread', 'total'],

    methods : {
        messagesList(){
            this.$store.commit('ACTIVE_STATE_CHANGE', 0);
        }
    }
}
</script>
