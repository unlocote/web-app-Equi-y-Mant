<?php
include('templates/header.php');
?>

 <section class="showcase">
    <div class="container">
        <div class="row padall">
            <div class="col-lg-12" style="padding-bottom:10px; padding-top:10px;">
                <h3>TABLA INFORME CONSUMOS ANTERIORES</h3>               
            </div>
        </div>
            <div class="row padall border-bottom">
                <div class="col-lg-12">
                <div class="table-responsive-sm">
                    <table id="render-data" class="table display nowrap" style="width:100%">
                        <thead>
                            <tr>
                               <!-- <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Movil</th>
                                <th>Direccion</th>
                                <th>Salario</th> -->
                                <th>COD PRO</th>
                                <th>NOMBRE</th>
                                <th>MES1</th>
                                <th>MES2</th>
                                <th>MES3</th>
                                <th>MES4</th>
                                <th>MES5</th>
                                <th>MES6</th>
                                <th>PROM</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>COD PRO</th>
                                <th>NOMBRE</th>
                                <th>MES1</th>
                                <th>MES2</th>
                                <th>MES3</th>
                                <th>MES4</th>
                                <th>MES5</th>
                                <th>MES6</th>
                                <th>PROM</th>
                               
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