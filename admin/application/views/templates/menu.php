<!-- BEGIN: Main Menu-->
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
            <!-- include <?= base_url();?>includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown"><i class="ft-home"></i><span>Dashboard</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="dashboard-ecommerce.html" data-toggle="dropdown">eCommerce</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="dashboard-analytics.html" data-toggle="dropdown">Analytics</a>
                        </li>
                        <li class="active" data-menu=""><a class="dropdown-item" href="dashboard-fitness.html" data-toggle="dropdown">Fitness</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown"><i class="ft-users"></i><span>Users</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="<?= base_url();?>users/advertisers" data-toggle="dropdown">Advertisers</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="<?= base_url();?>users/browsers" data-toggle="dropdown">Browsers</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown"><i class="ft-users"></i><span>Reviews</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="<?= base_url();?>users/advertisers" data-toggle="dropdown">Comments</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="<?= base_url();?>review/complaints" data-toggle="dropdown">Complaints</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /horizontal menu content-->
    </div>
    <!-- END: Main Menu-->