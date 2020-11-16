<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    h1 {
        text-align: left;
    }

    p {
        text-align: left;
    }

    div {
        text-align: center;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>About SYTX!</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima tempora dolore accusamus, eligendi aut reprehenderit. Veritatis quos, eos dolore debitis consequatur laboriosam, aliquid exercitationem dolorum odit nobis ipsam maiores molestias.</p>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>