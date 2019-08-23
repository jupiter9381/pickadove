<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic Tables start -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Fields</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form method="post" action="<?= base_url();?>fields/addValue">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <fieldset class="form-group">
                                                <label for="customSelect">Custom select</label>
                                                <select class="custom-select block" id="fieldType" name="type">
                                                    <option value="1">Mandatory</option>
                                                    <option value="2">Dropdown</option>
                                                    <option value="3">Contact</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="offset-md-1 col-md-3 skin skin-flat">
                                            <fieldset class="form-group">
                                                <label for="customSelect" style="display: block;">Required</label>
                                                <input type="checkbox" id="input-15" name="required">
                                                <label for="input-15">Checkbox</label>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <fieldset class="form-group">
                                                <label for="customSelect">Name</label>
                                                <input type="text" class="form-control" name="name" required/>
                                            </fieldset>
                                        </div>
                                        <div class="dropdown-section col-md-7" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <fieldset class="form-group">
                                                        <label for="customSelect">Custom Values</label>
                                                        <select class="select2 form-control" multiple="multiple" name="values[]">
                                                            <option></option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-2">
                                                    <fieldset class="form-group">
                                                        <label style="display: block;"></label>
                                                        <button class="btn btn-outline-primary mt-2 add-dropdown-value" type="button" data-target="#dropdownModal" data-toggle="modal"><i class="fa fa-plus"></i>Add</button>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <fieldset class="form-group">
                                                <label style="display: block;"></label>
                                                <button class="btn btn-outline-primary mt-2 submitBtn" type="submit"><i class="fa fa-plus"></i>Submit</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal fade text-left" id="dropdownModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary white">
                                        <h4 class="modal-title" id="myModalLabel8">Add Dropdown Value</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <input type="text" class="form-control dropdown-value">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-outline-primary doAddValue" >Save value</button>
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