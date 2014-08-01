<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BasePOITOP
 */
class BasePOITOP {

    /**
     * Private fields
     */
    private static $_name = "POITOP";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_pono;

    /**
     * @var Char
     */
    protected $_itmcount;

    /**
     * @var Char
     */
    protected $_itemno;

    /**
     * @var Char
     */
    protected $_itmwhs;

    /**
     * @var Char
     */
    protected $_itemtype;

    /**
     * @var Char
     */
    protected $_descrip;

    /**
     * @var Char
     */
    protected $_descrip1;

    /**
     * @var Numeric
     */
    protected $_qtyord;

    /**
     * @var Numeric
     */
    protected $_qtyrec;

    /**
     * @var Numeric
     */
    protected $_qtyrec0;

    /**
     * @var Numeric
     */
    protected $_qtyleft;

    /**
     * @var Numeric
     */
    protected $_netcost;

    /**
     * @var Numeric
     */
    protected $_costunit;

    /**
     * @var Numeric
     */
    protected $_extcost;

    /**
     * @var Numeric
     */
    protected $_etching;

    /**
     * @var Numeric
     */
    protected $_inlndfrt;

    /**
     * @var Numeric
     */
    protected $_othercost;

    /**
     * @var Numeric
     */
    protected $_rebate;

    /**
     * @var Date
     */
    protected $_podate;

    /**
     * @var Char
     */
    protected $_vendno;

    /**
     * @var Date
     */
    protected $_larv_date;

    /**
     * @var Char
     */
    protected $_custno;

    /**
     * @var Char
     */
    protected $_man_code;

    /**
     * @var Char
     */
    protected $_unit;

    /**
     * @var Numeric
     */
    protected $_weight;

    /**
     * @var Numeric
     */
    protected $_cubic;

    /**
     * @var Logical
     */
    protected $_bckord;

    /**
     * @var Date
     */
    protected $_ldate;

    /**
     * @var Char
     */
    protected $_vendor_no;

    /**
     * @var Char
     */
    protected $_buyer;

    /**
     * @var Date
     */
    protected $_reqdate;

    /**
     * @var Char
     */
    protected $_class;

    /**
     * @var Char
     */
    protected $_subclass1;

    /**
     * @var Char
     */
    protected $_subclass2;

    /**
     * @var Char
     */
    protected $_subclass3;

    /**
     * @var Char
     */
    protected $_glacctno;

    /**
     * @var Char
     */
    protected $_glacctexp;

    /**
     * @var Char
     */
    protected $_glacctast;

    /**
     * @var Logical
     */
    protected $_altered;

    /**
     * @var Date
     */
    protected $_delivery;

    /**
     * @var Date
     */
    protected $_shipped;

    /**
     * @var Char
     */
    protected $_fimptaxd;

    /**
     * @var Char
     */
    protected $_rimno;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Numeric
     */
    protected $_costfact;

    /**
     * @var Numeric
     */
    protected $_discper;

    /**
     * @var Char
     */
    protected $_porrnum;

    /**
     * @var Char
     */
    protected $_porrnum_id;

    /**
     * @var Char
     */
    protected $_awbno;

    /**
     * @var Char
     */
    protected $_frghts;

    /**
     * @var Char
     */
    protected $_recdcar;

    /**
     * @var Char
     */
    protected $_lotno;

    /**
     * @var Char
     */
    protected $_serialno;

    /**
     * @var Char
     */
    protected $_frec_whs;

    /**
     * @var Memo
     */
    protected $_itmcomm;

    /**
     * @var Logical
     */
    protected $_bond;

    /**
     * @var Date
     */
    protected $_impdate;

    /**
     * @var Char
     */
    protected $_htsno;

    /**
     * @var Numeric
     */
    protected $_htsqty;

    /**
     * @var Char
     */
    protected $_ordnum;

    /**
     * @var Char
     */
    protected $_locno;

    /**
     * @var Char
     */
    protected $_sourceno;

    /**
     * @var Char
     */
    protected $_srctype;

    /**
     * @var Char
     */
    protected $_fupdtime;

    /**
     * @var Date
     */
    protected $_fupddate;

    /**
     * @var Char
     */
    protected $_fstation;

    /**
     * @var Char
     */
    protected $_fuserid;

    /**
     * @var Char
     */
    protected $_rqordnum;

    /**
     * @var Char
     */
    protected $_inspectno;

    /**
     * @var Char
     */
    protected $_rqcustno;

    /**
     * @var Char
     */
    protected $_arshipid;

    /**
     * @var Char
     */
    protected $_cstctid;

    /**
     * @var Logical
     */
    protected $_nocharge;

    /**
     * @var Char
     */
    protected $_reqno;

    /**
     * @var Logical
     */
    protected $_w9;

    /**
     * @var Logical
     */
    protected $_defvchr;

    /**
     * @var Logical
     */
    protected $_core;

    /**
     * @var Date
     */
    protected $_corrtdte;

    /**
     * @var Char
     */
    protected $_cortrkno;

    /**
     * @var Date
     */
    protected $_corshpdt;

    /**
     * @var Char
     */
    protected $_qutno;

    /**
     * @var Char
     */
    protected $_venstkno;

    /**
     * @var Date
     */
    protected $_rqdate;

    /**
     * @var Date
     */
    protected $_etadate;

    /**
     * @var Date
     */
    protected $_epcdate;

    /**
     * @var Numeric
     */
    protected $_costland;

    /**
     * @var Numeric
     */
    protected $_potype;

    /**
     * @var Char
     */
    protected $_baleno;

    /**
     * @var Char
     */
    protected $_pieceno;

    /**
     * @var Char
     */
    protected $_desname;

    /**
     * @var Char
     */
    protected $_custfld1;

    /**
     * @var Char
     */
    protected $_custfld3;

    /**
     * @var Char
     */
    protected $_custfld9;

    /**
     * @var Char
     */
    protected $_costcode;

    /**
     * @var Char
     */
    protected $_washcode;

    /**
     * @var Numeric
     */
    protected $_width_cm;

    /**
     * @var Numeric
     */
    protected $_length_cm;

    /**
     * @var Numeric
     */
    protected $_metricarea;

    /**
     * @var Numeric
     */
    protected $_costmetric;

    /**
     * @var Char
     */
    protected $_linestatus;

    /**
     * @var Numeric
     */
    protected $_costamt1;

    /**
     * @var Numeric
     */
    protected $_costamt2;

    /**
     * @var Numeric
     */
    protected $_costamt3;

    /**
     * @var Numeric
     */
    protected $_costamt4;

    /**
     * @var Numeric
     */
    protected $_costamt5;

    /**
     * @var Char
     */
    protected $_shipstatus;

    /**
     * @var Char
     */
    protected $_substatus;

    /**
     * @var Numeric
     */
    protected $_costamt1a;

    /**
     * @var Numeric
     */
    protected $_costamt2a;

    /**
     * @var Char
     */
    protected $_custfld4;

    /**
     * @var Char
     */
    protected $_custfld8;

    /**
     * @var Char
     */
    protected $_discid;

    /**
     * @var Numeric
     */
    protected $_pcslayers;

    /**
     * @var Numeric
     */
    protected $_nolayers;

    /**
     * @var Numeric
     */
    protected $_qtynolayr;

    /**
     * @var Numeric
     */
    protected $_palqtysqf;

    /**
     * @var Numeric
     */
    protected $_palqtypcs;

    /**
     * @var Numeric
     */
    protected $_qtyscrap;

    /**
     * @var Numeric
     */
    protected $_extcost0;

    /**
     * @var Numeric
     */
    protected $_packqty;

    /**
     * @var Char
     */
    protected $_packid;

    /**
     * @var Numeric
     */
    protected $_quantity;

    /**
     * @var Numeric
     */
    protected $_packqty0;

    /**
     * @var Numeric
     */
    protected $_packqtyrec;

    /**
     * @var Char
     */
    protected $_abccode;

    /**
     * @var Char
     */
    protected $_po_from;

    /**
     * @var Numeric
     */
    protected $_onhand;

    /**
     * @var Logical
     */
    protected $_tsf_split;

    /**
     * @var Numeric
     */
    protected $_est_days;

    /**
     * @var Numeric
     */
    protected $_fetamt;

    /**
     * @var Char
     */
    protected $_qbtxlineid;

    /**
     * @var Numeric
     */
    protected $_botldep;

    /**
     * @var Char
     */
    protected $_upccode;

    /**
     * @var Char
     */
    protected $_ftaxcode;

    /**
     * @var Numeric
     */
    protected $_itemtax;

    /**
     * @var Logical
     */
    protected $_taxable;

    /**
     * @var Numeric
     */
    protected $_taxrate;

    /**
     * @var Logical
     */
    protected $_delflag;

    /**
     * @var Logical
     */
    protected $_costgstbd;

    /**
     * @var Numeric
     */
    protected $_costunitgb;

    /**
     * @var Numeric
     */
    protected $_costlandgb;

    /**
     * @var Numeric
     */
    protected $_extcostgb0;

    /**
     * @var Numeric
     */
    protected $_extcostln0;

    /**
     * @var Numeric
     */
    protected $_extcostlg0;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Numeric
     */
    protected $_costbase;

    /**
     * @var Numeric
     */
    protected $_costdisc;

    /**
     * @var Numeric
     */
    protected $_discamt;

    /**
     * @var Char
     */
    protected $_prodbinloc;

    /**
     * @var Char
     */
    protected $_inspectnoi;

    /**
     * @var Date
     */
    protected $_dateprod;

    /**
     * @var Char
     */
    protected $_inspectnoo;

    /**
     * @var Numeric
     */
    protected $_palletsout;

    /**
     * @var Date
     */
    protected $_datefini;

    /**
     * @var Char
     */
    protected $_qbsolistid;

    /**
     * @var Logical
     */
    protected $_ordcomp;

    /**
     * @var Numeric
     */
    protected $_fttamt;

    /**
     * @var Numeric
     */
    protected $_qtynolayrf;

    /**
     * @var Numeric
     */
    protected $_qtynolayrl;

    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getPono() {
        return $this->_pono;
    }

    /**
     * @return Char
     */
    public function getItmcount() {
        return $this->_itmcount;
    }

    /**
     * @return Char
     */
    public function getItemno() {
        return $this->_itemno;
    }

    /**
     * @return Char
     */
    public function getItmwhs() {
        return $this->_itmwhs;
    }

    /**
     * @return Char
     */
    public function getItemtype() {
        return $this->_itemtype;
    }

    /**
     * @return Char
     */
    public function getDescrip() {
        return $this->_descrip;
    }

    /**
     * @return Char
     */
    public function getDescrip1() {
        return $this->_descrip1;
    }

    /**
     * @return Numeric
     */
    public function getQtyord() {
        return $this->_qtyord;
    }

    /**
     * @return Numeric
     */
    public function getQtyrec() {
        return $this->_qtyrec;
    }

    /**
     * @return Numeric
     */
    public function getQtyrec0() {
        return $this->_qtyrec0;
    }

    /**
     * @return Numeric
     */
    public function getQtyleft() {
        return $this->_qtyleft;
    }

    /**
     * @return Numeric
     */
    public function getNetcost() {
        return $this->_netcost;
    }

    /**
     * @return Numeric
     */
    public function getCostunit() {
        return $this->_costunit;
    }

    /**
     * @return Numeric
     */
    public function getExtcost() {
        return $this->_extcost;
    }

    /**
     * @return Numeric
     */
    public function getEtching() {
        return $this->_etching;
    }

    /**
     * @return Numeric
     */
    public function getInlndfrt() {
        return $this->_inlndfrt;
    }

    /**
     * @return Numeric
     */
    public function getOthercost() {
        return $this->_othercost;
    }

    /**
     * @return Numeric
     */
    public function getRebate() {
        return $this->_rebate;
    }

    /**
     * @return Date
     */
    public function getPodate() {
        return $this->_podate;
    }

    /**
     * @return Char
     */
    public function getVendno() {
        return $this->_vendno;
    }

    /**
     * @return Date
     */
    public function getLarv_date() {
        return $this->_larv_date;
    }

    /**
     * @return Char
     */
    public function getCustno() {
        return $this->_custno;
    }

    /**
     * @return Char
     */
    public function getMan_code() {
        return $this->_man_code;
    }

    /**
     * @return Char
     */
    public function getUnit() {
        return $this->_unit;
    }

    /**
     * @return Numeric
     */
    public function getWeight() {
        return $this->_weight;
    }

    /**
     * @return Numeric
     */
    public function getCubic() {
        return $this->_cubic;
    }

    /**
     * @return Logical
     */
    public function getBckord() {
        return $this->_bckord;
    }

    /**
     * @return Date
     */
    public function getLdate() {
        return $this->_ldate;
    }

    /**
     * @return Char
     */
    public function getVendor_no() {
        return $this->_vendor_no;
    }

    /**
     * @return Char
     */
    public function getBuyer() {
        return $this->_buyer;
    }

    /**
     * @return Date
     */
    public function getReqdate() {
        return $this->_reqdate;
    }

    /**
     * @return Char
     */
    public function getClass() {
        return $this->_class;
    }

    /**
     * @return Char
     */
    public function getSubclass1() {
        return $this->_subclass1;
    }

    /**
     * @return Char
     */
    public function getSubclass2() {
        return $this->_subclass2;
    }

    /**
     * @return Char
     */
    public function getSubclass3() {
        return $this->_subclass3;
    }

    /**
     * @return Char
     */
    public function getGlacctno() {
        return $this->_glacctno;
    }

    /**
     * @return Char
     */
    public function getGlacctexp() {
        return $this->_glacctexp;
    }

    /**
     * @return Char
     */
    public function getGlacctast() {
        return $this->_glacctast;
    }

    /**
     * @return Logical
     */
    public function getAltered() {
        return $this->_altered;
    }

    /**
     * @return Date
     */
    public function getDelivery() {
        return $this->_delivery;
    }

    /**
     * @return Date
     */
    public function getShipped() {
        return $this->_shipped;
    }

    /**
     * @return Char
     */
    public function getFimptaxd() {
        return $this->_fimptaxd;
    }

    /**
     * @return Char
     */
    public function getRimno() {
        return $this->_rimno;
    }

    /**
     * @return Logical
     */
    public function getNflg0() {
        return $this->_nflg0;
    }

    /**
     * @return Numeric
     */
    public function getCostfact() {
        return $this->_costfact;
    }

    /**
     * @return Numeric
     */
    public function getDiscper() {
        return $this->_discper;
    }

    /**
     * @return Char
     */
    public function getPorrnum() {
        return $this->_porrnum;
    }

    /**
     * @return Char
     */
    public function getPorrnum_id() {
        return $this->_porrnum_id;
    }

    /**
     * @return Char
     */
    public function getAwbno() {
        return $this->_awbno;
    }

    /**
     * @return Char
     */
    public function getFrghts() {
        return $this->_frghts;
    }

    /**
     * @return Char
     */
    public function getRecdcar() {
        return $this->_recdcar;
    }

    /**
     * @return Char
     */
    public function getLotno() {
        return $this->_lotno;
    }

    /**
     * @return Char
     */
    public function getSerialno() {
        return $this->_serialno;
    }

    /**
     * @return Char
     */
    public function getFrec_whs() {
        return $this->_frec_whs;
    }

    /**
     * @return Memo
     */
    public function getItmcomm() {
        return $this->_itmcomm;
    }

    /**
     * @return Logical
     */
    public function getBond() {
        return $this->_bond;
    }

    /**
     * @return Date
     */
    public function getImpdate() {
        return $this->_impdate;
    }

    /**
     * @return Char
     */
    public function getHtsno() {
        return $this->_htsno;
    }

    /**
     * @return Numeric
     */
    public function getHtsqty() {
        return $this->_htsqty;
    }

    /**
     * @return Char
     */
    public function getOrdnum() {
        return $this->_ordnum;
    }

    /**
     * @return Char
     */
    public function getLocno() {
        return $this->_locno;
    }

    /**
     * @return Char
     */
    public function getSourceno() {
        return $this->_sourceno;
    }

    /**
     * @return Char
     */
    public function getSrctype() {
        return $this->_srctype;
    }

    /**
     * @return Char
     */
    public function getFupdtime() {
        return $this->_fupdtime;
    }

    /**
     * @return Date
     */
    public function getFupddate() {
        return $this->_fupddate;
    }

    /**
     * @return Char
     */
    public function getFstation() {
        return $this->_fstation;
    }

    /**
     * @return Char
     */
    public function getFuserid() {
        return $this->_fuserid;
    }

    /**
     * @return Char
     */
    public function getRqordnum() {
        return $this->_rqordnum;
    }

    /**
     * @return Char
     */
    public function getInspectno() {
        return $this->_inspectno;
    }

    /**
     * @return Char
     */
    public function getRqcustno() {
        return $this->_rqcustno;
    }

    /**
     * @return Char
     */
    public function getArshipid() {
        return $this->_arshipid;
    }

    /**
     * @return Char
     */
    public function getCstctid() {
        return $this->_cstctid;
    }

    /**
     * @return Logical
     */
    public function getNocharge() {
        return $this->_nocharge;
    }

    /**
     * @return Char
     */
    public function getReqno() {
        return $this->_reqno;
    }

    /**
     * @return Logical
     */
    public function getW9() {
        return $this->_w9;
    }

    /**
     * @return Logical
     */
    public function getDefvchr() {
        return $this->_defvchr;
    }

    /**
     * @return Logical
     */
    public function getCore() {
        return $this->_core;
    }

    /**
     * @return Date
     */
    public function getCorrtdte() {
        return $this->_corrtdte;
    }

    /**
     * @return Char
     */
    public function getCortrkno() {
        return $this->_cortrkno;
    }

    /**
     * @return Date
     */
    public function getCorshpdt() {
        return $this->_corshpdt;
    }

    /**
     * @return Char
     */
    public function getQutno() {
        return $this->_qutno;
    }

    /**
     * @return Char
     */
    public function getVenstkno() {
        return $this->_venstkno;
    }

    /**
     * @return Date
     */
    public function getRqdate() {
        return $this->_rqdate;
    }

    /**
     * @return Date
     */
    public function getEtadate() {
        return $this->_etadate;
    }

    /**
     * @return Date
     */
    public function getEpcdate() {
        return $this->_epcdate;
    }

    /**
     * @return Numeric
     */
    public function getCostland() {
        return $this->_costland;
    }

    /**
     * @return Numeric
     */
    public function getPotype() {
        return $this->_potype;
    }

    /**
     * @return Char
     */
    public function getBaleno() {
        return $this->_baleno;
    }

    /**
     * @return Char
     */
    public function getPieceno() {
        return $this->_pieceno;
    }

    /**
     * @return Char
     */
    public function getDesname() {
        return $this->_desname;
    }

    /**
     * @return Char
     */
    public function getCustfld1() {
        return $this->_custfld1;
    }

    /**
     * @return Char
     */
    public function getCustfld3() {
        return $this->_custfld3;
    }

    /**
     * @return Char
     */
    public function getCustfld9() {
        return $this->_custfld9;
    }

    /**
     * @return Char
     */
    public function getCostcode() {
        return $this->_costcode;
    }

    /**
     * @return Char
     */
    public function getWashcode() {
        return $this->_washcode;
    }

    /**
     * @return Numeric
     */
    public function getWidth_cm() {
        return $this->_width_cm;
    }

    /**
     * @return Numeric
     */
    public function getLength_cm() {
        return $this->_length_cm;
    }

    /**
     * @return Numeric
     */
    public function getMetricarea() {
        return $this->_metricarea;
    }

    /**
     * @return Numeric
     */
    public function getCostmetric() {
        return $this->_costmetric;
    }

    /**
     * @return Char
     */
    public function getLinestatus() {
        return $this->_linestatus;
    }

    /**
     * @return Numeric
     */
    public function getCostamt1() {
        return $this->_costamt1;
    }

    /**
     * @return Numeric
     */
    public function getCostamt2() {
        return $this->_costamt2;
    }

    /**
     * @return Numeric
     */
    public function getCostamt3() {
        return $this->_costamt3;
    }

    /**
     * @return Numeric
     */
    public function getCostamt4() {
        return $this->_costamt4;
    }

    /**
     * @return Numeric
     */
    public function getCostamt5() {
        return $this->_costamt5;
    }

    /**
     * @return Char
     */
    public function getShipstatus() {
        return $this->_shipstatus;
    }

    /**
     * @return Char
     */
    public function getSubstatus() {
        return $this->_substatus;
    }

    /**
     * @return Numeric
     */
    public function getCostamt1a() {
        return $this->_costamt1a;
    }

    /**
     * @return Numeric
     */
    public function getCostamt2a() {
        return $this->_costamt2a;
    }

    /**
     * @return Char
     */
    public function getCustfld4() {
        return $this->_custfld4;
    }

    /**
     * @return Char
     */
    public function getCustfld8() {
        return $this->_custfld8;
    }

    /**
     * @return Char
     */
    public function getDiscid() {
        return $this->_discid;
    }

    /**
     * @return Numeric
     */
    public function getPcslayers() {
        return $this->_pcslayers;
    }

    /**
     * @return Numeric
     */
    public function getNolayers() {
        return $this->_nolayers;
    }

    /**
     * @return Numeric
     */
    public function getQtynolayr() {
        return $this->_qtynolayr;
    }

    /**
     * @return Numeric
     */
    public function getPalqtysqf() {
        return $this->_palqtysqf;
    }

    /**
     * @return Numeric
     */
    public function getPalqtypcs() {
        return $this->_palqtypcs;
    }

    /**
     * @return Numeric
     */
    public function getQtyscrap() {
        return $this->_qtyscrap;
    }

    /**
     * @return Numeric
     */
    public function getExtcost0() {
        return $this->_extcost0;
    }

    /**
     * @return Numeric
     */
    public function getPackqty() {
        return $this->_packqty;
    }

    /**
     * @return Char
     */
    public function getPackid() {
        return $this->_packid;
    }

    /**
     * @return Numeric
     */
    public function getQuantity() {
        return $this->_quantity;
    }

    /**
     * @return Numeric
     */
    public function getPackqty0() {
        return $this->_packqty0;
    }

    /**
     * @return Numeric
     */
    public function getPackqtyrec() {
        return $this->_packqtyrec;
    }

    /**
     * @return Char
     */
    public function getAbccode() {
        return $this->_abccode;
    }

    /**
     * @return Char
     */
    public function getPo_from() {
        return $this->_po_from;
    }

    /**
     * @return Numeric
     */
    public function getOnhand() {
        return $this->_onhand;
    }

    /**
     * @return Logical
     */
    public function getTsf_split() {
        return $this->_tsf_split;
    }

    /**
     * @return Numeric
     */
    public function getEst_days() {
        return $this->_est_days;
    }

    /**
     * @return Numeric
     */
    public function getFetamt() {
        return $this->_fetamt;
    }

    /**
     * @return Char
     */
    public function getQbtxlineid() {
        return $this->_qbtxlineid;
    }

    /**
     * @return Numeric
     */
    public function getBotldep() {
        return $this->_botldep;
    }

    /**
     * @return Char
     */
    public function getUpccode() {
        return $this->_upccode;
    }

    /**
     * @return Char
     */
    public function getFtaxcode() {
        return $this->_ftaxcode;
    }

    /**
     * @return Numeric
     */
    public function getItemtax() {
        return $this->_itemtax;
    }

    /**
     * @return Logical
     */
    public function getTaxable() {
        return $this->_taxable;
    }

    /**
     * @return Numeric
     */
    public function getTaxrate() {
        return $this->_taxrate;
    }

    /**
     * @return Logical
     */
    public function getDelflag() {
        return $this->_delflag;
    }

    /**
     * @return Logical
     */
    public function getCostgstbd() {
        return $this->_costgstbd;
    }

    /**
     * @return Numeric
     */
    public function getCostunitgb() {
        return $this->_costunitgb;
    }

    /**
     * @return Numeric
     */
    public function getCostlandgb() {
        return $this->_costlandgb;
    }

    /**
     * @return Numeric
     */
    public function getExtcostgb0() {
        return $this->_extcostgb0;
    }

    /**
     * @return Numeric
     */
    public function getExtcostln0() {
        return $this->_extcostln0;
    }

    /**
     * @return Numeric
     */
    public function getExtcostlg0() {
        return $this->_extcostlg0;
    }

    /**
     * @return Char
     */
    public function getQblistid() {
        return $this->_qblistid;
    }

    /**
     * @return Numeric
     */
    public function getCostbase() {
        return $this->_costbase;
    }

    /**
     * @return Numeric
     */
    public function getCostdisc() {
        return $this->_costdisc;
    }

    /**
     * @return Numeric
     */
    public function getDiscamt() {
        return $this->_discamt;
    }

    /**
     * @return Char
     */
    public function getProdbinloc() {
        return $this->_prodbinloc;
    }

    /**
     * @return Char
     */
    public function getInspectnoi() {
        return $this->_inspectnoi;
    }

    /**
     * @return Date
     */
    public function getDateprod() {
        return $this->_dateprod;
    }

    /**
     * @return Char
     */
    public function getInspectnoo() {
        return $this->_inspectnoo;
    }

    /**
     * @return Numeric
     */
    public function getPalletsout() {
        return $this->_palletsout;
    }

    /**
     * @return Date
     */
    public function getDatefini() {
        return $this->_datefini;
    }

    /**
     * @return Char
     */
    public function getQbsolistid() {
        return $this->_qbsolistid;
    }

    /**
     * @return Logical
     */
    public function getOrdcomp() {
        return $this->_ordcomp;
    }

    /**
     * @return Numeric
     */
    public function getFttamt() {
        return $this->_fttamt;
    }

    /**
     * @return Numeric
     */
    public function getQtynolayrf() {
        return $this->_qtynolayrf;
    }

    /**
     * @return Numeric
     */
    public function getQtynolayrl() {
        return $this->_qtynolayrl;
    }

    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setPono($value) {
        $this->_pono = $value;
    }

    /**
     * @param Char
     */
    public function setItmcount($value) {
        $this->_itmcount = $value;
    }

    /**
     * @param Char
     */
    public function setItemno($value) {
        $this->_itemno = $value;
    }

    /**
     * @param Char
     */
    public function setItmwhs($value) {
        $this->_itmwhs = $value;
    }

    /**
     * @param Char
     */
    public function setItemtype($value) {
        $this->_itemtype = $value;
    }

    /**
     * @param Char
     */
    public function setDescrip($value) {
        $this->_descrip = $value;
    }

    /**
     * @param Char
     */
    public function setDescrip1($value) {
        $this->_descrip1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyord($value) {
        $this->_qtyord = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyrec($value) {
        $this->_qtyrec = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyrec0($value) {
        $this->_qtyrec0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyleft($value) {
        $this->_qtyleft = $value;
    }

    /**
     * @param Numeric
     */
    public function setNetcost($value) {
        $this->_netcost = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostunit($value) {
        $this->_costunit = $value;
    }

    /**
     * @param Numeric
     */
    public function setExtcost($value) {
        $this->_extcost = $value;
    }

    /**
     * @param Numeric
     */
    public function setEtching($value) {
        $this->_etching = $value;
    }

    /**
     * @param Numeric
     */
    public function setInlndfrt($value) {
        $this->_inlndfrt = $value;
    }

    /**
     * @param Numeric
     */
    public function setOthercost($value) {
        $this->_othercost = $value;
    }

    /**
     * @param Numeric
     */
    public function setRebate($value) {
        $this->_rebate = $value;
    }

    /**
     * @param Date
     */
    public function setPodate($value) {
        $this->_podate = $value;
    }

    /**
     * @param Char
     */
    public function setVendno($value) {
        $this->_vendno = $value;
    }

    /**
     * @param Date
     */
    public function setLarv_date($value) {
        $this->_larv_date = $value;
    }

    /**
     * @param Char
     */
    public function setCustno($value) {
        $this->_custno = $value;
    }

    /**
     * @param Char
     */
    public function setMan_code($value) {
        $this->_man_code = $value;
    }

    /**
     * @param Char
     */
    public function setUnit($value) {
        $this->_unit = $value;
    }

    /**
     * @param Numeric
     */
    public function setWeight($value) {
        $this->_weight = $value;
    }

    /**
     * @param Numeric
     */
    public function setCubic($value) {
        $this->_cubic = $value;
    }

    /**
     * @param Logical
     */
    public function setBckord($value) {
        $this->_bckord = $value;
    }

    /**
     * @param Date
     */
    public function setLdate($value) {
        $this->_ldate = $value;
    }

    /**
     * @param Char
     */
    public function setVendor_no($value) {
        $this->_vendor_no = $value;
    }

    /**
     * @param Char
     */
    public function setBuyer($value) {
        $this->_buyer = $value;
    }

    /**
     * @param Date
     */
    public function setReqdate($value) {
        $this->_reqdate = $value;
    }

    /**
     * @param Char
     */
    public function setClass($value) {
        $this->_class = $value;
    }

    /**
     * @param Char
     */
    public function setSubclass1($value) {
        $this->_subclass1 = $value;
    }

    /**
     * @param Char
     */
    public function setSubclass2($value) {
        $this->_subclass2 = $value;
    }

    /**
     * @param Char
     */
    public function setSubclass3($value) {
        $this->_subclass3 = $value;
    }

    /**
     * @param Char
     */
    public function setGlacctno($value) {
        $this->_glacctno = $value;
    }

    /**
     * @param Char
     */
    public function setGlacctexp($value) {
        $this->_glacctexp = $value;
    }

    /**
     * @param Char
     */
    public function setGlacctast($value) {
        $this->_glacctast = $value;
    }

    /**
     * @param Logical
     */
    public function setAltered($value) {
        $this->_altered = $value;
    }

    /**
     * @param Date
     */
    public function setDelivery($value) {
        $this->_delivery = $value;
    }

    /**
     * @param Date
     */
    public function setShipped($value) {
        $this->_shipped = $value;
    }

    /**
     * @param Char
     */
    public function setFimptaxd($value) {
        $this->_fimptaxd = $value;
    }

    /**
     * @param Char
     */
    public function setRimno($value) {
        $this->_rimno = $value;
    }

    /**
     * @param Logical
     */
    public function setNflg0($value) {
        $this->_nflg0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostfact($value) {
        $this->_costfact = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscper($value) {
        $this->_discper = $value;
    }

    /**
     * @param Char
     */
    public function setPorrnum($value) {
        $this->_porrnum = $value;
    }

    /**
     * @param Char
     */
    public function setPorrnum_id($value) {
        $this->_porrnum_id = $value;
    }

    /**
     * @param Char
     */
    public function setAwbno($value) {
        $this->_awbno = $value;
    }

    /**
     * @param Char
     */
    public function setFrghts($value) {
        $this->_frghts = $value;
    }

    /**
     * @param Char
     */
    public function setRecdcar($value) {
        $this->_recdcar = $value;
    }

    /**
     * @param Char
     */
    public function setLotno($value) {
        $this->_lotno = $value;
    }

    /**
     * @param Char
     */
    public function setSerialno($value) {
        $this->_serialno = $value;
    }

    /**
     * @param Char
     */
    public function setFrec_whs($value) {
        $this->_frec_whs = $value;
    }

    /**
     * @param Memo
     */
    public function setItmcomm($value) {
        $this->_itmcomm = $value;
    }

    /**
     * @param Logical
     */
    public function setBond($value) {
        $this->_bond = $value;
    }

    /**
     * @param Date
     */
    public function setImpdate($value) {
        $this->_impdate = $value;
    }

    /**
     * @param Char
     */
    public function setHtsno($value) {
        $this->_htsno = $value;
    }

    /**
     * @param Numeric
     */
    public function setHtsqty($value) {
        $this->_htsqty = $value;
    }

    /**
     * @param Char
     */
    public function setOrdnum($value) {
        $this->_ordnum = $value;
    }

    /**
     * @param Char
     */
    public function setLocno($value) {
        $this->_locno = $value;
    }

    /**
     * @param Char
     */
    public function setSourceno($value) {
        $this->_sourceno = $value;
    }

    /**
     * @param Char
     */
    public function setSrctype($value) {
        $this->_srctype = $value;
    }

    /**
     * @param Char
     */
    public function setFupdtime($value) {
        $this->_fupdtime = $value;
    }

    /**
     * @param Date
     */
    public function setFupddate($value) {
        $this->_fupddate = $value;
    }

    /**
     * @param Char
     */
    public function setFstation($value) {
        $this->_fstation = $value;
    }

    /**
     * @param Char
     */
    public function setFuserid($value) {
        $this->_fuserid = $value;
    }

    /**
     * @param Char
     */
    public function setRqordnum($value) {
        $this->_rqordnum = $value;
    }

    /**
     * @param Char
     */
    public function setInspectno($value) {
        $this->_inspectno = $value;
    }

    /**
     * @param Char
     */
    public function setRqcustno($value) {
        $this->_rqcustno = $value;
    }

    /**
     * @param Char
     */
    public function setArshipid($value) {
        $this->_arshipid = $value;
    }

    /**
     * @param Char
     */
    public function setCstctid($value) {
        $this->_cstctid = $value;
    }

    /**
     * @param Logical
     */
    public function setNocharge($value) {
        $this->_nocharge = $value;
    }

    /**
     * @param Char
     */
    public function setReqno($value) {
        $this->_reqno = $value;
    }

    /**
     * @param Logical
     */
    public function setW9($value) {
        $this->_w9 = $value;
    }

    /**
     * @param Logical
     */
    public function setDefvchr($value) {
        $this->_defvchr = $value;
    }

    /**
     * @param Logical
     */
    public function setCore($value) {
        $this->_core = $value;
    }

    /**
     * @param Date
     */
    public function setCorrtdte($value) {
        $this->_corrtdte = $value;
    }

    /**
     * @param Char
     */
    public function setCortrkno($value) {
        $this->_cortrkno = $value;
    }

    /**
     * @param Date
     */
    public function setCorshpdt($value) {
        $this->_corshpdt = $value;
    }

    /**
     * @param Char
     */
    public function setQutno($value) {
        $this->_qutno = $value;
    }

    /**
     * @param Char
     */
    public function setVenstkno($value) {
        $this->_venstkno = $value;
    }

    /**
     * @param Date
     */
    public function setRqdate($value) {
        $this->_rqdate = $value;
    }

    /**
     * @param Date
     */
    public function setEtadate($value) {
        $this->_etadate = $value;
    }

    /**
     * @param Date
     */
    public function setEpcdate($value) {
        $this->_epcdate = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostland($value) {
        $this->_costland = $value;
    }

    /**
     * @param Numeric
     */
    public function setPotype($value) {
        $this->_potype = $value;
    }

    /**
     * @param Char
     */
    public function setBaleno($value) {
        $this->_baleno = $value;
    }

    /**
     * @param Char
     */
    public function setPieceno($value) {
        $this->_pieceno = $value;
    }

    /**
     * @param Char
     */
    public function setDesname($value) {
        $this->_desname = $value;
    }

    /**
     * @param Char
     */
    public function setCustfld1($value) {
        $this->_custfld1 = $value;
    }

    /**
     * @param Char
     */
    public function setCustfld3($value) {
        $this->_custfld3 = $value;
    }

    /**
     * @param Char
     */
    public function setCustfld9($value) {
        $this->_custfld9 = $value;
    }

    /**
     * @param Char
     */
    public function setCostcode($value) {
        $this->_costcode = $value;
    }

    /**
     * @param Char
     */
    public function setWashcode($value) {
        $this->_washcode = $value;
    }

    /**
     * @param Numeric
     */
    public function setWidth_cm($value) {
        $this->_width_cm = $value;
    }

    /**
     * @param Numeric
     */
    public function setLength_cm($value) {
        $this->_length_cm = $value;
    }

    /**
     * @param Numeric
     */
    public function setMetricarea($value) {
        $this->_metricarea = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostmetric($value) {
        $this->_costmetric = $value;
    }

    /**
     * @param Char
     */
    public function setLinestatus($value) {
        $this->_linestatus = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostamt1($value) {
        $this->_costamt1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostamt2($value) {
        $this->_costamt2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostamt3($value) {
        $this->_costamt3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostamt4($value) {
        $this->_costamt4 = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostamt5($value) {
        $this->_costamt5 = $value;
    }

    /**
     * @param Char
     */
    public function setShipstatus($value) {
        $this->_shipstatus = $value;
    }

    /**
     * @param Char
     */
    public function setSubstatus($value) {
        $this->_substatus = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostamt1a($value) {
        $this->_costamt1a = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostamt2a($value) {
        $this->_costamt2a = $value;
    }

    /**
     * @param Char
     */
    public function setCustfld4($value) {
        $this->_custfld4 = $value;
    }

    /**
     * @param Char
     */
    public function setCustfld8($value) {
        $this->_custfld8 = $value;
    }

    /**
     * @param Char
     */
    public function setDiscid($value) {
        $this->_discid = $value;
    }

    /**
     * @param Numeric
     */
    public function setPcslayers($value) {
        $this->_pcslayers = $value;
    }

    /**
     * @param Numeric
     */
    public function setNolayers($value) {
        $this->_nolayers = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtynolayr($value) {
        $this->_qtynolayr = $value;
    }

    /**
     * @param Numeric
     */
    public function setPalqtysqf($value) {
        $this->_palqtysqf = $value;
    }

    /**
     * @param Numeric
     */
    public function setPalqtypcs($value) {
        $this->_palqtypcs = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtyscrap($value) {
        $this->_qtyscrap = $value;
    }

    /**
     * @param Numeric
     */
    public function setExtcost0($value) {
        $this->_extcost0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPackqty($value) {
        $this->_packqty = $value;
    }

    /**
     * @param Char
     */
    public function setPackid($value) {
        $this->_packid = $value;
    }

    /**
     * @param Numeric
     */
    public function setQuantity($value) {
        $this->_quantity = $value;
    }

    /**
     * @param Numeric
     */
    public function setPackqty0($value) {
        $this->_packqty0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPackqtyrec($value) {
        $this->_packqtyrec = $value;
    }

    /**
     * @param Char
     */
    public function setAbccode($value) {
        $this->_abccode = $value;
    }

    /**
     * @param Char
     */
    public function setPo_from($value) {
        $this->_po_from = $value;
    }

    /**
     * @param Numeric
     */
    public function setOnhand($value) {
        $this->_onhand = $value;
    }

    /**
     * @param Logical
     */
    public function setTsf_split($value) {
        $this->_tsf_split = $value;
    }

    /**
     * @param Numeric
     */
    public function setEst_days($value) {
        $this->_est_days = $value;
    }

    /**
     * @param Numeric
     */
    public function setFetamt($value) {
        $this->_fetamt = $value;
    }

    /**
     * @param Char
     */
    public function setQbtxlineid($value) {
        $this->_qbtxlineid = $value;
    }

    /**
     * @param Numeric
     */
    public function setBotldep($value) {
        $this->_botldep = $value;
    }

    /**
     * @param Char
     */
    public function setUpccode($value) {
        $this->_upccode = $value;
    }

    /**
     * @param Char
     */
    public function setFtaxcode($value) {
        $this->_ftaxcode = $value;
    }

    /**
     * @param Numeric
     */
    public function setItemtax($value) {
        $this->_itemtax = $value;
    }

    /**
     * @param Logical
     */
    public function setTaxable($value) {
        $this->_taxable = $value;
    }

    /**
     * @param Numeric
     */
    public function setTaxrate($value) {
        $this->_taxrate = $value;
    }

    /**
     * @param Logical
     */
    public function setDelflag($value) {
        $this->_delflag = $value;
    }

    /**
     * @param Logical
     */
    public function setCostgstbd($value) {
        $this->_costgstbd = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostunitgb($value) {
        $this->_costunitgb = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostlandgb($value) {
        $this->_costlandgb = $value;
    }

    /**
     * @param Numeric
     */
    public function setExtcostgb0($value) {
        $this->_extcostgb0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setExtcostln0($value) {
        $this->_extcostln0 = $value;
    }

    /**
     * @param Numeric
     */
    public function setExtcostlg0($value) {
        $this->_extcostlg0 = $value;
    }

    /**
     * @param Char
     */
    public function setQblistid($value) {
        $this->_qblistid = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostbase($value) {
        $this->_costbase = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostdisc($value) {
        $this->_costdisc = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscamt($value) {
        $this->_discamt = $value;
    }

    /**
     * @param Char
     */
    public function setProdbinloc($value) {
        $this->_prodbinloc = $value;
    }

    /**
     * @param Char
     */
    public function setInspectnoi($value) {
        $this->_inspectnoi = $value;
    }

    /**
     * @param Date
     */
    public function setDateprod($value) {
        $this->_dateprod = $value;
    }

    /**
     * @param Char
     */
    public function setInspectnoo($value) {
        $this->_inspectnoo = $value;
    }

    /**
     * @param Numeric
     */
    public function setPalletsout($value) {
        $this->_palletsout = $value;
    }

    /**
     * @param Date
     */
    public function setDatefini($value) {
        $this->_datefini = $value;
    }

    /**
     * @param Char
     */
    public function setQbsolistid($value) {
        $this->_qbsolistid = $value;
    }

    /**
     * @param Logical
     */
    public function setOrdcomp($value) {
        $this->_ordcomp = $value;
    }

    /**
     * @param Numeric
     */
    public function setFttamt($value) {
        $this->_fttamt = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtynolayrf($value) {
        $this->_qtynolayrf = $value;
    }

    /**
     * @param Numeric
     */
    public function setQtynolayrl($value) {
        $this->_qtynolayrl = $value;
    }

    /**
     * Constructor
     * @param type $pono
     * @param type $itmcount
     * @param type $itemno
     * @param type $itmwhs
     * @param type $itemtype
     * @param type $descrip
     * @param type $descrip1
     * @param type $qtyord
     * @param type $qtyrec
     * @param type $qtyrec0
     * @param type $qtyleft
     * @param type $netcost
     * @param type $costunit
     * @param type $extcost
     * @param type $etching
     * @param type $inlndfrt
     * @param type $othercost
     * @param type $rebate
     * @param type $podate
     * @param type $vendno
     * @param type $larv_date
     * @param type $custno
     * @param type $man_code
     * @param type $unit
     * @param type $weight
     * @param type $cubic
     * @param type $bckord
     * @param type $ldate
     * @param type $vendor_no
     * @param type $buyer
     * @param type $reqdate
     * @param type $class
     * @param type $subclass1
     * @param type $subclass2
     * @param type $subclass3
     * @param type $glacctno
     * @param type $glacctexp
     * @param type $glacctast
     * @param type $altered
     * @param type $delivery
     * @param type $shipped
     * @param type $fimptaxd
     * @param type $rimno
     * @param type $nflg0
     * @param type $costfact
     * @param type $discper
     * @param type $porrnum
     * @param type $porrnum_id
     * @param type $awbno
     * @param type $frghts
     * @param type $recdcar
     * @param type $lotno
     * @param type $serialno
     * @param type $frec_whs
     * @param type $itmcomm
     * @param type $bond
     * @param type $impdate
     * @param type $htsno
     * @param type $htsqty
     * @param type $ordnum
     * @param type $locno
     * @param type $sourceno
     * @param type $srctype
     * @param type $fupdtime
     * @param type $fupddate
     * @param type $fstation
     * @param type $fuserid
     * @param type $rqordnum
     * @param type $inspectno
     * @param type $rqcustno
     * @param type $arshipid
     * @param type $cstctid
     * @param type $nocharge
     * @param type $reqno
     * @param type $w9
     * @param type $defvchr
     * @param type $core
     * @param type $corrtdte
     * @param type $cortrkno
     * @param type $corshpdt
     * @param type $qutno
     * @param type $venstkno
     * @param type $rqdate
     * @param type $etadate
     * @param type $epcdate
     * @param type $costland
     * @param type $potype
     * @param type $baleno
     * @param type $pieceno
     * @param type $desname
     * @param type $custfld1
     * @param type $custfld3
     * @param type $custfld9
     * @param type $costcode
     * @param type $washcode
     * @param type $width_cm
     * @param type $length_cm
     * @param type $metricarea
     * @param type $costmetric
     * @param type $linestatus
     * @param type $costamt1
     * @param type $costamt2
     * @param type $costamt3
     * @param type $costamt4
     * @param type $costamt5
     * @param type $shipstatus
     * @param type $substatus
     * @param type $costamt1a
     * @param type $costamt2a
     * @param type $custfld4
     * @param type $custfld8
     * @param type $discid
     * @param type $pcslayers
     * @param type $nolayers
     * @param type $qtynolayr
     * @param type $palqtysqf
     * @param type $palqtypcs
     * @param type $qtyscrap
     * @param type $extcost0
     * @param type $packqty
     * @param type $packid
     * @param type $quantity
     * @param type $packqty0
     * @param type $packqtyrec
     * @param type $abccode
     * @param type $po_from
     * @param type $onhand
     * @param type $tsf_split
     * @param type $est_days
     * @param type $fetamt
     * @param type $qbtxlineid
     * @param type $botldep
     * @param type $upccode
     * @param type $ftaxcode
     * @param type $itemtax
     * @param type $taxable
     * @param type $taxrate
     * @param type $delflag
     * @param type $costgstbd
     * @param type $costunitgb
     * @param type $costlandgb
     * @param type $extcostgb0
     * @param type $extcostln0
     * @param type $extcostlg0
     * @param type $qblistid
     * @param type $costbase
     * @param type $costdisc
     * @param type $discamt
     * @param type $prodbinloc
     * @param type $inspectnoi
     * @param type $dateprod
     * @param type $inspectnoo
     * @param type $palletsout
     * @param type $datefini
     * @param type $qbsolistid
     * @param type $ordcomp
     * @param type $fttamt
     * @param type $qtynolayrf
     * @param type $qtynolayrl
     */
    public function __construct($pono, $itmcount, $itemno, $itmwhs, $itemtype, $descrip, $descrip1, $qtyord, $qtyrec, $qtyrec0, $qtyleft, $netcost, $costunit, $extcost, $etching, $inlndfrt, $othercost, $rebate, $podate, $vendno, $larv_date, $custno, $man_code, $unit, $weight, $cubic, $bckord, $ldate, $vendor_no, $buyer, $reqdate, $class, $subclass1, $subclass2, $subclass3, $glacctno, $glacctexp, $glacctast, $altered, $delivery, $shipped, $fimptaxd, $rimno, $nflg0, $costfact, $discper, $porrnum, $porrnum_id, $awbno, $frghts, $recdcar, $lotno, $serialno, $frec_whs, $itmcomm, $bond, $impdate, $htsno, $htsqty, $ordnum, $locno, $sourceno, $srctype, $fupdtime, $fupddate, $fstation, $fuserid, $rqordnum, $inspectno, $rqcustno, $arshipid, $cstctid, $nocharge, $reqno, $w9, $defvchr, $core, $corrtdte, $cortrkno, $corshpdt, $qutno, $venstkno, $rqdate, $etadate, $epcdate, $costland, $potype, $baleno, $pieceno, $desname, $custfld1, $custfld3, $custfld9, $costcode, $washcode, $width_cm, $length_cm, $metricarea, $costmetric, $linestatus, $costamt1, $costamt2, $costamt3, $costamt4, $costamt5, $shipstatus, $substatus, $costamt1a, $costamt2a, $custfld4, $custfld8, $discid, $pcslayers, $nolayers, $qtynolayr, $palqtysqf, $palqtypcs, $qtyscrap, $extcost0, $packqty, $packid, $quantity, $packqty0, $packqtyrec, $abccode, $po_from, $onhand, $tsf_split, $est_days, $fetamt, $qbtxlineid, $botldep, $upccode, $ftaxcode, $itemtax, $taxable, $taxrate, $delflag, $costgstbd, $costunitgb, $costlandgb, $extcostgb0, $extcostln0, $extcostlg0, $qblistid, $costbase, $costdisc, $discamt, $prodbinloc, $inspectnoi, $dateprod, $inspectnoo, $palletsout, $datefini, $qbsolistid, $ordcomp, $fttamt, $qtynolayrf, $qtynolayrl) {
        $this->_pono = $pono;
        $this->_itmcount = $itmcount;
        $this->_itemno = $itemno;
        $this->_itmwhs = $itmwhs;
        $this->_itemtype = $itemtype;
        $this->_descrip = $descrip;
        $this->_descrip1 = $descrip1;
        $this->_qtyord = $qtyord;
        $this->_qtyrec = $qtyrec;
        $this->_qtyrec0 = $qtyrec0;
        $this->_qtyleft = $qtyleft;
        $this->_netcost = $netcost;
        $this->_costunit = $costunit;
        $this->_extcost = $extcost;
        $this->_etching = $etching;
        $this->_inlndfrt = $inlndfrt;
        $this->_othercost = $othercost;
        $this->_rebate = $rebate;
        $this->_podate = $podate;
        $this->_vendno = $vendno;
        $this->_larv_date = $larv_date;
        $this->_custno = $custno;
        $this->_man_code = $man_code;
        $this->_unit = $unit;
        $this->_weight = $weight;
        $this->_cubic = $cubic;
        $this->_bckord = $bckord;
        $this->_ldate = $ldate;
        $this->_vendor_no = $vendor_no;
        $this->_buyer = $buyer;
        $this->_reqdate = $reqdate;
        $this->_class = $class;
        $this->_subclass1 = $subclass1;
        $this->_subclass2 = $subclass2;
        $this->_subclass3 = $subclass3;
        $this->_glacctno = $glacctno;
        $this->_glacctexp = $glacctexp;
        $this->_glacctast = $glacctast;
        $this->_altered = $altered;
        $this->_delivery = $delivery;
        $this->_shipped = $shipped;
        $this->_fimptaxd = $fimptaxd;
        $this->_rimno = $rimno;
        $this->_nflg0 = $nflg0;
        $this->_costfact = $costfact;
        $this->_discper = $discper;
        $this->_porrnum = $porrnum;
        $this->_porrnum_id = $porrnum_id;
        $this->_awbno = $awbno;
        $this->_frghts = $frghts;
        $this->_recdcar = $recdcar;
        $this->_lotno = $lotno;
        $this->_serialno = $serialno;
        $this->_frec_whs = $frec_whs;
        $this->_itmcomm = $itmcomm;
        $this->_bond = $bond;
        $this->_impdate = $impdate;
        $this->_htsno = $htsno;
        $this->_htsqty = $htsqty;
        $this->_ordnum = $ordnum;
        $this->_locno = $locno;
        $this->_sourceno = $sourceno;
        $this->_srctype = $srctype;
        $this->_fupdtime = $fupdtime;
        $this->_fupddate = $fupddate;
        $this->_fstation = $fstation;
        $this->_fuserid = $fuserid;
        $this->_rqordnum = $rqordnum;
        $this->_inspectno = $inspectno;
        $this->_rqcustno = $rqcustno;
        $this->_arshipid = $arshipid;
        $this->_cstctid = $cstctid;
        $this->_nocharge = $nocharge;
        $this->_reqno = $reqno;
        $this->_w9 = $w9;
        $this->_defvchr = $defvchr;
        $this->_core = $core;
        $this->_corrtdte = $corrtdte;
        $this->_cortrkno = $cortrkno;
        $this->_corshpdt = $corshpdt;
        $this->_qutno = $qutno;
        $this->_venstkno = $venstkno;
        $this->_rqdate = $rqdate;
        $this->_etadate = $etadate;
        $this->_epcdate = $epcdate;
        $this->_costland = $costland;
        $this->_potype = $potype;
        $this->_baleno = $baleno;
        $this->_pieceno = $pieceno;
        $this->_desname = $desname;
        $this->_custfld1 = $custfld1;
        $this->_custfld3 = $custfld3;
        $this->_custfld9 = $custfld9;
        $this->_costcode = $costcode;
        $this->_washcode = $washcode;
        $this->_width_cm = $width_cm;
        $this->_length_cm = $length_cm;
        $this->_metricarea = $metricarea;
        $this->_costmetric = $costmetric;
        $this->_linestatus = $linestatus;
        $this->_costamt1 = $costamt1;
        $this->_costamt2 = $costamt2;
        $this->_costamt3 = $costamt3;
        $this->_costamt4 = $costamt4;
        $this->_costamt5 = $costamt5;
        $this->_shipstatus = $shipstatus;
        $this->_substatus = $substatus;
        $this->_costamt1a = $costamt1a;
        $this->_costamt2a = $costamt2a;
        $this->_custfld4 = $custfld4;
        $this->_custfld8 = $custfld8;
        $this->_discid = $discid;
        $this->_pcslayers = $pcslayers;
        $this->_nolayers = $nolayers;
        $this->_qtynolayr = $qtynolayr;
        $this->_palqtysqf = $palqtysqf;
        $this->_palqtypcs = $palqtypcs;
        $this->_qtyscrap = $qtyscrap;
        $this->_extcost0 = $extcost0;
        $this->_packqty = $packqty;
        $this->_packid = $packid;
        $this->_quantity = $quantity;
        $this->_packqty0 = $packqty0;
        $this->_packqtyrec = $packqtyrec;
        $this->_abccode = $abccode;
        $this->_po_from = $po_from;
        $this->_onhand = $onhand;
        $this->_tsf_split = $tsf_split;
        $this->_est_days = $est_days;
        $this->_fetamt = $fetamt;
        $this->_qbtxlineid = $qbtxlineid;
        $this->_botldep = $botldep;
        $this->_upccode = $upccode;
        $this->_ftaxcode = $ftaxcode;
        $this->_itemtax = $itemtax;
        $this->_taxable = $taxable;
        $this->_taxrate = $taxrate;
        $this->_delflag = $delflag;
        $this->_costgstbd = $costgstbd;
        $this->_costunitgb = $costunitgb;
        $this->_costlandgb = $costlandgb;
        $this->_extcostgb0 = $extcostgb0;
        $this->_extcostln0 = $extcostln0;
        $this->_extcostlg0 = $extcostlg0;
        $this->_qblistid = $qblistid;
        $this->_costbase = $costbase;
        $this->_costdisc = $costdisc;
        $this->_discamt = $discamt;
        $this->_prodbinloc = $prodbinloc;
        $this->_inspectnoi = $inspectnoi;
        $this->_dateprod = $dateprod;
        $this->_inspectnoo = $inspectnoo;
        $this->_palletsout = $palletsout;
        $this->_datefini = $datefini;
        $this->_qbsolistid = $qbsolistid;
        $this->_ordcomp = $ordcomp;
        $this->_fttamt = $fttamt;
        $this->_qtynolayrf = $qtynolayrf;
        $this->_qtynolayrl = $qtynolayrl;
    }

    public static function toString() {
        return self::$_name;
    }

}
