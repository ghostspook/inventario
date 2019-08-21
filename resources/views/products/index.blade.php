@extends('layouts.app')

@section('content')
    @include('layouts.headers.simple')

    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Products</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">SKU</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Cost</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Rack</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $prod)
                                    <tr>
                                        <th scope="row">
                                            {{ $prod->sku }}
                                        </th>
                                        <td scope="row">
                                            {{ $prod->name }}
                                        </td>
                                        <td scope="row">
                                            {{ $prod->category->name }}
                                        </td>
                                        <td scope="row">
                                            {{ $prod->stock }}
                                        </td>
                                        <td scope="row">
                                            {{ $prod->cost }}
                                        </td>
                                        <td scope="row">
                                            {{ $prod->price }}
                                        </td>
                                        <td scope="row">
                                            {{ $prod->rack }}
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
