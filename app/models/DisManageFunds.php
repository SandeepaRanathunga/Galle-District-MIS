<?php
    namespace model;
    require_once __DIR__ . '/../database/Database.php';

    class DisManageFunds{
        public $agency_id;
        public $agency_name;
        public $funds_received;
        public $date;
        public $num_of_projects;
        public $total_expense;
        public $total_balance;

        public function fetch(){
            $conn=$this->dbConnect();
            $query=mysqli_query($conn,"SELECT * FROM".$this->funds) or die(mysqli_error($conn));
            
            <table border=1>
            <?php
                while($r= mysqli_fetch_array($q))
                {
            ?>
                    <tr>
                    <td><?php echo $r['agency_id'] ?></td>
                    <td><?php echo $r['agency_name'] ?></td>
                    <td><?php echo $r['funds_received'] ?></td>
                    <td><?php echo $r['date'] ?></td>
                    <td><?php echo $r['num_of_projects'] ?></td>
                    <td><?php echo $r['total_expense'] ?></td>
                    <td><?php echo $r['total_balance'] ?></td>
                    </tr>
            <?php
                }
            ?>
            </table>
        }
    }
?>