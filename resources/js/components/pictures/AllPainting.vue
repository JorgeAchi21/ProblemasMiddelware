<template>
    <div>
        <h1>all painting</h1>

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">PICTURES:</h1>
                
                <p><h6>Total picture number: {{ paintings.length }}</h6></p>
                <p>
                    <!-- <a href="{{ route('selectGallery.painting') }}" class="btn btn-primary my-2">Go to home</a> -->

                </p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">

                    <div class="col-md-4"  v-for="painting in paintings" :key="painting.id">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top cuaImg rounded mx-auto" :src="painting.url" alt="Card image cap">
                            <div class="card-body">
                                <p class="h6">Title:</strong></p>
                                <p class="h5"><strong>{{ painting.picture_name }}</strong></p>
                                <p class="h6">Author:</p>
                                <p class="h5"><strong>{{ painting.author }}</strong></p>
                                <p class="h6 card-text">{{ painting.comment }}</p>
                                <p class="small">Price: {{ painting.price }}</p>
                                <p class="small">Entry date: {{ painting.entry_date }}</p>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <!-- <router-link class='btn btn-success' :to='{name: "PaintingByGallery"}'>Painting by Gallery</router-link> -->
                                        <!-- <a href='{{ route('viewPicture.painting', $itemP->id) }}' class='btn btn-sm btn-outline-secondary'>View</a> -->

                                        <!-- <a href='{{ route('editPicture.painting', $itemP->id) }}' class='btn btn-sm btn-outline-secondary'>Edit</a> -->
                                        
                                        <!-- <a href='{{ route('deletePicture.paintingDestroy', $itemP->id) }}' class='btn btn-sm btn-outline-secondary'>Delete</a> -->

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted small">id: {{ painting.id }}</small>
                                <small class="text-muted small">Gallery: {{ painting.shop_id }}</small>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default{
name: 'IndexShops',

    data(){
        return {
            paintings: [
            // {
            //     id: 1,
            //     author: 'author 1',
            //     picture_name: 'picture_name 1',
            //     shop_id: '21',
            //     price: 101,
            //     entry_date: '2021-01-01',
            //     url: './img/c021.jpg',
            //     comment: 'lorem ipsum 1'
            // },
            // {
            //     id: 2,
            //     author: 'author 2',
            //     picture_name: 'picture_name 2',
            //     shop_id: '2',
            //     price: 102,
            //     entry_date: '2021-01-02',
            //     url: './img/c022.jpg',
            //     comment: 'lorem ipsum 2'
            // },
            // {
            //     id: 3,
            //     author: 'author 3',
            //     picture_name: 'picture_name 3',
            //     shop_id: '3',
            //     price: 103,
            //     entry_date: '2021-01-03',
            //     url: './img/c021.jpg',
            //     comment: 'lorem ipsum 3'
            // }
            ]
        }
    },
    mounted() {
            //llama a la funcion cuando se carga el componente x inicializar.
            // console.log('mounted... :D');
            this.showPictures()
        },
    methods: {
        showPictures() {
            // console.log(this.product, ':D');
            console.log('Entra en show pictures :D')

            //llamada a la api para añadir datos
            axios.get('/api/show/picture/').then((response) => {
                //evento al array de datos
                //console.log(response.data)
                this.paintings = response.data.paintings
            })
        }
    }
}
</script>