<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title> FORM </title>
</head>

<body>
    <form action="config.php" method="POST">
        <div class="input-group">
            <span class="input-group-text" style="border-radius: 20px;">Nome & Cognome</span>
            <input type="text" aria-label="First name" class="form-control">
            <input type="text" aria-label="Last name" class="form-control">
        </div>
        <div>
            <select class="form-select" aria-label="Default select example" style="border-radius: 20px;">
                <option selected>Apri e Seleziona Film</option>
                <option value="1" style="border: radius 20px; ;">One</option>
                <option value="2" style="border: radius 20px; ;">Two</option>
                <option value="3" style="border: radius 20px; ;">Three</option>
            </select>
        </div>
        <button type="submit" style="border-radius: 20px, ">Registra</button>
    </form>

</body>

</html>