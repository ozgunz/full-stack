import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

export const store = new Vuex.Store({
   state : {
       active : "Welcome",
       messages : [],
       message : []
   },
   getters : {
       unread(state){
         return state.messages.filter(e => e.isRead === 0 ).length;
       },
       messages(state){
          return state.messages;
       },
       active(state){
           return state.active;
       },
   },
   mutations:{
       LOAD_STATE(state, payload){
           return state.messages = payload;
       },
       ACTIVE_STATE_CHANGE(state, payload){
           state.active = 'MessageDetail';
           state.message = state.messages.filter(e => e.id === payload);

           if(payload === 0){
               state.active = 'Messages';
               state.message = [];
           }
           if(payload === 'Welcome'){
               state.active = 'Welcome';
           }
       }
   },
   actions:{
       messages(context){
           axios.get('/api/messages').then((msg)=>{
               context.commit('LOAD_STATE', msg.data)
           })
       },
       readMessage(context, {id}){
           axios.post('/api/read',{
               'id' : id
           }).then((e) => console.log(e.data))
       }
   }
});

