<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Facebook clone</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="header"></div>
		<div class="main">
			<div class="left-side">
				<img src="assets/image/facebook Signin image.png" alt="">
			</div>

			<div class="right-side">
				<div class="error"></div>
				<h1>アカウントを作成してください</h1>
				<div>無料で作成する</div>
				<form action="sign.php" method="POST" name="user-sign-up">
					<div class="sign-up-form">
						<div class="sign-up-name">
							<input type="text" name="first-name" id="first-name" class="text-field" placeholder="例)test">
							<input type="text" name="last-name" id="last-name" class="text-field" placeholder="例)account">
						</div>

						<div class="sign-up-wrap">
							<input type="text" name="email-mobile" id="up-email" class="text-input" placeholder="電話番号もしくはメールアドレスを入力してください">
						</div>

						<div class="sign-up-password">
							<input type="password" name="up-password" id="up-password" class="text-input">
						</div>

						<div class="sign-up-birthday">
							<div class="bday">生年月日</div>
							<div class="form-birthday">
								<select name="birth-day" id="days" class="select-body"></select>
								<select name="birth-month" id="months" class="select-body"></select>
								<select name="birth-year" id="years" class="select-body"></select>
							</div>
						</div>

						<div class="gender-wrap">
							<input type="radio" name="gen" id="male" value="male" class="m0">
								<label for="male" class="gender">男性</label>
							<input type="radio" name="gen" id="fem" value="female" class="m0">
								<label for="fem" class="gender">女性</label>
							<input type="radio" name="gen" id="x" value="Xgender" class="m0">
								<label for="Xgender" class="gender">その他</label>
						</div>

						<div class="term">
							利用規約にご同意の上、登録ボタンを押してください。
						</div>

						<input type="submit" value="登録" class="sign-up">
					</div>
				</form>

			</div>
		</div>
</body>
</html>



