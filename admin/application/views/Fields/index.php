<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Fields Tables</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Type</th>
                                            <th>Name</th>
                                            <th>Required</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        foreach ($fields as $key => $value) { ?>
                                        <tr style="cursor: pointer;">
                                            <th scope="row"><?= $key + 1; ?></th>
                                            <td>
                                                <?php if($value -> type == "1") { ?>
                                                    Mandaytory Field 
                                                <?php } else if ($value->type == "2") {?>
                                                    Dropdown    
                                                <?php } else if ($value->type == "3") {?>
                                                    Contact
                                                <?php }?>
                                            </td>
                                            <td><?= $value -> name; ?></td>
                                            <td>
                                                <?php if( $value -> required == "1") {?>
                                                    <i class="fa fa-check" style="color: green;"></i>
                                                <?php } else {?>
                                                    <i class="fa fa-times" style="color: red;"></i>
                                                <?php }?>
                                            </td>
                                            <td><button class="btn btn-primary delete" field-id="<?= $value->id;?>" link="<?= base_url();?>fields/delete/<?= $value->id;?>" data-toggle="modal" data-backdrop="false" href="#delete-modal">Delete</button></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
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
                                        <h5>Are you sure to delete this field?</h5>
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