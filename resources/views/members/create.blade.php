<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>

     <div style="width: 900px"    class="container max-w-full mx-auto pt-10">


    <div class="container">
        <div class="py-5 text-center">
            <h1 class="text-bold">CREATE PAGE</h1>


        </div>
        <form method="POST" action="/members"   >



            @csrf
            
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">FirstName: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                name='firstName'  >
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="icon">LastName: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                name='lastName'  >
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Picture: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                name='picture'  >
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="icon">Mobile1: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                name='mobile1'  >
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Mobile2: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                name='mobile2'  >
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="icon">Nic: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                name='nic'  >
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">RVSAID: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                name='rvsaId'  >
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="icon">Date Of Birth: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                name='dob'  >
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="icon">Gender: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                name='gender'  >
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="icon">Email: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                name='email'  >
            </div>

             <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
             <div class="btn"> <a href="/members" class="btn btn-success">Cancel</a></div>






            </form>


    </div>







    </div>





</body>
</html>
