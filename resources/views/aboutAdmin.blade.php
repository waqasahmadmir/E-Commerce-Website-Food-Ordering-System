<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROZZI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .maintxt {
            text-align: center;
            width: 100%;
            height: 600px;

            font-size: 40px;
            background-image: url(https://previews.123rf.com/images/romastudio/romastudio1603/romastudio160300219/54088690-organic-food-background-studio-photo-of-different-fruits-and-vegetables-on-white-wooden-table-high-r.jpg );

        }
    </style>
</head>

<body>
    @include('layouts.navbar')
    <div class="container">


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Admin ID</th>
                    <th>Admin Name</th>
                    <th>Email</th>
                    <th>Password</th>

                </tr>

            </thead>

            <tbody>
                {{-- looping to display data --}}
                @foreach ($about as $item )

                <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        {{ $item->name }}
                    </td>
                    <td>
                        {{ $item->email }}
                    </td>

                    <td>
                        {{ $item->password }}
                    </td>
                    <td>
                        <a href="{{ url('update_admin/'.$item->id)}}">
                            <button type="button" class="btn btn-success">update</button>
                        </a>
                        <a href="{{ url('reset_admin/'.$item->id ) }}">
                            <button type="button" class="btn btn-danger">Reset Password</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</body>

</html>