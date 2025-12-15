<!DOCTYPE html>
<html>
<head>
    <title>Submit Data Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<h2>Submit dengan FORM</h2>
<form action="/login" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login Form</button>
</form>

<hr>

<h2>Submit dengan AJAX</h2>
<input type="text" id="username" placeholder="Username"><br><br>
<input type="password" id="password" placeholder="Password"><br><br>
<button onclick="loginAjax()">Login Ajax</button>

<p id="result"></p>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function loginAjax() {
    $.ajax({
        url: '/login-ajax',
        method: 'POST',
        data: {
            _token: document.querySelector('meta[name="csrf-token"]').content,
            username: $('#username').val(),
            password: $('#password').val()
        },
        success: function(response) {
            document.getElementById('result').innerHTML =
                response.status + '<br>' +
                'Username: ' + response.username;
        }
    });
}
</script>

</body>
</html>
