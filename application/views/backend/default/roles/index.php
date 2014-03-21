<div class="container_12">

<div class="grid_12">
    <h1>Quản trị nhóm người dùng</h1>
    <p>Roles admin control panel !</p>
</div>

<div class="grid_6">
    <div class="block-border">
        <div class="block-header">
            <h1>Thêm mới nhóm người dùng</h1><span></span>
        </div>
        <form id="validate-form" class="block-content form" action="dashboard.html" method="post">
            <p class="inline-mini-label">
                <label for="title">Tên nhóm :</label>
                <p><input type="text" name="title" class="required"></p>
            </p>
            <p class="inline-mini-label">
                <label for="post">Mô tả :</label>
                <p><textarea id="post" name="post" class="required" rows="5" cols="40"></textarea></p>
            </p>
            </p>
            <div class="clear"></div>

            <!-- Buttons with actionbar  -->
            <div class="block-actions">
                <ul class="actions-left">
                    <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Cancel</a></li>
                </ul>
                <ul class="actions-right">
                    <li><a href="javascript:void(0)" class="button" value="Lưu lại" onclick="SaveRoles()">Lưu lại</a></li>
                    <script type="text/javascript">
                        function SaveRoles()
                        {
                            $('#validate-form').validate();
//                            $.ajax({
//                                url: 'roles/save',
//                                type: 'post',
//                                data: {
//
//                                },
//                                dataType: 'json',
//                                success: function (data) {
//                                    if(data.status)
//                                    {
//                                        console.log('okkkk');
//                                    }
//                                    else
//                                    {
//                                        console.log('noooo');
//                                    }
//                                }
//                            });
                        }
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
            <ul class="block-list with-icon">
                <li class="i-16-calendar">Lorem ipsum</li>
                <li class="i-16-application">Lorem ipsum</li>
                <li class="i-16-balloon">Lorem ipsum</li>
                <li class="i-16-chart">Lorem ipsum</li>
                <li class="i-16-drive">Lorem ipsum</li>
            </ul>
        </div>
        <div class="block-content dark-bg">
            <p>Visit the <a href="list_block.html">Block List</a> page to see the other types of block lists.</p>
        </div>
    </div>
</div>


<div class="clear height-fix"></div>

</div>