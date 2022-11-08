<?php if ($this->session->has_userdata('success')) { ?>
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <small><i class="icon fas fa-check"></i><?= $this->session->flashdata('success'); ?></small>
    </div>
<?php } else if ($this->session->has_userdata('warning')) { ?>
    <div class="alert alert-warning alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <small><i class="icon fas fa-triangle-exclamation"></i><?= $this->session->flashdata('warning'); ?></small>
    </div>
<?php } else if ($this->session->has_userdata('danger')) { ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <small><i class="icon fas fa-xmark"></i><?= $this->session->flashdata('danger'); ?></small>
    </div>
<?php } ?>