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
                            <tr>  <!--
                            <th>factura</th>
                            <th>nombre</th>
                            <th>codigo</th>
                            <th>nit</th>                            
                            <th>direccion</th>                          
                            <th>municipio</th>
                            <th>medidor</th>
                            <th>numero</th>
                            <th>constante</th>
                            <th>periodo_fac</th>
                            <th>fecha_exp</th>
                            <th>fecha_ven</th>
                            <th>fecha_lim</th>
                            <th>nivel_tension</th>                          
                            <th>tarifa</th>
                            <th>G</th>
                            <th>D</th>
                            <th>Cv</th>
                            <th>PR</th>                         
                            <th>CU</th>
                            <th>lectant</th>
                            <th>lectact</th>
                            <th>consumo_act</th>
                            <th>cod_100</th>
                            <th>des_100</th>
                            <th>tot_act</th>

                            <th>consumo_react</th>
                            <th>cod_101</th>
                            <th>des_101</th>
                            <th>tot_react</th>

                            <th>cod_200</th>
                            <th>des_200</th>
                            <th>tot_alpu</th>

                            <th>cod_102</th>
                            <th>des_102</th>
                            <th>tot_fac_ant</th>

                            <th>cod_103</th>
                            <th>des_103</th>
                            <th>tot_intfac_ant</th>

                            <th>cod_500</th>
                            <th>des_500</th>
                            <th>tot_sobret</th>

                            <th>cod_400</th>
                            <th>des_400</th>
                            <th>tot_subsid</th>

                            <th>cod_110</th>
                            <th>des_110</th>
                            <th>tot_desUni</th>
    
                            <th>cod_300</th>
                            <th>des_300</th>
                            <th>tot_contrib</th>
    
                            <th>cod_104</th>
                            <th>des_104</th>
                            <th>tot_alqEqui</th>
    
                            <th>cod_105</th>
                            <th>des_105</th>
                            <th>tot_comuni</th>
    
                            <th>cod_106</th>
                            <th>des_106</th>
                            <th>tot_tot106</th>
    
                            <th>cod_107</th>
                            <th>des_107</th>
                            <th>tot_acupag</th>
    
                            <th>cod_108</th>
                            <th>des_108</th>
                            <th>tot_otrosDes</th>
    
                            <th>totAL FAC</th>
    

                            <th>codigobarras</th>
                            <th>modificar</th>
                            <th>Reeemplazar Fac</th>
                            <th>Prueb</th>
                            <th>Barras</th> -->

                        <th>NIT</th> <th>COD_SIC</th> <th>COD_PROPIO</th> <th>FECHA_CONEXION</th> <th>NOMBRE</th> <th>DIRECCION</th> <th>TELEFONO</th> <th>FAX</th> <th>NIU</th> <th>DEPARTAMENTO</th> <th>MUNICIPIO</th> <th>UBICACION</th> <th>TIPO_CONEXION</th> <th>CONEXION_RED</th> <th>CODIGO_CONEXION</th> <th>GRUPO</th> <th>NIVEL</th> <th>NIVEL_REFERIDO</th> <th>ESTRATO</th> <th>SECTOR</th> <th>TIPO_USUARIO</th> <th>TIPO_LECTURA</th> <th>TIPO_FACTURA</th> <th>MERCADO</th> <th>MEDIDOR</th> <th>NUMERO</th> <th>CONSTANTE</th> <th>CAPACIDAD</th> <th>TIPO_MEDIDA</th> <th>TIPO_TARIFA</th> <th>CONTRIBUCION</th> <th>SECTOR_SUPER</th> <th>ORDEN_FAC</th> <th>ORDEN</th> <th>TARIFA</th> <th>PERIODO_FAC</th> <th>IPP</th> <th>SECTOR_AL</th> <th>G</th> <th>T</th> <th>D</th> <th>Cv</th> <th>PR</th> <th>R</th> <th>Cuv</th> <th>Cuf</th> <th>CU</th> <th>DT3</th> <th>DT1_DT3</th> <th>TARIFA_EQ</th> <th>COD_100</th> <th>DES_100</th> <th>KWHMON</th> <th>KWHMAX</th> <th>KWHMED</th> <th>KWHMIN</th> <th>KWHPUNTA</th> <th>KWHFPUNTA</th> <th>KVARH_MAX</th> <th>KVARH_MED</th> <th>KVARH_MIN</th> <th>KVARH_PUNTA</th> <th>KVARH_FPUNTA</th> <th>LEC_ANT</th> <th>LEC_ACT</th> <th>MES1</th> <th>MES2</th> <th>MES3</th> <th>MES4</th> <th>MES5</th> <th>MES6</th> <th>PROM</th> <th>TARIFA_ACTIVA</th> <th>TOT_ACTIVA</th> <th>COD_101</th> <th>DES_101</th> <th>KVARHMON</th> <th>TARIFA_REACTIVA</th> <th>TOT_REACTIVA</th> <th>COD_200</th> <th>DES_200</th> <th>TOTAL_ALUMBRADO_PUBLICO</th> <th>COD_102</th> <th>DES_102</th> <th>FACTURAS_ANTERIORES</th> <th>COD_103</th> <th>DES_103</th> <th>INTERESES_FAC_ANT</th> <th>COD_500</th> <th>DES_500</th> <th>TOTAL_SOBRETASA</th> <th>COD_400</th> <th>DES_400</th> <th>TOTAL_SUBSIDIO</th> <th>COD_110</th> <th>DES_110</th> <th>TOTAL_DESCUENTO_TUNI</th> <th>COD_300</th> <th>DES_300</th> <th>TOTAL_CONTRIBUCION</th> <th>COD_104</th> <th>DES_104</th> <th>TOT_ALQ_EQUI</th> <th>COD_105</th> <th>DES_105</th> <th>TOT_COMUN</th> <th>COD_106</th> <th>DES_106</th> <th>TOTAL_106</th> <th>COD_107</th> <th>DES_107</th> <th>TOT_AC_PAGO</th> <th>COD_108</th> <th>DES_108</th> <th>TOT_OTROS1</th> <th>TOTAL_FAC</th> <th>ANO</th> <th>FECHA_EXP</th> <th>FECHA_VEN</th> <th>FECHA_LIM</th> <th>DIAS_FAC</th> <th>NO_FACTURA</th> <th>COD_BAR</th> 


                               
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        <tfoot>
                            <th>NIT</th> <th>COD_SIC</th> <th>COD_PROPIO</th> <th>FECHA_CONEXION</th> <th>NOMBRE</th> <th>DIRECCION</th> <th>TELEFONO</th> <th>FAX</th> <th>NIU</th> <th>DEPARTAMENTO</th> <th>MUNICIPIO</th> <th>UBICACION</th> <th>TIPO_CONEXION</th> <th>CONEXION_RED</th> <th>CODIGO_CONEXION</th> <th>GRUPO</th> <th>NIVEL</th> <th>NIVEL_REFERIDO</th> <th>ESTRATO</th> <th>SECTOR</th> <th>TIPO_USUARIO</th> <th>TIPO_LECTURA</th> <th>TIPO_FACTURA</th> <th>MERCADO</th> <th>MEDIDOR</th> <th>NUMERO</th> <th>CONSTANTE</th> <th>CAPACIDAD</th> <th>TIPO_MEDIDA</th> <th>TIPO_TARIFA</th> <th>CONTRIBUCION</th> <th>SECTOR_SUPER</th> <th>ORDEN_FAC</th> <th>ORDEN</th> <th>TARIFA</th> <th>PERIODO_FAC</th> <th>IPP</th> <th>SECTOR_AL</th> <th>G</th> <th>T</th> <th>D</th> <th>Cv</th> <th>PR</th> <th>R</th> <th>Cuv</th> <th>Cuf</th> <th>CU</th> <th>DT3</th> <th>DT1_DT3</th> <th>TARIFA_EQ</th> <th>COD_100</th> <th>DES_100</th> <th>KWHMON</th> <th>KWHMAX</th> <th>KWHMED</th> <th>KWHMIN</th> <th>KWHPUNTA</th> <th>KWHFPUNTA</th> <th>KVARH_MAX</th> <th>KVARH_MED</th> <th>KVARH_MIN</th> <th>KVARH_PUNTA</th> <th>KVARH_FPUNTA</th> <th>LEC_ANT</th> <th>LEC_ACT</th> <th>MES1</th> <th>MES2</th> <th>MES3</th> <th>MES4</th> <th>MES5</th> <th>MES6</th> <th>PROM</th> <th>TARIFA_ACTIVA</th> <th>TOT_ACTIVA</th> <th>COD_101</th> <th>DES_101</th> <th>KVARHMON</th> <th>TARIFA_REACTIVA</th> <th>TOT_REACTIVA</th> <th>COD_200</th> <th>DES_200</th> <th>TOTAL_ALUMBRADO_PUBLICO</th> <th>COD_102</th> <th>DES_102</th> <th>FACTURAS_ANTERIORES</th> <th>COD_103</th> <th>DES_103</th> <th>INTERESES_FAC_ANT</th> <th>COD_500</th> <th>DES_500</th> <th>TOTAL_SOBRETASA</th> <th>COD_400</th> <th>DES_400</th> <th>TOTAL_SUBSIDIO</th> <th>COD_110</th> <th>DES_110</th> <th>TOTAL_DESCUENTO_TUNI</th> <th>COD_300</th> <th>DES_300</th> <th>TOTAL_CONTRIBUCION</th> <th>COD_104</th> <th>DES_104</th> <th>TOT_ALQ_EQUI</th> <th>COD_105</th> <th>DES_105</th> <th>TOT_COMUN</th> <th>COD_106</th> <th>DES_106</th> <th>TOTAL_106</th> <th>COD_107</th> <th>DES_107</th> <th>TOT_AC_PAGO</th> <th>COD_108</th> <th>DES_108</th> <th>TOT_OTROS1</th> <th>TOTAL_FAC</th> <th>ANO</th> <th>FECHA_EXP</th> <th>FECHA_VEN</th> <th>FECHA_LIM</th> <th>DIAS_FAC</th> <th>NO_FACTURA</th> <th>COD_BAR</th> 
                               
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