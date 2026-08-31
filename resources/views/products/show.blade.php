<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Product Details</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Product ID:</strong> {{ $product->id }}
                    </div>
                    <div class="mb-3">
                        <strong>Name:</strong> {{ $product->name }}
                    </div>
                    <div class="mb-3">
                        <strong>Weight:</strong> {{ $product->weight }} g/kg
                    </div>
                    <div class="mb-3">
                        <strong>Price:</strong> ${{ $product->price }}
                    </div>
                    <div class="mb-3">
                        <strong>Created At:</strong> {{ $product->created_at->format('d-m-Y H:i A') }}
                    </div>

                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit Product</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
