<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-18 10:19:57
         compiled from "app\view\cms\edit_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155175509433dc02310-45794819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe13dd969c715b0e8804163ecf873736ce828818' => 
    array (
      0 => 'app\\view\\cms\\edit_user.tpl',
      1 => 1426670284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155175509433dc02310-45794819',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5509433dc77886_69970151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5509433dc77886_69970151')) {function content_5509433dc77886_69970151($_smarty_tpl) {?><div class="container">
	<div class="row">
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
										<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getVoornaam();?>
" placeholder="Voornaam" name="first_name" type="text" required>
									</div>
									<div class="col-md-4">
										<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getTussenvoegsel();?>
" placeholder="Tussenvoegsel" name="infix_name" type="text">
									</div>
									<div class="col-md-4">
										<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getAchternaam();?>
" placeholder="Achternaam" name="last_name" type="text" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getStraat();?>
" placeholder="Straat" name="street" type="text" required>
									</div>
									<div class="col-md-6">
										<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getPostcode();?>
" placeholder="Postcode" name="postal_code" type="text" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getWoonplaats();?>
" placeholder="Woonplaats" name="place" type="text" required>
							</div>
							<div class="form-group">
								<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getTelefoonnummer();?>
" placeholder="Telefoonnummer" name="number" type="text" required>
							</div>
							<div class="form-group">
								<select class="form-control" name="gender" required>
									<option value="0">Man</option>
									<option value="1">Vrouw</option>
									<option value="2">Ik weet het niet/beide</option>
								</select>
							</div>
						
							<button type="submit" class="btn btn-default">Wijzigen</button>
							<a href="/cms/users" class="btn btn-default">Annuleren</a>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
