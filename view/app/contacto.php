<h3><a href="<?php echo $_SESSION['home'] ?>" title="Inicio">Inicio</a> <span>| Contacto</span></h3>

<div class="row">
    <i class="large material-icons">info_outline</i>
    <p>Esta página muestra el contacto con el universo de Harry Potter</p>
    <p>Comparte tus datos mágicos con el colegio Hogwarts de Magia y Hechicería</p>
  
</div>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['public'] ?>css/contacto.css">

<body>

    <form id="regForm" action="/action_page.php">
        <h1>Registro</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Nombre:
            <p><input placeholder="Nombre..." oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Apellidos..." oninput="this.className = ''" name="lname"></p>
        </div>
        <div class="tab">Contact Info:
            <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
            <p><input placeholder="Telefono..." oninput="this.className = ''" name="phone"></p>
        </div>
        <div class="tab">Fecha de nacimiento:
            <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
            <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
            <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
        </div>
        <div class="tab">Información de registro:
            <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
            <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>
</body>

<script src="<?php echo $_SESSION['public'] ?>js/contacto.js"></script>

</html>