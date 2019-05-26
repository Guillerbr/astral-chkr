                                <div class="modal fade" id="rangoModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header text-center">
                                                <h4 class="modal-title">RANGOS</h4>
                                                <small>Descripción de RANGOS.</small>
                                            </div>
                                            <div class="modal-body">
                                                <h6 class="m-t-none">Los rangos cumplen la función de obtener acceso a secciones <b>PRIVADAS</b> como támbien obtener packs de creditos y cambios en su perfil que otros rangos no pueden tener.<br />
                                                    <br />
                                                    <span class="text-info">Los rangos se dividen en 4:</span></h6>
                                                <p></p>
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <h4 class="stat-label">ADMINISTRADOR</h4>
                                                        <small class="m-t-xs">Los administradores tienen acceso completo al sistema.<i class="fa fa-level-up text-accent"></i></small>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h4 class="stat-label">VIP USER</h4>
                                                        <small class="m-t-xs">Acceso a Panel VIP donde obtendra támbien packs de creditos especiales y recursos privados.<i class="fa fa-level-down c-white"></i></small>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h4 class="stat-label">FREE USER</h4>
                                                        <small class="m-t-xs">Acceso limitado donde podran acceder a herramientas y gates publicos (estos no tienen soporte) <i class="fa fa-level-up text-accent"></i></small>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <h4 class="stat-label"><s>BANNED</s></h4>
                                                        <small class="m-t-xs">Acceso Restringido, podran ingresar al sistema pero tendran todo BLOQUEADO. <i class="fa fa-level-up text-accent"></i></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

<!-- Vendor scripts -->
<script src="../vendor/pacejs/pace.min.js"></script>
<script src="../vendor/jquery/dist/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../vendor/toastr/toastr.min.js"></script>
<script src="../vendor/sparkline/index.js"></script>
<script src="../vendor/flot/jquery.flot.min.js"></script>
<script src="../vendor/flot/jquery.flot.resize.min.js"></script>
<script src="../vendor/flot/jquery.flot.spline.js"></script>

<!-- App scripts -->
<script src="../scripts/luna.js"></script>

<script>
    $(document).ready(function () {


        // Sparkline charts
        var sparklineCharts = function () {
            $(".sparkline").sparkline([20, 34, 43, 43, 35, 44, 32, 44, 52, 45], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#43454D',
                height: 47,
                width: '100%'
            });

            $(".sparkline7").sparkline([10, 34, 13, 33, 35, 24, 32, 24, 52, 35], {
                type: 'line',
                lineColor: '#FFFFFF',
                lineWidth: 3,
                fillColor: '#f7af3e',
                height: 75,
                width: '100%'
            });

            $(".sparkline1").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5, 1, 6, 7, 15, 6, 4, 0], {
                type: 'line',
                lineColor: '#2978BB',
                lineWidth: 3,
                fillColor: '#2978BB',
                height: 170,
                width: '100%'
            });

            $(".sparkline3").sparkline([-8, 2, 4, 3, 5, 4, 3, 5, 5, 6, 3, 9, 7, 3, 5, 6, 9, 5, 6, 7, 2, 3, 9, 6, 6, 7, 8, 10, 15, 16, 17, 15], {

                type: 'line',
                lineColor: '#fff',
                lineWidth: 3,
                fillColor: '#43454D',
                height: 60,
                width: '100%'
            });

            $(".sparkline5").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5], {
                type: 'line',
                lineColor: '#f7af3e',
                lineWidth: 2,
                fillColor: '#2F323B',
                height: 20,
                width: '100%'
            });
            $(".sparkline6").sparkline([0, 1, 4, 2, 2, 4, 1, 4, 3, 2, 3, 4, 4, 2, 4, 2, 1, 3], {
                type: 'bar',
                barColor: '#f7af3e',
                height: 20,
                width: '100%'
            });

            $(".sparkline8").sparkline([4, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline9").sparkline([3, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline10").sparkline([4, 1], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline11").sparkline([1, 3], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline12").sparkline([3, 5], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
            $(".sparkline13").sparkline([6, 2], {
                type: 'pie',
                sliceColors: ['#f7af3e', '#404652']
            });
        };

        var sparkResize;

        // Resize sparkline charts on window resize
        $(window).resize(function () {
            clearTimeout(sparkResize);
            sparkResize = setTimeout(sparklineCharts, 100);
        });

        // Run sparkline
        sparklineCharts();


        // Flot charts data and options
        var data1 = [[0, 16], [1, 24], [2, 11], [3, 7], [4, 10], [5, 15], [6, 24], [7, 30]];
        var data2 = [[0, 26], [1, 44], [2, 31], [3, 27], [4, 36], [5, 46], [6, 56], [7, 66]];

        var chartUsersOptions = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 1

                }

            },
            grid: {
                tickColor: "#404652",
                borderWidth: 0,
                borderColor: '#404652',
                color: '#404652'
            },
            colors: ["#f7af3e", "#DE9536"]
        };

        $.plot($("#flot-line-chart"), [data2, data1], chartUsersOptions);


        // Run toastr notification with Welcome message
        setTimeout(function () {
            toastr.options = {
                "positionClass": "toast-top-right",
                "closeButton": true,
                "progressBar": true,
                "showEasing": "swing",
                "timeOut": "4000"
            };
            toastr.warning("<strong>test</strong>");
        }, 1600)


    });
</script>
<!-- SISTEMA SACADO DE UNC3NS0R3D V2.0 CREADO POR JKDEV & SKARYSEC -->
  </body>
</html>
<?php ob_end_flush(); ?>