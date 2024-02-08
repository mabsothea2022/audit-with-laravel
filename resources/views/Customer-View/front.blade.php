<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-6">
                        <div class="card mb-0">
                            <div class="card-body">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Add New Customer
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal01">
                                    Check Audit
                                </button>
                                <hr>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->customer_name }}</td>
                                                <td>{{ $item->address }}</td>
                                                <td>
                                                    <div class="col">
                                                        <form action="{{ route('audit-soft.destroy', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <a class="btn btn-info btn-sm" href=""><i
                                                                    class="fa-solid fa-user-pen"></i></a>
                                                            <a class="btn btn-secondary btn-sm" href=""><i
                                                                    class="fa-solid fa-share"></i></i></a>
                                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                                    class="fa-solid fa-trash"></i></button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- Button trigger modal -->

                                <!-- Modal for Add new -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="card mb-0">
                                                <div class="modal-header">
                                                    <h4>Add new customer</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                                </div>
                                                <div class="card-body">
                                                    {{-- Form insert data --}}
                                                    <form action="{{ route('audit-soft.store') }}" method="POST">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="mb-6">
                                                            <label for="customer_name" class="form-label">Customer
                                                                Name</label>
                                                            <input type="text" class="form-control"
                                                                id="customer_name" name="customer_name"
                                                                aria-describedby="emailHelp" required
                                                                placeholder="Enter name here...">
                                                        </div>
                                                        <div class="mb-6">
                                                            <label for="address" class="form-label">Address</label>
                                                            <input type="text" class="form-control" id="address"
                                                                name="address" required
                                                                placeholder="Enter address here...">
                                                        </div>
                                                        <div class="mb-6">
                                                            <label for="updated_at" class="form-label">Update At</label>
                                                            <input type="date" class="form-control" id="updated_at"
                                                                name="updated_at" required
                                                                placeholder="Enter update here...">
                                                        </div>
                                                        <div class="mb-6">
                                                            <label for="created_at" class="form-label">Update At</label>
                                                            <input type="date" class="form-control" id="created_at"
                                                                name="created_at" required
                                                                placeholder="Enter create here...">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">SAVE</button>

                                                        {{-- <a class="btn btn-secondary btn-sm" href="{{ route("audit-soft.store") }}">Submit</a> --}}
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal for Add new -->
                                <div class="modal fade" id="exampleModal01" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="card mb-0">
                                                <div class="card-body">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
