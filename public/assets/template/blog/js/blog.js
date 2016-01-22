/* @desc: Check click function
 * @var: click (default: 1, clicked: 0)
 * @auth: sonhh
 * @since: 2012/12/13
 */
var CheckClick = {
    click : 1  
};
var BlogController = {
    addPost : function() {
          
        // add params
        var post = {};        
        var cbArguments = [];     
        var urlAjax = ROOT_URL+"";         
        //////////////////////
        var optionsForm = {
            type: 'POST',
            url: urlAjax,
            data: post,
//            timeout: TIME_OUT_INIT,
            success: function( data, textStatus, jqXHR) {
                    // callback
                    BlogController.cbAddPost(data,cbArguments);
            },
            error: function (x, t, m) {                                   
                }
        };          
        $("#form_add_blog").ajaxForm(optionsForm);
        $("#form_add_blog").submit();
    },
    
    /**
    * @desc : Function callback add blog
    * @author : SonHH
    * @since : 2012/08/23
    */
    cbAddPost: function (data, args) {
        try {            
        } catch (e) {            
            return false;
        }
    },
     /**
     * @desc : delete issue
     * 
     * @author : sonhh@vnext.vn
     * @since  : 2012/12/19
     */    
    deleteBlog : function(id) {
        
        if (CheckClick.click == 0) return;
        CheckClick.click = 0;
        
            if (confirm('bạn có thực sự muốn xóa dữ liệu không?')) {
                var url = ROOT_URL+"blog/delete/"+id;
                
                $.ajax({
                    type: "post",
                    url: url,
//                    timeout: TIME_OUT_INIT,
                    data: {},
                    dataType: 'json',
                    success: function(data, textStatus, jqXHR) {
                        alert(data.messages);
//                        var redirectUrl = IssueController.URL_ISSUE_CONTROLLER + 'viewdetail/?issueCode=' + obj.changeIssue;
                        window.location.href = ROOT_URL+"blog";
                        CheckClick.click = 1;
                    },
                    error: function() {
                        alert("lỗi hệ thống,xin bạn hãy đọc lại file log");
                    }
                });
            } else {
                CheckClick.click = 1;
            }
        },
        showOverlay : function() {
        var url = ROOT_URL+"blog/entry/showoverlay";
        $.ajax({
            type: "post",
            url: url,
            dataType: 'json',
            success: function(data) {
                // Hiển thị overlay
                var configObj = {
                    modal: true,
                    autoOpen: false,
                    draggable: true,                    
                    closeOnEscape: true,
                    height: "auto",
                    width: "400",
                    resizable: false,
                    id: "overlay",
                    title: data.title,
                    html: data.html,
                     buttons: {
                        Ok: function() {
                          $( this ).dialog( "close" );
                        }
                      }
                };
                openDialog(configObj,null,null);               
            }
        });
    }
};