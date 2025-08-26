<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Web System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= base_url() ?>">Web System</a>
                <div class="navbar-nav">
                    <a class="nav-link" href="<?= base_url() ?>">Home</a>
                    <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                    <a class="nav-link active" href="<?= base_url('contact') ?>">Contact</a>
                </div>
            </div>
        </nav>
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Contact Page</h1>
                        <p class="card-text">This is the contact page of the Web System project.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
