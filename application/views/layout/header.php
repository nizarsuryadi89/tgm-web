<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
        <div class="header-body border-color-primary border-bottom-0 box-shadow-none" data-sticky-header-style="{'minResolution': 0}" data-sticky-header-style-active="{'background-color': '#f7f7f7'}" data-sticky-header-style-deactive="{'background-color': '#FFF'}">
            <div class="header-top header-top-borders">
                <div class="container h-100">
                    <div class="header-row h-100">
                        <div class="header-column justify-content-start">
                            <div class="header-row">
                                <nav class="header-nav-top">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item nav-item-borders py-2">
                                            <span class="pl-0"><i class="far fa-dot-circle text-4 text-color-primary" style="top: 1px;"></i> <?php echo $perusahaan['alamat_perusahaan']; ?></span>
                                        </li>
                                        <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
                                            <a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> <?php echo $perusahaan['telepon']; ?></a>
                                        </li>
                                        <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
                                            <a href="mailto:mail@domain.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> <?php echo $perusahaan['email']; ?></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                
                               <a href="<?php echo site_url('memberArea/pendaftaran')?>" style="text-decoration:none; text-color:black;">
                               <i class="fas fa-key"></i>
                               Daftar / Login Member</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-container container">
                <div class="header-row py-2">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="index.html">
                                    <img alt="Porto" width="140" height="48" data-sticky-width="120" data-sticky-height="40" data-sticky-top="84" src="<?php echo base_url() ?>/assets/img/logo.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-extra-info d-flex align-items-center mr-3">
                                <li class="d-none d-sm-inline-flex">
                                    <div class="header-extra-info-text">
                                        <label>SEND US AN EMAIL</label>
                                        <strong><a href="mailto:mail@example.com"><?php echo $perusahaan['email']; ?></a></strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-extra-info-text">
                                        <label>CALL US NOW</label>
                                        <strong><a href="tel:8001234567"><?php echo $perusahaan['telepon']; ?></a></strong>
                                    </div>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="header-nav-bar bg-color-light-scale-1 mb-3 px-3 px-lg-0">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row justify-content-end">
                                <div class="header-nav header-nav-links justify-content-start" data-sticky-header-style="{'minResolution': 991}" data-sticky-header-style-active="{'margin-left': '150px'}" data-sticky-header-style-deactive="{'margin-left': '0'}">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-dropdown-arrow header-nav-main-effect-3 header-nav-main-sub-effect-1">
                                        <?php require_once('nav.php'); ?>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>