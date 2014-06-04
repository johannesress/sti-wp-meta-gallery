<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control">
 	<p>
 		Fügen Sie neue Seiten zur Gallerie hinzu oder entfernen Sie bestehende. Die erste Seite wird automatisch als Vorschaubild verwendet.
 	</p>
	
	<h2>Gallerieseiten</h2>
	<hr>
	<?php $i = 1; ?>
	<?php while($mb->have_fields_and_multi('slides')): ?>
	<?php $mb->the_group_open(); ?>
 
		<?php $mb->the_field('title'); ?>
		<label>Titel der Gallerieseite</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
 
 		<?php $mb->the_field('text'); ?>
		<label>Text der Gallerieseite</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>

		<?php $mb->the_field('avatarurl'); ?>
	    <?php $wpalchemy_media_access->setGroupName('nn'.$i)->setInsertButtonLabel('Einfügen'); ?>
	 
	    <p>
	    	<img src="<?php echo $mb->get_the_value('slide'); ?>" width="100" height="auto" style="float:left;" />
	        <?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name('slide'), 'value' => $mb->get_the_value('slide'))); ?>
	        <?php echo $wpalchemy_media_access->getButton(array('label' => 'Bild wählen')); ?>
	    </p>
 
		<?php $mb->the_field('access'); ?>
		<p>
			<a href="#" class="dodelete button">Gallerieseite entfernen</a>
		</p>

		<hr>
 
	<?php $mb->the_group_close(); ?>
	<?php $i++; ?>
	<?php endwhile; ?>

	<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-slides button">Neue Gallerieseite</a></p>
</div>