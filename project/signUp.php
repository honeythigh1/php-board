<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>signUp</title>
<link rel="stylesheet" type="text/css" href="./css/signup.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/d3js/5.7.0/d3.min.js"></script>
<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>


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
					<input type="text" class="form-control text" id ="postcode" name="addrNum"  placeholder="우편검색"/>
					<input type="button" name="addrBtn" class="btn btn-primary" onclick="sample6_execDaumPostcode()" value="주소검색"/>
					<input type="text" class="form-control" id="address" name="addr" placeholder="주소"/>
					<input type="text" class="form-control" id="detailAddress" name="addrDetail"  placeholder="상세주소" />
					<input type="text" class="form-control"  id="extraAddress" placeholder="참고항목">
				</div>
				<button type="submit" id="submit" class="btn btn-success">가입하기</button>
			</form>
		</div>
	</div>
	
	

<script>
    function sample6_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                if(data.userSelectedType === 'R'){
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if(extraAddr !== ''){
                        extraAddr = ' (' + extraAddr + ')';
                    }
                    // 조합된 참고항목을 해당 필드에 넣는다.
                    document.getElementById("extraAddress").value = extraAddr;
                
                } else {
                    document.getElementById("extraAddress").value = '';
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('postcode').value = data.zonecode;
                document.getElementById("address").value = addr;
                // 커서를 상세주소 필드로 이동한다.
                document.getElementById("detailAddress").focus();
            }
        }).open();
    }
    </script>
</body>
</html>
