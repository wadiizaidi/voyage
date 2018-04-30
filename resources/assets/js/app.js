
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import VCalendar from 'v-calendar';
import 'v-calendar/lib/v-calendar.min.css';
 
// Use v-calendar, v-date-picker & v-popover components
Vue.use(VCalendar);

/**
 * Next, we will create a fresh
  Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));




const app = new Vue({
    el: '#app',
    data: {
     updatedfrom:'',
     updatedto:'',	
     updateddate: new Date(),
     updatedtime:'',
     from:'',
     to:'',	
     date: new Date(),
     time:'',
   msg: 'Make Post:',
   content: '', updatedContent:'',
   posts:[],
   postId: '',
   successMsg: '',
   commentData:[],
   commentSeen: false,
   image:'',
   bUrl: 'http://localhost:8000',
   qry:'',
    
   results:[]
  },

 ready: function(){
   this.created();
 },

 created(){
   axios.get(this.bUrl +'/posts')
        .then(response => {
          console.log(response); // show if success
          this.posts = response.data; //we are putting data into our posts array
          Vue.filter('myOwnTime', function(value){
            return moment(value).fromNow();
          });
        })
        .catch(function (error) {
          console.log(error); // run if we have error
        });
 },

 methods:{

   addPost(){
     axios.post(this.bUrl +'/addPost', {
            content: this.content,
            from:this.from,
            to:this.to,
            time:this.time,
            date:this.date
          })
          .then( (response) =>{
            this.content="";
            console.log('saved successfully'); // show if success
            if(response.status===200){
              app.posts = response.data;
            }
          })
          .catch(function (error) {
            console.log(error); // run if we have error
          });
   },
   openModal(id){
     //console.log(id);
     axios.get(this.bUrl +'/posts/' + id)
          .then(response => {
            console.log(response); // show if success
            this.updatedContent = response.data; //we are putting data into our posts array
          })
          .catch(function (error) {
            console.log(error); // run if we have error
          });
   },
   updatePost(id){
   	
     axios.post(this.bUrl +'/updatePost/' + id, {
            updatedContent: this.updatedContent,
            updatedfrom:this.updatedfrom,
            updatedto:this.updatedto,
            updatedtime:this.updatedtime,
            updateddate:this.updateddate
          })
          .then( (response) =>{
            this.content="";
            console.log('Changes saved successfully'); // show if success
            if(response.status===200){
              app.posts = response.data;
            }
          })
          .catch(function (error) {
            console.log(error); // run if we have error
          });
   },

   deletePost(id){
     //alert(id);
     axios.get(this.bUrl +'/deletePost/' + id)
          .then(response => {
            console.log(response); // show if success
            this.posts = response.data; //we are putting data into our posts array
          })
          .catch(function (error) {
            console.log(error); // run if we have error
          });

   },
   likePost(id){
     axios.get(this.bUrl +'/likePost/' + id)
          .then(response => {
            console.log(response); // show if success
            this.posts = response.data; //we are putting data into our posts array
          })
          .catch(function (error) {
            console.log(error); // run if we have error
          });
   },
   addComment(post,key){
           
	       axios.post(this.bUrl+'/addComment',{
            comment: this.commentData[key],
			      id:post.id
          })
          .then(response=> {
            console.log('saved successfully'); // show if success
            if(response.status===200){
              app.posts = response.data;
            }
          })
          .catch(function (error) {
            console.log(error); // run if we have error
          });

   },

   onFileChange(e){
     var files = e.target.files || e.dataTransfer.files;
     this.createImg(files[0]); // files the image/ file value to our function


   },
   createImg(file){
    // we will preview our image before upload
    var image = new Image;
    var reader = new FileReader;

    reader.onload = (e) =>{
          this.image = e.target.result;
    };
    reader.readAsDataURL(file);
   },

   uploadImg(){
    axios.post(this.bUrl +'/saveImg', {
      image: this.image,
      content: this.content
    })
    .then( (response) =>{
      console.log('saved successfully'); // show if success
      this.image= "";
      this.content = "";
      if(response.status===200){
        app.posts = response.data;
      }
    })
    .catch(function (error) {
      console.log(error); // run if we have error
    });
   },
   removeImg(){
     this.image=""
   },
   autoComplete(){
   	 this.results=[];
   	 axios.post(this.bUrl+'/search',{
   	 	qry:this.qry
   	 })
   	 .then((response)=>{
   	 	console.log(response);
   	 	app.results=response.data;
   	 });
   }


 }
});