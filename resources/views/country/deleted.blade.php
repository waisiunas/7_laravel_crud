<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleted Countries</title>
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
                                <h4>Deleted Countries</h4>
                            </div>
                            <div class="col-6 text-end">
                                <a href="{{ route('country') }}" class="btn btn-outline-primary">Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @session('success')
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ $value }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endsession

                        @session('failure')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $value }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endsession

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
                                                <form action="{{ route('country.restore', $country->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="submit" value="Restore" class="btn btn-info">
                                                </form>
                                                <form action="{{ route('country.delete', $country->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" value="Delete" class="btn btn-danger">
                                                </form>
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
