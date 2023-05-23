<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <h1>Hi , <?= $name ? $name : "Peps" ?></h1>
<?= $this->endSection() ?>