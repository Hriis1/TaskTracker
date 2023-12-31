<?php
include_once("include/functions.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskTracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        <div class="container-fluid">
            <header class="row">
                <div class="col-sm-6">
                    <a href="#">Enter Restore Mode</a>
                </div>

                <div class="col-sm-6 text-right">
                    Total Time:
                </div>
            </header>

            <form id="form-new" action="" class="row">
                <div class="col-sm-10">
                    <input id="task" name="task" type="text" class="form-control" placeholder="Enter new task name...">
                </div>

                <div class="col-sm-2">
                    <button type="submit" class="btn btn-block btn-success"><?php createIconLineHeight("play", 1.5)?></button>
                </div>
            </form>

            <hr>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Time</th>
                        <th colspan="2">Controls</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Data</td>
                        <td>Data</td>
                        <td>Data</td>
                        <td>Data</td>
                        <td><button class="btn btn-primary"><?php createIconLineHeight("stop", 1.5)?></button></td>
                        <td><button class="btn btn-danger"><?php createIconLineHeight("times", 1.5)?></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/tracker.js"></script>
</body>

</html>