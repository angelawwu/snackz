<?php
        include_once 'index.html'; //add template
        require_once 'login.php';  //add login credentials
        $con = new PDO("mysql:host=localhost;dbname=feedback",'root','');
        
        if (isset($_POST["submit"])) {
            $str = $_POST["search"];
            $sth = $con->prepare("SELECT * FROM `sheet1` WHERE B = '$str'");
        
            $sth->setFetchMode(PDO:: FETCH_OBJ);
            $sth -> execute();
        
            if($row = $sth->fetch())
            {
                ?>
                <br><br><br>
                <table>
                    <tr>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Rating</th>
                        <th>Texture</th>
                        <th>Flavor</th>
                    </tr>
                    <tr>
                        <td><?php echo $row->A;?></td>
                        <td><?php echo $row->B;?></td>
                        <td><?php echo $row->C;?></td>
                        <td><?php echo $row->D;?></td>
                        <td><?php echo $row->E;?></td>
                        <td><?php echo $row->F;?></td>
                        <td><?php echo $row->G;?></td>
                    </tr>
        
                </table>
        <?php 
            }
                
                
                else{
                    echo "Name Does not exist";
                }
        
        
        }
        
        ?>