<!DOCTYPE html>
<html>
<head>
    <title>Form Output</title>
</head>
<body>
    <h1>Form Output</h1>

    <p>Name: {{ $data['name'] }}</p>
    <p>Age: {{ $data['age'] }}</p>
    <p>Date: {{ $data['dob'] }}</p>
    
    <p>Phone: {{ $data['phone'] }}</p>
    <p>Website: {{ $data['website'] }}</p>
    <p>Address: {{ $data['address'] }}</p>
</body>
</html>