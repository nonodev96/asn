<?= $this->extend('template/layout') ?>

<?php $this->section('page_title') ?>Ejemplo 1 seguro<?php $this->endSection(); ?>

<?php $this->section('links') ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1><?php $this->renderSection('page_title') ?></h1>
            <h2>Validación de datos de formulario</h2>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

        </div>
        <div class="col-md-2"></div>
    </div>
</div>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>
<?php $this->endSection() ?>
