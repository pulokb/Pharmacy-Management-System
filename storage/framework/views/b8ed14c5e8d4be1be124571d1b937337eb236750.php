<?php if( $label = Arr::get($field, 'label') ): ?>
    <label for="<?php echo e(Arr::get($field, 'name')); ?>"><?php echo e($label); ?></label>
<?php endif; ?>
<?php /**PATH E:\codeastro\Laravel\Pharmacy-management-system\resources\views/vendor/app_settings/fields/_label.blade.php ENDPATH**/ ?>