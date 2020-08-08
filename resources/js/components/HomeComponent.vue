<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div v-if="isLogged && active === 'Welcome'" class="card">
                    <welcome-component :unread="unread" :total="messages.length"></welcome-component>
                </div>



                <div v-if="isLogged && active === 'Messages'" class="card">
                    <div class="card-header">Your Messages</div>
                    <button class="btn btn-warning" v-on:click="$store.commit('ACTIVE_STATE_CHANGE', 'Welcome')">< Back Home</button>
                    <div class="list-group">
                        <a v-on:click="readMessage(message.id)" v-for="message in messages" href="#" class="list-group-item list-group-item-action">{{message.subject}}
                            <span class="alert alert-warning m-0" v-if="message.isRead === 0"><b>Unread</b></span>
                            <span class="alert alert-success m-0" v-else><b>Readed</b></span>
                        </a>
                    </div>
                </div>


                <div v-if="active === 'MessageDetail'" class="card">
                    <detail-component :message="this.$store.state.message"></detail-component>
                    <a v-on:click="back" class="btn btn-primary btn-sm mt-2"> < Back</a>
                </div>



            </div>
        </div>
    </div>
</template>
<style scoped>
    .container{
        display: flex;
        flex-direction: column;
        top: 50%;
        position: relative;
        transform: translateY(50%);
    }
    .list-group a{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
    }
</style>
<script>
    import {mapGetters} from "vuex";
    import {store} from "../store/store"
    import DetailComponent from "./DetailComponent";
    import WelcomeComponent from "./WelcomeComponent";
    export default {
        components :{
            DetailComponent,
            WelcomeComponent
        },
        data(){
            return{
                isLogged: true
            }
        },
        computed: {
            ...mapGetters(['messages', 'active', 'unread'])
        },
        store,
        methods:{
          loadMessages(){
              //return this.$store.commit('LOAD_STATE')
              return this.$store.dispatch('messages');
          },
          readMessage(active){
              this.$store.commit('ACTIVE_STATE_CHANGE', active);
              this.$store.dispatch('readMessage', {id:active});
          },
          back(){
              this.$store.commit('ACTIVE_STATE_CHANGE', 0) // 0 is Messages
              this.$store.dispatch('messages');
          }
        },
        mounted() {
            if(this.isLogged){
               return this.loadMessages();
            }
        }
    }
</script>

