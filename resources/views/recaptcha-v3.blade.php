<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>recaptcha-v3</title>
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script>
		function onSubmit(token) {
			document.getElementById("demo-form").submit();
		}
	</script>
</head>
<body>
	<form id="demo-form" action="recaptcha" method="post">
		@csrf
		<button class="g-recaptcha" data-sitekey="{{ config('recaptcha.site_key') }}" data-callback='onSubmit' data-action='submit'>reCAPTCHA Test</button>
		@error('g-recaptcha-response')
	        <div class="alert alert-danger">{{ $message }}</div>
	    @enderror
	</form>
</body>
</html>
