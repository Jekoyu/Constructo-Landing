<?php
// Auto base url for API, image, etc
if ($_SERVER['HTTP_HOST'] === 'localhost') {
  $apiBaseUrl = "http://localhost/Constructo-Landing";
} else {
  $apiBaseUrl = "https://ancatamacitraabadi.co.id/Constructo-Landing";
}
?>
<script>
window.API_BASE_URL = "<?= $apiBaseUrl ?>";
</script>
