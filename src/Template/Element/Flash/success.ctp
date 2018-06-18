<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div style="background-color: #3ADF00" class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div>
