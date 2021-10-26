<template>
    <div>

        <div class="jumbotron">

            <div class="container-fluid mx-auto mt-3">

                <div class="row justify-content-center align-items-center">

                    <div class="col col-sm-5">
            
                        <form @submit.prevent='register()'>
                            <h1>Register:</h1>
                            <hr/>
                            <!-- Username -->
                            <div  class="form-group">
                                <label for="name">User name:</label>
                                <input type="name" class="form-control" v-model="usuario">
                            </div>

                            <!-- E-mail -->
                            <div class="form-group">
                                <label for="username">Email:</label>
                                <input type="email" class="form-control" v-model="email">
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="username">Password:</label>
                                <input type="password" class="form-control" v-model="password">
                            </div>

                            <hr class="my-4">

                            <!-- submit button -->
                            <div  class="form-group" id="lower">
                                <!-- <input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label> -->
                                <!-- Submit Button -->
                                <input class="mt-2 btn btn-primary" type="submit" value="Submit">
                            </div>
                        </form>
                        
                    </div>
                </div>

            </div>
        </div>

    </div>

</template>

<script>
export default
{
     data(){
         return{
             usuario: '',
             email: '',
             password: ''
         }

     },
     methods: {
         register(){
             var payload= {
                 usuario: this.usuario,
                 email: this.email,
                 password: this.password
             };
             console.log(payload);

             //guardamos en local storage
             localStorage.usu = payload.usuario
             localStorage.email = payload.email
             localStorage.pass = payload.password

             axios.post('/register/', payload).then(response => {
                 console.log(response)
                 //guardar token recibido.
             })
             .catch(error=>{
                 var data = error.response.data;
                 console.log (data.message)

             })
         }
     }

}
</script>
