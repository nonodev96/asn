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

        </div>
    </div>
</div>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<?php $this->endSection() ?>
