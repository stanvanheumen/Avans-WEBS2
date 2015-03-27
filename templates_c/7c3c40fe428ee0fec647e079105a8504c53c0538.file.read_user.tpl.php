<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-27 08:57:23
         compiled from "app\view\cms\read_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2872555150d63ad0136-16660160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c3c40fe428ee0fec647e079105a8504c53c0538' => 
    array (
      0 => 'app\\view\\cms\\read_user.tpl',
      1 => 1427442964,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2872555150d63ad0136-16660160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55150d63b5aa61_11161019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55150d63b5aa61_11161019')) {function content_55150d63b5aa61_11161019($_smarty_tpl) {?><div class="container">
	<div class="row cms">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Gebruiker</h4>
				</div>
				<div class="panel-body">
					<fieldset>
						<div class="form-group">
							<span class="label label-default">Persoonlijke gegevens</span>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Voornaam</label><br />
									<?php echo $_smarty_tpl->tpl_vars['user']->value->getVoornaam();?>

								</div>
								<div class="col-md-4">
									<label>Tussenvoegsel</label><br />
									<?php echo $_smarty_tpl->tpl_vars['user']->value->getTussenvoegsel();?>

								</div>
								<div class="col-md-4">
									<label>Achternaam</label><br />
									<?php echo $_smarty_tpl->tpl_vars['user']->value->getAchternaam();?>

								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label>Straat</label><br />
									<?php echo $_smarty_tpl->tpl_vars['user']->value->getStraat();?>

								</div>
								<div class="col-md-4">
									<label>Postcode</label><br />
									<?php echo $_smarty_tpl->tpl_vars['user']->value->getPostcode();?>

								</div>
								<div class="col-md-4">
									<label>Woonplaats</label><br />
									<?php echo $_smarty_tpl->tpl_vars['user']->value->getWoonplaats();?>

								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Telefoonnummer</label><br />
							<?php echo $_smarty_tpl->tpl_vars['user']->value->getTelefoonnummer();?>

						</div>
						<div class="pull-right">
							<a class="btn btn-primary" href="/cms/users"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></a>
						</div>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
