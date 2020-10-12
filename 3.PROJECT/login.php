<header>
	<?php
	include("include/header.php");
	?>
</header>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="process-login.php" method="POST" class="was-validated">
					<h5><span style="color:blue">L</span><span style="color:red">O</span><span style="color:yellow">G</span><span style="color:green">I</span><span style="color:violet">N</span></h5>
					<div class="form-group" style="margin-top:25px">
						<label for="username">Email đăng nhập</label>
						<input class="form-control" type="text" name="username" id="username" placeholder="tài khoản đăng nhập" required="" ng-model="Username">
						<div class="valid-feedback">Nhập thành công.</div>
						<div class="invalid-feedback">Hãy điền đẩy đủ thông tin.</div>
					</div>

					<div class="form-group">
						<label for="password">Mật khẩu</label>
						<input class="form-control" type="password" name="password" id="password" placeholder="********" required="" ng-model="Password">
						<div class="valid-feedback">Nhập thành công.</div>
						<div class="invalid-feedback">Hãy điền đẩy đủ thông tin.</div>
					</div>

					<div class="form-group">
						<input type="submit" class="form-control btn btn-primary" value="Đăng nhập" name="txtLogin" id="txtLogin" aria-describedby="emailHelpId">
					</div>

					<div>
						<p style="color:#111">
							<!-- sửa thành trang tạo tài khoản khi có -->
							Bạn chưa có tài khoản? <a href="#" class="">Gửi yêu cầu</a> tạo tài khoản mới
						</p>
					</div>

					<div>
						<!-- sửa thành trang đổi mật khẩu khi có -->
						<a href="#" class="">Bạn đã quên mật khẩu?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

<footer>
	<?php
	include("include/footer.php");
	?>
</footer>