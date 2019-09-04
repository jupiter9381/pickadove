<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Advertisers Tables</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                
                                                foreach ($browsers as $key => $value) { ?>
                                                <tr style="cursor: pointer;">
                                                    <th scope="row"><?= $key + 1; ?></th>
                                                    <td><?= $value -> firstname; ?></td>
                                                    <td><?= $value -> lastname; ?></td>
                                                    <td><?= $value -> email; ?></td>
                                                    <td>
                                                        <a class="btn btn-primary" href="<?= base_url();?>user/edit/<?= $value->id;?>">Edit</a>
                                                        <button class="btn btn-primary delete" user-id="<?= $value->id;?>" data-toggle="modal" data-backdrop="false" href="#delete-modal">Delete</button>
                                                    </td>
                                                </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
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
                                                        <h5>Are you sure to delete this user?</h5>
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
                        </div>
                    </div>
                </div>
                <!-- Basic Tables end -->
        </div>
    </div>
</div>