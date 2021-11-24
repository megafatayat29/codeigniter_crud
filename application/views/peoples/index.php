<div class="container">
    <div class="row">
        <div class="col-md-10">

            <h3 class="mt-3">List of Peoples</h3>

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peoples as $people) : ?>
                        <tr>
                            <th><?= ++$start ?></th>
                            <td><?= $people['name'] ?></td>
                            <td><?= $people['email'] ?></td>
                            <td>
                                <a href="" class="badge btn btn-warning">Detail</a>
                                <a href="" class="badge btn btn-success">Edit</a>
                                <a href="" class="badge btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>