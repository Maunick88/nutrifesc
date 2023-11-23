<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
  <?php
    include('headerc.php');
    include('estilos.css');
  ?>
<body>
  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Generar Cita</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Gratis<small class="text-body-secondary fw-light">(solo alumnos)</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Horario</li>
              <li>lunes, miércoles y</li>
              <li>viernes de las 10 a 14 horas</li>
              <li>martes y jueves de 14 a 20 horas</li>
            </ul>
            <a <button type="button" class="button" href="/NUTRIFESC/generar_cita.php">Generar cita
              <div class="button__horizontal"></div>
              <div class="button__vertical"></div>
            </button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Consulta tu cita<small class="text-body-secondary fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Recuerda tener tu</li>
              <li>credencial vigente</li>
              <li>a la mano</li>
            </ul>
            <a <button type="button" class="button" href="/NUTRIFESC/consulta.php">Ver Mis Citas></button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Administrador</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Solo administradores<small class="text-body-secondary fw-light"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Agenda de citas</li>
              <li>control de citas</li>
              <li>acceso solo para </li>
              <li>administradores</li>
            </ul>
            <a <button type="button" class="button" href="/NUTRIFESC/admin_page.php">Acceder a la Administración de Citas</button> </a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php include('footer.php'); ?>
</div>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
