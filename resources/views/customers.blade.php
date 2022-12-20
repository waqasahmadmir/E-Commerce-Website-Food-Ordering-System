<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROZZI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color: rgb(129, 117, 101);">

    @include('layouts.navbar')
    <div class="container">


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Customer Contact </th>
                    <th>Customer Address </th>
                    
                </tr>

            </thead>

            <tbody>
                {{-- looping to display data --}}
                @foreach ($customer as $user )

                <tr>
                    <td>
                        {{ $user->id }}
                    </td>
                    <td>
                        {{ $user->uname }}
                    </td>
                    <td>
                        {{ $user->uemail }}
                    </td>
                   
                    <td>
                        {{ $user->contact }}
                    </td>
                    
                    <td>
                        {{ $user->address }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>