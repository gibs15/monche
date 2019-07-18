<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<script>
		swal({
			title: "Success",
			text: "<?php echo $message; ?>",
			type: "success"
		});
</script>
