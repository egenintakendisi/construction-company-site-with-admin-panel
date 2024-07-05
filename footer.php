<footer>
    <?php
        $myfile = fopen("admin/icerik.txt","r");
        for($i=1;$i<=4;$i++)
        fgets($myfile);

    
    ?>
        <div class="footer-content">
            <p>&copy; <?php echo date("Y")?> Şirket Adı. Tüm hakları saklıdır.</p>
            <div class="social-icons">
                <a href=<?php echo fgets($myfile);?> class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href=<?php echo fgets($myfile);?> class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href=<?php echo fgets($myfile);?> class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href=<?php echo fgets($myfile);?> class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>