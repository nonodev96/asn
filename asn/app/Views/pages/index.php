<?= $this->extend('template/layout') ?>

<?php $this->section('page_title') ?>Inicio<?php $this->endSection() ?>

<?php $this->section('head') ?>
<?php $this->endSection() ?>

<?php $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Actividad 2.4</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>Ejemplo 1</h2>
            <ol>
                <li><a href="<?= site_url("Example_1/secure") ?>">Validación segura</a></li>
                <li><a href="<?= site_url("Example_1/insecure") ?>">Validación insegura</a></li>
            </ol>
            <h2>Ejemplo 2</h2>
            <ol>
                <li><a href="<?= site_url("Example_2/secure") ?>">Validación segura</a></li>
                <li><a href="<?= site_url("Example_2/insecure") ?>">Validación insegura</a></li>
            </ol>
            <h2>Ejemplo 3</h2>
            <ol>
                <li><a href="<?= site_url("Example_3/secure") ?>">Validación segura</a></li>
                <li><a href="<?= site_url("Example_3/insecure") ?>">Validación insegura</a></li>
            </ol>
        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>
<?php $this->endSection() ?>

<?php $this->section('scripts') ?>

<?php $this->endSection() ?>
