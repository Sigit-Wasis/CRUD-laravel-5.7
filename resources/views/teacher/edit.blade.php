<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

      <title>CRUD Laravel</title>
   </head>
  <body>
 
   <div class="container" style="max-width: 600px; margin: 60px auto; background: #ebeff2;">
      <h3>Edit Data Guru</h3>

      <form action="{{ route('teacher.update',$teacher->id) }}" method="post">
         @csrf
         {{-- @method('PATCH') --}}
         {{method_field('PATCH')}}


         <div class="form-group">
            <label for="code">Code</label>
            <input type="text" name="code" class="form-control" value="{{$teacher->code}}">
            @if ($errors->has('code'))
            <strong>{{ $errors->first('code')}}</strong> <br>
            @endif
         </div>
         <div class="form-group">
            <label for="name_id">Name_id</label>
            <input type="text" name="name_id" class="form-control" value="{{$teacher->name_id}}">
            @if ($errors->has('name_id'))
            <strong>{{ $errors->first('name_id')}}</strong> <br>
            @endif
         </div>
         <div class="form-group">
            <label for="name_ar">Name_ar</label>
            <input type="text" name="name_ar" class="form-control" value="{{$teacher->name_ar}}">
            @if ($errors->has('name_ar'))
            <strong>{{ $errors->first('name_ar')}}</strong> <br>
            @endif
         </div>
         <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" name="nip" class="form-control" value="{{$teacher->nip}}">
            @if ($errors->has('nip'))
            <strong>{{ $errors->first('nip')}}</strong> <br>
            @endif
         </div>
         <div class="form-group">
            <label for="gender">Gender</label>
            <input type="text" name="gender" class="form-control" value="{{$teacher->gender}}">
            @if ($errors->has('gender'))
            <strong>{{ $errors->first('gender')}}</strong> <br>
            @endif
         </div>

         <input class="btn btn-primary" type="submit" name="submit" value="Submit">
         <a href="{{route('teacher.index')}}" class="btn btn-danger">Batal</a>
      </form>

      <div class="footer">Copyright@2019 - Created by <a href="http://sigitsmkn1liwa.blogspot.com/"> Pesagi Code.</div></a>
   </div>

  </body>
</html>