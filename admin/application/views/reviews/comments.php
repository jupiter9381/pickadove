<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Comments Tables</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Username</th>
                                                    <th>Time</th>
                                                    <th>Receiver Name</th>
                                                    <th>Notes</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                foreach ($comments as $key => $value) { ?>
                                                <tr style="cursor: pointer;">
                                                    <th scope="row"><?= $key + 1; ?></th>
                                                    <td><?= $value -> username; ?></td>
                                                    <td><?= $value -> created_at; ?></td>
                                                    <td><?= $value -> recevier_email; ?></td>
                                                    <td><?= $value -> notes; ?></td>
                                                    <td><a class="btn btn-primary" href="<?= base_url();?>review/comments/<?= $value->id;?>">Edit</a></td>
                                                </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->
        </div>
    </div>
</div>