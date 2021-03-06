<div class="periodicities index">
	<h2><?php __('Periodicity');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($periodicities as $periodicity):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $periodicity['Periodicity']['name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detail', true), array('action' => 'view', $periodicity['Periodicity']['id'])); ?>
			<?php echo $this->Html->link(__('Upravit', true), array('action' => 'edit', $periodicity['Periodicity']['id'])); ?>
			<?php echo $this->Html->link(__('Smazat', true), array('action' => 'delete', $periodicity['Periodicity']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $periodicity['Periodicity']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Stánka %page% z %pages%, celkový počet záznamu %count%, zobrazeny záznamy %start% - %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('předchozí', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('další', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Úpravy'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Přidej periodicitu', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Zobrazit trasy', true), array('controller' => 'routes', 'action' => 'index')); ?> </li>
	</ul>
</div>