<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-29 23:34:04
         compiled from "app\view\cms\edit_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1461555186fcc9653c8-11706367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efa543ef320b48bae2dcc2d2b33e484a132df564' => 
    array (
      0 => 'app\\view\\cms\\edit_user.tpl',
      1 => 1427404577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1461555186fcc9653c8-11706367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'genders' => 0,
    'gender' => 0,
    'ranks' => 0,
    'rank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55186fcca72e35_82779192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55186fcca72e35_82779192')) {function content_55186fcca72e35_82779192($_smarty_tpl) {?><div class="container">
	<div class="row cms">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading text-centered">
					<h4 class="panel-title">Gebruiker wijzigen</h4>
				</div>
				<div class="panel-body">
					<form action="/cms/edit_user_post?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" method="post" role="form">
						<fieldset>
							<div class="form-group">
								<span class="label label-default">Persoonlijke gegevens</span>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-4">
										<label>Voornaam</label>
										<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getVoornaam();?>
" placeholder="Voornaam" name="first_name" type="text" required>
									</div>
									<div class="col-md-4">
										<label>Tussenvoegsel</label>
										<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getTussenvoegsel();?>
" placeholder="Tussenvoegsel" name="infix_name" type="text">
									</div>
									<div class="col-md-4">
										<label>Achternaam</label>
										<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getAchternaam();?>
" placeholder="Achternaam" name="last_name" type="text" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label>Straat</label>
										<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getStraat();?>
" placeholder="Straat" name="street" type="text" required>
									</div>
									<div class="col-md-6">
										<label>Postcode</label>
										<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getPostcode();?>
" placeholder="Postcode" name="postal_code" type="text" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Woonplaats</label>
								<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getWoonplaats();?>
" placeholder="Woonplaats" name="place" type="text" required>
							</div>
							<div class="form-group">
								<label>Telefoonnummer</label>
								<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getTelefoonnummer();?>
" placeholder="Telefoonnummer" name="number" type="text" required>
							</div>
							<div class="form-group">
								<label>Geslacht</label>
								<select class="form-control" name="gender">
									<?php  $_smarty_tpl->tpl_vars['gender'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gender']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['genders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gender']->key => $_smarty_tpl->tpl_vars['gender']->value) {
$_smarty_tpl->tpl_vars['gender']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['user']->value->getGeslacht()==$_smarty_tpl->tpl_vars['gender']->value['id']) {?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['gender']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['gender']->value['gender'];?>
</option>
									<?php } else { ?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['gender']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['gender']->value['gender'];?>
</option>
									<?php }?>
								<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<span class="label label-default">Admin gegevens</span>
							</div>
							<div class="form-group">
								<label>Rank</label>
								<select class="form-control" name="rank">
									<?php  $_smarty_tpl->tpl_vars['rank'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rank']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ranks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rank']->key => $_smarty_tpl->tpl_vars['rank']->value) {
$_smarty_tpl->tpl_vars['rank']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['rank']->value->getNaam()==$_smarty_tpl->tpl_vars['user']->value->getRankNaam()) {?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['rank']->value->getNaam();?>
" selected><?php echo $_smarty_tpl->tpl_vars['rank']->value->getNaam();?>
</option>
									<?php } else { ?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['rank']->value->getNaam();?>
"><?php echo $_smarty_tpl->tpl_vars['rank']->value->getNaam();?>
</option>
									<?php }?>
								<?php } ?>
								</select>
							</div>
							<div class="pull-right">
								<button type="submit" class="btn btn-default">Wijzigen</button>
								<a href="/cms/users" class="btn btn-default">Annuleren</a>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
