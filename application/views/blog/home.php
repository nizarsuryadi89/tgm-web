<div class="container">
        <div class="col">
            <div class="blog-posts">
                <div class="row">
                    <?php
                        foreach ($blogs as $key => $bg) {
                    ?>
                    <div class="col-md-4 col-lg-3">
                        <article class="post post-medium border-0 pb-0 mb-5">
                            <div class="post-image">
                                <a href="<?php echo site_url('Blog/detail/' . $bg['url']); ?>">
                                    <img src="<?php echo base_url()?>/assets/img/blog/<?php echo $bg['cover']; ?>" class="img img-responsive img-fluid img-thumbnail img-thumbnail rounded" alt="">
                                </a>
                            </div>

                            <div class="post-content">

                                <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="<?php echo site_url('Blog/detail/' . $bg['url']); ?>"><?php echo $bg['title']?></a></h2>
                                <p align="justify"><?php echo word_limiter($bg['content'], 10); ?></p>

                                <div class="post-meta">
                                    <span><i class="far fa-user"></i> By <a href="#"><?php echo $bg['penulis']?></a> </span>
                                    <span><i class="far fa-folder"></i> Tanggal : <a href="#"><?php echo $bg['date']?></php></a> </span>
                                    
                                    <span class="d-block mt-2">
                                        <a href="<?php echo site_url('Blog/detail/' . $bg['url']); ?>" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a>
                                    </span>
                                </div>

                            </div>
                        </article>
                    </div>
                    <?php
                        }
                    ?>
                </div>

                    

                <div class="row">
                    <div class="col">
                        <ul class="pagination float-right">
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>


</div>