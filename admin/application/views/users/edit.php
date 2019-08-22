<div class="app-content container center-layout mt-2">
    <div class="content-wrapper">
        <div class="content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">User Profile</h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="<?= base_url();?>user/update">
                                    <input type="hidden" name="user_id" value="<?= $user->id;?>">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="basicInput">First Name</label>
                                                <input type="text" class="form-control" name="firstname" value="<?= $user->firstname;?>">
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                            <fieldset class="form-group">
                                                <label >Last Name</label>
                                                <input type="text" class="form-control" name="lastname" value="<?= $user->lastname;?>">
                                            </fieldset>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-12 mb-1">
                                            <fieldset class="form-group">
                                                <label for="basicInput">Email</label>
                                                <input type="email" class="form-control" name="email" value="<?= $user->email;?>">
                                            </fieldset>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>