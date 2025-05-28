<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style> 

    .container {
    display: flex;
    width: 100%; 
    height: 120px;
    background-color: whitesmoke;
    }

    .boxleft{

        flex: 1;
        align-items: center;
        display: flex;
        margin-left: 20px;
        
    }

    .title{

        font-size: 60px;
        margin-right: 20px;
                        
    }

    i{
        margin: 5px;
    }

    .boxright{

        display: flex;
        align-items: center;
        flex-direction: row;
        margin: 20px;

    }

    .inners{
        display: flex;
    }

    .inner {
        list-style: none;
        margin: 15px;
    }

    a{
        text-decoration: none;
    }



    </style>

</head>
<body>

 <header>
    <div class="container">
        <div class="boxleft">

        <h1 class="title"> <span> ImovNet </span> </h1>

        <i class="fa-brands fa-facebook"></i>
        <i class="fa-brands fa-whatsapp"></i>
        <i class="fa-brands fa-instagram"></i>

        </div>
    <div class="boxright">

        
        <ul class="inners">
    <li class="inner"><a href="#">Nome</a></li>
    <li class="inner"><a href="#">Nome</a></li>
    <li class="inner"><a href="#">Nome</a></li>
        </ul>

        


        </div>
 </header>
    
</body>
</html>