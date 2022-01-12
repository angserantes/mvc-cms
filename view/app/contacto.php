<h3>
    <a href="<?php echo $_SESSION['home'] ?>" title="contacto">Inicio</a> <span>| Contacto</span>
</h3>
<div class="row">
    <i class="large material-icons">info_outline</i>
    <p>
        En esta página puedes contactar con nuestro equipo y ser parte del universo de Harry Potter
    </p>

    <h1>Contacta con el universo de Harry Potter</h1>

      <form>
        <p>Cubriendo el formulario eres parte de nuestro equipo</p>
        <h3>Deja tus datos</h3>
        
        <ul>
          <li>
            <label for="uname">Nombre y apellidos</label>
            <input
              type="text"
              name="uname"
              id="uname"
              required
              minlength="5"
              maxlength="20"
            />
          </li>
          <li>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" required minlength="1" />
          </li>
          <li>
            <label for="phone">Teléfono</label>
            <input
              type="text"
              name="phone"
              id="phone"
              required
              minlength="1"
              maxlength="10"
            />
          </li>
          <li>
            <label>
              Fecha de nacimiento
              <input type="date" name="date" required />
            </label>
          </li>
          <li>
            <button class="button">Enviar</button>
          </li>
</div>