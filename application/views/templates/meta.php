<?php $data = $this->Contents->where('slug', 'logo')->single(); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title><?php echo $data['title'].' - '.$title; ?></title>
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/datatables.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/AdminLTE.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/skins/skin-blue.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style.css">

<script src="<?php echo base_url('assets/'); ?>js/jquery.min.js"></script>