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
                                <div class="heading-elements">
                                    <button class="btn btn-outline-primary" data-target="#addFieldModal" data-toggle="modal"><i class="fa fa-plus"></i>Add</button>
                                </div>
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
                                                <td><a class="btn btn-primary" href="<?= base_url();?>review/delete/<?= $value->id;?>">Delete</a></td>
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
    </div>
</div>