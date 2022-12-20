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
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Main Ingredients</th>
                    <th>Item Price</th>
                    <th>Item Image</th>
                    <th>Actions</th>
                </tr>

            </thead>

            <tbody>
                {{-- looping to display data --}}
                @foreach ($view_all as $item )

                <tr>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        {{ $item->item_name }}
                    </td>
                    <td>
                        {{ $item->item_ingrediants }}
                    </td>
                    <td>
                        {{ $item->price }}
                    </td>
                    <td>
                        <img src="{{ asset('assets/images/'.$item->image) }}" class="ctg_img" style="width:200px;" alt="">
                    </td>
                    <td>
                        <a href="{{ url('edit_item/'.$item->id)}}">
                            <button type="button" class="btn btn-success">Update</button>
                        </a>
                        <a href="{{ url('deletefood/'.$item->id ) }}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</body>

</html>