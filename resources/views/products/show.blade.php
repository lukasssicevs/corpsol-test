<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
</x-slot>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product Details</div>

                <div class="card-body">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $product->name }}
                    </div>

                    <div class="form-group">
                        <strong>Quantity:</strong>
                        {{ $product->quantity }}
                    </div>

                    <div class="form-group">
                        <strong>Price:</strong>
                        {{ $product->price }}
                    </div>

                    <a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
