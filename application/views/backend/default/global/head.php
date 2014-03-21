<meta charset="utf-8">
<!-- DNS prefetch -->
<link rel=dns-prefetch href="//fonts.googleapis.com">
<!-- Use the .htaccess and remove these lines to avoid edge case issues.
     More info: h5bp.com/b/378 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?if(isset($title)) echo $title;?></title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" content="width=device-width,initial-scale=1">
<?$this->load->block_view('global/css')?>
<?$this->load->block_view('global/js')?>
<script type="text/javascript">
    $().ready(function() {
        var v = $("#create-user-form").validate();
        jQuery("#reset").click(function() { v.resetForm(); $.jGrowl("User was not created!", { theme: 'error' }); });

        var v2 = $("#write-message-form").validate();
        jQuery("#reset2").click(function() { v2.resetForm(); $.jGrowl("Message was not sent.", { theme: 'error' }); });

        var v3 = $("#create-folder-form").validate();
        jQuery("#reset3").click(function() { v3.resetForm(); $.jGrowl("Folder was not created!", { theme: 'error' }); });

        var validateform = $("#validate-form").validate();
        $("#reset-validate-form").click(function() {
            validateform.resetForm();
            $.jGrowl("Bạn đã xóa trắng tất cả các field.", { theme: 'error' });
        });
    });
</script>
