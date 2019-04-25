<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>SIGN UP</title>

<link rel="stylesheet" href="./css/css_Reset.css";>
<link rel="stylesheet" href="./css/login.css";>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
</head>
<body>

	<div id="login_form">
		<p class="title">로그인</p>
		
		<div class="content">
		<form action="#">
			<div class="form-group">
				<label for="id">ID</label> 
				<input type="text" class="form-control" id="id" placeholder="아이디를 입력하세요.">
			</div>
			
			<div class="form-group">
				<label for="pwd">Password</label> 
				<input type="password" class="form-control" id="pwd" placeholder="비밀번호를 입력하세요.">
			</div>
		</div>
		
			<div class="button">
			   <button type="submit" class="btn btn-default"><a href="index.php">로그인</button>
			   <button type="button" class="btn btn-default"><a href="index.php">회원가입</a></button>
			</div>
		</form>
	</div>
	
	
</body>
</html>
