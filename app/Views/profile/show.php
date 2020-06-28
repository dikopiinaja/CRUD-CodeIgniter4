<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
 
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Show Pemasangan Jaringan Wifi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Show Show Pemasangan Jaringan Wifi</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
 
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <img src="<?php echo base_url('uploads/'.$profile['profile_image']) ?>" class="img-fluid">
                </div>
                <div class="col-md-8">
                  <dl class="dl-horizontal">
                    <dt>Fullname</dt>
                    <dd><?php echo $profile['fullname']; ?></dd>
                    <dt>Nama Panggilan</dt>
                    <dd><?php echo $profile['name']; ?></dd>
                    <dt>Tgl Lahir</dt>
                    <dd><?php echo $profile['timestamps']; ?></dd>
                    <dt>Asal</dt>
                    <dd><?php echo $profile['asal']; ?></dd>
                    <dt>Hobi</dt>
                    <dd><?php echo $profile['hobi']; ?></dd>
                    <dt>Nama Sekolah / Institut / Perguruan</dt>
                    <dd><?php echo $profile['kuliah_name']; ?></dd>
                    <dt>Prody</dt>
                    <dd><?php echo $profile['prody']; ?></dd>       
                    <dt>Description Profile</dt>
                    <dd><?php echo $profile['profile_description']; ?></dd>             
                  </dl>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <a href="<?php echo base_url('profile'); ?>" class="btn btn-outline-info float-right">Back</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo view('_partials/footer'); ?>