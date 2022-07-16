 <div class="dashboard-wrapper">
     <div class="container-fluid dashboard-content">
         <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                 <div class="page-header">
                     <h2 class="pageheader-title">Perbaharui Data Beasiswa </h2>
                     <div class="page-breadcrumb">
                         <nav aria-label="breadcrumb">
                             <ol class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="<?= base_url('home') ?>" class="breadcrumb-link">Dashboard</a></li>
                                 <li class="breadcrumb-item"><a href="<?= base_url('beasiswa') ?>" class="breadcrumb-link">Beasiswa</a></li>
                                 <li class="breadcrumb-item active" aria-current="page">Perbaharui Data</li>
                             </ol>
                         </nav>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                 <div class="card">
                     <h5 class="card-header">
                         Perbaharui Data Beasiswa
                     </h5>
                     <div class="card-body">
                         <form action="" method="post">
                             <div class="form-group row">
                                 <label for="" class="col-md-2">Nama Beasiswa</label>
                                 <div class="col-md-10">
                                     <input type="text" class="form-control" name="nama_beasiswa" placeholder="Nama Beasiswa" value="<?= $beasiswa->nama_beasiswa; ?>" required>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="" class="col-md-2">Tanggal Mulai</label>
                                 <div class="col-md-10">
                                     <input type="date" class="form-control" name="tanggal_mulai" placeholder="Tanggal Mulai" value="<?= $beasiswa->tanggal_mulai; ?>" required>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="" class="col-md-2">Tanggal Selesai</label>
                                 <div class="col-md-10">
                                     <input type="date" class="form-control" name="tanggal_selesai" placeholder="Tanggal Selesai" value="<?= $beasiswa->tanggal_selesai; ?>" required>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <label for="keterangan" class="col-md-2">Nama Jenis Beasiswa</label>
                                 <div class="col-md-10">
                                     <select name="jenis_id" required class="form-control">
                                         <option value="">Pilih Jenis Beasiswa</option>
                                         <?php
                                            foreach ($jenis as $a) {
                                                $selected = ($a->id == $beasiswa->jenis_id) ? "selected" : "";
                                                echo "<option value='$a->id' $selected>$a->nama_jenis</option>";
                                            }
                                            ?>
                                     </select>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-md-2"></div>
                                 <div class="col-md-10">
                                     <button type="submit" class="btn btn-sm btn-success" name="update"> Simpan</button>
                                     <a href="<?= base_url('beasiswa'); ?>" class="btn btn-sm btn-brand"> Batal</a>
                                 </div>
                             </div>
                         </form>
                     </div>
                     <div class="card-footer">

                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>