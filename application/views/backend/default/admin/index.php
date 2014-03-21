<div class="container_12">
    <div class="grid_12">
        <p><b><a href="<?=base_url()?>backend/admin/add" class="button" >+ Thêm người quản trị mới</a></b></p>
        <p>Danh sách tất cả các quản trị viên của <a href="http://datatables.net" target="_blank">CI-Master.vn</a>.</p>
    </div>

    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1>Danh sách quản trị website</h1><span></span>
            </div>
            <div class="block-content">
                <table id="table-example" class="table">
                    <thead>
                    <tr>
                        <th>Mã thành viên</th>
                        <th>Tên tài khoản</th>
                        <th>Họ tên</th>
                        <th>Địa chị email</th>
                        <th>Số điện thoại</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?if(isset($all_admin)):?>
                        <?foreach($all_admin as $key => $value):?>
                            <tr class="gradeX">
                                <td><?=$value->getAdmin_id()?></td>
                                <td><?=$value->getAccount()?></td>
                                <td><?=$value->getFull_name()?></td>
                                <td><?=$value->getEmail()?></td>
                                <td><?=$value->getPhone()?></td>
                                <td><a href="#" onclick="deleteAdmin(<?=$value->getAdmin_id()?>)">Xóa</a> | <a href="#">Sửa</a></td>
                            </tr>
                        <?endforeach;?>
                    <?endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $().ready(function() {
        /*
         * DataTables
         */
        $('#table-example').dataTable();

    });
</script>