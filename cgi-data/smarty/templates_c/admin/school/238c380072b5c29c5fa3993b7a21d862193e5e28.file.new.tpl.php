<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 15:18:01
         compiled from "../template/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2744274635ea28b1a2459f8-07354054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '238c380072b5c29c5fa3993b7a21d862193e5e28' => 
    array (
      0 => '../template/new.tpl',
      1 => 1588222239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2744274635ea28b1a2459f8-07354054',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea28b1a275317_84858393',
  'variables' => 
  array (
    'template_javascript' => 0,
    'template_secondary' => 0,
    'template_header' => 0,
    '_CONTENTS_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea28b1a275317_84858393')) {function content_5ea28b1a275317_84858393($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>管理画面</title>
<link href="/admin/common/css/bootstrap.min.css" rel="stylesheet">
<link href="/admin/common/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="/admin/common/css/animate.css" rel="stylesheet">
<link href="/admin/common/css/plugins/codemirror/codemirror.css" rel="stylesheet">
<link href="/admin/common/css/plugins/codemirror/ambiance.css" rel="stylesheet">
<link href="/school/admin/common/css/plugins/iCheck/custom.css" rel="stylesheet">
<link href="/admin/common/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<link href="/admin/common/css/style.css" rel="stylesheet">
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="/admin/common/js/input.js"></script>
<script type="text/javascript" src="../js/input.js"></script>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<!-- iCheck -->
<script type="text/javascript" src="/admin/common/js/plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		$('.i-checks').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green',
		});
	});
</script>
</head>
<body class="fixed-sidebar no-skin-config">
<div id="wrapper">
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_secondary']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('action'=>"public",'manage'=>"school"), 0);?>

	<div id="page-wrapper" class="gray-bg">
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div class="row wrapper border-bottom white-bg page-heading">
			<div class="col-lg-10">
				<h2><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</h2>
				<ol class="breadcrumb">
					<li><a href="/admin/">Home</a></li>
					<li><a href="./"><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
</a></li>
					<li class="active"><strong>新規登録</strong></li>
				</ol>
			</div>
			<div class="col-lg-2"></div>
		</div>
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="row">
				<div class="col-lg-12">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<h5><?php echo $_smarty_tpl->tpl_vars['_CONTENTS_NAME']->value;?>
管理　新規登録 </h5>
						</div>
						<?php echo $_smarty_tpl->getSubTemplate ("./form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('mode'=>"new"), 0);?>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php }} ?>
