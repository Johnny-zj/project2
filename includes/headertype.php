
    <header id="header">
        <hi>panda park</hi>
        <nav class="links">
            <uls>
                <?php
                
                if (empty($pagelevel)) {
                    
                    echo "<li><a href='homepage.php'>home page</a></li>";
                    echo "<li><a class='log' href='login.php'>login</a></li>";
                } else { if ($_SESSION['login_level'] == 1) {
                    echo "<li><a href='doctor.php'>save</a></li>";
                    echo "<li><a href='doctor2.php'>dead</a></li>";
                } elseif ($_SESSION['login_level'] == 2) {
                    echo "<li><a href='caregiver.php'>food consumption list</a></li>";
                    echo "<li><a href='fbarchart.php'>food consumption chart</a></li>";
                    echo "<li><a href='speichart.php'>food surplus chart</a></li>";
                } elseif ($_SESSION['login_level'] == 3) {
                    echo "<li><a href='finance.php'>financial list</a></li>";
                    echo "<li><a href='linechart.php'>Cost chart</a></li>";
                    echo "<li><a href='linechart2.php'>Income chart</a></li>";
                } elseif ($_SESSION['login_level'] == 4) {
                    echo "<li><a href='../admin/admin.php'>user list</a></li>";
                    echo "<li><a href='../doctor/doctor.php'>doctor page</a></li>";
                    if ($pagelevel == 1) {
                        echo "<li><a href='doctor.php'>save</a></li>";
                        echo "<li><a href='doctor2.php'>dead</a></li>";
                    }
                    echo "<li><a href='../caregiver/caregiver.php'>caregiver page</a></li>";
                    if ($pagelevel == 2) {
                        echo "<li><a href='caregiver.php'>food consumption list</a></li>";
                        echo "<li><a href='fbarchart.php'>food consumption chart</a></li>";
                        echo "<li><a href='speichart.php'>food surplus chart</a></li>";
                    }
                    echo "<li><a href='../finance/finance.php'>finance page</a></li>";
                    if ($pagelevel == 3) {
                        echo "<li><a href='finance.php'>financial list</a></li>";
                        echo "<li><a href='linechart.php'>Cost chart</a></li>";
                        echo "<li><a href='linechart2.php'>Income chart</a></li>";
                    }
                    
                } 
                        echo "<li><a class='log' href='../logout.php'>logout</a></li>";
                       }
                ?>
            </uls>
        </nav>
    </header>

