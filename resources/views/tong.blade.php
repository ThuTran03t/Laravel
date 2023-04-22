<!DOCTYPE html>
<html>
<head>
    <title>Tính tổng</title>
</head>
<body>
    <h1>Tính tổng hai số</h1>
    <form method="POST" action="{{ route('calculate') }}">
        @csrf
        <label for="num1">Nhập số thứ nhất:</label>
        <input type="text" id="num1" name="num1"><br>

        <label for="num2">Nhập số thứ hai:</label>
        <input type="text" id="num2" name="num2"><br>

        <input type="submit" value="Tính tổng">
    </form>

    @if(isset($result))
        <p>Tổng của {{ $num1 }} và {{ $num2 }} là: {{ $result }}</p>
    @endif
</body>
</html>
