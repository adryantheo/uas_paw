<template>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">
                    List Jobs
                    <button class="btn btn-sm btn-primary float-right" @click="btnTambah" >Tambah Pekerjaan</button>               
                    </div>
                    <div class="card-body">
                    <table class="table table-bordered" width="100%">
                        <tr>
                            
                            <th>Nama Perusahaan</th>
                            <th>Nama Pekerjaan</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Email</th>
                            <th>Nama Pengguna</th>
                        </tr>
                        </table>

                        <table border="bold" width="100%" v-for="jobs of Jobs" v-bind:key="">
                            <tr>

                            <td>{{jobs.namaT}}</td>
                            <td> {{jobs.pesan}} </td>
                            <td>{{jobs.namaT}}</td>
                            <td> {{jobs.pesan}} </td>
                            <td>{{jobs.namaT}}</td>
                            <td> {{jobs.pesan}} </td>                           

                        
                        </tr>
                        </table>
                    </div>

                  

                    
                    
                    
			</div>	
         </div>
    </div>
</div>
    
</template>

<script>
export default{

    methods:{
        btnTambah(){
            this.$router.push({name:'tambahjobs'})
        }
    }

}
    
</script>