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
    <footer id="footer"><div class="container_12">
		<div class="grid_12">
    		<div class="footer-icon align-center"><a class="top" href="#top"></a></div>
		</div>
    </div></footer>