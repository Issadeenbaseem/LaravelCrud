<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>



     <div class="container">

           <div class="py-5 text-center">
               <h1 class="text-bold">Specialization Details</h1>
               <div class="btn"> <a href="/specializations/create" class="btn btn-success">Cretae New Specialization</a></div>

           </div>


            <div class="py-5 text-center">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Description</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($specializations as $specialization)
                        <tr>
                                <td>{{ $specialization ->icon }}</td>
                                <td>{{ $specialization ->description }}</td>
                                <td>{{ $specialization->title }}</td>
                                <td><div class="btn"> <a href="/specializations/{{ $specialization ->id }}/edit" class="btn btn-primary">Edit</a></div></td>

                                <form method="POST" action="/specializations/{{ $specialization ->id }}" >
                                    @method('DELETE')

                                             @csrf
                                    <td>  <button type="submit" class="btn btn-danger">Delete</button></td>

                                  </form>



                        </tr>

                         @endforeach


                    </tbody>
                  </table>




         </div>
     </div>




</body>
</html>
