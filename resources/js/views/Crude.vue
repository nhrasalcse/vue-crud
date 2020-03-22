<template>
    <div id="app">
        <!-- Breadcrumb-->
        <div class="breadcrumb-holder">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Tables       </li>
                </ul>
            </div>
        </div>
        <section>
            <div class="container-fluid">
                <!-- Page Header-->
                <header>
                    <h1 class="h3 display">Tables            </h1>
                </header>
                <div class="row">
                   <div class="col-12 m-2">
                       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-data">
                           Add Data
                       </button>
                   </div>
                    <div class="col-lg-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Basic Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="post in posts" :key="post.id">
                                            <th>{{ $index }}</th>
                                            <th>{{ post.name ? post.name : '' }}</th>
                                            <th>{{ post.name ? post.name : '' }}</th>
                                            <th>{{ post.phone ? post.phone : '' }}</th>
                                            <th>{{ post.email ? post.email : '' }}</th>
                                            <th>{{ post.address ? post.address : '' }}</th>
                                            <th>{{ post.id ? post.id : '' }}</th>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="add-data" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="card-body">
                            <p>Add information</p>
                            <form method="post" @submit.prevent="addPost()">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Name " value="" v-model="posts.name" class="form-control">
<!--                                    <has-error :form="posts" field="name"></has-error>-->
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="" placeholder="Mobile Number" v-model="posts.phone" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" value="" placeholder="Email Address"  v-model="posts.email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="address"  class="form-control" id="" v-model="posts.address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" value="" class="form-control" name="image" >
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
    const axios = require('axios');
    export default {
        data() {
            return {
                posts: []
            }
        },
        created() {
            let uri = 'http://localhost/vue-crud/public/api/get-data';
            this.axios.get(uri).then(response => {
                this.posts = response.data;
            });
        },
        // methods :{
        //     addPost(){
        //         console.log()
        //         let uri = 'http://vuelaravelcrud.test/api/post/create';
        //         this.axios.post(uri, this.post).then((response) => {
        //             this.$router.push({name: 'posts'});
        //         });
            // }
        // }
        methods: {
            addPost(){
                console.log(this.posts.name);
                // let uri = 'http://localhost/vue-crud/public/api/store-data';
                // this.axios.post(uri, this.post).then((response) => {
                //     this.$router.push({name: 'posts'});
                // });
                axios({
                    method: 'post',
                    url: 'http://localhost/vue-crud/public/api/store-data',
                    data: {
                        name: this.posts.name,
                        phone: this.posts.phone,
                        email: this.posts.email,
                        address: this.posts.address,
                    }

                });
                this.$router.push({name: 'posts'});
            }
        }
    }
</script>
<style>

</style>
