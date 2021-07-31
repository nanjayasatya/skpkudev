<!-- TOPBAR -->
<nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">

    <img class="logobem ml-4 mr-4" id="" src="<?= base_url('assets/img/SKPKULOGO.png') ?>" />
    <style>
        .logobem {
            width: 150px;
            max-height: 150px;
        }
    </style>


    <!--<a class="mr-3 text-lg" style="text-decoration:none; color:#06794f;" <?= base_url('user'); ?>"><strong>BEM FK UWKS</strong></a>-->

    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>

    <ul class="navbar-nav align-items-center ml-auto">

        <li class="nav-item dropdown no-caret mr-2 dropdown-user">
            <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="img-fluid" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" /></a>
            <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                <h6 class="dropdown-header d-flex align-items-center">
                    <img class="dropdown-user-img" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" />
                    <div class="dropdown-user-details">
                        <div class="dropdown-user-details-name"><?= $user['name']; ?></div>
                        <div class="dropdown-user-details-email"><?= $user['npm']; ?></div>
                    </div>
                </h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" data-toggle="modal" data-target="#LogoutModal">
                    <div class="dropdown-item-icon"><i class="fas fa-sign-out-alt"></i></div>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

<!-- TOPBAR MODAL -->

<!-- LOGOUT MODAL -->
<div class="modal fade" id="LogoutModal" tabindex="-1" role="dialog" aria-labelledby="LogoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="LogoutModalLabel">Apa anda yakin ingin Logout ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">Tekan "Logout" jika anda ingin mengakhiri sesi.
            </div>
            <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><a class="btn btn-danger" href="<?= base_url('auth/logout') ?>">Logout</a></div>
        </div>
    </div>
</div>