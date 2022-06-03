<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-7">
                <div class="mt-3">
                    <div class="card">
                        <div class="card-body">
                            <form enctype="multipart/form-data" action="{{ route('photo.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Upload Photo</label>
                                    <input type="file" name="photo" id="" class="form-control">
                                </div>
                                <div>
                                    <button class="btn btn-primary">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
