<?= $this->extend('template/layout') ?>

<?php $this->section('page_title') ?>Ejemplo 1 inseguro<?php $this->endSection(); ?>

<?php $this->section('head') ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Validación insegura de datos de formulario</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- ESTO NO DEBERIA NI FUNCIONAR EN LA VALIDACIÖN INSEGURA -->
            <?php $validation = \Config\Services::validation(); ?>

            <?php if($validation->getError('title')): ?>
                <div class='alert alert-danger'>
                    <?= $error = $validation->getError('title'); ?>
                </div>
            <?php endif; ?>
            <?php if($validation->getError('message')): ?>
                <div class='alert alert-danger'>
                    <?= $error = $validation->getError('message'); ?>
                </div>
            <?php endif; ?>
            <?= form_open('Example_1/insecure'); ?>
            
            <div class="input-group mb-3">
                <label for="inputTitleId" class="col-sm-2 col-form-label">Título</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" id="inputTitleId" value="<?= set_value("title") ?>">
                </div>
            </div>

            <div class="input-group mb-3">
                <label for="inputMessage" class="col-sm-2 col-form-label">Mensaje</label>
                <div class="col-sm-10">
                    <input type="text" name="message" class="form-control" id="inputMessage" value="<?= set_value("message") ?>">
                </div>
            </div>

            <div class="input-group mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

            <?= form_close(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($data as $key => $value): ?>
                <li><?= $value["example_1_id"] ?> - <?= $value["title"] ?> - <?= $value["message"] ?></li>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<?php $this->endSection() ?>
