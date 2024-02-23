<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h4>Countries</h4>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{ route('country.create') }}" class="btn btn-outline-primary">Add Country</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (count($countries) > 0)
                            <table class="table table-bordered m-0">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Name</th>
                                        <th>Capital</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($countries as $country)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $country->name }}</td>
                                            <td>{{ $country->capital }}</td>
                                            <td>
                                                <a href="" class="btn btn-primary">Edit</a>
                                                <a href="" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-info m-0">No record found!</div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
