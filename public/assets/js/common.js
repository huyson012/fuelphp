var dialogStask = new Array();
/**
 * @desc show dialog base config
 * @param {'id':id, 'html': html, ...}
 * @author hahuyson@luvina.net
 */
function openDialog(optionObj, eventConfigObj, userConfigObj,funcBeforeClose) {
    // Khởi tạo biến
    var newEventConfigObj;
    
    typeof eventConfigObj == 'object' ? null : eventConfigObj = {};
    typeof userConfigObj == 'object' ? null : userConfigObj = {};
    var defaultConfigObj = {
        // for config obj
        id: '',
        // Hủy overlay khi đóng, mặc định không làm gì
        destroyOnClose: false,
        // for jquery dialog option
        disabled:false,
        autoOpen:true,
        buttons:{ },
        closeOnEscape:true,
        closeText:'close',
        dialogClass:'',
        draggable:false,
        height:'auto',
        hide:null,
        maxHeight:false,
        maxWidth:false,
        minHeight:150,
        minWidth:150,
        modal:false,
        position:'center',
        resizable:true,
        show:null,
        stack:true,
        title:'',
        width:300,
        zIndex:1000,
        bgiframe: true
    };
    var obj = defaultConfigObj;
    for(var i in obj) {
        var svar = '';
        eval("typeof " + i + " == 'undefined' ? svar = 'var' : svar = '';");
        eval(svar + ' ' + i + '=obj[i];');
    } // extra attribute into variables
    obj = optionObj;
    for(var i in obj) {
        var svar = '';
        eval("typeof " + i + " == 'undefined' ? svar = 'var' : svar = '';");
        eval(svar + ' ' + i + '=obj[i];');
    } // extra attribute into variables
    id = getDialogId(id);
    selector = '#' + id;
    var finalConfigObj = {
        disabled:disabled,
        autoOpen:autoOpen,
        buttons:buttons,
        closeOnEscape:closeOnEscape,
        closeText:closeText,
        dialogClass:dialogClass,
        draggable:draggable,
        height:height,
        hide:hide,
        maxHeight:maxHeight,
        maxWidth:maxWidth,
        minHeight:minHeight,
        minWidth:minWidth,
        modal:modal,
        position:position,
        resizable:resizable,
        show:show,
        stack:stack,
        title:title,
        width:width,
        zIndex:zIndex,
        beforeClose : function(){
            // ngolv
            if (funcBeforeClose != undefined) {
                funcBeforeClose();
            }
            // end ngolv
            if (dialogStask != null && dialogStask.length > 0) {
                var nextDialog = "";                
                var checkOverlay = false;
                if (dialogStask.length > 1) {
                    dialogStask.pop();
                    nextDialog = dialogStask[dialogStask.length - 1];
                    checkOverlay = true;
                }                 
                if (nextDialog != undefined&& checkOverlay) {
                    var list_elms = $(nextDialog).find(':input').not('input:hidden');
                    if(list_elms){
                        $.each(list_elms,function(index,elm){
                            var id_elm = $(elm).attr('id');
                            var reg = new RegExp('date');
                            if(reg.test(id_elm)== false){
                                $(elm).focus();
                                return false;
                            }                            
                        });
                    }                                        
                }
            }
        },
        open: function() {            
            var list_elms = $(selector).find(':input').not('input:hidden');            
            if(list_elms){
                $.each(list_elms,function(index,elm){
                    var id_elm = $(elm).attr('id');
                    var reg = new RegExp('date');
                    if(reg.test(id_elm) == false){
                        $(elm).focus();
                        return false;
                    }
                });
            }
            
            
        }
    };
    
    if($(selector).length == 0) {
        $('body').append('<div id="' + id + '"></div>');
    }
    
    // Chỉ khi truyền tham số html thì mới thay thế nội dung
    // Ngược lại sử dụng cái đã có
    if(typeof html != 'undefined') {
        $(selector).html(html);
    }
    
    // Nếu hủy dialog khi đóng, thì bind thêm handler vào close event
    // Hủy dialog trước
    if(destroyOnClose == true ) { 
        
        // Xác nhận kiểu
        typeof eventConfigObj == 'object' && eventConfigObj != null ? null : eventConfigObj = {};
        typeof eventConfigObj.close == 'function' ? null : eventConfigObj.close = function() {};
        
        // Tạo event object không có close event handler
        newEventConfigObj = $.extend({}, eventConfigObj);
        // Loại bỏ event handler close
        newEventConfigObj.close = null;
        delete(newEventConfigObj.close);

        // Nhập event config
        finalConfigObj = $.extend({}, finalConfigObj, newEventConfigObj);
        
        // bind handler hủy dialog trước khi đóng
        $( selector ).bind( "dialogclose", function(event, ui) {
            
            // Thực hiện callback
            eventConfigObj.close(event, ui);

            // Hủy dialog
            $(selector).html('');
            $(selector).dialog("destroy");
        });
        
    } else {
        
        // Nhập event config
        finalConfigObj = $.extend({}, finalConfigObj, eventConfigObj);
        
    };
    
    // Truyền tham số
    $(selector).dialog(finalConfigObj);
    
    // Mở dialog
    $(selector).dialog("open");
    
    // push dialog id to stask
    dialogStask.push(selector);
    
    items = $(selector + " :input").first().focus();
}
function getDialogId(id) {
    return id = 'dialog-' + id;
}
/**
 * @desc close dialog base config
 * @param {'id':id, 'html': html, ...}
 * @author hahuyson@luvina.net
 */
function closeDialog(optionObj) {
    var defaultConfigObj = {
        // for config obj
        id: ''
    };
    var obj = defaultConfigObj;
    for(var i in obj) {
        var svar = '';
        eval("typeof " + i + " == 'undefined' ? svar = 'var' : svar = '';");
        eval(svar + ' ' + i + '=obj[i];');
    } // extra attribute into variables
    obj = optionObj;
    for(var i in obj) {
        var svar = '';
        eval("typeof " + i + " == 'undefined' ? svar = 'var' : svar = '';");
        eval(svar + ' ' + i + '=obj[i];');
    } // extra attribute into variables
    id = getDialogId(id);
    selector = '#' + id;
    $(selector).dialog("close");
}
/**
 * @desc close dialog base config
 * @param {'id':id, 'html': html, ...}
 * @author hahuyson@luvina.net
 */
function destroyDialog(optionObj) {
    var defaultConfigObj = {
        // for config obj
        id: ''
    };
    var obj = defaultConfigObj;
    for(var i in obj) {
        var svar = '';
        eval("typeof " + i + " == 'undefined' ? svar = 'var' : svar = '';");
        eval(svar + ' ' + i + '=obj[i];');
    } // extra attribute into variables
    obj = optionObj;
    for(var i in obj) {
        var svar = '';
        eval("typeof " + i + " == 'undefined' ? svar = 'var' : svar = '';");
        eval(svar + ' ' + i + '=obj[i];');
    } // extra attribute into variables
    id = getDialogId(id);
    selector = '#' + id;
    $(selector).dialog("destroy");
}

/**
 * @desc Kiểm tra dialog có đang mở hay không
 * @param {'id':id, 'html': html, ...}
 * @author hahuyson@luvina.net
 */
function isOpenDialog(optionObj) {
    var defaultConfigObj = {
        // for config obj
        id: ''
    };
    var obj = defaultConfigObj;
    for(var i in obj) {
        var svar = '';
        eval("typeof " + i + " == 'undefined' ? svar = 'var' : svar = '';");
        eval(svar + ' ' + i + '=obj[i];');
    } // extra attribute into variables
    obj = optionObj;
    for(var i in obj) {
        var svar = '';
        eval("typeof " + i + " == 'undefined' ? svar = 'var' : svar = '';");
        eval(svar + ' ' + i + '=obj[i];');
    } // extra attribute into variables
    id = getDialogId(id);
    selector = '#' + id;
    // Trong trường hợp chưa mở giá trị trả về có thể là true hoặc 1 đối tượng
    return $(selector).dialog("isOpen") === true;
}