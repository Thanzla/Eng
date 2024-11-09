<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STWL Records</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/STWLRecord.css">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Safety Talk with Labour Records</h2>

    <div class="d-flex justify-content-between mb-3">
      <button class="btn btn-primary btn-add-more" onclick="window.location.href='/stwl-form'">Add More</button>
      <button class="btn btn-secondary btn-print" onclick="window.print()">Print</button>
    </div>

    @if (session('success'))
      <div class="alert alert-success mt-4">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="myTable">
        <thead class="table-dark">
          <tr>
            <th>#</th>
            <th>Warehouse Name</th>
            <th>Warehouse Code</th>
            <th>Date</th>
            <th>Time</th>
            <th>Conducted By</th>
            <th>No of Labour</th>
            <th>HC Present</th>
            <th>Topic</th>
            <th>Remarks</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $key => $record)
          <tr>
              <td>{{ $key + 1 }}</td>
              <td>{{ $record->WhName }}</td>
              <td>{{ $record->WhCode }}</td>
              <td>{{ $record->date }}</td>
              <td>{{ $record->time }}</td>
              <td>{{ $record->conducted_by }}</td>
              <td>{{ $record->no_of_labour }}</td>
              <td>{{ $record->hc_present }}</td>
              <td>{{ $record->topic }}</td>
              <td>{{ $record->remarks }}</td>
              <td class="d-flex gap-2">
                <a href="{{ route('stwl.edit', $record->id) }}" class="btn btn-info btn-sm">Edit</a>
                <form action="{{ route('delete-record', $record->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                 </form>
                 
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
