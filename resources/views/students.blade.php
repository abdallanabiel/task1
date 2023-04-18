<!DOCTYPE html>
<html>
<head>
    <title>Student Group</title>
</head>
<body>

    <h1>Student Group</h1>
<?php
$groups = [
    'Adam',
    'Ali',
    'Noah'];  
?>
    <ul>
        @foreach ($groups as $group)
            <li>{{ $group }}</li>
        @endforeach
    </ul>
</body>
</html>