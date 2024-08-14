<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <ul class="nav bg-dark">
        <li class="nav-item text-light">
          <a class="nav-link text-light" href="/">Product</a>
        </li>
    </ul>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">{{ $message }}</div>

    @endif
    <div class="contaner">
        <div class="row justify-center">
            <div class="col-sm-8">
                <h3 class="text-muted">product edit #{{$product->id}}</h3>
                <form action="/product/update" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group justify-center">
                        <div class="card mt-3 p-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name',$product->name)}}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="card mt-3 p-3">
                            <label for="description">description</label>
                            <textarea name="description" id="discription" cols="30" rows="10" class="form-control">{{old('description', $product->description)}}</textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{$errors->first('description')}}</span>
                            @endif
                        </div>
                        <div class="form-group card">
                            <label for="img">Image</label>
                            <input type="file" name="img" id="img" class="form-control">
                            @if ($errors->has('img'))
                                <span class="text-danger">{{$errors->first('img')}}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-dark">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
