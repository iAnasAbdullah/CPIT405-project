<?php 
function searchHistory()
{
    $sql_query = "SELECT id, task, date_added FROM tasks";
    $statement = $GLOBALS['conn']->prepare($sql_query);
    if ($statement && $statement->execute() && $statement->columnCount()> 0) {
        echo '<table>
                <tr id="my-list>
                    <td>WORD</td>
                    <td>TIMESTAMP</td>
                </tr>';
        while($row = $statement->fetch()) {
            echo '<tr id="my-list">';
            echo "<td>".$row['task']."</td>"."<td>".$row['date_added']."</td>";
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<h2>Your Search history is empty!</h2>';
    }
    $statement = null;
}
