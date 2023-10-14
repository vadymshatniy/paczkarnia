@extends('admin._layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ceny</h3>
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
                                                        Amerykaskie</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Browser: activate to sort column ascending">
                                                        Chekoładowe</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Platform(s): activate to sort column ascending">
                                                        Dyniowe</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Engine version: activate to sort column ascending">
                                                        Hiszpańskie</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2"
                                                        rowspan="1" colspan="1"
                                                        aria-label="CSS grade: activate to sort column ascending">
                                                        Mini</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                {{-- @forelse ($deliveries as $delivery)
                                                    {{-- @dump($delivery) --}}
                                                <tr class="odd">
                                                    <td class="dtr-control sorting_1" tabindex="0">
                                                        {{ $delivery->id }}<br>
                                                        {{ $delivery->status_title() }}<br>
                                                        <a href="{{ route('admin.deliveries.edit', $delivery) }}">
                                                            <i class="bi bi-pencil-square"></i>
                                                        </a>

                                                    </td>
                                                    <td>
                                                        {{ $delivery->name }}<br>
                                                        {{ $delivery->tel }}<br>
                                                        {{ $delivery->address }}
                                                    </td>
                                                    <td>
                                                        {{ $delivery->date->format('d.m.Y') }}<br>
                                                        {{ Str::limit($delivery->time, 5, '') }}</td>
                                                    <td>
                                                        @foreach (['american', 'chocolate', 'pumpkin', 'spanish', 'mini'] as $number)
                                                            @php
                                                                $type = $number . '_number';
                                                            @endphp
                                                            @if ($delivery->$type != null)
                                                                {{ $number }}: {{ $delivery->$type }}<br>
                                                            @endif
                                                        @endforeach

                                                    </td>

                                                    <td>{{ $delivery->message }}</td>
                                                </tr>
                                                @empty
                                                    <p>Niema danych</p>
                                                    @endforelse
                                                    --}}


                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">Amerykaskie</th>
                                                        <th rowspan="1" colspan="1">Chekoładowe</th>
                                                        <th rowspan="1" colspan="1">Dyniowe</th>
                                                        <th rowspan="1" colspan="1">Hiszpańskie</th>
                                                        <th rowspan="1" colspan="1">Mini</th>
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
