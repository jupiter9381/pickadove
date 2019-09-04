<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Services Tables</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <button class="btn btn-outline-primary" data-target="#addServiceModal" data-toggle="modal"><i class="fa fa-plus"></i>Add</button>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach ($services as $key => $value) { ?>
                                        <tr style="cursor: pointer;">
                                            <th scope="row"><?= $key + 1; ?></th>
                                            <td><?= $value -> name; ?></td>
                                            <td><button class="btn btn-primary delete" service-id="<?= $value->id;?>" link="<?= base_url();?>services/delete/<?= $value->id;?>" data-toggle="modal" data-backdrop="false" href="#delete-modal">Delete</button></td>
                                            <!-- <td><a class="btn btn-primary" href="<?= base_url();?>services/delete/<?= $value->id;?>">Delete</a></td> -->
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade text-left" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <form method="post" action="<?= base_url();?>services/add">
                            <div class="modal-header bg-primary white">
                                <h4 class="modal-title" id="myModalLabel8">Add Service Value</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="text" class="form-control service-value" name="service_value">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-outline-primary doAddValue" >Save value</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                            <h5>Are you sure to delete this service?</h5>
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