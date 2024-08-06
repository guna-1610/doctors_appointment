<?php //session_start();?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Pharma</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
</head>



<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="./">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button">Search</button> </form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->
		</div>
	</div>
	<!-- eof .modal -->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">
			
			
			<!-- Header Start -->
			<?php include('./comnpages/header.php'); ?>
			<!--Header End -->
			
						
                        
                        <section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
				<div class="container">
					<div class="row">
                    
						
			
					
					<?php
               require('./comnpages/config.php');					
			$update_id=$_REQUEST['cid'];
			$c_select = mysqli_query($conn,"SELECT * FROM doctor_list WHERE did='$update_id'");
			$data_row = mysqli_fetch_array($c_select);
					$sql1="UPDATE doctor_list SET isread=1";
					$sql11=mysqli_query($conn,$sql1);
			
				?>
                                       
						<div class="col-md-12">
							<div class="with_border with_padding ">
								<div itemscope="" itemtype="http://schema.org/Product" class="product type-product row">
									<div class="col-md-6">
										<div class="images"> <!--<span class="newproduct">New</span> <span class="onsale">Sale!</span>-->
										<a href="images/Doctor/doc2.jpg" itemprop="image" class="woocommerce-main-image zoom" data-rel="prettyPhoto[product-gallery]">
					            <img src="images/Doctors/<?php echo $data_row['image'];?>"" class="attachment-shop_single wp-post-image muted_background" alt="" title="" width="200px">
					        </a> </div>
									</div>
									
										 
							<form action="addtocart.php" method="post">			 
									<div class="summary entry-summary col-md-6" >
										<h1 itemprop="name" class="product_title entry-title"><?php echo $data_row['name'];?>
										<input type="hidden" name="pname" value="<?php echo $data_row['pname'];?>"></h1>
										
											
										</div>
                                       
										<div class="product_meta"> <span class="posted_in">
								<span class="grey">speciality:</span> <span class="categories-links small-text">
									<a rel="category" href="#"><?php echo $data_row['speciality'];?>
									</a>
								</span> </span>
										</div>
										
										<div class="product_meta"> <span class="posted_in">
								<span class="grey">Fees:</span> <span class="categories-links small-text">
									<a rel="category" href="#"><?php echo $data_row['fees'];?>
									</a>
								</span> </span>
										</div>
									
                            <div class="product_meta"> <span class="posted_in">
								<span class="grey">Description:</span> <span class="categories-links small-text">
									<?php echo $data_row['description'];?>
									
								</span> </span>
										</div>									
										
										
									</div>
							</form>
							
							
									<!-- .summary.col- -->
								</div>
								<!-- .product.row -->
							</div>
							<!-- .muted_background -->
							<div class="woocommerce-tabs">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs wc-tabs" role="tablist">
									<li class="active"><a href="#details_tab" role="tab" data-toggle="tab">Clinics</a></li>

								</ul>
								<!-- Tab panes -->
								<div class="tab-content top-color-border">
							

                                <?php
							//require('./comnpages/config.php');
							$select = mysqli_query($conn,"SELECT * FROM clinics WHERE d_id='$update_id'");
		                     $noofrows=mysqli_num_rows($select);
							 $count=0;
							 if($noofrows>0)
							 {
		                      while($row= mysqli_fetch_array($select))
		                          {
		                         $count++;
																			
							  ?>							
								
								    <div class="container">
              
									  <table class="table table-bordered table-striped">
										
										
										<tr>
											<th><h3><?php echo $row['name'];?></h3></th>
										</tr>
										
										  <tr>
						<th> 
							<p><?php echo $row['address'];?> </p>
							<p><?php echo $row['location'];?> </p>
							<p><?php echo $row['timing_ms'];?> 
<b> Mon- Sat </b>, <?php echo $row['timing_sun'];?><b>Sun </b>  							</p>
										   
										  
											<th>0755-<?php echo $row['contact_no'];?>&nbsp &nbsp &nbsp &nbsp Mobile:<?php echo $row['mobile_no'];?></th>
											
										   </tr>
											
									  </table>
</div>
	
<?php
							 }}?>	
									<div class="tab-pane fade" id="additional_tab">
										<table class="table table-striped topmargin_30">
											<tr>
												<th class="grey">Product title:</th>
												<td>Product Name</td>
											</tr>
											<tr>
												<th class="grey">Item SKU:</th>
												<td>5552281538</td>
											</tr>
											<tr>
												<th class="grey">Brand:</th>
												<td><a href="#">Brand Name</a></td>
											</tr>
											<tr>
												<th class="grey">Style:</th>
												<td>SuperStyle</td>
											</tr>
											<tr>
												<th class="grey">Size:</th>
												<td>Middle</td>
											</tr>
											<tr>
												<th class="grey">Color:</th>
												<td>Black</td>
											</tr>
											<tr>
												<th class="grey">Targeted Group:</th>
												<td>All</td>
											</tr>
										</table>
									</div>
									<div class="tab-pane fade" id="reviews_tab">
										<div class="comments-area" id="comments">
											<ol class="comment-list">
												<li class="comment even thread-even depth-1 parent">
													<article class="comment-body media">
														<div class="media-left"> <img class="media-object" alt="" src="images/team/05.jpg"> </div>
														<div class="media-body"> <span class="reply greylinks">
										<a href="#respond">
											<i class="fa fa-reply"></i>
										</a>
									</span>
															<div class="comment-meta darklinks"> <a class="author_url" rel="external nofollow" href="#">Alan Smith</a> <span class="comment-date">
											<time datetime="2017-11-08T15:05:23+00:00" class="entry-date">22.11.2017 at 12:34</time>
										</span> </div>
															<div class="comment-rating"> <span class="grey">Customer Rating: </span>
																<div class="star-rating" title="Rated 4.50 out of 5"> <span style="width:90%">
												<strong class="rating">4.50</strong> out of 5
											</span> </div>
															</div>
															<p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
														</div>
													</article>
													<!-- .comment-body -->
													<ol class="children">
														<li class="comment byuser odd alt depth-2 parent">
															<article class="comment-body media">
																<div class="media-left"> <img class="media-object" alt="" src="images/team/03.jpg"> </div>
																<div class="media-body"> <span class="reply greylinks">
												<a href="#respond">
													<i class="fa fa-reply"></i>
												</a>
											</span>
																	<div class="comment-meta darklinks"> <a class="author_url" rel="external nofollow" href="#">Alan Smith</a> <span class="comment-date">
													<time datetime="2017-11-08T15:05:23+00:00" class="entry-date">22.11.2017 at 12:34</time>
												</span> </div>
																	<div class="comment-rating"> <span class="grey">Customer Rating: </span>
																		<div class="star-rating" title="Rated 4.50 out of 5"> <span style="width:90%">
												<strong class="rating">4.50</strong> out of 5
											</span> </div>
																	</div>
																	<p>Second Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
																</div>
															</article>
															<!-- .comment-body -->
															<ol class="children">
																<li class="comment byuser even depth-3">
																	<article class="comment-body media">
																		<div class="media-left"> <img class="media-object" alt="" src="images/team/01.jpg"> </div>
																		<div class="media-body"> <span class="reply greylinks">
														<a href="#respond">
															<i class="fa fa-reply"></i>
														</a>
													</span>
																			<div class="comment-meta darklinks"> <a class="author_url" rel="external nofollow" href="#">Alan Smith</a> <span class="comment-date">
															<time datetime="2017-11-08T15:05:23+00:00" class="entry-date">22.11.2017 at 12:34</time>
														</span> </div>
																			<div class="comment-rating"> <span class="grey">Customer Rating: </span>
																				<div class="star-rating" title="Rated 4.50 out of 5"> <span style="width:90%">
												<strong class="rating">4.50</strong> out of 5
											</span> </div>
																			</div>
																			<p>Third Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
																		</div>
																	</article>
																	<!-- .comment-body -->
																</li>
																<!-- #comment-## -->
															</ol>
															<!-- .children -->
														</li>
														<!-- #comment-## -->
													</ol>
													<!-- .children -->
												</li>
												<!-- #comment-## -->
												<li class="comment byuser odd alt thread-odd thread-alt depth-1">
													<article class="comment-body media">
														<div class="media-left"> <img class="media-object" alt="" src="images/team/02.jpg"> </div>
														<div class="media-body"> <span class="reply greylinks">
										<a href="#respond">
											<i class="fa fa-reply"></i>
										</a>
									</span>
															<div class="comment-meta darklinks"> <a class="author_url" rel="external nofollow" href="#">Alan Smith</a> <span class="comment-date">
											<time datetime="2017-11-08T15:05:23+00:00" class="entry-date">22.11.2017 at 12:34</time>
										</span> </div>
															<div class="comment-rating"> <span class="grey">Customer Rating: </span>
																<div class="star-rating" title="Rated 4.50 out of 5"> <span style="width:90%">
												<strong class="rating">4.50</strong> out of 5
											</span> </div>
															</div>
															<p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
														</div>
													</article>
													<!-- .comment-body -->
												</li>
												<!-- #comment-## -->
												<li class="comment byuser even thread-even depth-1">
													<article class="comment-body media">
														<div class="media-left"> <img class="media-object" alt="" src="images/team/04.jpg"> </div>
														<div class="media-body"> <span class="reply greylinks">
										<a href="#respond">
											<i class="fa fa-reply"></i>
										</a>
									</span>
															<div class="comment-meta darklinks"> <a class="author_url" rel="external nofollow" href="#">Alan Smith</a> <span class="comment-date">
											<time datetime="2017-11-08T15:05:23+00:00" class="entry-date">22.11.2017 at 12:34</time>
										</span> </div>
															<div class="comment-rating"> <span class="grey">Customer Rating: </span>
																<div class="star-rating" title="Rated 4.50 out of 5"> <span style="width:90%">
												<strong class="rating">4.50</strong> out of 5
											</span> </div>
															</div>
															<p>First Level Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
														</div>
													</article>
													<!-- .comment-body -->
												</li>
												<!-- #comment-## -->
											</ol>
											<!-- .comment-list -->
										</div>
										<!-- #comments -->
										<div class="comment-respond" id="respond">
											<h3>Write Your Own Review</h3>
											<div> <span class="grey">Your rating:</span>
												<p class="stars"> <a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a> </p>
											</div>
											<form class="comment-form" id="commentform" method="post" action="./">
												<div class="row columns_margin_bottom_20">
													<div class="col-md-6">
														<p class="comment-form-author"> <label for="author">Name <span class="required">*</span></label>
															<!-- <i class="rt-icon2-user-outline"></i> --><input type="text" aria-required="true" size="30" value="" name="author" id="author" class="form-control" placeholder="Full Name"> </p>
													</div>
													<div class="col-md-6">
														<p class="comment-form-email"> <label for="comment_email">Email <span class="required">*</span></label>
															<!-- <i class="rt-icon2-mail2"></i> --><input type="email" aria-required="true" size="30" value="" name="comment_email" id="comment_email" class="form-control" placeholder="Email Address"> </p>
													</div>
													<div class="col-md-12">
														<p class="comment-form-chat"> <label for="comment">Comment</label>
															<!-- <i class="rt-icon2-pencil3"></i> --><textarea aria-required="true" rows="8" cols="45" name="comment" id="comment" class="form-control" placeholder="Review"></textarea> </p>
													</div>
												</div>
												<p class="form-submit"> <button type="submit" id="submit" name="submit" class="theme_button wide_button color1">Submit Review</button> <button type="reset" id="reset" class="theme_button wide_button">Clear Form</button> </p>
											</form>
										</div>
										<!-- #respond -->
									</div>
									<div class="tab-pane fade" id="custom_tab">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
											irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
									</div>
								</div>
								<!-- eof .tab-content -->
							</div>
							<!-- .woocommerce-tabs -->
						</div>
						<!--eof .col-sm-8 (main content)-->
                        
                        
                        

						
					</div>
				</div>
			</section>
			
			<!-- Start Footer -->
			<?php include('./comnpages/footer.php'); ?>			
			<!-- End Footer -->
			
			
			
			</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>

</html>