<header class=clearfix>
        <div class="branding">
            <img src="images/logo.png" alt="logo" class="logo">
        </div>
        <div class="districtTag">
            <h2>Galle District Secretariat</h2>
            <h3>Project Handling and Evaluation MIS</h3>
        </div>
        <?php
            $username="MR.Sandeepa";
            if(isset($username)):
        ?>
            <script>
                document.getElementById("user").style.display="none";
            </script>
            <div class="user" id="user">
                <span><?php echo $username;?>(<span style="color:red">Logout</span>)</span>
            </div>
        <?php
            else:
        ?>

        <div class="user" id="user">
            <a href="login"><i class="fas fa-user"></i></a>
        </div>
        <?php
            endif;
        ?>
</header>

