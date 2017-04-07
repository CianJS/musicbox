<html>
	<head>
		<title>Music</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/boostrap.re-adjust.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	</head>
	<body>
			<div id="content">
		<?php
 		require("./menu.html");
 		?>
		</div>

<div class="main" style="width:480px; margin: 0 auto;">
	<div class="panel panel-default contentBox clearfix">
		<div class="panel-heading">로그인</div>
		<div class="panel-body">
			<form role="form" method="post">
				<div class="form-group">
					<label for="email">이메일</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="이메일">
				<div class="form-group">
					<label for="password">비밀번호</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="비밀번호">
				</div>
				<button type="submit" class="btn btn-default pull-right">로그인</button>
                </div>
			</form>
        </div>
	</div>
</div>

	</body>
</html>