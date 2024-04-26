<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            margin-bottom: 60px; /* Height of the footer */
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px; /* Height of the footer */
            background-color: #171718; /* Dark background color */
            color: white; /* Text color */
            text-align: center; /* Center text horizontally */
            line-height: 60px; /* Align text vertically */
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Your content goes here -->
    </div>

    <footer class="footer">
        <div class="container">
            <span>© 2024 <a target="_blank" class="text-decoration-none text-white" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.cnn.com%2F2018%2F04%2F24%2Fus%2Fmonkey-selfie-peta-appeal%2Findex.html&psig=AOvVaw2zKj6mT4zSBPQEtcojUbWb&ust=1714190810677000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCIDB9cSA34UDFQAAAAAdAAAAABAE">Daniel Diaz</a> y <a target="_blank" class="text-decoration-none text-white" href="https://www.instagram.com/emmanuel_fvs/">Valencia Emmanuel</a> . Todos los derechos reservados.</span>
        </div>
    </footer>
</body>
</html>
