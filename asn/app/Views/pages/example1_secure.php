<?= $this->extend('template/layout') ?>

<?php $this->section('page_title') ?>Ejemplo 1 seguro<?php $this->endSection(); ?>

<?php $this->section('head') ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Validación segura de datos de formulario</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $validation = \Config\Services::validation(); ?>

            <?php if($validation->getError('email')): ?>
                <div class='alert alert-danger'>
                    <?= $error = $validation->getError('email'); ?>
                </div>
            <?php endif; ?>
            <?php if($validation->getError('password')): ?>
                <div class='alert alert-danger'>
                    <?= $error = $validation->getError('password'); ?>
                </div>
            <?php endif; ?>
            <?= form_open('Example_1/secure'); ?>
            
            <div class="input-group mb-3">
                <label for="inputEmailId" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputEmailId" value="<?= set_value("email") ?>">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword" value="<?= set_value("password") ?>">
                </div>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recordarme</label>
            </div>

            <div class="input-group mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

            <?= form_close(); ?>
        </div>
    </div>
</div>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<?php $this->endSection() ?>
