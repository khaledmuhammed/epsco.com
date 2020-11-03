// overwrite login links with modal
$(function(){
    $('a[href*="login.php"').click(function(e){
        if ($(this).attr("modal") != '0'){
            e.preventDefault();
            modal1('show')
            $.ajax({
                url: 'ajx/user.php',
                data: {action: "showForm-tabs", return: 0, active: "login"}, // serializes the form's elements.
                type: 'POST',
                success: function(result) {
                    $('#modal1 .modal-body').html(result)
                }
            });
        }
    });    
})

// overwrite register links with modal
$(function(){
    $('a[href*="register.php"').click(function(e){
        if ($(this).attr("modal") != '0'){
            e.preventDefault();
            modal1('show')
            $.ajax({
                url: 'ajx/user.php',
                data: {action: "showForm-tabs", return: 0, active: "register"}, // serializes the form's elements.
                type: 'POST',
                success: function(result) {
                    $('#modal1 .modal-body').html(result)
                }
            });
        }
    });    
})

// prevent form submit in forms using ajax submit
$(document).on('submit','form[prevent-default]',function(e){
  e.preventDefault();
});

// handleAction function
function handleAction(data){
    // console.log(data)
    loading('hide')
    try {
        data = JSON.parse(data)
        if(data.notification){
            if(data.notification.link){
                if (data.notification.target){
                    target = data.notification.target
                }else{
                    target = "_blank"
                }
                notify(data.notification.type, data.notification.msg, data.notification.link, target);
            }else{
                notify(data.notification.type, data.notification.msg);
            }
        }
        if(data.result){
            $('.modal').modal('hide');
            setTimeout(function () {
                $('#result-modal .modal-body').html(data.result)
                $('#result-modal').modal('show');
            }, 300);
        }
        
        if(data.modal){
            $('.modal').modal('hide');
            setTimeout(function () {
                if(data.modalLock){
                    $('#modal-lock .modal-body').html(data.modal)
                    modalLock('show');
                }else{
                    $('#modal1 .modal-body').html(data.modal)
                    $('#modal1').modal('show');
                }
            }, 300);
        }

        if(data.reload){
            setTimeout(function () {
                location.reload();
            }, 1000);
        }
        if(data.redirect){
            setTimeout(function () {
                document.location = data.redirect;
            }, 1000);
        }
    } catch(e) {
        notify('danger','An unknown error occured. Please reload and try again!');
    }
}
//check all using ajax
    function checkAll(obj,link,data){
        var arr = new Array();
        $('.'+obj).each(function() {
            if($(this).prop("checked")) {
                arr.push($(this).attr("value"));
            }
        });
        setTimeout(function () {
                $.ajax({
                    url: 'ajx/'+link,
                    type: 'POST',
                    data: {action:data.action,arr},
                    success: function(data) {
                        handleAction(data)
                    }
                });
            }, 500);
        }

// submit forms using ajax
function submitForm(obj,link) {
    var $this = $(obj);
    if ($this[0].checkValidity()) {
        loading('show')
        setTimeout(function () {
            $.ajax({
                url: 'ajx/'+link,
                data: new FormData(obj),
                type: 'POST',
                contentType: false,
                cache: false,
                processData:false,
                success: function(data) {
                    handleAction(data)
                    // send event to Google Analytics
                    action = $(obj).find("[name=action]").val();
                    // gtag('event', action);
                }
            });
        }, 500);
    }else{
        notify('danger','Please complete the required fields!');
    }
}


// link action

// link action
$(document).on('click','.action',function(e){
e.preventDefault();
var url = 'ajx/'+$(this).attr('url')
var data = $(this).attr('data');
data = JSON.parse(data)
//console.log(data)
loading('show')
setTimeout(function () {
  $.ajax({
    url: url,
    type: 'POST',
    data: data,
    success: function(data) {
        handleAction(data);
    }
  });
}, 500);
})



// next form in the same modal
function nextForm(obj,link) {
    var $this = $(obj);
    if ($this[0].checkValidity()) {
        modal1('hide')
        loading('show')
        setTimeout(function () {
            $.ajax({
                url: 'ajx/'+link,
                data: $this.serialize(), // serializes the form's elements.
                type: 'POST',
                success: function(data) {
                    loading('hide')
                    setTimeout(function () {
                        modal1('show')
                        $('#modal1 .modal-body').html(data)
                    }, 500);
                }
            });
        }, 500);
    }else{
        notify('danger','Please complete the required fields!');
    }
}

// loading modal
function loading(action){
    if (action=='show') {
        $('#loading-modal').modal({backdrop: 'static', keyboard: false});
    }
    if (action=='hide'){
        $('#loading-modal').modal('hide');
    }
}

// modal
function modal1(action){
    if (action=='show') {
        $('#modal1').modal('show');
    }
    if (action=='hide'){
        $('#modal1').modal('hide');
    }
}

// modal lock
function modalLock(action){
    if (action=='show') {
        $('#modal-lock').modal({backdrop: 'static', keyboard: false});
    }
    if (action=='hide'){
        $('#modal-lock').modal('hide');
    }
}

// notify alerts
function notify(type,msg,url='',target='_blank'){
    switch(type) {
      case 'danger':
        icon = 'fi-caution'
        break;
      case 'success':
        icon = 'fi-checkmark'
        break;
      case 'info':
        icon = 'fi-info'
        break;
      case 'warning':
        icon = 'fi-flag1'
        break;
      default:
        icon = ''
    }
    $.notify({
        // options
        icon: icon,
        url: url,
        target: target,
        message: msg 
    },{
        // settings
        type: type,
        z_index: 1050,
        mouse_over: 'pause',
        placement: {
            align: "center"
        }
    });
}

// show form
function formShow(link,data,no="") {
    $.ajax({
        url: 'ajx/'+link,
        type: 'POST',
        data:data,//{ id: pid, action: 'overform' },
        success: function (result) {
            $('.maindiv'+no).html(result);
            // $('form').on('keypress', function (e) {
            //     var keyCode = e.keyCode || e.which;
            //     if (keyCode === 13) {
            //         e.preventDefault();
            //         $('form .btn').click();
            //     }
            // });
        }
    });
}

function submitmodel(link,data) {
    if ($(data)[0].checkValidity()) {
        $.ajax({
            url: 'ajax/'+link,
            data: $(data).serialize(), // serializes the form's elements.
            type: 'POST',
            success: function(result) {
                $('#popup1').modal('hide');
                $('.resultpop').html(result);
                $('#result-popup').modal('show');
            }
        });
    }else{
        alert("Complete the form fields");
    }
}

function modalShow(link,data,no="") {
    $.ajax({
        url: 'ajx/'+link,
        type: 'POST',
        data:data,//{ id: pid, action: 'overform' },
        success: function (result) {
            $('.modal-body').html(result);
            $('#modal1').modal('show');
        }
    });
}
function modalShow(link,data,no="") {
    $.ajax({
        url: 'ajx/'+link,
        type: 'POST',
        data:data,//{ id: pid, action: 'overform' },
        success: function (result) {
            $('.modal-body').html(result);
            $('#modal1').modal('show');
        }
    });
}
function modalShow2(link,data) {
    $.ajax({
        url: 'ajax/'+link,
        type: 'POST',
        data:data,//{ id: pid, action: 'overform' },
        success: function (result) {
            $('.popup-result2').html(result);
            $('#popup2').modal('show');
            $('#popup1').modal('hide');
        }
    });
}
function morefields(link, data) {
    var cid = $("#trader").val();
    data['cid'] = cid;
    $.ajax({
        url: 'ajax/' + link,
        type: 'POST',
        data: data,
        success: function (result) {
            $("#tbody").append(result);
        }
    });
} 
function removefieds(x){
    $(x).closest('.remove').remove();
}
function showdisable() {
    window.location.href = '?datastatus=canceled';
}

function showenable() {
    window.location.href = window.location.origin + window.location.pathname;
}
$(document).on("change", ".element", function () {
    var pram = "?";
    var path = window.location.pathname;
    $(".element").each(function () {
        var valu = $(this).val();
        var name = $(this).attr("name");
        pram = pram + name + "=" + valu + "&";
    });
    document.location = path + pram;

});
$(document).on("hidden.bs.modal", ".modal", function () {
    $(".popup-result").children().remove();
});


// Show Modal
function showModal(link,data,lock=false) {
    loading('show')
    setTimeout(function () {
      $.ajax({
        url: 'ajx/'+link,
        type: 'POST',
        data: data,
        success: function(data) {
            //console.log(data)
            loading('hide')
            setTimeout(function () {
                if(lock){
                    $('#modal-lock .modal-body').html(data)
                    modalLock('show');
                }else{
                    $('#modal1 .modal-body').html(data)
                    $('#modal1').modal('show');
                }
            }, 500);
        }
      });
    }, 500);
}