<div class="container_12">

<div class="grid_12">
    <h1>Quản trị nhóm người dùng</h1>
    <p>Roles admin control panel !</p>
</div>
<div class="grid_12" id="show-message">
    <div class="alert warning no-margin"><span id="test" class="hide">x</span><strong>Warning</strong> Lorem ipsum dolor sit amet.</div>
</div>

<div class="grid_6">
    <div class="block-border">
        <div class="block-header">
            <h1>Thêm mới nhóm người dùng</h1><span></span>
        </div>
        <form id="addrole-form" class="block-content form" action="dashboard.html" method="post">
            <p class="inline-mini-label">
                <label for="title">Tên nhóm :</label>
                <p><input type="text" id="rolename" name="rolename" class="required"></p>
            </p>
            <p class="inline-mini-label">
                <label for="post">Mô tả :</label>
                <p><textarea type="text" id="roledesc" name="roledesc" class="required" rows="4"></textarea></p>
            </p>
            </p>
            <div class="clear"></div>

            <!-- Buttons with actionbar  -->
            <div class="block-actions">
                <ul class="actions-left">
                    <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Cancel</a></li>
                </ul>
                <ul class="actions-right">
                    <li><a href="javascript:void(0)" class="button" id="saverole" value="Lưu lại" onclick="SaveRoles()">Lưu lại</a></li>
                    <script type="text/javascript">

                        function SaveRoles()
                        {
                            if($("#addrole-form").valid())
                            {
                                $.ajax({
                                    url: '<?=base_url()?>backend/roles/save',
                                    type: 'post',
                                    data: $("#addrole-form").serialize(),
                                    dataType: 'json',
                                    success: function (data) {
                                        if(data.status)
                                        {
                                            new ShowMessage().alertSuccess('123');

                                            $('#list-roles').append('<li class="i-16-user-red"><a href="javascript:void(0);" rel="tooltip-top" original-title="'+$('#roledesc').val()+'">'+$('#rolename').val()+'</a></li>');
                                        }
                                        else
                                        {
                                            console.log('noooo');
                                        }
                                    }
                                });
                            }
                        }

                        $( document ).ajaxComplete(function() {

                        });
                    </script>
                </ul>
            </div> <!--! end of #block-actions -->
        </form>
    </div>
</div>

<div class="grid_6">
    <div class="block-border">
        <div class="block-header">
            <h1>Danh sách nhóm người dùng</h1><span></span>
        </div>
        <div class="block-content">
            <ul id="list-roles" class="block-list with-icon">
                <?foreach($all_roles as $key => $value):?>
                <li class="i-16-user-red"><a href="javascript:void(0);" rel="tooltip-top" original-title="<?=$value->getRole_description()?>"><?=$value->getRole_name()?></a></li>
                <?endforeach;?>
            </ul>
        </div>
        <div class="block-content dark-bg">
            <p>Visit the <a href="list_block.html">Block List</a> page to see the other types of block lists.</p>
        </div>
    </div>
</div>

<div class="clear height-fix"></div>
</div>



<script type="text/javascript">
    $().ready(function() {

        /*
         * Form Validation
         */
        $.validator.setDefaults({
            submitHandler: function(e) {
                $.jGrowl("Form was successfully submitted.", { theme: 'success' });
                $(e).parent().parent().fadeOut();
                v.resetForm();
                v2.resetForm();
                v3.resetForm();
            }
        });
        var v = $("#create-user-form").validate();
        jQuery("#reset").click(function() { v.resetForm(); $.jGrowl("User was not created!", { theme: 'error' }); });

        var v2 = $("#write-message-form").validate();
        jQuery("#reset2").click(function() { v2.resetForm(); $.jGrowl("Message was not sent.", { theme: 'error' }); });

        var v3 = $("#create-folder-form").validate();
        jQuery("#reset3").click(function() { v3.resetForm(); $.jGrowl("Folder was not created!", { theme: 'error' }); });

        /*
         * Datepicker
         */
        $( "#datepicker" ).datepicker();

        /*
         * DataTables
         */
        $('#table-example').dataTable();

        /*
         * Charts
         */
        $('#graph-data').visualize({type: 'line', height: 250}).appendTo('#tab-line').trigger('visualizeRefresh');
        $('#graph-data').visualize({type: 'area', height: 250}).appendTo('#tab-area').trigger('visualizeRefresh');
        $('#graph-data').visualize({type: 'pie', height: 250}).appendTo('#tab-pie').trigger('visualizeRefresh');
        $('#graph-data').visualize({type: 'bar', height: 250}).appendTo('#tab-bar').trigger('visualizeRefresh');

        /*
         * Tabs
         */
        $("#specify-a-unique-tab-name").createTabs();
        $("#tab-graph").createTabs();

        /*
         * Contact List
         */
        $('#slider').sliderNav();

    });
</script>