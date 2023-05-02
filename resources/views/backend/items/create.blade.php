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
                {{-- <a class="btn btn-info" href="{{route('create.items')}}">Create Items</a> --}}
                <a class="btn btn-info" href="{{route('index.items')}}">Show Items</a>
            </div>
           <form action="{{route('store.items')}}" method="post">
            @csrf
                <div class="card-body">
                    <div class="col-10">
                        <label for="priceing_cat_id">Price Category Name</label>
                        <select class="form-select" name="priceing_cat_id">
                            <option selected>...===...</option>
                                @foreach ($priceing as $priceing)
                                    <option value="{{$priceing->id}}">{{$priceing->price_category}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="col-10" class="form-control">
                        @error('priceing_cat_id')
                          Please, Select The Price Category Name!
                        @enderror
                    </div>
                    <div class="col-10">
                        <label for="facility">Facility</label>
                        <input type="text" name="facility" class="form-control">
                    </div>
                    <div class="col-10" class="form-control">
                        @error('facility')
                          Please, Fill The Facility!
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
