<html>
	<head>
		<title>Music</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/css/boostrap.re-adjust.css" />
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
	</head>
	<body>
			<div id="content">
		<?php
 		require("./menu.html");
 		?>
		</div>

<div class="main" style="width:960px; margin: 0 auto;">
	<div class="panel panel-default contentBox clearfix">
		<div class="panel-heading">회원가입</div>
		<div class="panel-body">
			<form role="form" method="post">
				<div class="form-group">
					<label for="email">이메일</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="이메일">
					<p class="help-block">
						 확인메일이 발송됩니다. 정확히 입력해 주세요.<br>
						<strong>일부 메일 계정은</strong> 인증메일이 스팸 처리될 수 있습니다.<br>
						 메일이 도착하지 않았을 때는 스팸메일함도 확인해 주세요<br>
					</p>
				</div>
				<div class="form-group">
					<label for="email_confirm">이메일 확인</label>
					<input type="email" class="form-control" name="email_confirm" id="email_confirm" placeholder="이메일 확인">
				</div>
				<div class="form-group">
					<label for="password">비밀번호</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="비밀번호">
				</div>
				<div class="form-group">
					<label for="password_confirm">비밀번호 확인</label>
					<input type="password" class="form-control" name="password_confirm" id="password_confirm" placeholder="비밀번호 확인">
				</div>
				<div class="checkbox">
					<label><input type="checkbox" id="agree" name="agree" value="Y"><a href="#" target="_blank">이용약관</a>과 <a href="#" target="_blank">개인정보 취급방침</a>에 동의합니다.</label>
				</div>
				<button type="submit" class="btn btn-default pull-right">회원가입</button>
			</form>
		</div>
	</div>
</div>

	</body>
</html>