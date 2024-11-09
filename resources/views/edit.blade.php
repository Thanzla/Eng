<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit STWL Record</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Arial', sans-serif;
    }

    .container {
      max-width: 800px;
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #007bff;
      text-align: center;
      margin-bottom: 30px;
    }

    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
    }

    .alert {
      margin-top: 20px;
      font-weight: bold;
    }

    .form-label {
      font-weight: bold;
    }

    input[type="text"], input[type="number"], input[type="date"], input[type="time"] {
      border-radius: 5px;
    }

    .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h2>Edit STWL Record</h2>

    <!-- Display Validation Errors -->
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <!-- Form to Edit Record -->
    <form action="{{ route('stwl.update', $record->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label for="WhName" class="form-label">Warehouse Name</label>
        <input type="text" class="form-control" id="WhName" name="WhName" value="{{ $record->WhName }}" required>
      </div>
      <div class="mb-3">
        <label for="WhCode" class="form-label">Warehouse Code</label>
        <input type="text" class="form-control" id="WhCode" name="WhCode" value="{{ $record->WhCode }}" required>
      </div>
      <div class="mb-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date" value="{{ $record->date }}" required>
      </div>
      <div class="mb-3">
        <label for="time" class="form-label">Time</label>
        <input type="time" class="form-control" id="time" name="time" value="{{ $record->time }}" required>
      </div>
      <div class="mb-3">
        <label for="conducted_by" class="form-label">Conducted By</label>
        <input type="text" class="form-control" id="conducted_by" name="conducted_by" value="{{ $record->conducted_by }}" required>
      </div>
      <div class="mb-3">
        <label for="no_of_labour" class="form-label">No of Labour</label>
        <input type="number" class="form-control" id="no_of_labour" name="no_of_labour" value="{{ $record->no_of_labour }}" required>
      </div>
      <div class="mb-3">
        <label for="hc_present" class="form-label">HC Present</label>
        <input type="text" class="form-control" id="hc_present" name="hc_present" value="{{ $record->hc_present }}" required>
      </div>
      <div class="mb-3">
        <label for="topic" class="form-label">Topic</label>
        <input type="text" class="form-control" id="topic" name="topic" value="{{ $record->topic }}" required>
      </div>
      <div class="mb-3">
        <label for="remarks" class="form-label">Remarks</label>
        <input type="text" class="form-control" id="remarks" name="remarks" value="{{ $record->remarks }}">
      </div>

      <button type="submit" class="btn btn-success w-100">Update Record</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
