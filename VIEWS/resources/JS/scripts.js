$(document).ready(function() { 

  openModal2(null,'freight');
  $('#products').selectpicker();
	event.preventDefault();
  var $lateral_menu_trigger = $('#cd-menu-trigger'),
    $content_wrapper = $('.cd-main-content'),
    $navigation = $('header');

  //open-close lateral menu clicking on the menu icon
  $lateral_menu_trigger.on('click', function(event){
    event.preventDefault();
    
    $lateral_menu_trigger.toggleClass('is-clicked');
    $navigation.toggleClass('lateral-menu-is-open');
    $content_wrapper.toggleClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
      // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
      $('body').toggleClass('overflow-hidden');
    });
    $('#cd-lateral-nav').toggleClass('lateral-menu-is-open');
    
    //check if transitions are not supported - i.e. in IE9
    if($('html').hasClass('no-csstransitions')) {
      $('body').toggleClass('overflow-hidden');
    }
  });

  //close lateral menu clicking outside the menu itself
  $content_wrapper.on('click', function(event){
    if( !$(event.target).is('#cd-menu-trigger, #cd-menu-trigger span') ) {
      $lateral_menu_trigger.removeClass('is-clicked');
      $navigation.removeClass('lateral-menu-is-open');
      $content_wrapper.removeClass('lateral-menu-is-open').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        $('body').removeClass('overflow-hidden');
      });
      $('#cd-lateral-nav').removeClass('lateral-menu-is-open');
      //check if transitions are not supported
      if($('html').hasClass('no-csstransitions')) {
        $('body').removeClass('overflow-hidden');
      }

    }
  });

  //open (or close) submenu items in the lateral menu. Close all the other open submenu items.
  $('.item-has-children').children('a').on('click', function(event){
    event.preventDefault();
    $(this).toggleClass('submenu-open').next('.sub-menu').slideToggle(200).end().parent('.item-has-children').siblings('.item-has-children').children('a').removeClass('submenu-open').next('.sub-menu').slideUp(200);
  });



  ////********************/////
  $(document).ready(function() {
    // Obtengo la url actual
    let url = window.location.pathname;
    // Cortamos la primara diagonal "/"
    url = url.substr(1);
    // Cortamos la ultima diagonal "/"
    let url_limpia = url.substr(0,url.lastIndexOf('/'));
    // Creamos el arreglo con split
    let url_array= url_limpia.split('/');
    // console.log('array url: '+url_array[1]);
    // Obtenemos el path de la posicion del arreglo
    let pathName = url_array[1];
    console.log(pathName);
    
    switch (pathName) {
      case 'referrals':
          $('table#tableReferrals').dataTable(
          {
            "aProcessing": true,//Activamos el procesamiento del datatables
            "aServerSide": true,//Paginacion y filtrado realizados por el servidor
            dom: "<'row'<'text-center ' <''B>>>"+
                  "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                  "<'row'<'col-lg-12'tr>>" +
                  "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
                  {
                    extend: 'excelHtml5',
                    text: '<strong><i class="fas fa-file"></i> Excel</strong>',
                    className: 'btn btn-success',
                    title: "Reporte de Remisiones",
                    exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                    },
                    titleAttr: 'Excel'
                  },
                  {
                    extend: 'pdfHtml5',
                    text: '<strong><i class="fas fa-file-pdf-o"></i> PDF</strong>',
                    className: 'btn btn-danger',
                    title: "Reporte de Remisiones",
                    exportOptions: {
                      columns: [ 0, 1, 2, 3, 4]
                    },
                    titleAttr: 'PDF'
                  }
            ],
            "language": {
              "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
            
          }).DataTable();
      break;
      case 'personal':
          $('table#tableWorks').dataTable(
          {
            "aProcessing": true,//Activamos el procesamiento del datatables
            "aServerSide": true,//Paginacion y filtrado realizados por el servidor
            dom: "<'row'<'text-center ' <''B>>>"+
                  "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                  "<'row'<'col-lg-12'tr>>" +
                  "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
                  {
                    extend: 'excelHtml5',
                    text: '<strong><i class="fa fa-file-excel-o"></i> Excel</strong>',
                    className: 'btn btn-success',
                    title: "Reporte de Personal",
                    exportOptions: {
                    columns: [ 0, 1, 2, 3, 4]
                    },
                    titleAttr: 'Excel'
                  },
                  {
                    extend: 'pdfHtml5',
                    text: '<strong><i class="fa fa-file-pdf-o"></i> PDF</strong>',
                    className: 'btn btn-danger',
                    title: "Reporte de Personal",
                    exportOptions: {
                      columns: [ 0, 1, 2, 3, 4]
                    },
                    titleAttr: 'PDF'
                  }
            ],
            "language": {
              "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
            
          }).DataTable();
      break;
      case 'products':
          $('table#tableProducts').dataTable(
          {
            "aProcessing": true,//Activamos el procesamiento del datatables
            "aServerSide": true,//Paginacion y filtrado realizados por el servidor
            dom: "<'row'<'text-center ' <''B>>>"+
                  "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                  "<'row'<'col-lg-12'tr>>" +
                  "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
                  {
                    extend: 'excelHtml5',
                    text: '<strong><i class="fa fa-file-excel-o"></i> Excel</strong>',
                    className: 'btn btn-success',
                    title: "Reporte de Productos",
                    exportOptions: {
                    columns: [ 0, 1, 2, 3, 4, 5, 6]
                    },
                    titleAttr: 'Excel'
                  },
                  {
                    extend: 'pdfHtml5',
                    text: '<strong><i class="fa fa-file-pdf-o"></i> PDF</strong>',
                    className: 'btn btn-danger',
                    title: "Reporte de Productos",
                    exportOptions: {
                      columns: [ 0, 1, 2, 3, 4, 5, 6 ]
                    },
                    titleAttr: 'PDF'
                  }
            ],
            "language": {
              "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
            
          }).DataTable();
      break;
      
      case 'freights':
          $('table#tableFreights').dataTable(
            {
              "aProcessing": true,//Activamos el procesamiento del datatables
              "aServerSide": true,//Paginacion y filtrado realizados por el servidor
              dom: "<'row'<'text-center ' <''B>>>"+
                    "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                    "<'row'<'col-lg-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
              buttons: [
                    {
                      extend: 'excelHtml5',
                      text: '<strong><i class="fa fa-file-excel-o"></i> Excel</strong>',
                      className: 'btn btn-success',
                      title: "Reporte de Fletes",
                      exportOptions: {
                      columns: [ 0, 1, 2, 3, 4, 5]
                      },
                      titleAttr: 'Excel'
                    },
                    {
                      extend: 'pdfHtml5',
                      text: '<strong><i class="fa fa-file-pdf-o"></i> PDF</strong>',
                      className: 'btn btn-danger',
                      title: "Reporte de Fletes",
                      exportOptions: {
                        columns: [ 0, 1, 2, 3, 4, 5]
                      },
                      titleAttr: 'PDF'
                    }
              ],
              "language": {
                "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
              },
              
          }).DataTable();
      break;

      case 'users':
          $('table#tableUsers').dataTable(
            {
              "aProcessing": true,//Activamos el procesamiento del datatables
              "aServerSide": true,//Paginacion y filtrado realizados por el servidor
              dom: "<'row'<'text-center ' <''B>>>"+
                    "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                    "<'row'<'col-lg-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
              buttons: [
                    {
                      extend: 'excelHtml5',
                      text: '<strong><i class="fa fa-file-excel-o"></i> Excel</strong>',
                      className: 'btn btn-success',
                      title: "Reporte de Usuarios",
                      exportOptions: {
                      columns: [ 0, 1, 2, 3, 4]
                      },
                      titleAttr: 'Excel'
                    },
                    {
                      extend: 'pdfHtml5',
                      text: '<strong><i class="fa fa-file-pdf-o"></i> PDF</strong>',
                      className: 'btn btn-danger',
                      title: "Reporte de Usuarios",
                      exportOptions: {
                        columns: [ 0, 1, 2, 3, 4]
                      },
                      titleAttr: 'PDF'
                    }
              ],
              "language": {
                "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
              },
              
          }).DataTable();
      break;
      case 'costumers':
          $('table#tableCostumers').dataTable(
            {
              "aProcessing": true,//Activamos el procesamiento del datatables
              "aServerSide": true,//Paginacion y filtrado realizados por el servidor
              dom: "<'row'<'text-center ' <''B>>>"+
                    "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                    "<'row'<'col-lg-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
              buttons: [
                    {
                      extend: 'excelHtml5',
                      text: '<strong><i class="fa fa-file-excel-o"></i> Excel</strong>',
                      className: 'btn btn-success',
                      title: "Reporte de Clientes",
                      exportOptions: {
                      columns: [ 0, 1, 2, 3, 4]
                      },
                      titleAttr: 'Excel'
                    },
                    {
                      extend: 'pdfHtml5',
                      text: '<strong><i class="fa fa-file-pdf-o"></i> PDF</strong>',
                      className: 'btn btn-danger',
                      title: "Reporte de Clientes",
                      exportOptions: {
                        columns: [ 0, 1, 2, 3, 4]
                      },
                      titleAttr: 'PDF'
                    }
              ],
              "language": {
                "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
              },
              
          }).DataTable();
      break;

      case'transporters':
          $('table#tableTransporters').dataTable(
            {
              "aProcessing": true,//Activamos el procesamiento del datatables
              "aServerSide": true,//Paginacion y filtrado realizados por el servidor
              dom: "<'row'<'text-center ' <''B>>>"+
                    "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                    "<'row'<'col-lg-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
              buttons: [
                    {
                      extend: 'excelHtml5',
                      text: '<strong><i class="fa fa-file-excel-o"></i> Excel</strong>',
                      className: 'btn btn-success',
                      title: "Reporte de Transportistas",
                      exportOptions: {
                      columns: [ 0, 1, 2, 3 ]
                      },
                      titleAttr: 'Excel'
                    },
                    {
                      extend: 'pdfHtml5',
                      text: '<strong><i class="fa fa-file-pdf-o"></i> PDF</strong>',
                      className: 'btn btn-danger',
                      title: "Reporte de Transportistas",
                      exportOptions: {
                        columns: [ 0, 1, 2, 3 ]
                      },
                      titleAttr: 'PDF'
                    }
              ],
              "language": {
                "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
              },
              
          }).DataTable();
      break;

      // No se sabe cual es????
      // case 'supplies':
      //     $('table#tableSupplies').dataTable(
      //       {
      //         "aProcessing": true,//Activamos el procesamiento del datatables
      //         "aServerSide": true,//Paginacion y filtrado realizados por el servidor
      //         dom: "<'row'<'text-center ' <''B>>>"+
      //               "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
      //               "<'row'<'col-lg-12'tr>>" +
      //               "<'row'<'col-sm-5'i><'col-sm-7'p>>",
      //         buttons: [
      //               {
      //                 extend: 'excelHtml5',
      //                 text: '<strong><i class="fa fa-file-excel-o"></i> Excel</strong>',
      //                 className: 'btn btn-success',
      //                 title: "Reporte de Plantillas",
      //                 // exportOptions: {
      //                 // columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
      //                 // },
      //                 titleAttr: 'Excel'
      //               },
      //               {
      //                 extend: 'pdfHtml5',
      //                 text: '<strong><i class="fa fa-file-pdf-o"></i> PDF</strong>',
      //                 className: 'btn btn-danger',
      //                 title: "Reporte de Plantillas",
      //                 // exportOptions: {
      //                 //   columns: [ 0, 1, 2, 3, 4, 5, 6, 7 ]
      //                 // },
      //                 titleAttr: 'PDF'
      //               }
      //         ],
      //         "language": {
      //           "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
      //         },
              
      //     }).DataTable();
      // break;
    }
  });

	//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js
  // $('table#tableWorks').DataTable(
  // {
  //   "language": {
  //     "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
  //   }
  // });
  


  





   

  $("div.headC").click(function(){
    $(this).siblings("div.mainC").toggleClass("h0");
    $(this).siblings("div.mainC").toggleClass("hAuto");
  });
  function validateEntry(obj) {
  var val = $(obj).val();

  alert(val);
}
  

});



 


$( function() {
$.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '< Ant',
 nextText: 'Sig >',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá']
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
    var dateFormat = "mm/dd/yy",
      from = $( "#startDate" )
        .datepicker({
          defaultDate: "+1w",
          changeMonth: true,
          numberOfMonths: 1
        })
        .on( "change", function() {
          to.datepicker( "option", "minDate", getDate( this ) );
        }),
      to = $( "#endDate" ).datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        from.datepicker( "option", "maxDate", getDate( this ) );
      });
 
    function getDate( element ) {
      var date;
      try {
        date = $.datepicker.parseDate( dateFormat, element.value );
      } catch( error ) {
        date = null;
      }
 
      return date;
    }
  } );





function openTab(obj,ntab) {
	//event.preventDefault();
	$("ul.tabs > li").removeClass('current');
	$(obj).addClass('current');

	$("ul.containerTabs > li").addClass("hidden");
	$("ul.containerTabs > li#"+ntab+"").removeClass("hidden");


}

function openModal(obj,name){
  event.preventDefault();   
	$(".bgBlack").fadeIn("fast");
	$("form#"+name).fadeIn("fast");
}

function openModal2(obj,name){
  event.preventDefault();   
  $("#bgBlack2").fadeIn("fast");
  $("form#"+name).fadeIn("fast");
}

function closeModal(){
	$(".bgBlack").fadeOut("fast");
	$(".modalContent").fadeOut("fast");
}

function closeModal2(){
  $(".bgBlack2").fadeOut("fast");
  $(".modal2").fadeOut("fast");
}

function selectPlace(obj){
  var val = $(obj).val();
  if ( val == 3 ) {
    $(obj).siblings("input#price").removeClass("hidden");
  }else{
    $(obj).siblings("input#price").addClass("hidden");
  }
}

function menuToggle(obj) {
  $("#cd-lateral-nav").toggleClass("menuHidden");
  $("div.mainContainer").toggleClass("containerExpanded");
  // body...
}


function quantity(obj) {
  var quantity = parseInt($(obj).parent("th").siblings("th.quantity").text());
  var quantity2 = parseInt( $(obj).val());
  

  if (quantity2 > quantity) {
    alert("No se permiten cantidades mayores a las que hay disponibles en almacen");
    $(obj).val('');
  }else{
    return false;
  }
}


function validatePass(obj) {

  var pass = $("input#password").val();

  var pass2 = $(obj).val();

  if (pass == pass2) {
    $("label.correct").removeClass("hidden");
    $("label.incorrect").addClass("hidden");
    $("input#validate").removeAttr("required");
  }else{
    $("label.correct").addClass("hidden");
    $("label.incorrect").removeClass("hidden");
    $( "input#validate" ).attr("required", "required");
  }
  // body...
}

function status_permits(obj){
  //0 - NO PERMIR
  //1 - PERMITIR
  var status = $(obj).val();

  if (status == 0) {
 
    $(obj).parent("th").siblings("th").find("select.permits option:nth-child(3)").attr({'selected':'selected'});
    //$(obj).parent("th").siblings("th").find("select.permits").attr({'disabled':'disabled'});
   // $("select.permits").find("option.denied")
  }else{
    $(obj).parent("th").siblings("th").find("select.permits")

     $(obj).parent("th").siblings("th").find("select.permits option:nth-child(1)").attr("selected", "selected");

  }
}

function userMaster(obj){
  if( $(obj).prop('checked') ) {
    $("select option:nth-child(2)").attr({'selected':'selected'});
  }else{
    $("select option:nth-child(2)").removeAttr('selected');
  }
}
function validatePay(obj){
  var valPending = $("span.pending").text();
  var pending = parseInt(valPending); 
  var val1 = parseInt($(obj).val());
  if (val1 > pending) {
    alert("el monto no es valido");
    $(obj).val('');
  }else if (val1 <= 0){
    alert("el monto no es valido");
    $(obj).val('');
  }

}