<?php //netteCache[01]000370a:2:{s:4:"time";s:21:"0.71563400 1396584498";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:50:"/root/docs/apigen/templates/default/overview.latte";i:2;i:1389902151;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: /root/docs/apigen/templates/default/overview.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '5fkzoefrr3')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb98bc228c34_title')) { function _lb98bc228c34_title($_l, $_args) { extract($_args)
;echo Nette\Templating\Helpers::escapeHtml($config->title ?: 'Overview', ENT_NOQUOTES) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb20a7a609d6_content')) { function _lb20a7a609d6_content($_l, $_args) { extract($_args)
?><div id="content">
	<h1><?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()) ?></h1>

<?php $group = false ?>

<?php if ($namespaces): ob_start() ?>
	<h2>Namespaces summary</h2>
	<table class="summary table table-bordered table-striped" id="namespaces">
<?php $iterations = 0; foreach ($namespaces as $namespace): if ($config->main && 0 !== strpos($namespace, $config->main)) continue ?>
	<tr>
<?php $group = true ?>
		<td class="name"><a href="<?php echo htmlSpecialChars($template->namespaceUrl($namespace)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($namespace, ENT_NOQUOTES) ?></a></td>
	</tr>
<?php $iterations++; endforeach ?>
	</table>
<?php if ($iterations) ob_end_flush(); else ob_end_clean(); endif ?>

<?php if ($packages): ob_start() ?>
	<h2>Packages summary</h2>
	<table class="summary table table-bordered table-striped" id="packages">
<?php $iterations = 0; foreach ($packages as $package): if ($config->main && 0 !== strpos($package, $config->main)) continue ?>
	<tr>
<?php $group = true ?>
		<td class="name"><a href="<?php echo htmlSpecialChars($template->packageUrl($package)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($package, ENT_NOQUOTES) ?></a></td>
	</tr>
<?php $iterations++; endforeach ?>
	</table>
<?php if ($iterations) ob_end_flush(); else ob_end_clean(); endif ?>

<?php if (!$group): Nette\Latte\Macros\CoreMacros::includeTemplate('@elementlist.latte', $template->getParameters(), $_l->templates['5fkzoefrr3'])->render() ;endif ?>
</div>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = '@layout.latte'; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
 $active = 'overview' ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 