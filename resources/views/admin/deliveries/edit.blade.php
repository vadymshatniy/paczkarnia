@extends('admin._layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('admin.deliveries.update', $delivery) }}" method="POST" class="was-validated">
                            @method('PATCH')
                            @csrf

                            <div class="card-header">
                                <h3 class="card-title">Redagowanie zamówienia: <span class="card-id">id:
                                        {{ $delivery->id }}</span></h3>
                            </div>

                            <div class="card-body">
                                @include('admin._include._messages')

                                <div class="row mb-3">
                                    <div class="col-md">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name"
                                            value="{{ old('name') ?? $delivery->name }}" class="form-control">
                                    </div>
                                    <div class="col-md">
                                        <label for="tel">Tel</label>
                                        <input type="text" name="tel" id="tel"
                                            value="{{ old('tel') ?? $delivery->tel }}" required class="form-control">
                                    </div>
                                    <div class="col-md">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" id="address"
                                            value="{{ old('address') ?? $delivery->address }}" required
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <label for="date">Date</label>
                                        <input type="text" name="date" id="date"
                                            value="{{ old('date') ?? $delivery->date->format('d.m.Y') }}" required
                                            class="form-control">
                                    </div>
                                    <div class="col-md">
                                        <label for="time">Time</label>
                                        <input type="time" name="time" id="time"
                                            value="{{ old('time') ?? $delivery->time, 5, '' }}" required
                                            class="form-control">
                                    </div>
                                    <div class="col-md">
                                        <label for="message">Message</label>
                                        <input type="text" name="message" id="message"
                                            value="{{ old('message') ?? $delivery->message }}" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <label for="date">Amerykańskie</label>
                                        <input type="text" name="american_number" id="american_number"
                                            value="{{ old('american_number') ?? $delivery->american_number }}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md">
                                        <label for="date">Chekoładowe</label>
                                        <input type="text" name="chokolate_number" id="chokolate_number"
                                            value="{{ old('chokolate_number') ?? $delivery->chokolate_number }}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md">
                                        <label for="date">Dyniowe</label>
                                        <input type="text" name="pumpkin_number" id="pumpkin_number"
                                            value="{{ old('pumpkin_number') ?? $delivery->pumpkin_number }}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md">
                                        <label for="time">Hiszpańskie</label>
                                        <input type="text" name="spanish_number" id="spanish_number"
                                            value="{{ old('spanish_number') ?? $delivery->spanish_number }}"
                                            class="form-control">
                                    </div>
                                    <div class="col-md">
                                        <label for="message">Mini</label>
                                        <input type="text" name="mini_number" id="mini_number"
                                            value="{{ old('mini_number') ?? $delivery->mini_number }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    </div>
                                    <div class="col-md mb-3">
                                        <label for="status">Status</label>
                                        <select class="select2bs4 select2-hidden-accessible" name="status" id="status"
                                            style="width: 100%;" tabindex="-1" aria-hidden="true" required>
                                            {{-- <option value="" selected>
                                                All
                                            </option> --}}
                                            @foreach ($statuses as $status)
                                                <option value="{{ $status }}"
                                                    @if ($delivery->status == $status) selected @endif>
                                                    {{ App\Models\Delivery::status_label($status) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row justify-content-start">
                                    <div class="col-auto">
                                        <button class="btn btn-primary" type="submit">Zachowaj</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
