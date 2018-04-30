require('./bootstrap');
window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data: {
   msg: 'Click on user from left side:',
   content: '',
   privsteMsgs: [],
   singleMsgs: [],
   msgFrom: '',
   conID: '',
   friend_id: '',
   seen: false,
   newMsgFrom: '',

   
   bUrl: 'http://localhost:8000',

 },

 ready: function(){
   this.created();

 },

 created(){

   
   axios.get(this.bUrl+'/getMessages')
        .then(response => {
          console.log(response.data); // show if success
          this.privsteMsgs = response.data; //we are putting data into our posts array
          
        })
        .catch(function (error) {
          console.log(error); // run if we have error
        });
 },


 methods:{
   messages: function(id){
   	  this.friend_id = id;
   	  alert(this.friend_id);
     axios.get(this.bUrl+'/getMessages/' + id)
          .then(response => {
            console.log(response.data); // show if success
           app.singleMsgs = response.data; //we are putting data into our posts array
           app.conID = response.data[0];
          })
          .catch(function (error) {
            console.log(error); // run if we have error
          });
   },

   inputHandler(e){
     if(e.keyCode ===13 && !e.shiftKey){
       e.preventDefault();
       this.sendMsg();
     }
   },
   sendMsg(){
     if(this.msgFrom){
     	    axios.post(this.bUrl+'/sendMessage', {
              conID: this.conID,
              msg: this.msgFrom
            })
            .then( (response) => {              
              console.log(response.data); // show if success
              if(response.status===200){
                app.singleMsgs = response.data;
              }

            })
            .catch(function (error) {
              console.log(error); // run if we have error
            });

     }
   },

   friendID: function(id){
     app.friend_id = id;
   },
   sendNewMsg(){
   	alert(this.friend_id);
     axios.post(this.bUrl+'/sendNewMessage', {
            friend_id: this.friend_id,
            msg: this.newMsgFrom,
          })
          .then(function (response) {
            console.log(response.data); // show if success
            if(response.status===200){
              window.location='/messages';
              app.msg = 'your message has been sent successfully';
            }

          })
          .catch(function (error) {
            console.log(error); // run if we have error
          });
   }

 }

});