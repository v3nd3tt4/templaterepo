<div class="left-sidebar-pro" >
    <nav id="sidebar" class="" style="width: 210px">
        <div class="sidebar-header">
            <a href="<?=base_url()?>">
              <h3 style="color: #D01F05">HELPDESK</h3>
              <!-- <img class="main-logo" src="<?=base_url()?>assets_jeweler/img/logo/logo.png" alt="" /> -->
            </a>
            <!-- <strong><img src="<?=base_url()?>assets_jeweler/img/logo/logosn.png" alt="" /></strong> -->
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <?php if( $this->session->userdata('level_helpdesk') == 'teknisi'){?>
                    <li class="active">
                        <a class="has-arrow" href="index.html">
                           <i class="fa big-icon fa-home icon-wrap"></i>
                           <span class="mini-click-non">Master Ticket</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li class="<?php if($link=='beranda'){echo'active';}?>"><a title="Dashboard v.1" href="<?=base_url()?>teknisi"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Dashboard</span></a></li>
                            <li><a title="Dashboard v.2" href="<?=base_url()?>teknisi/ticket"><i class="fa fa-circle-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ticket</span></a></li>
                            
                        </ul>
                    </li>
                    <?php }else if($this->session->userdata('level_helpdesk') == 'admin'){?>
                    <li class="active">
                        <a class="has-arrow" href="index.html">
                           <i class="fa big-icon fa-home icon-wrap"></i>
                           <span class="mini-click-non">Master Ticket</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li class="<?php if($link=='beranda'){echo'active';}?>"><a title="Dashboard v.1" href="<?=base_url()?>admin"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Dashboard</span></a></li>
                            <li><a title="Dashboard v.2" href="<?=base_url()?>admin/ticket"><i class="fa fa-circle-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ticket</span></a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="index.html">
                           <i class="fa big-icon fa-home icon-wrap"></i>
                           <span class="mini-click-non">Master Referensi</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li class="<?php if($link=='beranda'){echo'active';}?>"><a title="Dashboard v.1" href="<?=base_url()?>admin/layanan"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Layanan</span></a></li>
                        </ul>
                    </li>
                    <?php }else{ ?>
                    <li class="active">
                        <a class="has-arrow" href="index.html">
                           <i class="fa big-icon fa-home icon-wrap"></i>
                           <span class="mini-click-non">Master Ticket</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li class="<?php if($link=='beranda'){echo'active';}?>"><a title="Dashboard v.1" href="<?=base_url()?>user"><i class="fa fa-bullseye sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Dashboard</span></a></li>
                            <li><a title="Dashboard v.2" href="<?=base_url()?>user/ticket"><i class="fa fa-circle-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ticket</span></a></li>
                            
                        </ul>
                    </li>
                    <?php }?>
                </ul>
            </nav>
        </div>
    </nav>
</div>


