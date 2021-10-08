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
<div>
    <h2>eventName</h2>
    <h2><?php echo e($eventName); ?></h2>
</div>
<div>
    <h2>bandNames</h2>
    <h2><?php echo e($bandNames); ?></h2>
</div>
<div>
    <h2>startDate</h2>
    <h2><?php echo e($startDate); ?></h2>
</div>
<div>
    <h2>endDate</h2>
    <h2><?php echo e($endDate); ?></h2>
</div>
<div>
    <h2>portfolio</h2>
    <h2><?php echo e($portfolio); ?></h2>
</div>
<div>
    <h2>ticketPrice</h2>
    <h2><?php echo e($ticketPrice); ?></h2>
</div>
<div>
    <h2>status</h2>
    <?php
        if (isset($status)){
        switch ($status){
                case 1:
                    echo 'Dang dien ra';
                break;
                case 2:
                    echo 'Sap dien ra';
                break;
                  case 3:
                      echo 'Da dien ra';
                break;
                  case 4:
                      echo 'tam hoan';
                break;
        }
    }
    ?>
</div>
</body>
</html>
<?php /**PATH D:\02. PHP Project\Test002\resources\views/form-succcess.blade.php ENDPATH**/ ?>