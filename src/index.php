<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo'S List App!</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>Welcome to my PHP training TodoList app ! :)</h1>

    <div class="form">
        <form action="create.php" method="post" autocomplete="off">
            <div class="form-group">
                <label for="title">Task</label>
                <input class="form-control" type="text" name="title" id="title" placeholder="Type a new task to add" required>
            </div>
            <br>
            <button class="btn">Add to list</button>
        </form>
    </div>
    <br>
    
    <hr class="list">
    <h1>Todolist</h1>
    <div id="lists">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" name="id">N° of task</th>
                    <th scope="col">Task description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'db.php';
                    $sql = "SELECT * FROM todos";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $title = $row['title'];
                            ?>
                            <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $title ?></td>
                                <td>
                                    <a class="btn" href="delete.php?id=<?php echo $id ?>" role="button">Delete</a>
                                </td>           
                            </tr>
                            <?php
                        }
                    }
                    mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>
  </body>
</html>