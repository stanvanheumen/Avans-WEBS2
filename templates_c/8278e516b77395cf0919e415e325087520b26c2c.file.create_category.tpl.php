<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-19 14:18:06
         compiled from "app\view\cms\create_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20525550acc1fb88cc9-27155297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8278e516b77395cf0919e415e325087520b26c2c' => 
    array (
      0 => 'app\\view\\cms\\create_category.tpl',
      1 => 1426771084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20525550acc1fb88cc9-27155297',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550acc1fbbbb33_98006493',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550acc1fbbbb33_98006493')) {function content_550acc1fbbbb33_98006493($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/create_category_post" method="post" role="form">
					    <div class="form-group">
					     	<label for="naam">Naam:</label>
					      	<input type="text" class="form-control" id="naam" name="naam" placeholder="Naam" required />
					    </div>
						
						<div class="pull-right">
					    <button type="submit" class="btn btn-default">Toevoegen</button>
					    <a href="/cms/dashboard" class="btn btn-default">Annuleren</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
