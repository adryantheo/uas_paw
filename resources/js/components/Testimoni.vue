<template>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Testimoni</div>

                    <div class="card-body">
                       <table class="table table-bordered" width="100%">
                        <tr>
                            <th>No</th>
                            <th width="30%">Nama</th>
                            <th>Pesan</th>
                        </tr>
                        </table>

                        <table class="table table-bordered" width="100%" v-for="data in datas" :key="data.id">
                            <tr>
                            <td width="40%">{{data.id}}</td>    
                            <td width="40%">{{data.namaT}}</td>
                            <td width="50%"> {{data.pesan}} </td>                           

                        
                        </tr>
                        </table> 
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-10">
						<div class="card text-center">
                        <br>                
					        <form @submit.prevent="addmessege();load = true">
                            <div class="form-group row">
                                <label for="Nama" class="col-sm-4 col-form-label text-md-right">Nama</label>

                                <div class="col-md-6">
                                    <input id="namaT" type="text" class="form-control" v-model="data.namaT" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pesan" class="col-md-4 col-form-label text-md-right">Pesan</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" v-model="data.pesan" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-md-8 offset-md-4">
                                    <button  class="btn btn-primary" :class="{'is-loading':load}">
                                        Kirim
                                    </button>
                                </div>
                            </div>
                        </form>
                         </div>
                    </div>
                </div>
                    <br>                               
                  
                    
                    
				
         </div>
    </div>
</div>
    
</template>

<script> 
    export default{
        data(){
            return{
              datas:[],

              data:{
                  namaT: '',
                  pesan: ''

              },
              load: false,  
            }
        },
        created(){
            this.getData();
        },

        methods:{
            addmessege(){
                let uri="/api/testimoni/";
                axios.post(uri,this.data).then((response)=>{
                    this.load = false;
                   
                
                })
                
            },

            getData(){
                //let uri="/api/testimoni";
                axios.get('/api/testimoni').then((response) =>{
                    console.log(response);
                    this.datas = response.data;
                })
            }
        }
    }
</script>