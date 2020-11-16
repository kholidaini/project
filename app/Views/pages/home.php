<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    h1 {
        text-align: center;
    }

    p {
        text-align: center;
    }

    div {
        text-align: center;
    }
</style>

<div class="cont">
    <div class="row">
        <div class="col">
            <h1>Hello, SYTX!</h1>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>