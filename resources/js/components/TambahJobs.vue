<template>
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Tambah Lowongan Pekerjaan</div>

                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label for="namaPerusahaan" class="col-md-4 col-form-label text-md-right">Nama Perusahaan</label>

                                <div class="col-md-6">
                                    <input id="namaPerusahaan" type="text" class="form-control" v-model="namaPerusahaan" required autofocus>
                                </div>
                            </div>

                             <div class="form-group row">
                                <label for="namaPekerjaan" class="col-md-4 col-form-label text-md-right">Nama Pekerjaan</label>

                                <div class="col-md-6">
                                    <input id="namaPekerjaan" type="text" class="form-control" v-model="namaPekerjaan" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>

                                <div class="col-md-6">
                                    <input id="alamat" type="text" class="form-control" v-model="alamat" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="noTelp" class="col-md-4 col-form-label text-md-right">No Telp</label>

                                <div class="col-md-6">
                                    <input id="noTelp" type="text" class="form-control" v-model="noTelp" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" v-model="email" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="namaPengguna" class="col-md-4 col-form-label text-md-right">Nama Pengguna</label>

                                <div class="col-md-6">
                                    <input id="namaPengguna" type="text" class="form-control" v-model="namaPengguna" required>
                                </div>
                            </div>                            

                            

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" @click="handleSubmit">
                                        Tambah Lowongan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>