<?= $this->extend('template/layout') ?>

<?php $this->section('page_title') ?>Ejemplo 2 inseguro<?php $this->endSection() ?>

<?php $this->section('head') ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2>Prevención insegura de inyección SQL</h2>
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
