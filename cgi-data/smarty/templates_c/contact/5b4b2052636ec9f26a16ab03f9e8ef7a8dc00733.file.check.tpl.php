<?php /* Smarty version Smarty-3.1.18, created on 2020-04-22 18:00:49
         compiled from "./check.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9822973345ea007c109ceb7-23515440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b4b2052636ec9f26a16ab03f9e8ef7a8dc00733' => 
    array (
      0 => './check.tpl',
      1 => 1587544416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9822973345ea007c109ceb7-23515440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'template_meta' => 0,
    'template_javascript' => 0,
    'template_header' => 0,
    'arr_post' => 0,
    'c1' => 0,
    'g' => 0,
    'p' => 0,
    'c2' => 0,
    'name' => 0,
    'value' => 0,
    'template_footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5ea007c115d602_09082491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea007c115d602_09082491')) {function content_5ea007c115d602_09082491($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['message']->value['ng'])) {?>
<?php echo $_smarty_tpl->getSubTemplate ("array.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<!-- meta -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_meta']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- meta -->
<link rel="stylesheet" href="/common/css/import.css">
<!-- js -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_javascript']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- js -->
</head>
<body id="contact">
<div id="base">
<!-- header -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- header -->
<main>
<div id="body">
	<div id="page_title">
		<div class="img_back sp_none">
			<img src="/common/image/contents/top.jpg" alt="お問い合わせ">
		</div>
		<div class="img_back pc_none">
			<img src="/common/image/contents/top_sp.jpg" alt="お問い合わせ">
		</div>
		<div class="page_title_wrap">
			<div class="center">
				<h2>
					<span class="main">
						<span>C</span><span>O</span><span>N</span><span>T</span><span>A</span><span>C</span><span>T</span>
					</span>
					<span class="sub">お問い合わせ</span>
				</h2>
			</div>
		</div>
	</div>
	<div id="pankuzu" class="bg_gg">
		<div class="center">
			<ul>
				<li><a href="/">HOME</a></li>
				<li>お問い合わせ</li>
			</ul>
		</div>
	</div>
	<section>
		<div class="wrapper">
			<div class="center entry">
				<div class="box">
					<p class="pos_ac mb50">
						<img src="/common/image/contents/contact/check.png" alt="お問い合わせ・オンライン授業申し込み"  class="hidden-only">
						<img src="/common/image/contents/contact/sp_check.png" alt="お問い合わせ・オンライン授業申し込み"  class="visible-only">
					</p>
					<p class="mb10 c_red">まだフォームの送信は完了していません。</p>
					<p class="mb30">下記内容をご確認の上、「送信する」ボタンを押してください。</p>
					<form action="./#form" method="post">
						<table class="tbl_form mb50 check">
							<tbody>
								<tr class="first">
									<th scope="row">ご用件</th>
									<td><?php echo $_smarty_tpl->tpl_vars['c1']->value[$_smarty_tpl->tpl_vars['arr_post']->value['content']];?>
</td>
								</tr>
								<tr>
									<th scope="row">保護者氏名</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name'];?>
</td>
								</tr>
								<tr>
									<th scope="row">保護者氏名(フリガナ)</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby'];?>
</td>
								</tr>
								<tr>
									<th scope="row">受講するお子様の学年</th>
									<td><?php echo $_smarty_tpl->tpl_vars['g']->value[$_smarty_tpl->tpl_vars['arr_post']->value['g']];?>
</td>
								</tr>
								<tr>
									<th scope="row">受講者氏名</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['name2'];?>
</td>
								</tr>
								<tr>
									<th scope="row">受講者氏名(フリガナ)</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['ruby2'];?>
</td>
								</tr>
								<tr>
									<th scope="row">住所</th>
									<td>〒<?php echo $_smarty_tpl->tpl_vars['arr_post']->value['zip'];?>
 <?php echo $_smarty_tpl->tpl_vars['p']->value[$_smarty_tpl->tpl_vars['arr_post']->value['prefecture']];?>
 <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address1'];?>
 <?php echo $_smarty_tpl->tpl_vars['arr_post']->value['address2'];?>
</td>
								</tr>
								<tr>
									<th scope="row">メールアドレス</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['mail'];?>
</td>
								</tr>
								<tr>
									<th scope="row">電話番号</th>
									<td><?php echo $_smarty_tpl->tpl_vars['arr_post']->value['tel'];?>
</td>
								</tr>
								<?php if (!empty($_smarty_tpl->tpl_vars['arr_post']->value['content'])) {?>
								<tr>
									<th scope="row" class="zoom">ZOOMオンラインの<br class="md_br">利用経験</th>
									<td><?php echo $_smarty_tpl->tpl_vars['c2']->value[$_smarty_tpl->tpl_vars['arr_post']->value['content2']];?>
</td>
								</tr>
								<tr>
									<th scope="row">お問い合わせ内容</th>
									<td><?php echo nl2br($_smarty_tpl->tpl_vars['arr_post']->value['comment']);?>
</td>
								</tr>
								<?php }?>
							</tbody>
						</table>
						<div class="row form_button _check">
							<?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_post']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
							<?php } ?>
							<div class="col-sm-6 mb20 left">
								<button class="button _back" type="submit" formaction="./"><i class="fas fa-caret-left"></i>修正する</button>
							</div>
							<div class="col-sm-6 right">
								<button id="send_button" class="button" type="submit" formaction="./send.php">送信する<i class="fas fa-caret-right"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
</main>
<!-- footer -->
<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['template_footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- footer -->
<script>
</script>
</div>
</body>
</html>
<?php } else { ?>
<?php echo $_smarty_tpl->getSubTemplate ("index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
