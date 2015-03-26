<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-26 14:14:16
         compiled from "app\view\cms\read_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1819255140628dab805-33322596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dd594c7252792d9df66e3937fea83a920b2b536' => 
    array (
      0 => 'app\\view\\cms\\read_user.tpl',
      1 => 1427323563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1819255140628dab805-33322596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55140628eb0003_78235822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55140628eb0003_78235822')) {function content_55140628eb0003_78235822($_smarty_tpl) {?><div class="container">
	<div class="row">
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
									<label for="voornaam">Voornaam</label><br />
									<?php echo $_smarty_tpl->tpl_vars['user']->value->getVoornaam();?>

								</div>
								<div class="col-md-4">
									<label for="tussenvoegsel">Tussenvoegsel</label><br />
									<?php echo $_smarty_tpl->tpl_vars['user']->value->getTussenvoegsel();?>

								</div>
								<div class="col-md-4">
									<label for="achternaam">Achternaam</label><br />
									<?php echo $_smarty_tpl->tpl_vars['user']->value->getAchternaam();?>

								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label for="straat">Straat</label><br />
									<?php echo $_smarty_tpl->tpl_vars['user']->value->getStraat();?>

								</div>
								<div class="col-md-4">
									<label for="postcode">Postcode</label><br />
									<?php echo $_smarty_tpl->tpl_vars['user']->value->getPostcode();?>

								</div>
								<div class="col-md-4">
									<label for="woonplaats">Woonplaats</label><br />
									<?php echo $_smarty_tpl->tpl_vars['user']->value->getWoonplaats();?>

								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="telefoonnummer">Telefoonnummer</label><br />
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
