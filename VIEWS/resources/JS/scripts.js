$(document).ready(function() {
  openModal2(null, "freight");
  $("#products").selectpicker();
  event.preventDefault();
  var $lateral_menu_trigger = $("#cd-menu-trigger"),
    $content_wrapper = $(".cd-main-content"),
    $navigation = $("header");

  //open-close lateral menu clicking on the menu icon
  $lateral_menu_trigger.on("click", function(event) {
    event.preventDefault();

    $lateral_menu_trigger.toggleClass("is-clicked");
    $navigation.toggleClass("lateral-menu-is-open");
    $content_wrapper
      .toggleClass("lateral-menu-is-open")
      .one(
        "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
        function() {
          // firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
          $("body").toggleClass("overflow-hidden");
        }
      );
    $("#cd-lateral-nav").toggleClass("lateral-menu-is-open");

    //check if transitions are not supported - i.e. in IE9
    if ($("html").hasClass("no-csstransitions")) {
      $("body").toggleClass("overflow-hidden");
    }
  });

  //close lateral menu clicking outside the menu itself
  $content_wrapper.on("click", function(event) {
    if (!$(event.target).is("#cd-menu-trigger, #cd-menu-trigger span")) {
      $lateral_menu_trigger.removeClass("is-clicked");
      $navigation.removeClass("lateral-menu-is-open");
      $content_wrapper
        .removeClass("lateral-menu-is-open")
        .one(
          "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend",
          function() {
            $("body").removeClass("overflow-hidden");
          }
        );
      $("#cd-lateral-nav").removeClass("lateral-menu-is-open");
      //check if transitions are not supported
      if ($("html").hasClass("no-csstransitions")) {
        $("body").removeClass("overflow-hidden");
      }
    }
  });

  //open (or close) submenu items in the lateral menu. Close all the other open submenu items.
  $(".item-has-children")
    .children("a")
    .on("click", function(event) {
      event.preventDefault();
      $(this)
        .toggleClass("submenu-open")
        .next(".sub-menu")
        .slideToggle(200)
        .end()
        .parent(".item-has-children")
        .siblings(".item-has-children")
        .children("a")
        .removeClass("submenu-open")
        .next(".sub-menu")
        .slideUp(200);
    });

  ////********************/////
  $(document).ready(function() {
    // Obtengo la url actual
    let url = window.location.pathname;
    // Cortamos la primara diagonal "/"
    url = url.substr(1);
    // Cortamos la ultima diagonal "/"
    let url_limpia = url.substr(0, url.lastIndexOf("/"));
    // Creamos el arreglo con split
    let url_array = url_limpia.split("/");
    // console.log('array url: '+url_array.length);
    // Obtenemos el path de la posicion del arreglo
    let pathName;
    /* si el arreglo de la url es igual a 3
        entonces el path lo igualamos a la posicion 2 del arreglo
        [0,1,2]
    */

    if (url_array.length == 3) {
      pathName = url_array[2];
    } else {
      // de lo contrario si por defecto como ya se sabe
      // se utiliza la posicion 1 es decir [0,1]
      // [0]= admin_albardas
      // [1] = transporters
      // [2] = drivers
      pathName = url_array[1];
    }
    // console.log(pathName);

    switch (pathName) {
      case "control":
        $("table#tableReferrals")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Remisiones",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4, 5, 6]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Remisiones",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4, 5, 6]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
          .DataTable();
        break;
      case "personal":
        $("table#tableWorks")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Personal",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Personal",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
          .DataTable();
        break;
      case "products":
        $("table#tableProducts")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Productos",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4, 5, 6]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Productos",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4, 5, 6]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
          .DataTable();
        break;
      case "freights":
        $("table#tableFreights")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Fletes",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4, 5]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Fletes",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4, 5]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
          .DataTable();
        break;
      case "users":
        $("table#tableUsers")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Usuarios",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Usuarios",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
          .DataTable();
        break;
      case "costumers":
        $("table#tableCostumers")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Clientes",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Clientes",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
          .DataTable();
        break;
      case "transporters":
        $("table#tableTransporters")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Transportistas",
                exportOptions: {
                  columns: [0, 1, 2, 3]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Transportistas",
                exportOptions: {
                  columns: [0, 1, 2, 3]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
          .DataTable();
        break;

      case "drivers":
        $("table#tableTransporters")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Choferes",
                exportOptions: {
                  columns: [0, 1, 2, 3]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Choferes",
                exportOptions: {
                  columns: [0, 1, 2, 3]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
          .DataTable();
        break;
      case "box":
        $("table#tableTransportersBox")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Cajas",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Cajas",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
          .DataTable();
        break;
      case "trucks":
        $("table#tableTransportersTrucks")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Trailers",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Trailers",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
          .DataTable();
        break;
      case "address":
        $("table#tableCostumersAddress")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Direcciones de Clientes",
                exportOptions: {
                  columns: [0, 1, 2, 3]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Direcciones de Clientes",
                exportOptions: {
                  columns: [0, 1, 2, 3]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
        .DataTable();
      break; 
       case 'referrals': 
         $('table#tableProducts')
        .dataTable({
          aProcessing: true, //Activamos el procesamiento del datatables
          aServerSide: true, //Paginacion y filtrado realizados por el servidor
          dom:
            "<'row'<'text-center ' <''B>>>" +
            "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
            "<'row'<'col-lg-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>", 
          buttons: [
            // {
            //   extend: "excelHtml5",
            //   text:'<span class="icon-microsoftexcel"></span>',
            //   className: "btn btn-success btn-lg",
            //   title: "Reporte de Direcciones de Clientes",
            //   exportOptions: {
            //     columns: [0, 1, 2, 3]
            //   },
            //   titleAttr: "Excel"
            // },
            // {
            //   extend: "pdfHtml5",
            //   text:'<span class="icon-picture_as_pdf"></span>',
            //   className: "btn btn-danger btn-lg",
            //   title: "Reporte de Direcciones de Clientes",
            //   exportOptions: {
            //     columns: [0, 1, 2, 3]
            //   },
            //   titleAttr: "PDF"
            // }
          ],
          language: {
            url:
              "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
          }
        })
        .DataTable();
      break; 
       case 'edit': 
         $('table#tableProducts').dataTable({
          aProcessing: true, //Activamos el procesamiento del datatables
          aServerSide: true, //Paginacion y filtrado realizados por el servidor
          dom:
            "<'row'<'text-center ' <''B>>>" +
            "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
            "<'row'<'col-lg-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>", 
          buttons: [
            // {
            //   extend: "excelHtml5",
            //   text:'<span class="icon-microsoftexcel"></span>',
            //   className: "btn btn-success btn-lg",
            //   title: "Reporte de Direcciones de Clientes",
            //   exportOptions: {
            //     columns: [0, 1, 2, 3]
            //   },
            //   titleAttr: "Excel"
            // },
            // {
            //   extend: "pdfHtml5",
            //   text:'<span class="icon-picture_as_pdf"></span>',
            //   className: "btn btn-danger btn-lg",
            //   title: "Reporte de Direcciones de Clientes",
            //   exportOptions: {
            //     columns: [0, 1, 2, 3]
            //   },
            //   titleAttr: "PDF"
            // }
          ],
          language: {
            url:
              "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
          }
        })
        .DataTable();
      break; 

      // nuevos scripts de proveedores y categorias
      case "suppliers":
        $("table#tableProviders")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Proveedores",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4, 5, 6]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Proveedores",
                exportOptions: {
                  columns: [0, 1, 2, 3, 4, 5, 6]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
        .DataTable();
        $("table#tableCategory")
        .dataTable({
          aProcessing: true, //Activamos el procesamiento del datatables
          aServerSide: true, //Paginacion y filtrado realizados por el servidor
          dom:
            "<'row'<'text-center ' <''B>>>" +
            "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
            "<'row'<'col-lg-12'tr>>" +
            "<'row'<'col-sm-5'i><'col-sm-7'p>>",
          buttons: [
            {
              extend: "excelHtml5",
              text: '<span class="icon-microsoftexcel"></span>',
              className: "btn btn-success btn-lg",
              title: "Reporte de Categorias",
              exportOptions: {
                columns: [0, 1, 2]
              },
              titleAttr: "Excel"
            },
            {
              extend: "pdfHtml5",
              text: '<span class="icon-picture_as_pdf"></span>',
              className: "btn btn-danger btn-lg",
              title: "Reporte de Categorias",
              exportOptions: {
                columns: [0, 1, 2]
              },
              titleAttr: "PDF"
            }
          ],
          language: {
            url:
              "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
          }
        })
      .DataTable();
      break; 
      

      case "inventories":
        $("table#tableInventories")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Direcciones de Clientes",
                exportOptions: {
                  columns: [0, 1, 2]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Direcciones de Clientes",
                exportOptions: {
                  columns: [0, 1, 2]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
        .DataTable();
        break; 

        case "inventory":
        $("table#tableInventory")
          .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginacion y filtrado realizados por el servidor
            dom:
              "<'row'<'text-center ' <''B>>>" +
              "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
              "<'row'<'col-lg-12'tr>>" +
              "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            buttons: [
              {
                extend: "excelHtml5",
                text: '<span class="icon-microsoftexcel"></span>',
                className: "btn btn-success btn-lg",
                title: "Reporte de Direcciones de Clientes",
                exportOptions: {
                  columns: [0, 1, 2]
                },
                titleAttr: "Excel"
              },
              {
                extend: "pdfHtml5",
                text: '<span class="icon-picture_as_pdf"></span>',
                className: "btn btn-danger btn-lg",
                title: "Reporte de Direcciones de Clientes",
                exportOptions: {
                  columns: [0, 1, 2]
                },
                titleAttr: "PDF"
              }
            ],
            language: {
              url:
                "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
          })
        .DataTable();
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

  $("div.headC").click(function() {
    $(this)
      .siblings("div.mainC")
      .toggleClass("h0");
    $(this)
      .siblings("div.mainC")
      .toggleClass("hAuto");
  });
  function validateEntry(obj) {
    var val = $(obj).val();

    alert(val);
  }
});

$(function() {
  $.datepicker.regional["es"] = {
    closeText: "Cerrar",
    prevText: "< Ant",
    nextText: "Sig >",
    currentText: "Hoy",
    monthNames: [
      "Enero",
      "Febrero",
      "Marzo",
      "Abril",
      "Mayo",
      "Junio",
      "Julio",
      "Agosto",
      "Septiembre",
      "Octubre",
      "Noviembre",
      "Diciembre"
    ],
    monthNamesShort: [
      "Ene",
      "Feb",
      "Mar",
      "Abr",
      "May",
      "Jun",
      "Jul",
      "Ago",
      "Sep",
      "Oct",
      "Nov",
      "Dic"
    ],
    dayNames: [
      "Domingo",
      "Lunes",
      "Martes",
      "Miércoles",
      "Jueves",
      "Viernes",
      "Sábado"
    ],
    dayNamesShort: ["Dom", "Lun", "Mar", "Mié", "Juv", "Vie", "Sáb"],
    dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sá"]
  };
  $.datepicker.setDefaults($.datepicker.regional["es"]);
  var dateFormat = "mm/dd/yy",
    from = $("#startDate")
      .datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on("change", function() {
        to.datepicker("option", "minDate", getDate(this));
      }),
    to = $("#endDate")
      .datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on("change", function() {
        from.datepicker("option", "maxDate", getDate(this));
      });

  function getDate(element) {
    var date;
    try {
      date = $.datepicker.parseDate(dateFormat, element.value);
    } catch (error) {
      date = null;
    }

    return date;
  }
});

function openTab(obj, ntab) {
  //event.preventDefault();
  $("ul.tabs > li").removeClass("current");
  $(obj).addClass("current");

  $("ul.containerTabs > li").addClass("hidden");
  $("ul.containerTabs > li#" + ntab + "").removeClass("hidden");
}

function openModal(obj, name) {
  event.preventDefault();
  $(".bgBlack").fadeIn("fast");
  $("form#" + name).fadeIn("fast");
}

function openModal2(obj, name) {
  event.preventDefault();
  $("#bgBlack2").fadeIn("fast");
  $("form#" + name).fadeIn("fast");
}

function closeModal() {
  $(".bgBlack").fadeOut("fast");
  $(".modalContent").fadeOut("fast");
}

function closeModal2() {
  $(".bgBlack2").fadeOut("fast");
  $(".modal2").fadeOut("fast");
}

function selectPlace(obj) {
  var val = $(obj).val();
  if (val == 3) {
    $(obj)
      .siblings("input#price")
      .removeClass("hidden");
  } else {
    $(obj)
      .siblings("input#price")
      .addClass("hidden");
  }
}

function menuToggle(obj) {
  $("#cd-lateral-nav").toggleClass("menuHidden");
  $("div.mainContainer").toggleClass("containerExpanded");
  // body...
}

function quantity(obj) {
  var quantity = parseInt(
    $(obj)
      .parent("th")
      .siblings("th.quantity")
      .text()
  );
  var quantity2 = parseInt($(obj).val());

  if (quantity2 > quantity) {
    alert(
      "No se permiten cantidades mayores a las que hay disponibles en almacen"
    );
    $(obj).val("");
  } else {
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
  } else {
    $("label.correct").addClass("hidden");
    $("label.incorrect").removeClass("hidden");
    $("input#validate").attr("required", "required");
  }
  // body...
}

function status_permits(obj) {
  //0 - NO PERMIR
  //1 - PERMITIR
  var status = $(obj).val();

  if (status == 0) {
    $(obj)
      .parent("th")
      .siblings("th")
      .find("select.permits option:nth-child(3)")
      .attr({ selected: "selected" });
    //$(obj).parent("th").siblings("th").find("select.permits").attr({'disabled':'disabled'});
    // $("select.permits").find("option.denied")
  } else {
    $(obj)
      .parent("th")
      .siblings("th")
      .find("select.permits");

    $(obj)
      .parent("th")
      .siblings("th")
      .find("select.permits option:nth-child(1)")
      .attr("selected", "selected");
  }
}

function userMaster(obj) {
  if ($(obj).prop("checked")) {
    $("select option:nth-child(2)").attr({ selected: "selected" });
  } else {
    $("select option:nth-child(2)").removeAttr("selected");
  }
}
function validatePay(obj) {
  var valPending = $("span.pending").text();
  var pending = parseInt(valPending);
  var val1 = parseInt($(obj).val());
  if (val1 > pending) {
    alert("el monto no es valido");
    $(obj).val("");
  } else if (val1 <= 0) {
    alert("el monto no es valido");
    $(obj).val("");
  }
}

// -------------------------------- Seccion de Insumos -------------------------------------
// datatble de insumos
function showInsumos(){ 
  tablaInsumos=$('table#tbl_supplies').dataTable({
    "aProcessing": true,//Activamos el procesamiento del datatables
    "aServerSide": true,//Paginacion y filtrado realizados por el servidor
    dom: "<'row'<'text-center ' <''B>>>"+
        "<'row'<'col-sm-5'><'col-sm-7'p>>"+
         "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
         "<'row'<'col-lg-12'tr>>" +
         "<'row'<'col-sm-5'i><'col-sm-7'p>>",
    buttons: [
          {
            extend: "excelHtml5",
            text: '<span class="icon-microsoftexcel"></span>',
            className: "btn btn-success btn-lg",
            title: "Reporte de Insumos",
            exportOptions: {
            columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
            },
            titleAttr: 'Excel'
          },
          {
            extend: "pdfHtml5",
            text: '<span class="icon-picture_as_pdf"></span>',
            className: "btn btn-danger btn-lg",
            title: "Reporte de Insumo",
            exportOptions: {
              columns: [ 0, 1, 2, 3, 4, 5, 6, 7, 8 ]
            },
            titleAttr: 'PDF'
          }
        ],

        "ajax":
        {
          url:'/admin_albardas/controls/InsumoController.php?op=index',
          type: "get",
          dataType: "json",
          error: function(e){
            console.log(e.responseText);
          }
        },
      // "columns":[
      // 	{"data":"0"},
      // 	{"data":"1"},
      // 	{"data":"2"},
      // 	{"data":"3"},
      // 	{"data":"4"},
      // 	{"data":"5"},
      //   {"data":"6"}
      // ],
      "language": {
                  "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                },
    "bDestroy": true,
    "iDisplayLength": 25,//Paginacion
    "order": [[ 0, "asc" ]]//Ordenar (columna,orden)
  }).DataTable();
}
showInsumos();

// nuevo insumo
function newInsumo(form, e){
  e.preventDefault();
  datos = new FormData(form);
  $.ajax({
    type: "post",
    url: "/admin_albardas/controls/InsumoController.php?op=new",
    data: datos,
    dataType: "json",
    encode:true,
    contentType:false,
    processData:false,
    success: function (response) {
      if (response.exito) {
        swal({
          position: 'top-end',
          type: 'success',
          title: response.msg,
          showConfirmButton: false,
          timer: 1500
        })
        tablaInsumos.ajax.reload();
        $(form)[0].reset();
      }else{
        swal({
          position: 'top-end',
          type: 'error',
          title: response.msg,
          showConfirmButton: false,
          timer: 1500
        })
      }
    }
  });
}
// Editar insumo
function  abrirModal(id) {
  $.get("/admin_albardas/controls/InsumoController.php?op=edit", {id:id}, function (data) {
      data = JSON.parse(data);
      if (data.exito) {
        $("#id_insumo").val(id);
        $("#edit_clave").val("n-"+id);
        $("#edit_insumo").val(data.insumo);
        $("#edit_medida_id").val(data.unidad_compra);
        $('#edit_medida_id').selectpicker('refresh');        
        // $('#edit_medida_id').selectpicker('val', data.);
        $("#edit_precio").val(data.precio);
        $("#edit_divisa").val(data.divisa);
        $('#edit_divisa').selectpicker('refresh');

        $("#edit_grupo_id").val(data.unidad_compra);
        $('#edit_grupo_id').selectpicker('refresh');

        $("#edit_descripcion").val(data.descripcion);
        if (data.num_activos>1) {
          $("#edit_ingrediente").selectpicker('val', [data.ingredientes]);
          $('#edit_ingrediente').selectpicker('refresh');
        }else{
          console.log(data.ingredientes);
          
          $("#edit_ingrediente").selectpicker('val', data.ingredientes);
          $('#edit_ingrediente').selectpicker('refresh');
        }

        $("#edit_marca").val(data.marca);
        $("#edit_dh").val(data.dh);
        $("#edit_proveedor_id").val();
        $("#edit_factor").val(data.factor);
        $("#edit_medida_uso").val(data.medida_uso);
        $('#edit_medida_uso').selectpicker('refresh');

        $("#edit_supplie").modal("show");
      }else{
        swal({
          position: 'top-end',
          type: 'error',
          title: data.msg,
          showConfirmButton: false,
          timer: 1500
        })
      }
    }
  );
}

// Actualizar Insumo
function editInsumo(form, e){
  e.preventDefault();
  datos = new FormData(form);
  $.ajax({
    type: "post",
    url: "/admin_albardas/controls/InsumoController.php?op=update",
    data: datos,
    dataType: "json",
    encode:true,
    contentType:false,
    processData:false,
    success: function (response) {
      // console.log(response);
      if (response.exito) {
        swal({
          position: 'top-end',
          type: 'success',
          title: response.msg,
          showConfirmButton: false,
          timer: 1500
        })
        tablaInsumos.ajax.reload();
        // form[0].reset();
      }else{
        swal({
          position: 'top-end',
          type: 'error',
          title: response.msg,
          showConfirmButton: false,
          timer: 1500
        })
      }
    }
  });
}

// Son los datos que se cargan al inicio de la pagina de insumos
function datosDefault(){
  $.get("/admin_albardas/controls/InsumoController.php?op=sl_measurements",
    function (data) {
      $("#medida_id").html(data);
      $("#medida_id").selectpicker('refresh');
      $("#medida_uso").html(data);
      $("#medida_uso").selectpicker('refresh');

      $("#edit_medida_id").html(data);
      $("#edit_medida_id").selectpicker('refresh');
      $("#edit_medida_uso").html(data);
      $("#edit_medida_uso").selectpicker('refresh');
    }
  );

  $.get("/admin_albardas/controls/InsumoController.php?op=sl_categorias",
    function (data) {
      $("#grupo_id").html(data);
      $("#grupo_id").selectpicker('refresh');
      $("#edit_grupo_id").html(data);
      $("#edit_grupo_id").selectpicker('refresh');
    }
  );

  $.get("/admin_albardas/controls/InsumoController.php?op=sl_ingredientes",
    function (data) {
      $("#ingrediente").html(data);
      $("#ingrediente").selectpicker('refresh');
      $("#edit_ingrediente").html(data);
      $("#edit_ingrediente").selectpicker('refresh');
    }
  );
  $.get("/admin_albardas/controls/InsumoController.php?op=clave",
    function (data) {
      data = JSON.parse(data);
      if (data.exito) {
        $("#clave").attr('readonly','true');
        $("#clave").val(data.clave);
      }else{
        $("#clave").attr('readonly','true');
        $("#clave").val(data.clave);
      }
    }
  );
  
}
datosDefault();

$("#clave").on("blur", function(e){
  e.preventDefault();
  datosDefault();
})

function delInsumo(id){
  $.post("/admin_albardas/controls/InsumoController.php?op=delete", {id:id},
    function (data) {
      data = JSON.parse(data);
      if (data.exito) {
        swal({
          position: 'top-end',
          type: 'success',
          title: data.msg,
          showConfirmButton: false,
          timer: 1500
        })
        tablaInsumos.ajax.reload();
      }else{
        swal({
          position: 'top-end',
          type: 'error',
          title: data.msg,
          showConfirmButton: false,
          timer: 1500
        })
      }
    }
  );
}
