<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="./css/signup.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.7.0/d3.min.js"></script>
</head>
<body>
	<div class="container">
		<div>
			<h1>Sign up</h1>
		</div>
		<div class="form-group zz">
			<form action="register" class="row">
				<div class="form-group ol-xs-3">
					<label for="id">ID :</label> <input type="text"
						class="form-control" id="id" name="id" placeholder="아이디를 입력하세요." />
					<input type="button" name="overlapBtn" class="btn btn-primary" value="중복확인"/>
				</div>
				<div class="form-group">
					<label for="pwd">Password :</label> <input type="password"
						class="form-control" id="pwd" name="pwd" placeholder="비밀번호를 입력하세요." />
				</div>
				<div class="form-group">
					<label for="repwd">Confirm Password :</label> <input type="password"
						class="form-control" id="repwd" name="repwd"
						placeholder="비밀번호를 재입력하세요." />
				</div>
				<div class="form-group">
					<label for="addr" id="addr">Address :</label>
					<input type="text" class="form-control text" name="addrNum" placeholder="주소를 검색하세요"/>
					<input type="button" name="addrBtn" class="btn btn-primary" value="주소검색"/>
					<input type="text" class="form-control" id="addr" name="addr" />
					<input type="text" class="form-control" id="addrDetail" name="addrDetail" 
					placeholder="상세주소를 입력하세요." />
				</div>
				<button type="submit" id="submit" class="btn btn-success">가입하기</button>
			</form>
		</div>
	</div>


<?php
?>
</body>
</html>
