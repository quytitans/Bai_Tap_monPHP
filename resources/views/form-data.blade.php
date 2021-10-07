<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/data-handle/form" method="post">
    @csrf
    <div>
        <label for="">eventName</label>
        <input type="text" name="eventName">
    </div>
    <div>
        <label for="">bandNames</label>
        <input type="text" name="bandNames">
    </div>
    <div>
        <label for="">startDate</label>
        <input type="date" name="startDate">
    </div>
    <div>
        <label for="">endDate</label>
        <input type="date" name="endDate">
    </div>
    <div>
        <label for="">portfolio</label>
        <input type="text" name="portfolio">
    </div>
    <div>
        <label for="">ticketPrice</label>
        <input type="text" name="ticketPrice">
    </div>
    <div>
        <label for="">status</label>
        <input type="text" name="status">
    </div>
    <div>
        <button>Submit</button>
    </div>
</form>
</body>
</html>
