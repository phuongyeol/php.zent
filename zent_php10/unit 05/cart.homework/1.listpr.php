<meta charset="utf-8">
<?php 
	session_start();
	$_SESSION['products'] = array(
							'SP01' => array(
								'id' => 'SP01',
								'name' => 'Code Dạo Ký Sự',
								'price'=> 150000,
								'quantity' => 35,
								'detail' => "Code Dạo Ký Sự - Lập trình viên đâu phải chỉ biết code. Những kĩ năng từ cứng đến mềm mà lập trình viên nào cũng phải biết để thăng tiến và thành công trong sự nghiệp. <br> Các Developer \"chất\" luôn cần phải trau dồi thêm nhiều kiến thức mới. Áp dụng ngay những kinh nghiệm mà tác giả chia sẻ trong cuốn sách này sẽ giúp bạn trở thành một Developer \"siêu chất\" mà các công ty hàng đầu trên ITviec đều muốn săn đón. ",
							),
							'SP02' => array(
								'id' => 'SP02',
								'name' => 'Tuổi trẻ không trì hoãn',
								'price'=> 50000,
								'quantity' => 15,
								'detail' => "Trì hoãn là sát thủ của thời gian. Nó sẽ rút ngắn độ dài tuổi thọ của chúng ta, khiến chúng ta hao mòn năm tháng, tuổi xuân trong sự chờ đợi vô vọng và nỗi hối hận căm hờn vô bờ bến. Trì hoãn là kẻ cắp của sinh mệnh. Nó sẽ đánh cắp sự nhiệt tình, cơ hội, mài mòn ý chí chiến đấu của mỗi người trong vô thức, khiến cuộc sống dậm chân tại chỗ một cách nhàm chán và đầy bất lực. <br> Tuổi trẻ của chúng ta rực rỡ hay úa tàn là do chính bản thân ta quyết định. Đừng để “ trì hoãn” mang chúng ta đi xa hơn với những gì ta mong muốn có được, đừng để những mục tiêu mãi mãi chỉ nằm trong kế hoạch… Ngay bây giờ hãy tiến hành “ điều trị bệnh trì hoãn ” bởi “ Hôm nay không bắt đầu, ngày mai sẽ hối hận ”."
							),
							'SP03' => array(
								'id' => 'SP03',
								'name' => 'Nhập môn lập trình không code',
								'price'=> 70000,
								'quantity' => 60,
								'detail' => "Một người thầy giỏi không phải là người thầy dạy cho bạn mọi thứ, mà là người thầy dạy cho bạn cách tự tìm hiểu mọi thứ."
							),
							'SP04' => array(
								'id' => 'SP04',
								'name' => 'Mình là cá, việc của mình là bơi',
								'price'=> 120000,
								'quantity' => 50,
								'detail' => "Trên đời này vốn không có cái gì gọi là công bằng hay chơi đẹp cả. Con người càng trải qua những chuyện vô lý, càng trải qua những chuyện bất công thì lại càng được tôi luyện và mạnh mẽ hơn."
							),
							'SP05' => array(
								'id' => 'SP05',
								'name' => 'Cafe sáng cùng Tony!',
								'price'=> 100000,
								'quantity' => 100,
								'detail' => "Với các bạn trẻ, Cà Phê Cùng Tony hẳn không còn xa lạ. Cuốn sách là tập hợp những bài viết trên mạng xã hội của tác giả Tony Buổi Sáng (TnBS), kể về những trải nghiệm trong việc học hành, thi cử, trong những chuyến đi, những suy nghĩ về tình đời, tình người, sự văn minh, lạc hậu… Mỗi câu chuyện đều bắt nguồn từ những tình huống hết sức đời thường, nhưng  lại làm độc giả bật cười, lúc lại nghèn nghẹn nơi huyết quản, khi thì “giật thột” vì tìm thấy hình ảnh của chính mình qua từng câu chữ.",
							),
	);
	$products = $_SESSION['products'];
	// echo "<pre>";
	// print_r($products);
	// echo "<?pre>";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Product List</title>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang chủ</title>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//id.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

 </head>
 <body>
 	<div class="container">
 		<div id="header">
 			<h3 class="text-uppercase text-center">BACH KHOA BOOK LIST</h3>
 			<div class="text-left">
 				<a href="2.yourcart.php" class="btn btn-danger">Your Cart</a>
 			</div>
 		</div>
 		<div id="listcontent">
 			<table class="table table-hover">
 				<thead>
 					<th>ID</th>
 					<th>NAME</th>
 					<th>PRICE</th>
 					<th>QUANTITY</th>
 					<th>ACTION</th>
 				</thead>
 				<tbody>
 					<?php foreach ($products as $products) { ?> 
 						<tr>
 							<th><?php echo $products['id']; ?></th>
 							<th><?php echo $products['name']; ?></th>
 							<th><?php echo $products['price']; ?></th>
 							<th><?php echo $products['quantity']; ?></th>
 							<th class="text-center">
 								<a type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Detail</a>
								<!-- Modal -->
								<div id="myModal" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">BK Book</h4>
											</div>
											<div class="modal-body">
												<table class="table table-hover">
													<label for="">Thông tin sản phẩm</label>
													
													<tbody>
														<tr>
															<td><label for="">Mã sản phẩm</label></td>
															<td><?php echo $product['id'] ?></td>
														</tr>
														<tr>
															<td><label for="">Tên sản phẩm</label></td>
															<td><?php echo $product['name'] ?></td>
														</tr>
														
														<tr>
															<td><label for="">Đơn giá</label></td>
															<td><?php echo number_format($product['price']) ?></td>
														</tr>
														<tr>
															<td><label for="">Mô tả</label></td>
															<td><?php echo $product['detail'] ?></td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>

								<a href="3.add2cart.php?id=<?php echo $products['id']; ?>" class="btn btn-success">Add to Cart</a>
 							</th>
 						</tr>

 					<?php } ?>
 				</tbody>
 			</table>
 		</div>


 	</div>
 </body>
 </html>