<form method="POST" action="admin/login"  id="contact-form">
    <input type="text" name="username" placeholder="USUARIO">
    <input type="text" name="password" placeholder="PASSWORD">
    {{ csrf_field() }}
    <input class="submit" type="submit" value="ENVIAR">
</form>
