<?php
    if($this->session->flashdata('msg')){
        ?>
        <div class="alert alert-<?= $this->session->flashdata('type') ?> alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?= $this->session->flashdata('msg') ?>
        </div>
        <?php
    }
?>

<div class="row">
    <!-- Datos de Persona -->
    <div class="col-md-6">
        <section class="section-data p-3">
            <h5><i class="fas fa-user"></i> Datos Personales: </h5>
            <hr>
            <form action="" class="text-right">
                <div class="form-group row">
                    <label for="per_tipo_documento" class="col-md-4 col-form-label">Tipo de Documento: </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="per_tipo_documento" value="<?= $this->session->per_tipo_documento ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-md-4 col-form-label">No. Documento: </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="per_documento" value="<?= $this->session->per_documento ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="per_nombre_uno" class="col-md-4 col-form-label">Primer Nombre: </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="per_nombre_uno" value="<?= $this->session->per_nombre_uno ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="per_nombre_dos" class="col-md-4 col-form-label">Segundo Nombre: </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="per_nombre_dos" value="<?= $this->session->per_nombre_dos ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="per_apellido_uno" class="col-md-4 col-form-label">Primer Apellido: </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="per_apellido_uno" value="<?= $this->session->per_apellido_uno ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="per_apellido_dos" class="col-md-4 col-form-label">Segundo Apellido: </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="per_apellido_dos" value="<?= $this->session->per_apellido_dos ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="per_fecha_nacimiento" class="col-md-4 col-form-label">Fecha Nacimiento: </label>
                    <div class="col-md-8">
                        <input type="date" class="form-control" id="per_fecha_nacimiento" value="<?= $this->session->per_fecha_nacimiento ?>" readonly>
                    </div>
                </div>
            </form>
        </section>
    </div>

    <!-- Datos de Usuario -->
    <div class="col-md-6">
        <section class="section-data p-3">
            <h5><i class="fas fa-user-circle"></i> Datos de Usuario: </h5>
            <hr>
            <form action="" class="text-right">
                <div class="form-group row">
                    <label for="usu_usuario" class="col-md-4 col-form-label">Usuario: </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="usu_usuario" value="<?= $this->session->usu_usuario ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="usu_correo" class="col-md-4 col-form-label">E-mail: </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="usu_correo" value="<?= $this->session->usu_correo ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rol_tipo_cargo" class="col-md-4 col-form-label">Tipo: </label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="rol_tipo_cargo" value="<?= ucwords($this->session->rol_tipo_cargo) ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="per_fecha_registro" class="col-md-4 col-form-label">Fecha Registro: </label>
                    <div class="col-md-8">
                        <input type="date" class="form-control" id="per_fecha_registro" value="<?= $this->session->per_fecha_registro ?>" readonly>
                    </div>
                </div>
                <button type="button" class="btn btn-blue" data-toggle="modal" data-target="#update-password-modal">Actualizar Contraseña</button>
            </form>
        </section>
    </div>
</div>


<!-- Modal Actualizar Password -->
<div class="modal fade" id="update-password-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form class="text-right" action="<?= base_url() ?>admin/update_password/" method="POST" id="form-update-password">
                <div class="form-group row">
                    <label for="contrasena-actual" class="col-md-5">Contraseña Actual:</label>
                    <div class="col-md-7">
                        <input type="password" class="form-control" id="contrasena-actual" name="contrasena-actual" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contrasena-actual" class="col-md-5">Contraseña Nueva:</label>
                    <div class="col-md-7">
                        <input type="password" class="form-control" id="contrasena-nueva" name="contrasena-nueva" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="contrasena-actual" class="col-md-5">Confirmar contraseña:</label>
                    <div class="col-md-7">
                        <input type="password" class="form-control" id="contrasena-confirmar" name="contrasena-confirmar" required>
                    </div>
                    <div id="text-validacion-contrasena" class="text-feedback"></div>
                </div>
                <button type="submit" class="btn btn-blue" id="btn-actualizar-password" disabled>Actualizar</button>
            </form>
        </div>
    </div>
  </div>
</div>