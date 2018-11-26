<template>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Testimoni</div>

                    <div class="card-body">
                       <table class="table table-bordered" width="100%">
                        <tr>
                            
                            <th width="30%">Nama</th>
                            <th>Pesan</th>
                        </tr>
                        </table>

                        <table border="bold" width="100%" v-for="testimoni of Testimoni" v-bind:key="">
                            <tr>

                            <td width="40%">{{testimoni.namaT}}</td>
                            <td width="50%"> {{testimoni.pesan}} </td>                           

                        
                        </tr>
                        </table> 
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <div class="col-sm-10 col-md-10">
						<div class="card text-center">
                        <br>                
					        <form>
                            <div class="form-group row">
                                <label for="Nama" class="col-sm-4 col-form-label text-md-right">Nama</label>

                                <div class="col-md-6">
                                    <input id="namaT" type="text" class="form-control" v-model="namaT" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pesan" class="col-md-4 col-form-label text-md-right">Pesan</label>

                                <div class="col-md-6">
                                    <textarea id="pesan" type="text" class="form-control" v-model="pesan" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" @click="handleSubmit">
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