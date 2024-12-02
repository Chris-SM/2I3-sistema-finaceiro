<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        @import url(https://fonts.googleapis.com);
        @import url(https://fonts.gstatic.com);
        @import url(https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap);

        button {
            padding: 10px 24px;
            text-decoration: none;
            font-size: 16px;
            margin: 4px 2px;
            transition: 0.2s ease-in;
            cursor: pointer;
            border-radius: 1vh;
            background-color: rgba(128, 128, 128, 0.3);
            color: white;
            letter-spacing: 4px;
        }

        #S {
            border: 2px solid #b80000;
            background-color:  black;
        }

        #S:hover {
            background-color: #b80000;
        }
        .Exc{
            border: 2px solid darkred;
            background-color:  darkslategrey;
        }
        .Exc:hover{
            background-color: darkred;
        }

        .Edit{
            border: 2px solid yellowgreen;
            background-color:  darkslategrey;
        }
        .Edit:hover{
            background-color: yellowgreen;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand">Navbar</a>
            <form class="d-flex" role="search">
                <button id="S" onclick="exit()">Sair</button>
            </form>
        </div>
    </nav>
</body>
<script>
    function exit(){
        let linkatual = window.location.href;

        if (linkatual.includes("Menu.php")){
            window.location.href = linkatual.slice(0,linkatual.indexOf("/Index"))+"/php/logout.php";
        }
        else
        {
            window.location.href = linkatual.slice(0,linkatual.indexOf("/Index"))+"/Index/Menu.php";
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>