<div class="all-content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="logo-pro">
                    <a href="<?=base_url()?>">
                        <h3 style="color: #D01F05">HELPDESK TIK - ITERA</h3>
                        <!-- <img class="main-logo" src="<?=base_url()?>assets_jeweler/img/logo/logo.png" alt="" /> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-advance-area">
        <div class="header-top-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header-top-wraper">
                            <div class="row">
                                <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                    <div class="menu-switcher-pro">
                                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                    <div class="header-top-menu tabl-d-n">
                                        <ul class="nav navbar-nav mai-top-nav">
                                            <li class="nav-item"><a href="#" class="nav-link" style="color: ">HELPDESK TIK - Institut Teknologi Sumatera</a>
                                            </li>
                                            <!-- <li class="nav-item"><a href="#" class="nav-link">About</a>
                                            </li>
                                            <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                            </li>
                                            <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                             <?php 
                                             if ($this->session->userdata('level_helpdesk') == 'admin') { 
                                                $controller = 'admin';
                                                $notif = $this->Model->ambil_banyak_kondisi('tb_pesan', array('level' => 'user' , 'flag' => 'belum-dibaca') )->result();
                                                $jml = $this->Model->ambil_banyak_kondisi('tb_pesan', array('level' => 'user' , 'flag' => 'belum-dibaca') )->num_rows();
                                            }else{
                                                $controller = 'user';
                                                $notif = $this->Model->list_join_where_banyak_kondisi('tb_ticket','tb_pesan','tb_ticket.no_ticket = tb_pesan.no_ticket',array('tb_pesan.flag' => 'belum-dibaca','tb_pesan.level'=>'teknisi','tb_ticket.email_user' => $this->session->userdata('username')))->result();
                                                $jml = $this->Model->list_join_where_banyak_kondisi('tb_ticket','tb_pesan','tb_ticket.no_ticket = tb_pesan.no_ticket',array('tb_pesan.flag' => 'belum-dibaca','tb_pesan.level'=>'teknisi','tb_ticket.email_user' => $this->session->userdata('username')))->num_rows();
                                            }?>
                                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="badge" style="background: #fff; color: #D01F05"><?=$jml?></span> <i class="fa fa-bell-o" aria-hidden="true"></i>
                                                <?php if($jml > 0){?>
                                                <span class="indicator-nt"></span>
                                                <?php }?>
                                            </a>
                                                <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                    <div class="notification-single-top">
                                                        <h1>Notifications</h1>
                                                    </div>
                                                    <ul class="notification-menu">
                                                       
                                                        <?php
                                                            foreach($notif as $notif){
                                                        ?>
                                                            <li>
                                                                <a href="<?=base_url()?><?=$controller?>/ticket/detail/<?=$notif->no_ticket?>/<?=$notif->id_pesan?>">
                                                                    <div class="notification-icon">
                                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                    </div>
                                                                    <div class="notification-content">
                                                                        <!-- <span class="notification-date"><?=$notif->tgl_pesan?></span> -->
                                                                        <h2><?=$notif->nama_user?></h2>
                                                                        <p><?=$notif->no_ticket?></p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        <?php 
                                                            }
                                                        ?>
                                                    </ul>
                                                    <div class="notification-view">
                                                        <a href="#">View All Notification</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                        <span class="admin-name"><?=$this->session->userdata('name')?></span>
                                                        <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                    </a>
                                                <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                    
                                                    <li><a href="<?=base_url()?>login/signout"><span class="fa fa-lock author-log-ic"></span>Log Out</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <?php if( $this->session->userdata('level_helpdesk') == 'teknisi'){?>
                                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Master Ticket <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="<?=base_url()?>teknisi">Dashboard</a></li>
                                            <li><a href="<?=base_url()?>teknisi/ticket">Ticket</a></li>
                                        </ul>
                                    </li>
                                    <?php }else if($this->session->userdata('level_helpdesk') == 'admin'){?>
                                    <li><a data-toggle="collapse" data-target="#demo" href="#">Master Ticket <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a href="<?=base_url()?>admin">Dashboard</a>
                                            </li>
                                            <li><a href="<?=base_url()?>admin/ticket">Ticket</a>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                    <li><a data-toggle="collapse" data-target="#others" href="#">Master Referensi <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="others" class="collapse dropdown-header-top">
                                            <li><a href="<?=base_url()?>admin/layanan">Layanan</a></li>
                                        </ul>
                                    </li>
                                    <?php }else{ ?>
                                    <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Master Ticket <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                        <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            <li><a href="<?=base_url()?>user">Dashboard</a>
                                            </li>
                                            <li><a href="<?=base_url()?>user/ticket">Ticket</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php }?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <div class="breadcome-heading">
                                        <!-- <form role="search" class="">
                                            <input type="text" placeholder="Search..." class="form-control">
                                            <a href=""><i class="fa fa-search"></i></a>
                                        </form> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <!-- <ul class="breadcome-menu">
                                        <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                        </li>
                                        <li><span class="bread-blod">Dashboard V.1</span>
                                        </li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>