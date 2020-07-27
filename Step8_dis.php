<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Task For Tomorrow</h1>
<ul>
    <li>
        <strong>Title: </strong> <?php echo $Task_details['Task_title']; ?>
    </li>
    <li>
        <strong>Due date: </strong> <?php echo $Task_details['Due']; ?>
    </li>
    <li>
        <strong>Assigned_to: </strong> <?php echo $Task_details['Assigned_to']; ?>
    </li>
    <li>
        <strong>Has_completed: </strong> <?php echo $Task_details['Has_completed'] ? 'Complete' : ' Incomplete'; ?>
    </li>
</ul>

</body>
</html>