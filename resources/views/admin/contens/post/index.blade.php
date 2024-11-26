@extends('admin.layouts.master')

@section('title')
    List post
@endsection

@section('css-settings')
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.1.8/af-2.7.0/sb-1.8.1/sp-2.3.3/sl-2.1.0/datatables.min.css"
        rel="stylesheet">
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
            <a href="{{ route('admin.post.create') }}" class="btn btn-primary">Add post</a>
        </div>
        <div class="card-body">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>image</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

        </div>
    </div>


    <!-- /.container-fluid -->
@endsection

@section('js-setting')
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/dt-2.1.8/af-2.7.0/sb-1.8.1/sp-2.3.3/sl-2.1.0/datatables.min.js">
    </script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
        integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script>
        $('#dataTable').DataTable({
            ajax: {
                url: '{{ route('api.admin.category.index') }}',
                dataSrc: 'data'
            },
            processing: true,
            serverSide: true,
            columns: [{
                    data: 'id'
                },
                {
                    data: 'image',
                    render: function(data) {
                        return `<img src="{{ asset('storage') }}/${data}" width="100" />`;
                    }
                },
                {
                    data: 'name'
                },
                {
                    data: 'id',
                    render: function(data) {
                        return `<a href="{{ route('admin.category.index') }}/${data}/edit" class="btn btn-primary">Edit</a>
                        <a href="{{ route('admin.category.index') }}/${data}/show" class="btn btn-info">Show</a>
                        <button class="btn btn-danger" id="deleteCategory" data-id="${data}">Delete</button>`;
                    },
                    orderable: false,
                    searchable: false,

                }
            ],
            'order': [
                [0, 'asc']
            ],
            "language": {
                "lengthMenu": "Hiển thị _MENU_ dòng mỗi trang",
                "zeroRecords": "Không tìm thấy kết quả",
                "info": "Trang _PAGE_ / _PAGES_",
                "infoEmpty": "Không có dữ liệu",
                "infoFiltered": "(lọc từ _MAX_ dòng)",
                "search": "Tìm kiếm:",
                "paginate": {
                    "next": "Tiếp",
                    "previous": "Trước"
                }
            },
            "pageLength": 10

        });
    </script>

    <script>
        $(document).on('click', '#deleteCategory', function() {
            Swal.fire({
                title: 'Bạn có chắc chắn muốn xóa không?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Có, xóa nó!',
                cancelButtonText: 'Hủy'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('api.admin.category.delete', '') }}/' + $(this).data('id'),
                        type: 'DELETE',
                        success: function(res) {
                            $('#dataTable').DataTable().ajax.reload();
                            Swal.fire(
                                'Đã xóa!',
                                res.message,
                                'success'
                            );
                        },
                        error: function(res) {
                            Swal.fire(
                                'Xóa không thành công!',
                                res.message,
                                'error'
                            );
                        }
                    });
                }
            });
        });
    </script>

    @if (session('info'))
        <script>
            Swal.fire({
                icon: 'info',
                title: 'info',
                text: '{{ session('info') }}',
            });
        </script>
    @endif
@endsection
