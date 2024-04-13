@extends('admin.layouts.app')
@section('admin.styles')

<link rel="stylesheet"
    href="{{ asset('backend/dist/css/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css?v=3.2.0') }}">
@endsection
@section('main-content')
<div class="wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Brand</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h3 class="card-title py-2">All Tonistyle Store Product Categories Available</h3>
                            <div class="ml-auto">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#CategoryModal">
                                    Add New Category
                                </button>
                            </div>
                        </div>

                        <div class="card-body py-3">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Category Name</th>
                                        <th>Category Status</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($categories as $key => $category)

                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>
                                            @if ($category->status == 'active')
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>{{ \Carbon\Carbon::parse($category->created_at)->format('jS M Y') }}</td>
                                        <td>
                                            <div style="display: flex; align-items: center;">
                                               <a  data-toggle="modal" data-target="#editcategoryModal"  class="edit_cat" data-id="{{ $category->id }}">
                                                <i class="fas fa-edit mr-3 text-secondary"></i>
                                            </a>

                                                <form action="{{ route('delete.category', $category->id) }}" method="POST"
                                                    id="deleteForm">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a type="submit" onclick="confirmDelete({{$category->id}})">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </a>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>

                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>


{{-- Add Category modal form start here --}}
<div class="modal fade" id="CategoryModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store.category') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Category_name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="category_name" name="category_name"
                            placeholder="Category name" required>
                        @error('category_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="category_status" class="form-label">Category Status</label>
                        <select type="text" class="form-control select2 select2-hidden-accessible" id="status"
                            name="status" required>
                            <option selected="" disabled="">Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-primary">Submit</button>

                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

</div>

{{-- End of add brand modal form --}}



{{-- Start of Edit brand Modal form --}}

<div class="modal fade" id="editcategoryModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form  id="editForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="category_name" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="edit_category_name" name="category_name"
                            value="{{ $category->category_name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Category Status</label>
                        <select type="text" class="form-control" id="status" name="status" required>
                                <option value="active" {{ $category->category_name == 'active' ? 'selected' : '' }}>Active
                                </option>
                                <option value="inactive" {{ $category->status == 'inactive' ? 'selected' : '' }}>Inactive
                                </option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- End of Edit brand Modal form --}}

@endsection



@section('admin.scripts')
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('backend/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('backend/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
<script src="{{ asset('backend/dist/js/demo.js') }}"></script>
<script>
    $(function() {
                        $("#example1").DataTable({
                            "responsive": true,
                            "lengthChange": false,
                            "autoWidth": false,
                            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        $('#example2').DataTable({
                            "paging": true,
                            "lengthChange": false,
                            "searching": false,
                            "ordering": true,
                            "info": true,
                            "autoWidth": false,
                            "responsive": true,
                        });
                    });

</script>

<script>
    function confirmDelete(id) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('deleteForm').action = '/delete/category/' + id;
                            document.getElementById('deleteForm').submit();
                        }
                    });
                }
</script>

<script type="text/javascript">
    $(document).ready(function() {
    $('.edit_cat').click(function() {
    var categoryId = $(this).data('id');
    $.get('/category/' + categoryId, function(data) {
    $('#name').val(data.name);
    $('#editForm').attr('action', '/category/' + categoryId);
    $('#editcategoryModal').modal('show');
    });
    });

    $('#editForm').submit(function(e) {
    e.preventDefault();
        var formData = $(this).serialize();
        var url = $(this).attr('action');
    $.ajax({
            type: 'PUT',
            url: url,
            data: formData,
            success: function(response) {
            $('#editModal').modal('hide');
            // Handle success
            },
            error: function(xhr, status, error) {
         // Handle error
            }
         });
      });
    });
</script>

@endsection
