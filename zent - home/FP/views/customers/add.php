<?php include_once 'views/layouts/header.php'; ?>
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">					
					<span><a href="?mod=staff" title="Back to list staff" class="fa fa-arrow-circle-left btn btn-lg" ></a></span>Staff Management 
				</h2> 
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		
		<form action="?mod=staff&act=store" method="POST" role="form" enctype="multipart/form-data">
			<h4 class="text-center text-uppercase">Add new staff</h4>
			<table class="table">
				<tbody>
					<tr>
						<td width="50%">
							<div class="form-group">
								<label for="">Name</label>
								<input type="text" class="form-control" id="name" placeholder="Your name" name="name" class="">
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Avatar</label>
								<input type="file"  id="avatar" placeholder="" name="avatar" class="">
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Your password" name="password" class="">
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Address</label>
								<input type="text" class="form-control" id="address" placeholder="Your address" name="address" class="">
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="" rowspan="" headers="">
							<div class="form-group">
								<label for="">Gender</label>
								<div class="radio">
									<label>
										<input type="radio" name="gender" id="inputGender" value="0" >Male
									</label>
									<label>
										<input type="radio" name="gender" id="inputGender" value="1" checked="checked">Female
									</label>
								</div>
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Job</label>
								<br/>
								<select name="job">
									<option value="0">Saler - Nhân viên bán hàng</option>
									<option value="1">Stocker - Thủ kho</option>
									<option value="2">Secterary - Thư ký</option>
									<option value="3">Trainee - Thực tập viên </option>
									<option value="4">Manager - Quản lý </option>
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td >
							<div class="form-group">
								<label for="">Mobile</label>
								<input type="mobile" class="form-control" id="mobile" placeholder="Your phone number" name="mobile" class="">
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Your email" name="email" class="">
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<button type="submit" class="btn btn-primary" name="submit" >Add</button>
		</form>
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include_once 'views/layouts/footer.php'; ?>