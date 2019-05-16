@include('partials/header')

<form method="POST" id="contact-form">
    <input type="text" name="name" placeholder="NOMBRE Y APELLIDO">
    <input type="email" name="email" placeholder="EMAIL">
    <input type="text" name="phone" placeholder="TELÉFONO">
    <textarea type="text" name="message" placeholder="CONSULTA"></textarea>
    {{ csrf_field() }}
    <input class="submit" type="submit" value="ENVIAR">
</form>

@include('partials/footer')
