<html>
<head>
<?$this->load->block_view('global/head');?>
</head>
<body>
<div class="page">
    <div class="header">
        <div class="container">
            <?$this->load->block_view('global/header');?>
        </div>
    </div>
    <div class="content container">
        <?=$layout_content;?>
    </div>
    <div class="footer">
        <div class="container">
            <?$this->load->block_view('global/footer');?>
        </div>
    </div>
    <?$this->load->block_view('global/js');?>
</div>    
</body>
</html>