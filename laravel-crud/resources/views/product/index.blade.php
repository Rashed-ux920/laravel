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
          <a class="nav-link" href="#">Product</a>
        </li>

    </ul>
    <div class="contaner">
        <div class="text-right">
            <a href="/create" class="btn btn-dark mp-2 mt-2 ">New product</a>
        </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th>sno.</th>
                <th>name</th>
                <th>image</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($product as $product)
                <tr>
                    <td>{{ $loop->index + 1}}</td>
                    <td>{{ $product->name}}</td>
                    <td>
                        <img src="product/{{$product->image}}" alt="product image" class="rounded-circle" width="50">
                    </td>
                    <td>
                        <a href="product/{{$product->id}}/edit" class="btn btn-dark btn-sm">edit</a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
