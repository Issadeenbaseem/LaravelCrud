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
               <h1 class="text-bold">CITY DETAILS</h1>
               <div class="btn"> <a href="/cities/create" class="btn btn-success">Cretae New Cities</a></div>

           </div>


            <div class="py-5 text-center">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">DistrictID</th>

                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($cities as $city)
                        <tr>
                                <td>{{ $city ->title }}</td>
                                <td>{{ $city ->districtId }}</td>

                                <td><div class="btn"> <a href="/cities/{{ $city ->id }}/edit" class="btn btn-primary">Edit</a></div></td>

                                <form method="POST" action="/cities/{{ $city ->id }}" >
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
