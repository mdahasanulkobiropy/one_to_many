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
           
           <form action="{{route('update.price',$priceing->id)}}" method="post">
            @csrf
                <div class="card-body">
                    <div class="col-10">
                        <label for="price_category">Price Category Name</label>
                        <input type="text" name="price_category" class="form-control" value="{{$priceing->price_category}}" >
                    </div>
                    <div class="col-10">
                        <label for="price">Price Per Month</label>
                        <input type="text" name="price_month" class="form-control" value="{{$priceing->price_month}}">
                    </div>
                    <div class="col-10">
                        <label for="price_year">Price Per Year</label>
                        <input type="text" name="price_year" class="form-control" value="{{$priceing->price_year}}">
                    </div>

                    <div class="col-10 mt-3">
                        <button type="submit">Update</button>
                    </div>
                </div>
           </form>
        </div>
    </div>
</body>
</html>
