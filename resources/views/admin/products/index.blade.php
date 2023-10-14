@extends('admin._layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Wszystkie produkty</h3>
                            <a href="{{ route('admin.products.create') }}" class="btn btn-outline-success">Dodawanie nowego
                                produktu</a>
                        </div>

                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline"
                                            aria-describedby="example2_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Rendering engine: activate to sort column descending">
                                                        ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Browser: activate to sort column ascending">
                                                        Picture</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Platform(s): activate to sort column ascending">
                                                        Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Engine version: activate to sort column ascending">
                                                        Prices</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @forelse ($products as $product)
                                                    {{-- @dump($delivery) --}}
                                                    <tr class="odd">
                                                        <td class="dtr-control sorting_1" tabindex="0">
                                                            {{ $product->id }}<br>
                                                            @if ($product->is_active)
                                                                <span class="text-success"><i
                                                                        class="far fa-check-square"></i></span>
                                                            @else
                                                                <span class="text-danger"><i
                                                                        class="far fa-times-circle"></i></span>
                                                            @endif
                                                            <br>
                                                            <a href="{{ route('admin.products.edit', $product) }}">
                                                                <i class="bi bi-pencil-square"></i>
                                                            </a>

                                                        </td>
                                                        <td>

                                                        </td>
                                                        <td>
                                                            {{ $product->title }}<br>
                                                            {{ Str::limit($product->description, 100, ' ...') }}</td>
                                                        <td>
                                                            <div class="row">
                                                                <div class="col">
                                                                    {{ number_format($product->price, 2, ',', ' ') }}
                                                                </div>
                                                                <div class="col">
                                                                    {{ number_format($product->old_price, 2, ',', ' ') }}
                                                                </div>
                                                            </div>

                                                        </td>

                                                    </tr>
                                                @empty
                                                    <p>Niema danych</p>
                                                @endforelse


                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">ID</th>
                                                    <th rowspan="1" colspan="1">Picture</th>
                                                    <th rowspan="1" colspan="1">Name</th>
                                                    <th rowspan="1" colspan="1">Prices</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>



                </div>

            </div>

        </div>

    </section>
@endsection
@push('styles')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
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
    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });
    </script>
@endpush
