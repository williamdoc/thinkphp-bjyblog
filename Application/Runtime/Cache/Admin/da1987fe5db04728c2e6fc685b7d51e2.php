<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加标签</title>
<script type="text/javascript" src="/thinkbjy/Public/static/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="/thinkbjy/Public/static/bootstrap-3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/thinkbjy/Public/static/bootstrap-3.3.2/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="/thinkbjy/Public/static/font-awesome-4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/thinkbjy/Public/static/bjy.css">
<script type="text/javascript" src="/thinkbjy/Public/static/bootstrap-3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table table-bordered table-striped table-hover table-condensed">
	<form action="<?php echo U('Admin/Tag/add');?>" method="post">
		<tr>
			<th>标签名</th>
			<td>
				<textarea class="form-control modal-sm bjy-noresize" name="tnames" rows="5" placeholder="可以批量添加标签，每行一个。"></textarea>
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input class="btn btn-default" type="submit" value="添加">
			</td>
		</tr>
	</form>
</table>
</body>
</html>