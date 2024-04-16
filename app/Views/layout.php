<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html, body {
            height: 100%;    
        }
        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>    
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">Product Management</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/">Home</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="/products">Manage products</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="/products/add">Add product</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        <main class="container pt-3">         
            <div class="row">
                <h3>{$title}</h3>
            </div>    
            {block name=main}{/block}
        </main>

        <footer class="bg-dark text-light py-4 mt-auto">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Contact Us</h5>
                        <p>Email: wmteixeira.88@gmail.com</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Follow Us</h5>
                        <ul class="list-unstyled">
                            <li><a href="https://www.linkedin.com/in/werbster-marques/">Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>&copy; 2024 Werbster Marques. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
