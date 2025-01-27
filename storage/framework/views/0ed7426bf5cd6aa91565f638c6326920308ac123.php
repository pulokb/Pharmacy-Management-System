<!-- Add Sale Modal -->
<div class="modal fade" id="add_sales" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sell Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('sales.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label>Product <span class="text-danger">*</span></label>
                                <select class="select2 form-select form-control" name="product"> 
                                    <?php $__currentLoopData = \App\Models\Product::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(!empty($product->purchase)): ?>
                                            <?php if(!($product->purchase->quantity <= 0)): ?>
                                                <option value="<?php echo e($product->id); ?>"><?php echo e($product->purchase->product); ?></option>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="number" value="1" class="form-control" name="quantity">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /ADD Sale Modal --><?php /**PATH C:\Users\pulok\OneDrive\Desktop\Project For IIT\PharmacyMS-Laravel\PharmacyMS-Laravel\resources\views/components/modals/add-sale.blade.php ENDPATH**/ ?>