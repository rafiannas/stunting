<section class="patient-area section-padding">
    <div class="container ftco-relative">
        <div class="row justify-content-center">
            <div class="col-md heading-section text-center ftco-animate">
                <h3 class="mb-4">Berat Badan Menurut Tinggi/Panjang Badan</h3>
                <?= $this->session->flashdata('message');  ?>
                <h4>nama anak </h5>
                    <h5>jenis kelamin</h5>

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 ftco-animate">
                <form method="post" class="appointment-form" action="<?= base_url('auth/cek_lanjut'); ?> ">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h4>Berat Badan anak (Kg)</h4>
                                <input type="float" min="0" class="form-control" name="umur" id="umur" placeholder="Berat Badan Anak (Kg)">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <h4>Tinggi/Panjang badan anak (Cm)</h4>
                                <input type="float" min="0" class="form-control" name="tinggi" id="tinggi" placeholder="Tinggi/Panjang badan anak (Cm)">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <button type="submit" id="tombol_cek2" class="btn btn-primary btn-lg">Check </button>
                    </div>
                </form>
                    <br>
                    <a class="btn btn-primary" href="<?= base_url(); ?>auth/dashboard/">Check History</a>
                    
            </div>

        </div>

    </div>

</section>