<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel  </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
  <h1 align="center">LIST DATA GURU</h1>

  <a class="btn btn-success btn-sm" href="{{ route('teacher.create') }}">Tambah</a>
  <br>
  <br>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>code</th>
        <th>Name Indonesia</th>
        <th>Name arab</th>
        <th>Nip</th>
        <th>Jenis Kelamin</th>
        <th width="200px">Action</th>
      </tr>
      <tbody>
        @foreach ($teachers as $key => $teacher)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$teacher->code}}</td>
            <td>{{$teacher->name_id}}</td>
            <td>{{$teacher->name_ar}}</td>
            <td>{{$teacher->nip}}</td>
            <td>{{$teacher->gender}}</td>
            <td>
              <form action="{{ route('teacher.destroy',$teacher->id)}}" method="post">
                <a class="btn btn-primary btn-sm" href="{{ route('teacher.edit',$teacher->id)}}">Edit</a>
                @csrf
                @method('DELETE')

              <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
              </form>
            </td>

          </tr>
        @endforeach
      </tbody>
   </thead>
  </table>

  <div class="footer">Copyright@2019 - Created by <a href="http://sigitsmkn1liwa.blogspot.com/"> Pesagi Code.</div></a>
</div>

</body>
</html>