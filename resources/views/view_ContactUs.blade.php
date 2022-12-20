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

<body>

    @include('layouts.navbar')
    <div class="container">


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Message</th>
                </tr>

            </thead>

            <tbody>
                {{-- looping to display data --}}
                @foreach ($showContact as $contact )

                <tr>
                    <td>
                        {{ $contact->id }}
                    </td>
                    <td>
                        {{ $contact->fname }}
                    </td>
                    <td>
                        {{ $contact->lname }}
                    </td>
                    <td>
                        {{ $contact->address }}
                    </td>
                    <td>
                        {{ $contact->message }}
                    </td>
                    
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>

