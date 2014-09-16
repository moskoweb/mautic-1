<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
if ($tmpl == 'index') {
    $view->extend('MauticInstallBundle:Install:content.html.php');
}

$header = $view['translator']->trans('mautic.install.install.heading.final');
$view['slots']->set("headerTitle", $header);
?>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">
			<?php echo $header; ?>
		</h3>
	</div>
	<div class="panel-body">
        <h4><?php echo $view['translator']->trans('mautic.install.install.heading.finished'); ?></h4>
        <?php if (!$is_writable) : ?>
            <h5><?php echo $view['translator']->trans('mautic.install.install.heading.configured'); ?></h5>
        <?php else : ?>
            <h5><?php echo $view['translator']->trans('mautic.install.install.heading.almost.configured'); ?></h5>
            <?php if ($is_writable) : ?>
                <p><?php echo $view['translator']->trans('mautic.install.install.sentence.config.written', array('%path%' => $config_path)); ?></p>
            <?php else : ?>
                <p><?php echo $view['translator']->trans('mautic.install.install.sentence.config.not.written', array('%path%' => $config_path)); ?></p>
            <?php endif; ?>
            <textarea class="form-control" rows="15"><?php echo $parameters; ?></textarea>
        <?php endif; ?>
        <?php if ($welcome_url) : ?>
            <a href="<?php echo $welcome_url; ?>"><?php echo $view['translator']->trans('mautic.install.install.sentence.proceed.to.mautic'); ?></a>
        <?php endif; ?>
    </div>
</div>
