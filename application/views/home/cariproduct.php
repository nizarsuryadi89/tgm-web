
			<div role="main" class="main shop py-4">

				<div class="container text-center">
					<?php echo form_open('product/cariProduct') ?>
						<input type="text" name="keyword" placeholder="Apa Yang Anda Cari" class="form-control">
						<input type="submit" name="search_submit" value="Cari" hidden>
					<?php echo form_close() ?>
					<hr>
					<div class="masonry-loader masonry-loader-showing">
						<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
							<?php 
								foreach ($bahan as $baris) {
							?>
							<div class="col-12 col-sm-6 col-lg-3 product">
								<a href="shop-product-sidebar-left.html">
									<span class="onsale">Sale!</span>
								</a>
								<span class="product-thumb-info border-0">
									<a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
										<span class="text-uppercase text-1">Add to Cart</span>
									</a>
										<a href="<?php echo site_url('product/detail/' . $baris['bahan_id']); ?>">
										<span class="product-thumb-info-image">
											<img alt="" class="img-fluid" src="<?php echo base_url() ?>/assets/img/products/<?php echo $baris['foto_bahan_1']?>">
										</span>
									</a>
									<span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
										<a href="shop-product-sidebar-left.html">
											<h4 class="text-4 text-primary"><?php echo $baris['bahan_nama']; ?></h4>
											<span class="price">
												
												<ins><span class="amount text-dark font-weight-semibold"><?php echo $baris['harga_jual']; ?>/ <?php ?></span></ins>
											</span>
										</a>
									</span>
								</span>
							</div>
							<?php
								}
							?>
						</div>
						<div class="row">
							<div class="col">
								<?php 
									echo $this->pagination->create_links();
								?>
								
							</div>
						</div>
					</div>

				</div>

			</div>

			