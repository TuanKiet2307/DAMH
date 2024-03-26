function Alert(message){
    $.confirm({
        title: '<i class="fas fa-rocket"></i> Thông báo!',
        content: message,
        type: 'purple',
        autoClose: 'cancelAction|5000',
        buttons: {
            cancelAction:{
                text:'Đóng',
                btnClass: 'btn-blue'
            }
        }
    });
}