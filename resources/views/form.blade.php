<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <form method="POST" action="{{ route('submit-form') }}" style="width: 600px; margin- left: 650px">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" required> 
        </div>

        <div class="form-group">
            <label for="dob">Date:</label>
            <input type="date" name="dob" id="dob" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" required>
        </div>

        <div class="form-group">
            <label for="website">Website:</label>
            <input type="url" name="website" id="website" required>
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <textarea name="address" id="address" rows="3" required></textarea>
        </div>

        <div  class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
