$('#click').on('click',function(){
  
    Swal.fire({
  title: 'هل ترغب في اعطاء الصلاحية للمعيد؟',
  text: "تنبيه من اجرى اي تغيرات او تلاعب !",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#0c5a5a',
  cancelButtonColor: '#d33',
  confirmButtonText: 'موافق',
  cancelButtonText: 'الغاء',
}).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title:'تمت العملية بنجاح', 
          icon: 'success',
          confirmButtonColor: '#0c5a5a',
          confirmButtonText: 'موافق',
        })

      } 
  })
  })

function save(){

      Swal.fire({
        title:'تمت عملية التعديل بنجاح', 
        icon: 'success',
        confirmButtonColor: '#0c5a5a',
        confirmButtonText: 'موافق',
      })
}
function publish(){

    Swal.fire({
      title:'تمت عملية النشر بنجاح', 
      icon: 'success',
      confirmButtonColor: '#0c5a5a',
      confirmButtonText: 'موافق',
    })
}
function saved(){

    Swal.fire({
      title:'تمت عملية الحفظ بنجاح', 
      icon: 'success',
      confirmButtonColor: '#0c5a5a',
      confirmButtonText: 'موافق',
    })
}

function add(){

    Swal.fire({
      title:'تمت عملية الاضافة بنجاح', 
      icon: 'success',
      confirmButtonColor: '#0c5a5a',
      confirmButtonText: 'موافق',
    })
}