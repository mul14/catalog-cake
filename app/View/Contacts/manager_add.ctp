<div class="row">
    
    <div class="large-7 large-centered columns">
        <h1 class="subheader"><?php echo __('Create New Contact'); ?></h1>
    </div>       
    
    <div class="large-7 large-centered columns">
        
        <?php echo $this->Form->create('CatalogContact',array(
            'url' => array('controller' => 'contacts','action' => 'add','manager' => true)
        )); ?>
        
        <div class="row">
            <div class="large-12 columns">
                <?php echo $this->Form->input('contact_content',array(
                    'label' => __('Tell your customer how to contact you: '),
                    'type' => 'textarea',
                    'div' => false,                    
                    'error' => array(
                        'attributes'  => array('wrap' => 'small','class' => 'error')
                    )
                )); ?>                                
            </div>
        </div>                
        
        <div class="row">
            <div class="large-6 columns">
                <input type="submit" value="<?php echo __('Update'); ?>" class="button small" />
                <?php echo $this->Html->link(__('Cancel'),array(
                    'controller' => 'admin',
                    'action' => 'dashboard',
                    'manager' => true,
                )); ?>
            </div>
        </div>
        
        <?php echo $this->Session->flash('failure',array('element' => 'notif_failure')); ?>
        <?php echo $this->Session->flash('success',array('element' => 'notif_success')); ?>
        
        <?php echo $this->Form->end(); ?>
        
    </div>
    
</div>