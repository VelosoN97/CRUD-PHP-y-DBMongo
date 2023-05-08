<?php include "./header.php"; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                    <a href="index.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-angles-left"></i> Regresar
                    </a>
                    <h2>Agregar Nuevo Registro</h2>
                    
                    <form action="./procesos/insertar.php" method="post">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                        <label for="paterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="paterno" name="paterno" required>
                        <label for="materno">Apellido Materno</label>
                        <input type="text" class="form-control" id="materno" name="materno" required>
                        <label for="fechaNacimiento">Fecha de Nacimiento</label>
                        <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" required>
                        <button class="btn btn-primary mt-3">
                            <i class="fa-solid fa-floppy-disk"></i> Agregar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./scripts.php"; ?>