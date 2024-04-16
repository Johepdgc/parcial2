<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica XYZ - Historias Clínicas y Inventario de Medicamentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<!-- Encabezado de la página -->
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><h2>Clinica Privada UGB</h2></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#historias">Historias Clínicas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#inventario">Inventario de Medicamentos</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
</header>
<!-- Contenido principal -->
<main>
    <!-- Sección de Historias Clínicas -->
    <section id="historias" class="m-3 p-3">
        <h2>Historias Clínicas</h2>
        <form class="historia m-3 p-3">
            <div class="mb-3">
                <label for="patientName" class="form-label">Nombre del Paciente</label>
                <input type="text" class="form-control" id="patientName" placeholder="Nombre del Paciente">
            </div>
            <div class="mb-3">
                <label for="birthDate" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="birthDate">
            </div>
            <div class="mb-3">
                <label for="medicalHistory" class="form-label">Antecedentes Médicos</label>
                <textarea class="form-control" id="medicalHistory" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="diagnosis" class="form-label">Diagnósticos</label>
                <textarea class="form-control" id="diagnosis" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="treatments" class="form-label">Tratamientos recibidos</label>
                <textarea class="form-control" id="treatments" rows="3"></textarea>
            </div>
            <!-- Puedes agregar más campos de formulario según sea necesario -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="card mb-3 m-3 p-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('images/dogo.jpeg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Paciente ejemplo</h5>
                        <p class="card-text">Esta es una tarjeta de ejemplo donde se muestra informacion del paciente ingresado en estado activo(aun en hospital).</p>
                        <p class="card-text"><small class="text-body-secondary">Ultima actualizacion hace 5 minutos.</small></p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            More info
                        </a>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <!-- Add more information about the patient here -->
                            <p>More information about the patient...</p>
                            <!-- Add options to change the status here -->
                            <button type="button" class="btn btn-primary">Change status</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Inventario de Medicamentos -->
    <section id="inventario" class="m-3 p-3">
        <h2>Inventario de Medicamentos</h2>
        <form class="medicamento m-3 p-3">
            <div class="mb-3">
                <label for="medName" class="form-label">Nombre del Medicamento</label>
                <input type="text" class="form-control" id="medName" placeholder="Nombre del Medicamento">
            </div>
            <div class="mb-3">
                <label for="medQuantity" class="form-label">Cantidad disponible</label>
                <input type="number" class="form-control" id="medQuantity" placeholder="Cantidad">
            </div>
            <div class="mb-3">
                <label for="expiryDate" class="form-label">Fecha de caducidad</label>
                <input type="date" class="form-control" id="expiryDate">
            </div>
            <!-- Puedes agregar más campos de formulario según sea necesario -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="card mb-3 m-3 p-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('images/acetaminophen.jpeg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Medicamente ejemplo</h5>
                        <p class="card-text">Esta es una tarjeta de ejemplo donde se muestra informacion del medicamento ingresado en estado activo(hay existencias).</p>
                        <p class="card-text"><small class="text-body-secondary">Ultima actualizacion hace 5 minutos.</small></p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">More info</a>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <!-- Add more information about the patient here -->
                            <p>More information about the patient...</p>
                            <!-- Add options to change the status here -->
                            <button type="button" class="btn btn-primary">Change status</button>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Pie de página -->
<footer>
    <p>Derechos de autor &copy; 2024 Clínica Privada UGB</p>
</footer>
</body>
</html>
