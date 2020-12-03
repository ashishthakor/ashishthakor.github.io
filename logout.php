<?php
session_start();
?>
<script>
    location.replace('index.php');
</script>

<?php

session_destroy();
?>