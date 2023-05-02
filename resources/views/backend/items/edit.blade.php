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
           <form action="{{route('update.items',$items->id)}}" method="post">
            @csrf
                <div class="card-body">
                    <div class="col-10">
                        <label for="priceing_cat_id">Price Category Name</label>
                        <input type="text" name="priceing_cat_id" class="form-control" value="{{$items->priceing_cat_id}}">
                    </div>
                    <div class="col-10">
                        <label for="facility">Facility</label>
                        <input type="text" name="facility" class="form-control" value="{{$items->facility}}">
                    </div>
                    <div class="col-10" class="form-control">
                        @error('facility')
                        Please, Select The Facility!
                        @enderror
                    </div>
                    <div class="col-10 mt-3">
                        <button type="submit">Submit</button>
                    </div>
                </div>
           </form>
        </div>
    </div>
</body>
</html>
