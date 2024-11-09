<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STWL Form</title>

    <!-- Google Fonts (Roboto) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

 <link rel="stylesheet" href="css/STWL.css">
</head>

<body>

    <div class="form-container">
        <br><br><br><br>

        <h2>STWL Form</h2>
        @if(session('success'))
        <div
            style="color: #FFFFFF; text-align: center; border:2px solid #0D4A8A;border-radius:5px;background-color:#0D4A8A;margin:10px">
            {{ session('success') }}
        </div>
        @endif
        <form action="{{route('stwl.store')}}" method="POST">
            @csrf
            <!-- WName Dropdown -->
            <div class="form-group">
                <input type="text" id="wname" name="WhName" required placeholder=" ">
                <label for="wname">WName</label>
            </div>

            <!-- WCode Dropdown -->
            <div class="form-group">
                <input type="text" id="wcode" name="WhCode" required placeholder=" ">
                <label for="wcode">WCode</label>
            </div>

            <!-- Date Input -->
            <div class="form-group">
                <input type="date" id="date" name="date" required>
                <label for="date">Date</label>
            </div>

            <!-- Time Input -->
            <div class="form-group">
                <input type="time" id="time" name="time" required>
                <label for="time">Time</label>
            </div>

            <!-- Conducted By Input -->
            <div class="form-group">
                <input type="text" id="conducted_by" name="conducted_by" placeholder="Conducted By" required>
                <label for="conducted_by">Conducted By</label>
            </div>

            <!-- No of Labour Input -->
            <div class="form-group">
                <input type="number" id="no_of_labour" name="no_of_labour" placeholder="No Of Labour" required>
                <label for="no_of_labour">No Of Labour</label>
            </div>

            <!-- H/C Present Dropdown -->
            <div class="form-group">
                <select id="hc_present" name="hc_present" required>
                    <option selected disabled>H/C Present</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
                <label for="hc_present">H/C Present</label>
            </div>

            <!-- Topic Input -->
            <div class="form-group">
                <input type="text" id="topic" name="topic" placeholder="Topic" required>
                <label for="topic">Topic</label>
            </div>

            <!-- Remarks Input -->
            <div class="form-group">
                <input type="text" id="remarks" name="remarks" placeholder="Remarks" required>
                <label for="remarks">Remarks</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   
    <script src="js/STWL.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>