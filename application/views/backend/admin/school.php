<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('school'); ?>
                  <a href="<?php echo site_url('admin/schoollist/add_school'); ?>" class="btn btn-outline-primary btn-rounded alignToTitle"><i class="mdi mdi-plus"></i><?php echo get_phrase('add_new_school'); ?></a>
                </h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<div class="row">
  
   <ul class="list-group list-group-flush">
    
                     <?php foreach ($school->result_array() as $value): ?>
                        <li>
<h4> <?php echo $value['name']; ?></h4>
                     </li>
                 

                 
                 <!-- end card-->
         
                        <?php
                         endforeach; ?>
                     </ul>

</div>

<script type="text/javascript">
    $('.on-hover-action').mouseenter(function() {
        var id = this.id;
        $('#category-delete-btn-'+id).show();
        $('#category-edit-btn-'+id).show();
    });
    $('.on-hover-action').mouseleave(function() {
        var id = this.id;
        $('#category-delete-btn-'+id).hide();
        $('#category-edit-btn-'+id).hide();
    });
</script>
