/**
 * Created by Vietlt on 3/21/14.
 */
function ShowMessage()
{
    this.alertSuccess = function(msg)
    {
        LoadAlertBox(msg,'success');
    }

    this.alertError = function(msg)
    {
        LoadAlertBox(msg,'error');
    }

    this.alertInfo = function(msg)
    {
        LoadAlertBox(msg,'info');
    }

    this.alertWarning = function(msg)
    {
        LoadAlertBox(msg,'warning');
    }
}

function LoadAlertBox(msg,type)
{

    if(type.length != 0 && type == 'success') var mType = type;
    if(type.length != 0 && type == 'error') var mType = type;
    if(type.length != 0 && type == 'info') var mType = type;
    if(type.length != 0 && type == 'warning') var mType = type;
    $('#show-message:first').append('<div class="alert '+mType+'"><span class="hide">x</span><strong>Success ,</strong>'+msg+'</div>');
        $('span.hide').click(function() {
        $(this).parent().slideUp();                    
    }); 
}

var showAlert = new ShowMessage();
