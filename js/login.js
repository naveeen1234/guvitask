<script>
function validateLogin()
{
  let username = document.getElementById('username').value;
  let password = document.getElementById('password').value;

  if (username == 'admin' && password == 'admin') 
  {
    alert('Login successful!');
  } 
  else 
  {
    alert('Invalid username or password!');
  }
}

document.write('<form>');
document.write('Username: <input type="text" id="username" />');
document.write('<br><br>');
document.write('Password: <input type="password" id="password" />');
document.write('<br><br>');
document.write('<input type="button" value="Login" onclick="validateLogin()" />');
document.write('</form>');

</script>