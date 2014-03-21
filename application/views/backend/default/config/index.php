<?if(isset($config)) $option = json_decode($config->row()->option); $plus = 0;?>
<div class="container_12">
    <div class="grid_12">
        <div class="block-border">
            <div class="block-header">
                <h1>Config Website</h1><span></span>
            </div>
            <form id="validate-form" class="block-content form" action="<?=base_url()?>backend/config/save" method="post">
                <div class="_100">
                    <p><label for="textfield">Tên website :</label><input id="name" name="txtName" class="required" type="text"/></p>
                </div>

                <div class="_100">
                    <p>
                        <input type="text" id="browseimage" onclick="BrowseServer()" name="txtImgUrl"  data-provide="typeahead" data-items="4" value="<?=$img_url?>"/>
                        <script type="text/javascript">
                            function BrowseServer()
                            {
                                var finder = new CKFinder();
                                finder.BasePath = '<?=site_url()?>/ckfinder/';
                                finder.SelectFunction = SetFileField;
                                finder.Popup();
                            }
                            function SetFileField(fileUrl, data)
                            {
                                document.getElementById("browseimage").setAttribute("value", fileUrl);
                            }
                        </script>
                        <script type="text/javascript" src="<?=site_url() ?>/ckfinder/ckfinder_v1.js"></script>
                    </p>
                </div>

                <div class="_100">
                    <p><label for="textarea">About :</label></p>

                    <textarea type="text" id="about" data-val-required="" name="txtAbout"></textarea>
                    <script src="<?=base_url()?>resource/ckeditor/ckeditor.js"></script>
                    <script type="text/javascript">
                        CKEDITOR.replace('about');
                    </script>
                </div>

                <div class="_100">
                    <p><label for="textfield">Email quản trị :</label><input id="mail" name="txtMail" class="required" type="text" placeholder="vidu@email.com"/></p>
                </div>
                <div class="_100">
                    <p><label for="textfield">Mật khẩu email :</label><input id="passmail" name="txtPass" class="required" type="password" placeholder="*********"/></p>
                </div>

                <div class="_100">
                    <p><label for="textfield">Thêm tùy chọn <a href="#" class="button" onclick="AddOption()">+</a> :</label> </p>
                </div>

                <div class="both-option">

                    <?php if(isset($option))
                    {
                        foreach ($option as $key => $value) {
                            ?>
                            <div id = "option-<?=$key?>">
                                <div class="_45">
                                    <input id="key" name="txtOption[<?=$key?>][key]" type="text" value="<?= $value->key?>"/>
                                </div>

                                <div class="_45">
                                    <input id="val" name="txtOption[<?=$key?>][value]" type="text" value="<?= $value->value?>"/>
                                </div>

                                <a hreft="#" class="button red" onclick="RemoveOption(<?=$key?>)">Xóa</a>
                                <div class="clear"></div>
                            </div>
                        <?php }}?>
                </div>
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
                <script type="text/javascript">
                    var plus = 1;
                    function AddOption()
                    {
                        plus++;
                        $('.both-option').append('<div id= "option-'+plus+'">' +
                            '<div class="_45">' +
                            '<input id="key" name="txtOption['+plus+'][key]" type="text" placeholder="Key"/>' +
                            '</div>' +
                            '<div class="_45">' +
                            '<input id="val" name="txtOption['+plus+'][value]" type="text" placeholder="Value"/>' +
                            '</div><a hreft="#" class="button red" onclick="RemoveOption('+plus+')">Xóa</a>' +
                            '<div class="clear"></div></div>');
                    }

                    function RemoveOption(id)
                    {
                        console.log(id);
                        $('#option-'+id).remove();
                    }
                </script>

                <div class="_100">
                    <p><label for="textfield">Kết thúc</label></p>
                </div>



                <div class="clear"></div>
                <div class="block-actions">
                    <ul class="actions-left">
                        <li><a class="button red" id="reset-validate-form" href="javascript:void(0);">Xóa hết</a></li>
                    </ul>
                    <ul class="actions-right">
                        <li><input type="submit" class="button" style="font-weight: bold" value="Lưu lại"></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>

    <div class="clear height-fix"></div>

    <script type="text/javascript">
        $().ready(function() {

            /*
             * Form Validation
             */

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


</div>