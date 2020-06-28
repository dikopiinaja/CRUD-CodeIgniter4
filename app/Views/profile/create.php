<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">  
                <div class="col-md-12">
                    <?php 
                    $inputs = session()->getFlashdata('inputs');
                    $errors = session()->getFlashdata('errors');
                    if(!empty($errors)){ 
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Whoops! Ada kesalahan saat input data, yaitu:
                        <ul>
                            <?php foreach ($errors as $error) : ?>
                            <li><?= esc($error) ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <?php } ?>
                    <?php echo form_open_multipart('profile/store'); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php 
                                echo form_label('Fullname'); 
                                $fullname = [
                                    'type'  => 'text',
                                    'name'  => 'fullname',
                                    'id'    => 'fullname',
                                    'value' => $inputs['fullname'],
                                    'class' => 'form-control',
                                    'placeholder' => 'FullName'
                                ];
                                echo form_input($fullname);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php 
                                echo form_label('Name'); 
                                $name = [
                                    'type'  => 'text',
                                    'name'  => 'name',
                                    'id'    => 'name',
                                    'value' => $inputs['name'],
                                    'class' => 'form-control',
                                    'placeholder' => 'Nama Panggilan'
                                ];
                                echo form_input($name);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <?php 
                                echo form_label('Tgl Lahir'); 
                                $timestamps = [
                                    'type'  => 'date',
                                    'name'  => 'timestamps',
                                    'id'    => 'timestamps',
                                    'value' => $inputs['timestamps'],
                                    'class' => 'form-control',
                                    'placeholder' => 'Tgl'
                                ];
                                echo form_input($timestamps);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php 
                                        echo form_label('Asal');
                                        $asal = [
                                            'type'  => 'text',
                                            'name'  => 'asal',
                                            'id'    => 'asal',
                                            'value' => $inputs['asal'],
                                            'class' => 'form-control',
                                            'placeholder' => 'Asal'
                                        ];
                                        echo form_input($asal); 
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?php 
                                        echo form_label('Kuliah');
                                        $kuliah_name = [
                                            'type'  => 'text',
                                            'name'  => 'kuliah_name',
                                            'id'    => 'kuliah_name',
                                            'value' => $inputs['kuliah_name'],
                                            'class' => 'form-control',
                                            'placeholder' => 'Nama Sekolah Tinggi / Perguruan'
                                        ];
                                        echo form_input($kuliah_name); 
                                        ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php 
                                        echo form_label('Prody');
                                        $prody = [
                                            'type'  => 'text',
                                            'name'  => 'prody',
                                            'id'    => 'prody',
                                            'value' => $inputs['prody'],
                                            'class' => 'form-control',
                                            'placeholder' => 'Prody'
                                        ];
                                        echo form_input($prody); 
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?php 
                                        echo form_label('Image');
                                        echo form_upload('profile_image', '', ['class' => 'form-control']); 
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php 
                                        echo form_label('Hobi'); 
                                        $hobi = [
                                            'type'  => 'text',
                                            'name'  => 'hobi',
                                            'id'    => 'hobi',
                                            'value' => $inputs['hobi'],
                                            'class' => 'form-control',
                                            'placeholder' => 'Hobi'
                                        ];
                                        echo form_input($hobi);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <?php 
                                        echo form_label('Profile Description'); 
                                        $profile_desc = [
                                            'type'  => 'text',
                                            'name'  => 'profile_description',
                                            'id'    => 'profile_description',
                                            'value' => $inputs['profile_description'],
                                            'class' => 'form-control',
                                            'placeholder' => 'Profile Description'
                                        ];
                                        echo form_textarea($profile_desc);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('profile'); ?>" class="btn btn-outline-info">Back</a>
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('_partials/footer'); ?>