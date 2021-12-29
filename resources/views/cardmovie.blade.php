<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <main>
        <div>
            @foreach ($lista_movie as $item)
                
          
                <div class="card d-flex" style="width: 18rem;">
                 {{--    <img src="..." class="card-img-top" alt="...">
                    --}} <div class="card-body">
                    <h5 class="card-title">{{$item['title']}}</h5>
                    <h6 class="card-text">{{$item['original_title']}}</h6>
                    <span class="card-text">Nationality :{{$item['nationality']}}</span> <br>
                    <span class="card-text">Date :{{$item['date']}}</span> <br>
                    <span class="card-text">Vote :{{$item['vote']}}</span>
                    </div>
                </div>
              @endforeach
        </div>
       {{--  @dump($lista_movie) --}}
    </main>
    
</body>
</html>