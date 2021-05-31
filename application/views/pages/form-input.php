<?php $this->load->view("_partials/header")?>
    <div class="wrapper">
    <div class="sticky-top">
        <?php $this->load->view("_partials/navbar-header-form")?>
    </div>
    <div class="page-wrapper">
        <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
            <div class="col">
                <h2 class="page-title">
                <?= $title?>
                </h2>
            </div>
            </div>
        </div>
        </div>
        <div class="page-body">
            <div class="container-xl d-flex flex-column justify-content-center">
                <?php if($this->session->flashdata("message")) :?>
                    <?= $this->session->flashdata("message") ;?>
                <?php endif;?>
                <form method="POST" action="<?= base_url()?>form/add_alumni" id="formAlumni">
                    <div class="form-floating mb-3">
                        <textarea class='form form-control required' type="text" name="nama_alumni" data-bs-toggle="autosize"></textarea>
                        <label>Nama Alumni</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="jk" class='form form-control required'>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Ikhwan">Ikhwan</option>
                            <option value="Akhwat">Akhwat</option>
                        </select>
                        <label>Jenis Kelamin</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class='form form-control required' type="text" name="email" data-bs-toggle="autosize" autocapitalize="off"></textarea>
                        <label>Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class='form form-control number required' type="text" name="no_hp" data-bs-toggle="autosize"></textarea>
                        <label>No Handphone</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class='form form-control number required' type="text" name="no_wa" data-bs-toggle="autosize"></textarea>
                        <label>No WhatsApp</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class='form form-control required' type="text" name="t4_lahir">
                        <label>Tempat Lahir</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class='form form-control required' type="date" name="tgl_lahir">
                        <label>Tgl Lahir</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="lulusan" class='form form-control required'>
                            <option value="">Pilih Lulusan</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMP & SMA">SMP & SMA</option>
                        </select>
                        <label>Lulusan</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="tahun_kelulusan" class='form form-control required'>
                            <option value="">Pilih Tahun Kelulusan</option>
                            <?php for ($i=2007; $i < date("Y") + 1; $i++) :?>
                                <option value="<?= $i?>"><?= $i?></option>
                            <?php endfor;?>
                        </select>
                        <label>Tahun Kelulusan</label>
                        <small class="form-text text-danger">* Jika Anda lulusan SMP & SMA maka pilih tahun kelulusan SMA Anda</small>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="aktivitas" class='form form-control required'>
                            <option value="">Pilih Aktivitas</option>
                            <option value="Kuliah">Kuliah</option>
                            <option value="Kerja">Kerja</option>
                            <option value="Tahfidz">Tahfidz</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <label>Aktivitas</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class='form form-control' type="text" name="aktivitas_lainnya" disabled>
                        <label>Aktivitas Lainnya</label>
                        <small class="form-text text-danger">* Jika Anda memilih aktivitas lainnya. Maka form ini wajib diisi</small>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class='form form-control required' type="text" name="t4_aktivitas" data-bs-toggle="autosize"></textarea>
                        <label>Instansi (Tempat Aktivitas)</label>
                        <small class="form-text text-danger">* Nama instansi tempat Anda beraktivitas. Misal, Anda memilih aktivitas kuliah maka isi dengan nama universitas tempat Anda kuliah. Jika bekerja isi dengan nama tempat Anda bekerja dst.</small>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class='form form-control required' type="text" name="alamat_rumah" data-bs-toggle="autosize"></textarea>
                        <label>Alamat Rumah</label>
                        <small class="form-text text-danger">* Form ini diisi dengan alamat rumah Anda. Diisi lengkap beserta kelurahan, kabupaten, provinsi</small>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class='form form-control required' type="text" name="alamat_domisili" data-bs-toggle="autosize"></textarea>
                        <label>Alamat Domisili</label>
                        <small class="form-text text-danger">* Form ini diisi dengan alamat Anda sekarang (misalkan kos, apartemen, kontrakan, dll). Diisi lengkap beserta kelurahan, kabupaten, provinsi</small>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class='form form-control required' type="text" name="kota_domisili" data-bs-toggle="autosize"></textarea>
                        <label>Kota Domisili</label>
                        <small class="form-text text-danger">* Form ini diisi dengan kota domisili Anda sekarang</small>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="himmah" class='form form-control required'>
                            <option value="">Pilih HIMMAH</option>
                            <option value="HIMMAH PASUNDAH">HIMMAH PASUNDAH</option>
                            <option value="HIMMAH PASUNDAH">HIMMAH PASUNDAH</option>
                            <option value="HIMMAH PASUNDAH">HIMMAH PASUNDAH</option>
                            <option value="Tidak Ada">Belum bergabung dengan HIMMAH</option>
                        </select>
                        <label>HIMMAH</label>
                        <small class="form-text text-danger">* Jika Anda telah bergabung dengan HIMMAH maka pilih HIMMAH tempat Anda bergabung. Jika belum bergabung maka pilih belum bergabung dengan HIMMAH</small>
                    </div>
                    <div class="alert alert-important alert-info alert-dismissible" role="alert">
                        <div class="d-flex">
                            <div>
                                <svg width="24" height="24" class="alert-icon">
                                    <use xlink:href="<?= base_url()?>assets/tabler-icons-1.39.1/tabler-sprite.svg#tabler-info-circle" />
                                </svg>
                            </div>
                            <div>
                                Data Wali
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="hubungan_wali" class='form form-control required'>
                            <option value="">Pilih</option>
                            <option value="Orang Tua">Orang Tua</option>
                            <option value="Keluarga">Keluarga</option>
                        </select>
                        <label>Hubungan Dengan Wali</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class='form form-control required' type="text" name="nama_wali" data-bs-toggle="autosize"></textarea>
                        <label>Nama Wali</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class='form form-control number required' type="text" name="no_hp_wali" data-bs-toggle="autosize"></textarea>
                        <label>No. Handphone Wali</label>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary btnSimpan">
                            <?= tablerIcon("device-floppy", "me-1")?> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <?php $this->load->view("_partials/footer-bar")?>
    </div>
    </div>

    <!-- load javascript -->
    <?php  
        if(isset($js)) :
            foreach ($js as $i => $js) :?>
                <script src="<?= base_url()?>assets/myjs/<?= $js?>"></script>
                <?php 
            endforeach;
        endif;    
    ?>

    <script>
        $(".btnSimpan").click(function(){
            let form = "#formAlumni";
            let eror = required("#formAlumni");
            if(eror == 1){
                Swal.fire({
                    icon: "error",
                    title: "Oopsss...",
                    text: "Lengkapi form terlebih dahulu"
                });
            } else {
                Swal.fire({
                    icon: 'question',
                    text: 'Yakin akan menyimpan data Anda?',
                    showCloseButton: true,
                    showCancelButton: true,
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Tidak'
                }).then(function (result) {
                    if (result.value) {
                        $(".btnSimpan").prop("disabled", true);
                        $(form).submit();
                    }
                })
            }
        })

        $("[name='aktivitas']").change(function(){
            data = $(this).val();
            if(data == "Lainnya"){
                $("[name='aktivitas_lainnya']").prop("disabled", false);
                $("[name='aktivitas_lainnya']").addClass("required");
                $("[name='aktivitas_lainnya']").val("");
            } else {
                $("[name='aktivitas_lainnya']").prop("disabled", true);
                $("[name='aktivitas_lainnya']").removeClass("required");
                $("[name='aktivitas_lainnya']").removeClass("bg-red-lt");
                $("[name='aktivitas_lainnya']").val("");
            }
        })
    </script>

<?php $this->load->view("_partials/footer")?>