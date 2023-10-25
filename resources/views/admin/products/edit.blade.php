@extends('admin._layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form
                            action="{{ isset($product) ? route('admin.products.update', $product) : route('admin.products.store') }}"
                            method="POST" class="was-validated" enctype="multipart/form-data">
                            @isset($product)
                                @method('PATCH')
                            @endisset
                            @csrf

                            <div class="card-header">
                                @isset($product)
                                    <h3 class="card-title">Redagowanie produktu: <span class="card-id">
                                            {{ $product->title }}</span></h3>
                                @else
                                    <h3 class="card-title">Stworzenie produktu</h3>
                                @endisset
                            </div>

                            <div class="card-body">

                                @include('admin._include._messages')
                                <img
                                    src="{{ isset($product) && $product->image != null ? asset('storage/' . $product->image) : null }}">
                                <input type="file" name="image" id="image" class="form-control" accept="image/*"
                                    required>
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title"
                                            value="{{ old('title') ?? ($product->title ?? null) }}" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md">
                                        <label for="price">Price</label>
                                        <input type="number" min="0" step="0.01" name="price" id="price"
                                            value="{{ old('price') ?? ($product->price ?? null) }}" class="form-control"
                                            required>
                                    </div>
                                    <div class="col-md">
                                        <label for="old_price">Old_price</label>
                                        <input type="number" min="0" step="0.01" name="old_price" id="old_price"
                                            value="{{ old('old_price') ?? ($product->old_price ?? null) }}"
                                            class="form-control">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <textarea name="description" id="description" class="form-control" required>{!! old('description') ?? ($product->description ?? null) !!}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    </div>
                                    <div class="col-md mb-3">
                                        <input type="checkbox" name="is_active"
                                            @if (isset($product) && $product->is_active == true) checked="" @endif data-bootstrap-switch=""
                                            data-off-color="danger" data-on-color="success">
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
