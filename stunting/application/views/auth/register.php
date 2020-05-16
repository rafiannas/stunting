<!-- Patient Area Starts -->
    <section class="patient-area section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="section-top text-center">
                        <h2>Daftar</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 align-self-center">
                    <div class="appointment-form text-center mt-5 mt-lg-0">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" placeholder="Nama Lengkap Anak" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap Anak'" required>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Nama Lengkap Orang Tua" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap Orang Tua'" required> 
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Alamat Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Lengkap'" required>
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Jenis Kelamin" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Jenis Kelamin'" required>
                            </div>
                            <a href="<?= base_url('auth/register'); ?>" class="template-btn">Add New Patient</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Patient Area Starts -->

  
