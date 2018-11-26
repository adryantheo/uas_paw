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