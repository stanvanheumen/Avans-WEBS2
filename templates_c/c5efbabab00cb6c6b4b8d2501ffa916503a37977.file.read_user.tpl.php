<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-28 22:52:07
         compiled from "app\view\cms\read_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31930551722876deb53-42438277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5efbabab00cb6c6b4b8d2501ffa916503a37977' => 
    array (
      0 => 'app\\view\\cms\\read_user.tpl',
      1 => 1427404601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31930551722876deb53-42438277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55172287760c83_69778875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55172287760c83_69778875')) {function content_55172287760c83_69778875($_smarty_tpl) {?><div class="container">
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
