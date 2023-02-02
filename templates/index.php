<h1 style="color: #fff;">Witaj na mojej stronie ze ściągami</h1>
<p style="color: #fff;">Kliknij Login żeby zostać przeniesionym do panelu logowania.</p>
<p><a href="{{ url_for('login') }}" style="color: #fff;">Login</a></p>

<style>
body {
  background-color: #333;
  color: #fff;
  font-family: Arial, sans-serif;
}

a {
  color: #fff;
  text-decoration: none;
}

h1 {
  font-size: 2em;
  margin-bottom: 20px;
  text-align: center;
}

form {
  margin: 0 auto;
  max-width: 500px;
  padding: 20px;
}

label {
  font-weight: bold;
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="password"] {
  padding: 8px;
  font-size: 1em;
  width: 100%;
  margin-bottom: 20px;
  border: none;
  border-bottom: 2px solid #fff;
  background-color: transparent;
  color: #fff;
}

input[type="submit"] {
  background-color: #fff;
  color: #333;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 1.1em;
  cursor: pointer;
}

p {
  margin-bottom: 20px;
  text-align: center;
}

.error {
  color: #ff0000;
  margin-bottom: 20px;
  text-align: center;
}