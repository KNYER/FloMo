<?php 

$dbSevername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "readings";

$conn = mysqli_connect($dbSevername, $dbUsername, $dbPassword, $dbName );

$sql = 'SELECT *FROM data';

$result = mysqli_query($conn, $sql);
$emparray = array();
    while($roww =mysqli_fetch_assoc($result))
    {
        $emparray[] = $roww;
    }
$rows = array_reverse($emparray);

?>

            <table>
                <thead class ="Label">
                    <tr>
                        <th>Time</th>
                        <th>Level</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($rows as $row) :?>
                    <tr>
                        <td><?php echo $row["Time"]; ?></td>
                        <td><?php echo $row["Value"]; ?></td>
                        <td class="red-warning" id = "warning"><?php 
                        if($row["Value"]<= 70 && $row["Value"]>=30){
                            echo "Red Warning";
                        }elseif($row["Value"]< 10 && $row["Value"]>=5){
                            echo "Yellow Warning";
                        }
                        else{
                            echo "Green Warning";
                        }
                        
                        ?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>