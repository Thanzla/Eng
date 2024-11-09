<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4">Delete Record by Number</h2>

        <!-- Success Message -->
        @if (session('success'))
        <div class="alert alert-success mt-4">{{ session('success') }}</div>
        @endif

        <!-- Error Message -->
        @if (session('error'))
        <div class="alert alert-danger mt-4">{{ session('error') }}</div>
        @endif

        <!-- Form -->
        <div class="card p-4 shadow-sm">
            <form action="{{ route('stwl.dele') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="record_number" class="form-label">Enter Record Number</label>
                    <input type="number" class="form-control" id="record_number" name="record_number" required placeholder="Enter record number to delete">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-danger btn-lg">Delete Record</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

  


