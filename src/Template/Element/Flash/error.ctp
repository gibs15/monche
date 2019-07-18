<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div>

<script>
		swal({
			title: "Error",
			text: "<?php echo $message; ?>",
			type: "error"
		});
</script>