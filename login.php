<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myBook | Login</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-DOXMLfHhQkvFFp+rWTZwVlPVqdIhpDVYT9csOnHSgWQWPX0v5MCGtjCJbY6ERspU" crossorigin="anonymous">
    <!-- Css -->
    <link rel="stylesheet" href="./style/main.css">
    <style>
       .primary{
    background-color: rgb(59,89,152);
    color: whitesmoke;
    }
    .secondery{
        background-color: #42b72a;
        color: whitesmoke;
    }
    #login  {
        margin: auto;
    }
    .primaryHover:hover {
        background-color: rgb(40, 60, 103);
        color: whitesmoke;
    }
    .form-login {
        margin-top: 6rem;
        width: 70%;
    }
        @media (max-width : 768px) {
            .form-login{
                width: 100%;
            } 
        }
        
    </style>

</head>
<body class="bg-light">
    <div>
        <header class="primary d-flex flex-wrap justify-content-right pt-5 pb-2 mb-4">
            <div class="ps-2 fs-2 fw-bold">کتاب من</div>
            <button type="button" class="btn secondery fs-5 ms-3">ثبت نام</button>
        </header>
    </div>

    <div class="container text-center form-login">
        <div class="row bg-white rounded" >
            <form action="#" method="get">
                <h1 class="h5 fw-bold my-5"> ورود به کتاب من</h1>

                <input id="login" type="email" class="form-control form-control-lg w-50  my-3" placeholder="name@example.com">
                <input id="login" type="password" class="form-control form-control-lg w-50 text-end my-3" placeholder="password">
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> مرا به یادآور
                    </label>
                </div>
                <button type="submit" class="btn btn-lg primary primaryHover w-50 mb-5">ورود</button>
                
            </form>
        </div>
    </div>
    

    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>