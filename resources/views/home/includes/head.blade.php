<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="image/png" href="./assets/img/favicon.png">

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->
<link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.4" rel="stylesheet" />
<!-- Google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<!-- Swiper Css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Link to Animate.css -->
<link rel="stylesheet" href="assets/css/animate.css">
<style>
    body {
    font-family: "Montserrat", sans-serif !important;
    font-optical-sizing: auto;
    font-weight: 400;
    font-style: normal;
    }
    .floating-alert {
        position: fixed;
        top: 90px;
        right: 600px;
        z-index: 1050;
        transition: all 0.5s ease;
    }

    /* Custom Contact Form */
    .contact-form-container {
        width: 100%;
        max-width: 600px;
        margin: 0px auto;
        padding: 10px;
        border-radius: 10px;
    }

    .contact-form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 24px;
    }

    .contact-form-container .form-group {
        position: relative;
        margin-bottom: 20px;
    }

    .contact-form-container input[type="text"], input[type="email"], textarea {
        width: 100%;
        padding: 10px 15px;
        border: 2px solid #ccc;
        border-radius: 5px;
        outline: none;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .contact-form-container textarea {
        resize: none;
    }

    .contact-form-container label {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        background-color: white;
        padding: 0 5px;
        color: #999;
        transition: 0.3s ease;
        pointer-events: none;
    }

    .contact-form-container input:focus + label,
    input:valid + label,
    textarea:focus + label,
    textarea:valid + label {
        top: -10px;
        font-size: 12px;
        color: #1A73E8;
    }

    .contact-form-container input:focus, textarea:focus {
        border-color: #1A73E8;
    }

    .contact-form-container .submit-btn {
        width: 100%;
        padding: 10px;
        background-color: #1A73E8;
        color: white;
        border: 1px solid #1A73E8;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .contact-form-container .submit-btn:hover {
        color: #1A73E8;
        background-color: white;
    }

    .subscription input{
        border: none;
    }
</style>
<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- CSS for home page -->
<link rel="stylesheet" href="./assets/css/style.css">
