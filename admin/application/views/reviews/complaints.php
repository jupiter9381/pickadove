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
                                            foreach ($complaints as $key => $value) { ?>
                                            <tr style="cursor: pointer;">
                                                <th scope="row"><?= $key + 1; ?></th>
                                                <td><?= $value -> username; ?></td>
                                                <td><?= $value -> created_at; ?></td>
                                                <td><?= $value -> recevier_email; ?></td>
                                                <td><?= $value -> notes; ?></td>
                                                <td><button class="btn btn-primary delete" review-id="<?= $value->id;?>" href="#delete-modal"  data-toggle="modal" data-backdrop="false">Delete</button></td>
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
            <div class="modal fade text-left" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary white">
                            <h4 class="modal-title" id="myModalLabel8">Delete Confirm</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5>Are you sure to delete this review?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-outline-primary confirm_del" >Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>