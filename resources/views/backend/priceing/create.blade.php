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
                <a class="btn btn-info" href="{{route('index.price')}}">Show Priceing</a>
                <a class="btn btn-info" href="{{route('create.items')}}">Create Items</a>
                <a class="btn btn-info" href="{{route('index.items')}}">Show Items</a>
            </div>

           <form action="{{route('store.price')}}" method="post">
            @csrf
                <div class="card-body">
                    <div class="col-10">
                        <label for="price_category">Price Category Name</label>
                        <input type="text" name="price_category" class="form-control">
                    </div>
                    <div class="col-10" class="form-control">
                        @error('price_category')
                          Please, Fill The Price Category Name!
                        @enderror
                    </div>
                    <div class="col-10">
                        <label for="price">Price Per Month</label>
                        <input type="text" name="price_month" class="form-control">
                    </div>
                    <div class="col-10" class="form-control">
                        @error('price_month')
                          Please, Fill The Price Per Month!
                        @enderror
                    </div>
                    <div class="col-10">
                        <label for="price_year">Price Per Year</label>
                        <input type="text" name="price_year" class="form-control">
                    </div>
                    <div class="col-10" class="form-control">
                        @error('price_month')
                          Please, Fill The Price Per Year!
                        @enderror
                    </div>

                    <div class="col-10 mt-3">
                        <button class="btn btn-info" type="submit">Submit</button>
                    </div>
                </div>
           </form>
        </div>
    </div>
</body>
</html>
