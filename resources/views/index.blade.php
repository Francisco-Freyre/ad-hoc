<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style>   
        body{
             width: 100%;
         background-color: #000000;
        }
       
        .contenedor{
             width:  49%;
             background-color: #6A737C;
            margin: 1% 1%;
        }
    </style>
</head>
<body>
    <div class="modal-body row">
        <div class="col-md-6">
           <a href="/portafolio">
               <img width="670" height="585" src="{{asset('storage/uploads/juridico.png')}}" alt="">
            </a> 
            
        </div>
        
        <div class="col-md-6">
            <a href="/lanSystem">
                <img width="670" height="585" src="{{asset('storage/uploads/system.png')}}" alt="">
            </a>
            
        </div>
        
    </div>
    
</body>
</html>