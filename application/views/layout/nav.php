<nav class="collapse">
    <ul class="nav nav-pills" id="mainNav">
        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="<?php echo base_url('home') ?>">
                Home
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="<?php echo base_url('product') ?>">
                Product
            </a>
        </li>
          <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="#">
                Kategori
            </a>
            <ul class="dropdown-menu">
                <?php 
                    foreach ($kategori as $kat):
                ?>
                        <li class="dropdown-item"><a href=""><?php echo $kat['kategori_nama']?></a></li>
                <?php
                    endforeach;
                ?>
            </ul>               
        </li>
        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="<?php echo base_url('blog'); ?>">
                Blog
            </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="<?php echo base_url('pemesanan'); ?>">
                Pemesanan
            </a>
        </li>
    
      
        
        <li class="dropdown">
            <a class="dropdown-item dropdown-toggle" href="<?php echo base_url('contact'); ?>">
                Contact
            </a>
        </li>
        
    </ul>
</nav>

