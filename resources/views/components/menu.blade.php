<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        div{
            font-family: Verdana, Helvetica, Arial, sans-serif;
        }
        .main-menu {
            height: 500px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .main{
            background: linear-gradient(rgb(153, 204, 255, 0.5), rgb(204, 229, 255, 0.5));
            width: 100%;
            height: 100%;
        }
        .btn btn-primary{
            font-size: 100px;
        }
        table{
            display: flex;
            justify-content: center;
        }
        .row{
            display: flex;
            justify-content: space-around;
        }
        .tests{
            padding-top: 10px;
            padding-bottom: 50px;
            display: flex;
            flex-direction: column;
        }
        .test{
            width:100%;
            display: flex;
            justify-content: center;
        }
        .input-group{
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .make{
            display: flex;
            justify-content: space-evenly;
        }
        .create-line{
            width: auto;
            border-top: 3px solid rgb(224, 224, 224, 150);
        }

    </style>
</head>
<div style="padding-bottom: 50px">
    <a href="{{ route('main') }}" class="btn btn-dark">Главная страница</a>
</div>

