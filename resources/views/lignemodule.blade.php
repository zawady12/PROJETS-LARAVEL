<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>LIGNE MODULE</title>
    <style>
    .container {
        margin-bottom:-100px;
    border-radius: 5px;
    background: #F0F8FF;
    width:80%;
  }
  </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</svg></a>
    
      <span class="navbar-text">
        Formulaire
      </span>
    </div>
  </div>
</nav>
    <br>
    <br>
    <h1 class="text-center text-dark">LIGNE MODULES</h1>


    <div class="container">
        @if(session('success'))
            <div class="alert alert-danger">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{route('postligne')}}" method="POST">
            @csrf
            <div class="container" style="width: 50%; height:700px">
            <br>
    <br>
            <div class="mb-3">
            <label for="professeur_id" class="form-label">Professeur</label>
            <select name="professeur_id" id="" class="form-control"><br>
                @foreach($prof as $p)
                <option value="{{ $p->id }}">{{ $p->nomP }}</option>
                @endforeach
            </select>
</div>

<div class="mb-3">
<label for="module" class="form-label">Module</label>
            <select name="module_id" id="" class="form-control"><br>
                @foreach($module as $m)
                <option value="{{ $m->id }}">{{ $m->designm }}</option>
                @endforeach
            </select>
</div>
<div class="mb-3">
            <label for="user_id" class="form-label">Utilisateur</label>
            <select name="user_id" id="" class="form-control"><br>
                @foreach($user as $u)
                <option value="{{ $u->id }}">{{ $u->name}}</option>
                @endforeach
            </select>
</div>
            <div class="mb-3">
  <label for="dated" class="form-label">Date debut</label>
  <input type="date" class="form-control" name="dated" rows="3" placeholder="saisir">
</div>
<div class="mb-3">
  <label for="datef" class="form-label">Date fin</label>
  <input type="date" class="form-control" name="datef" rows="3" placeholder="saisir">
</div>
<div class="mb-3">
  <label for="volumeH" class="form-label">Volume</label>
  <input type="text" class="form-control" name="volumeH" rows="3" placeholder="saisir">
</div>

            <center><button class="btn btn-primary mt-3">Enregistrer</button></center>
</div>
          </form>
    </div>



    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>






       