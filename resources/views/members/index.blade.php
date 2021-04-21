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
               <h1 class="text-bold">VERTICAL DETAILS</h1>
               <div class="btn"> <a href="/members/create" class="btn btn-success">Cretae New Verticals</a></div>

           </div>


            <div class="py-5 text-center">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">FirstName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Mobile1</th>
                        <th scope="col">Mobile2</th>
                        <th scope="col">nic</th>
                        <th scope="col">rvsaId</th>
                        <th scope="col">dob</th>
                        <th scope="col">gender</th>
                        <th scope="col">email</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($members as $member)
                        <tr>
                                <td>{{ $member ->firstName }}</td>
                                <td>{{ $member ->lastName }}</td>
                                <td>{{ $member->picture }}</td>
                                <td>{{ $member ->mobile1 }}</td>
                                <td>{{ $member ->mobile2 }}</td>
                                <td>{{ $member->nic }}</td>
                                <td>{{ $member ->rvsaId }}</td>
                                <td>{{ $member ->dob }}</td>
                                <td>{{ $member->gender }}</td>
                                <td>{{ $member->email }}</td>
                                <td><div class="btn"> <a href="/members/{{ $member ->id }}/edit" class="btn btn-primary">Edit</a></div></td>

                                <form method="POST" action="/members/{{ $member ->id }}" >
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
