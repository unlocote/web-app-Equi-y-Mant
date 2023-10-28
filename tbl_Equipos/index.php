<?php
include('templates/header.php');

//require 'config/validate_session.php';
//require 'config/validate_roles.php';


?>
<head>
        <style type="text/css">
            
            #div1 {
                overflow:scroll;
                height:200px;
                width:500px;
            }
            #div1 table {
                width:500px;
                background-color:lightgray;
            }
            
            
            table {
                display: block;
                overflow-x: auto;
            }

            .static {
                position: fixed;
                background: #fff;
            }

            .first-col {
                padding-left: 74.5px!important;
            } 
        </style>
</head>            


 <section class="showcase">
    <div class="container">
        <div class="row padall">
            <div class="col-lg-12" style="padding-bottom:10px; padding-top:10px;">
                <h3>INFORME USUARIOS</h3>               
            </div>
        </div>

        <div class="btn pull-center">
                    <a href="../ASC_FAC.php" class="btn btn-info" style="color: green;">VOLVER</a>
                    
                </div>
            <div class="row padall border-bottom">
                <div class="col-lg-12">
                <div class="table-responsive-sm">
                    <table id="render-data" class="table display nowrap" style="width:100%">
                        <thead>
                            <tr>

                                <th>Id</th>
                                <th>Propiedad_activos</th>
                                <th>Mes</th><!-- <th class="static" >Mes</th> -->
                                <th>Mes_PA</th>
                                <th>CodFSSRI_SubEle</th>
                                <th>MesReporte_SubEle</th>
                                <th>AnoReporte_SubEle</th>
                                <th>MesConsumo_SubEle</th>
                                <th>AnoConsumo_SubEle</th>
                                <th>SectUsu_SubEle</th>
                                <th>DiasFactura_SubEle</th>
                                <th>CS_SubEle</th>
                                <th>RangoConsumo_SubEle</th>
                                <th>Consumo_SubEle</th>
                                <th>NumUsuarios_SubEle</th>
                                <th>TipoUsuario_SubEle</th>
                                <th>CU_SubEle</th>
                                <th>TarifaAplicada_SubEle</th>
                                <th>Factor_SubEle</th>
                                <th>Facturacion_SubEle</th>
                                <th>Subsidio_SubEle</th>
                                <th>Ajuste_SubEle</th>
                                <th>CodFSSRIIncumbente_SubEle</th>
                                <th>TipNTPA</th>
                                <th>Observacione</th>

                                                              
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        <tfoot>
                            <tr> 
                           
                                <th>Id</th>
                                <th>Propiedad_activos</th>
                                <th>Mes</th><!-- <th class="static" >Mes</th> -->
                                <th>Mes_PA</th>
                                <th>CodFSSRI_SubEle</th>
                                <th>MesReporte_SubEle</th>
                                <th>AnoReporte_SubEle</th>
                                <th>MesConsumo_SubEle</th>
                                <th>AnoConsumo_SubEle</th>
                                <th>SectUsu_SubEle</th>
                                <th>DiasFactura_SubEle</th>
                                <th>CS_SubEle</th>
                                <th>RangoConsumo_SubEle</th>
                                <th>Consumo_SubEle</th>
                                <th>NumUsuarios_SubEle</th>
                                <th>TipoUsuario_SubEle</th>
                                <th>CU_SubEle</th>
                                <th>TarifaAplicada_SubEle</th>
                                <th>Factor_SubEle</th>
                                <th>Facturacion_SubEle</th>
                                <th>Subsidio_SubEle</th>
                                <th>Ajuste_SubEle</th>
                                <th>CodFSSRIIncumbente_SubEle</th>
                                <th>TipNTPA</th>
                                <th>Observacione</th>   

                            </tr>
                        </tfoot>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include('templates/footer.php');
?>