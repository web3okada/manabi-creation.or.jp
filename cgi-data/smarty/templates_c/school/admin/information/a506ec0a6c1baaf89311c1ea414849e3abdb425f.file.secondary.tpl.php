<?php /* Smarty version Smarty-3.1.18, created on 2020-04-30 15:49:17
         compiled from "/home/manabi-creation/www//school/admin/common/inc/secondary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20590191215eaa74ed227947-20366302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a506ec0a6c1baaf89311c1ea414849e3abdb425f' => 
    array (
      0 => '/home/manabi-creation/www//school/admin/common/inc/secondary.tpl',
      1 => 1588223039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20590191215eaa74ed227947-20366302',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5eaa74ed23aa66_72843340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eaa74ed23aa66_72843340')) {function content_5eaa74ed23aa66_72843340($_smarty_tpl) {?>	<nav class="navbar-default navbar-static-side" role="navigation">
		<div class="sidebar-collapse">
			<ul class="nav metismenu" id="side-menu" style="padding-bottom:30px;">
				<li class="nav-header">
					<div class="dropdown profile-element">
						<span>
							<?php if (!empty($_COOKIE['sc_image1'])) {?>
								<img alt="image" style="width:100%" src="/common/photo/school/image1/s_<?php echo $_COOKIE['sc_image1'];?>
" /></span>
							<?php } else { ?>
							<?php }?>
							<a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)">
								<span class="clear">
									<span class="block m-t-xs"><strong class="font-bold"><?php echo $_COOKIE['sc_name'];?>
</strong></span>
								</span>
							</a>

						
					</div>
				</li>
				<li><a href="/school/admin/"><i class="fa fa-home"></i><span class="nav-label">HOME</span></a></li>
				<li><a href="/school/admin/contents/information/"><i class="fa fa-newspaper-o"></i><span class="nav-label">お知らせ管理</span></a></li>
				<li><a href="/school/admin/contents/staff/"><i class="fa fa-newspaper-o"></i><span class="nav-label">スタッフ管理</span></a></li>
				<li><a href="/school/admin/contents/school/"><i class="fa fa-newspaper-o"></i><span class="nav-label">学校情報</span></a></li>
				<li><a href="/school/admin/contents/teacher_role/"><i class="fa fa-newspaper-o"></i><span class="nav-label">役割管理</span></a></li>
				<li><a href="/school/admin/contents/teacher/"><i class="fa fa-newspaper-o"></i><span class="nav-label">講師管理</span></a></li>
				<li><a href="/school/admin/contents/schedule/"><i class="fa fa-newspaper-o"></i><span class="nav-label">スケジュール管理</span></a></li>
				<li><a href="/school/admin/contents/contact/"><i class="fa fa-newspaper-o"></i><span class="nav-label">お問い合わせ管理</span></a></li>

			</ul>
		</div>
	</nav>
<?php }} ?>
