<?php $this->load->view("_partials/header")?>
    <div class="wrapper">
        <div class="sticky-top">
            <?php $this->load->view("_partials/navbar-header")?>
            <?php $this->load->view("_partials/navbar")?>
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
                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#addLac">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                                Tambahkan LAC
                            </a>
                            <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#addLac" aria-label="Create new report">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    <div class="card shadow mb-4" id="dataPc" style="display:none">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table card-table table-vcenter text-nowrap text-dark">
                                    <thead>
                                        <tr>
                                            <th class="text-dark w-1" style="font-size: 11px">No</th>
                                            <th class="text-dark w-1" style="font-size: 11px">Tgl Transaksi</th>
                                            <th class="text-dark" style="font-size: 11px">Pelaku</th>
                                            <th class="text-dark" style="font-size: 11px"><center>Keterangan</center></th>
                                            <th class="text-dark" style="font-size: 11px"><center>Nominal</center></th>
                                            <th class="text-dark" style="font-size: 11px"><center></center></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-block d-sm-none mb-3">
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
                            </span>
                            <input type="text" name="search" class="form-control" placeholder="Cari Nama LAC ..." aria-label="Search in website">
                        </div>
                        <div id="skeleton">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="card">
                                    <div class="ratio ratio-21x9 card-img-top">
                                        <div class="skeleton-image"></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="skeleton-heading"></div>
                                        <div class="skeleton-line"></div>
                                        <div class="skeleton-line"></div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="card">
                                    <div class="ratio ratio-21x9 card-img-top">
                                        <div class="skeleton-image"></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="skeleton-heading"></div>
                                        <div class="skeleton-line"></div>
                                        <div class="skeleton-line"></div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="card">
                                    <div class="ratio ratio-21x9 card-img-top">
                                        <div class="skeleton-image"></div>
                                    </div>
                                    <div class="card-body">
                                        <div class="skeleton-heading"></div>
                                        <div class="skeleton-line"></div>
                                        <div class="skeleton-line"></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cards FieldContainer" data-masonry='{"percentPosition": true }' id="dataAjax">
                        
                    </div>

                    <!-- Paginate -->
                    <div class="row" id="paging">
                        <div class="col-12">
                            <div class="mt-3" id='pagination'></div>
                        </div>
                    </div>

                </div>

            </div>
            <?php $this->load->view("_partials/footer-bar")?>
        </div>
    </div>

    <!-- load modal -->
    <?php 
        if(isset($modal)) :
            foreach ($modal as $i => $modal) {
                $this->load->view("_partials/modal/".$modal);
            }
        endif;
    ?>

    <script>
        $("#Lac").addClass("active")
    </script>

    <!-- load javascript -->
    <?php  
        if(isset($js)) :
            foreach ($js as $i => $js) :?>
                <script src="<?= base_url()?>assets/myjs/<?= $js?>"></script>
                <?php 
            endforeach;
        endif;    
    ?>
    
<?php $this->load->view("_partials/footer")?>