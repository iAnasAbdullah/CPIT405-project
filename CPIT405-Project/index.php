
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link type="text/css" rel="stylesheet" href="./style.css">
  <title>CPIT405-Project</title>
</head>
  <body>
    <?php 


    require_once('./db_connection.php');
    require('./insert_todo.php');
    require('./searchHistory.php');
    require('./Fetch.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_POST['search_btn'])) {
            TfetchGiphyAPI($_POST["search_value"]);
            insert_task($_POST["search_value"]);
        }

        else if (isset($_POST['history_btn'])){
            searchHistory();
        }
    }
?>

<div id="content">
        <h1>Photo Fetch API</h1>
        <h3>fetching photos from Giphy using an API, showing 5 random photos</h3>
        <form method="post" id="addForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
           <input type="text" name="search_value" id="item" placeholder="searching for photos..." />
           <button name="search_btn" id="buttons">Search</button>
           <button name="history_btn" id="buttons">Search History</button>
           </div>
           
        </form>
</div>
    <div id="searchResults"></div>
    <div id="history"></div>
  </body>
</html>