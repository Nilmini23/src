        <footer class="row">
            <div class="col-md-4">@ Kanchana Nilmini</div>
            <div class="col-md-4">Computer Applications</div>
            <div class="col-md-4">HAMK</div><br>

            <?php
                $filename = basename($_SERVER['PHP_SELF']);
                $modified_time = date("F j, Y, g:i a",filemtime($filename));
                echo $filename . " was last modified: " . $modified_time;
            ?>
        </footer>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>