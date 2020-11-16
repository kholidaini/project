<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">List Games</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Graphic</th>
                        <th scope="col">Mode</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $i = 1; ?>
                    <?php foreach ($games as $g) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="/img/<?= $g['player']; ?>" alt="" class="logo"></td>
                            <td><?= $g['type']; ?></td>
                            <td>
                                <a href="" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>