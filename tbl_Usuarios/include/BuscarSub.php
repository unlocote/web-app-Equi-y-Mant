<?php
require_once(dirname(__FILE__)."/DBConnection.php");
class Search
{
    protected $db;
    public function __construct() {
        $this->db = new DBConnection();
        $this->db = $this->db->returnConnection();
    }

    // get Blog Info function
    public function getBlogInfo() {
        //$query = $this->db->prepare("SELECT name, last_name, email, contact_no, address, salary FROM personal");
        //$query = $this->db->prepare("SELECT COD_PROPIO, NOMBRE, MES1, MES2, MES3, MES4, MES5, MES6, PROM FROM tbl_cons_ant");
        $query = $this->db->prepare("SELECT Id,Propiedad_activos,Mes,Mes_PA,CodFSSRI_SubEle,MesReporte_SubEle,AnoReporte_SubEle,MesConsumo_SubEle,AnoConsumo_SubEle,SectUsu_SubEle,DiasFactura_SubEle,CS_SubEle,RangoConsumo_SubEle,Consumo_SubEle,NumUsuarios_SubEle,TipoUsuario_SubEle,CU_SubEle,TarifaAplicada_SubEle,Factor_SubEle,Facturacion_SubEle,Subsidio_SubEle,Ajuste_SubEle,CodFSSRIIncumbente_SubEle,TipNTPA,Observaciones FROM tbl_sub2");
        $query->execute();

        $result = $query->fetchAll();
        return $result;
    }
    
}

?>

