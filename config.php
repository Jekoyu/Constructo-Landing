<?php
// Auto base url for API, image, etc
$apiBaseUrl = getenv('APP_URL');
?>
<script>
window.API_BASE_URL = "<?= $apiBaseUrl ?>";
</script>
