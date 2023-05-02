
<!DOCTYPE html>
<html lang="en">
<head>
  <title>One To Many</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">

                <a class="btn btn-info" href="{{route('create.price')}}">Create Priceing</a>
                <a class="btn btn-info" href="{{route('index.price')}}">Show Priceing</a>
                <a class="btn btn-info" href="{{route('create.items')}}">Create Items</a>

            </div>
           <div class="card-body">
           <table class="table">
                <tr>
                    <th>Priceing Category</th>
                    <th>Facility</th>
                    <th>Action</th>
                </tr>
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->priceing->price_category}}</td>
                        <td>{{$item->facility}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">... </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <form action="{{route('edit.items',$item->id)}}" method="post">
                                        @csrf
                                        <li><button class="dropdown-item btn btn-warning">Edit</button></li>
                                  </form>
                                  <form action="{{route('destory.items',$item->id)}}" method="post">
                                        @csrf
                                        <li><button class="dropdown-item btn btn-danger">Delete</button></li>
                                  </form>

                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
           </table>
           </div>
        </div>
    </div>
</body>
</html>


