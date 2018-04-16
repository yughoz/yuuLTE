<section class="content-header" ui-view="header">
<h1>{{ title }}</h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
        <div class="col-md-12">
             <div class="box">
                <div class="box-header with-border">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Select Group</label>
                    <div class="col-sm-6">
                      <select id="selectRole" name="selectRole" class="form-control">
                        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($g->id); ?>"><?php echo e($g->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="box-body table-responsive">
                    <table class="table table-striped table-hover" id="tblRole">
                        <thead>
                            <tr>
                                <th>Module Name</th>
                                <th>Create</th>
                                <th>Read</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="box-footer with-border">
                  <?php if(checkAccess('roles','createAcc')): ?>
                  <h3 class="box-title col-md-4"><a class="btn btn-block btn-primary btn-flat"  data-toggle="modal" data-target="#assignRole"><i class="fa fa-plus"></i> Assign Role</a></h3>
                  <?php endif; ?>
                </div>
            </div>
         </div>
    </div>

<!-- Modal -->
<div id="assignRole" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Assign Role</h4>
      </div>
        <form class="form-horizontal" id="form-create_role" method="post" accept-charset="utf-8">
      <div class="modal-body">
            
            <?php echo csrf_field(); ?>

            
            <div class="form-group">
              <label class="col-sm-2 control-label">Select Group</label>
              <div class="col-sm-6">
                    <input type="text" readonly="readonly" name="groupNameSelect" value="" id="groupNameSelect" class="form-control"/>
              </div>
            </div>
            <div class="form-group">
                <label for="Modules" class="col-sm-2 control-label">Modules</label>
                <div class="col-sm-6">
                    <select id="selectRole" name="selectRole" class="form-control">
                        <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($g['module_code']); ?>"><?php echo e($g['text']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                </div>
            </div>

      </div>
      <div id="wraperStatus"></div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btnSave">Save</button>
      </div>
        </form>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="editRoleModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <form class="form-horizontal" id="form-edit_role" method="put" accept-charset="utf-8">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Role</h4>
      </div>
      <div class="modal-body">
            
            <?php echo csrf_field(); ?>

            
            <input type="hidden" name="editRole_id" value="" id="editRole_uID" class="form-control editRole"/>
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">name</label>
                <div class="col-sm-10">
                    <input type="text" name="editRole_name" value="" id="editRole_name" class="form-control editRole"/>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="editRole_email" value="" id="editRole_email" class="form-control editRole"/>
                </div>
            </div>
        </div>
      
      <div id="wraperStatus"></div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="btnEdit">Save</button>
      </div>
        </form>
    </div>

  </div>
</div>

<!-- Modal -->
<div id="deleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
            <p>Are you sure want to delete this role..?</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger" id="btnDelete">Delete</button>
      </div>
        </form>
    </div>

  </div>
</div>
</section>