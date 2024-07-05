<?php
    require "navbar.php";
?>
<style>
    .container{
        box-sizing: border-box;
    }
</style>
 <div class="container mt-5">
        <div class="row">
            <?php
            $myfile = fopen("admin/fotolar.txt","r");

            ?>
    <?php while($satir = fgets($myfile)):?>
        <?php
            $dilimler = explode("|",$satir);
            ?>
            <div class="col-md-6">
                <div class="card">
                    <img src=<?php echo $dilimler[0];?> class="card-img-top" alt="Sample Image">
                    <div class="card-body">
                        <p class="card-text"><?php echo $dilimler[1];?></p>
                    </div>
                </div>
            </div>
            <?php endwhile;?>
            
        
    </div>


<?php
    require "footer.php";
?>
<script>
    <script>
    document.querySelectorAll("img").forEach(img => {
        img.addEventListener("click", function() {
            if (this.requestFullscreen) {
                this.requestFullscreen();
            } else if (this.mozRequestFullScreen) { 
                this.mozRequestFullScreen();
            } else if (this.webkitRequestFullscreen) { 
                this.webkitRequestFullscreen();
            } else if (this.msRequestFullscreen) { 
                this.msRequestFullscreen();
            }
        });
    });

    document.addEventListener("fullscreenchange", function() {
        if (!document.fullscreenElement) {
            console.log("Exited fullscreen mode");
        }
    });

    document.addEventListener("keydown", function(e) {
        if (e.key === "Escape") {
            if (document.exitFullscreen) {
                document.exitFullscreen();
            } else if (document.mozCancelFullScreen) { 
                document.mozCancelFullScreen();
            } else if (document.webkitExitFullscreen) { 
                document.webkitExitFullscreen();
            } else if (document.msExitFullscreen) { 
                document.msExitFullscreen();
            }
        }
    });
</script>
</script>