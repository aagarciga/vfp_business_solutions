<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseICPARM00
 */
class BaseICPARM00 {

    /**
     * Private fields
     */
    private static $_name = "ICPARM00";

    /**
     * Protected fields
     */

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
    protected $_itemorigin;

    /**
     * @var Char
     */
    protected $_equivitem;

    /**
     * @var Char
     */
    protected $_upccode;

    /**
     * @var Char
     */
    protected $_descrip;

    /**
     * @var Char
     */
    protected $_descrip1;

    /**
     * @var Char
     */
    protected $_descrip2;

    /**
     * @var Memo
     */
    protected $_extdescrip;

    /**
     * @var Char
     */
    protected $_podescrip;

    /**
     * @var Char
     */
    protected $_podescrip1;

    /**
     * @var Logical
     */
    protected $_hazardous;

    /**
     * @var Numeric
     */
    protected $_weight;

    /**
     * @var Numeric
     */
    protected $_mweight;

    /**
     * @var Numeric
     */
    protected $_masterqty;

    /**
     * @var Numeric
     */
    protected $_length;

    /**
     * @var Numeric
     */
    protected $_width;

    /**
     * @var Numeric
     */
    protected $_height;

    /**
     * @var Char
     */
    protected $_thick;

    /**
     * @var Numeric
     */
    protected $_cubic;

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
    protected $_binlocal;

    /**
     * @var Char
     */
    protected $_costtype;

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
    protected $_costnet;

    /**
     * @var Numeric
     */
    protected $_costfact;

    /**
     * @var Char
     */
    protected $_cstfctdsc;

    /**
     * @var Numeric
     */
    protected $_costunit;

    /**
     * @var Numeric
     */
    protected $_costland;

    /**
     * @var Numeric
     */
    protected $_costavg;

    /**
     * @var Numeric
     */
    protected $_listprice;

    /**
     * @var Logical
     */
    protected $_listprctl;

    /**
     * @var Numeric
     */
    protected $_price1;

    /**
     * @var Numeric
     */
    protected $_prfact1;

    /**
     * @var Numeric
     */
    protected $_prqty1;

    /**
     * @var Numeric
     */
    protected $_prcommi1;

    /**
     * @var Numeric
     */
    protected $_price2;

    /**
     * @var Numeric
     */
    protected $_prfact2;

    /**
     * @var Numeric
     */
    protected $_prqty2;

    /**
     * @var Numeric
     */
    protected $_prcommi2;

    /**
     * @var Numeric
     */
    protected $_price3;

    /**
     * @var Numeric
     */
    protected $_prfact3;

    /**
     * @var Numeric
     */
    protected $_prqty3;

    /**
     * @var Numeric
     */
    protected $_prcommi3;

    /**
     * @var Numeric
     */
    protected $_price4;

    /**
     * @var Numeric
     */
    protected $_prfact4;

    /**
     * @var Numeric
     */
    protected $_prqty4;

    /**
     * @var Numeric
     */
    protected $_prcommi4;

    /**
     * @var Numeric
     */
    protected $_price5;

    /**
     * @var Numeric
     */
    protected $_prfact5;

    /**
     * @var Numeric
     */
    protected $_prqty5;

    /**
     * @var Numeric
     */
    protected $_prcommi5;

    /**
     * @var Numeric
     */
    protected $_price6;

    /**
     * @var Numeric
     */
    protected $_prfact6;

    /**
     * @var Numeric
     */
    protected $_prqty6;

    /**
     * @var Numeric
     */
    protected $_prcommi6;

    /**
     * @var Numeric
     */
    protected $_saleprice;

    /**
     * @var Date
     */
    protected $_salenddte;

    /**
     * @var Numeric
     */
    protected $_pricefact;

    /**
     * @var Char
     */
    protected $_prifctdsc;

    /**
     * @var Date
     */
    protected $_lstprchg;

    /**
     * @var Char
     */
    protected $_pricecode;

    /**
     * @var Numeric
     */
    protected $_onhand;

    /**
     * @var Numeric
     */
    protected $_negonhand;

    /**
     * @var Numeric
     */
    protected $_onhandmax;

    /**
     * @var Numeric
     */
    protected $_committed;

    /**
     * @var Numeric
     */
    protected $_comtoship;

    /**
     * @var Numeric
     */
    protected $_rmaqty;

    /**
     * @var Numeric
     */
    protected $_onorder;

    /**
     * @var Numeric
     */
    protected $_onhandmin;

    /**
     * @var Numeric
     */
    protected $_reordqty;

    /**
     * @var Numeric
     */
    protected $_minordqty;

    /**
     * @var Date
     */
    protected $_stkenddte;

    /**
     * @var Numeric
     */
    protected $_bckordqty;

    /**
     * @var Char
     */
    protected $_vendno;

    /**
     * @var Char
     */
    protected $_venstkno;

    /**
     * @var Date
     */
    protected $_lstsaldte;

    /**
     * @var Date
     */
    protected $_lstbuydte;

    /**
     * @var Date
     */
    protected $_lstarvdte;

    /**
     * @var Date
     */
    protected $_frsbuydte;

    /**
     * @var Date
     */
    protected $_lsticdate;

    /**
     * @var Numeric
     */
    protected $_lsticbal;

    /**
     * @var Date
     */
    protected $_icdatectrl;

    /**
     * @var Logical
     */
    protected $_taxable;

    /**
     * @var Numeric
     */
    protected $_taxrate;

    /**
     * @var Char
     */
    protected $_taxcode;

    /**
     * @var Char
     */
    protected $_imptaxid;

    /**
     * @var Numeric
     */
    protected $_imptaxrate;

    /**
     * @var Numeric
     */
    protected $_ptdqtysld;

    /**
     * @var Numeric
     */
    protected $_ptdsls;

    /**
     * @var Numeric
     */
    protected $_ptdcost;

    /**
     * @var Numeric
     */
    protected $_ytdqtysld;

    /**
     * @var Numeric
     */
    protected $_ytdsls;

    /**
     * @var Numeric
     */
    protected $_ytdcost;

    /**
     * @var Numeric
     */
    protected $_pyqtysld;

    /**
     * @var Numeric
     */
    protected $_pysls;

    /**
     * @var Numeric
     */
    protected $_pycost;

    /**
     * @var Numeric
     */
    protected $_ppyqtysld;

    /**
     * @var Numeric
     */
    protected $_ppysls;

    /**
     * @var Numeric
     */
    protected $_ppycost;

    /**
     * @var Char
     */
    protected $_glacctsal;

    /**
     * @var Char
     */
    protected $_glacctexp;

    /**
     * @var Char
     */
    protected $_glacctast;

    /**
     * @var Char
     */
    protected $_glacctsw;

    /**
     * @var Logical
     */
    protected $_icserial;

    /**
     * @var Numeric
     */
    protected $_recptdqty;

    /**
     * @var Numeric
     */
    protected $_recytdqty;

    /**
     * @var Numeric
     */
    protected $_recptdsls;

    /**
     * @var Numeric
     */
    protected $_recytdsls;

    /**
     * @var Numeric
     */
    protected $_swptdqty;

    /**
     * @var Numeric
     */
    protected $_swytdqty;

    /**
     * @var Numeric
     */
    protected $_swptdsls;

    /**
     * @var Numeric
     */
    protected $_swytdsls;

    /**
     * @var Numeric
     */
    protected $_adjptdqty;

    /**
     * @var Numeric
     */
    protected $_adjytdqty;

    /**
     * @var Numeric
     */
    protected $_adjptdsls;

    /**
     * @var Numeric
     */
    protected $_adjytdsls;

    /**
     * @var Numeric
     */
    protected $_gptdqty;

    /**
     * @var Numeric
     */
    protected $_gytdqty;

    /**
     * @var Numeric
     */
    protected $_gptdsls;

    /**
     * @var Numeric
     */
    protected $_gytdsls;

    /**
     * @var Numeric
     */
    protected $_rmptdqty;

    /**
     * @var Numeric
     */
    protected $_rmytdqty;

    /**
     * @var Numeric
     */
    protected $_rmptdsls;

    /**
     * @var Numeric
     */
    protected $_rmytdsls;

    /**
     * @var Numeric
     */
    protected $_onbond;

    /**
     * @var Memo
     */
    protected $_picture_fi;

    /**
     * @var Char
     */
    protected $_man_code;

    /**
     * @var Char
     */
    protected $_metric;

    /**
     * @var Char
     */
    protected $_catpageno;

    /**
     * @var Char
     */
    protected $_facttreat;

    /**
     * @var Numeric
     */
    protected $_masterd;

    /**
     * @var Char
     */
    protected $_metricd;

    /**
     * @var Char
     */
    protected $_bmisc;

    /**
     * @var Logical
     */
    protected $_deactive;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Char
     */
    protected $_custfld1;

    /**
     * @var Char
     */
    protected $_custfld2;

    /**
     * @var Char
     */
    protected $_custfld3;

    /**
     * @var Char
     */
    protected $_custfld4;

    /**
     * @var Char
     */
    protected $_custfld5;

    /**
     * @var Char
     */
    protected $_custfld6;

    /**
     * @var Char
     */
    protected $_custfld7;

    /**
     * @var Char
     */
    protected $_custfld8;

    /**
     * @var Char
     */
    protected $_order;

    /**
     * @var Memo
     */
    protected $_notes;

    /**
     * @var Char
     */
    protected $_mfcstkno;

    /**
     * @var Logical
     */
    protected $_lots;

    /**
     * @var Date
     */
    protected $_salbegdte;

    /**
     * @var Char
     */
    protected $_costcode;

    /**
     * @var Char
     */
    protected $_label2;

    /**
     * @var Char
     */
    protected $_type2;

    /**
     * @var Char
     */
    protected $_label3;

    /**
     * @var Char
     */
    protected $_type3;

    /**
     * @var Char
     */
    protected $_label4;

    /**
     * @var Char
     */
    protected $_type4;

    /**
     * @var Char
     */
    protected $_label5;

    /**
     * @var Char
     */
    protected $_type5;

    /**
     * @var Char
     */
    protected $_label6;

    /**
     * @var Char
     */
    protected $_type6;

    /**
     * @var Char
     */
    protected $_locno;

    /**
     * @var Numeric
     */
    protected $_cstloadfct;

    /**
     * @var Numeric
     */
    protected $_costload;

    /**
     * @var Numeric
     */
    protected $_oldonhand;

    /**
     * @var Date
     */
    protected $_oldohdate;

    /**
     * @var Char
     */
    protected $_glacctwip;

    /**
     * @var Char
     */
    protected $_glacctswcs;

    /**
     * @var Char
     */
    protected $_custfld9;

    /**
     * @var Logical
     */
    protected $_spclflag;

    /**
     * @var Logical
     */
    protected $_reswhs;

    /**
     * @var Char
     */
    protected $_webdescrip;

    /**
     * @var Logical
     */
    protected $_websyncflg;

    /**
     * @var Logical
     */
    protected $_webactive;

    /**
     * @var Char
     */
    protected $_usdasdsc;

    /**
     * @var Char
     */
    protected $_vendor;

    /**
     * @var Char
     */
    protected $_kit;

    /**
     * @var Char
     */
    protected $_model;

    /**
     * @var Char
     */
    protected $_tagtype;

    /**
     * @var Date
     */
    protected $_rllupdate;

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
     * @var Numeric
     */
    protected $_pricecore1;

    /**
     * @var Numeric
     */
    protected $_pricecore2;

    /**
     * @var Numeric
     */
    protected $_pricecore3;

    /**
     * @var Numeric
     */
    protected $_pricecore4;

    /**
     * @var Numeric
     */
    protected $_pricecore5;

    /**
     * @var Numeric
     */
    protected $_pricecore6;

    /**
     * @var Memo
     */
    protected $_notegen;

    /**
     * @var Numeric
     */
    protected $_corebase;

    /**
     * @var Numeric
     */
    protected $_corenet;

    /**
     * @var Numeric
     */
    protected $_coreunit;

    /**
     * @var Numeric
     */
    protected $_listcore;

    /**
     * @var Date
     */
    protected $_landcstdte;

    /**
     * @var Numeric
     */
    protected $_leadtime;

    /**
     * @var Logical
     */
    protected $_swcogsflag;

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
    protected $_brdqtysqf;

    /**
     * @var Numeric
     */
    protected $_comper2;

    /**
     * @var Numeric
     */
    protected $_comr1f;

    /**
     * @var Numeric
     */
    protected $_comr2f;

    /**
     * @var Numeric
     */
    protected $_comr1t;

    /**
     * @var Numeric
     */
    protected $_comr2t;

    /**
     * @var Numeric
     */
    protected $_comper1;

    /**
     * @var Numeric
     */
    protected $_comtype;

    /**
     * @var Char
     */
    protected $_abccode;

    /**
     * @var Char
     */
    protected $_designer;

    /**
     * @var Char
     */
    protected $_rettrxcode;

    /**
     * @var Logical
     */
    protected $_prototype;

    /**
     * @var Logical
     */
    protected $_inspection;

    /**
     * @var Date
     */
    protected $_stndcstdte;

    /**
     * @var Numeric
     */
    protected $_coststnd;

    /**
     * @var Numeric
     */
    protected $_onconsign;

    /**
     * @var Numeric
     */
    protected $_onconsignp;

    /**
     * @var Numeric
     */
    protected $_intran;

    /**
     * @var Numeric
     */
    protected $_metricarea;

    /**
     * @var Logical
     */
    protected $_consflag;

    /**
     * @var Numeric
     */
    protected $_epcdays;

    /**
     * @var Numeric
     */
    protected $_etadays;

    /**
     * @var Date
     */
    protected $_introend;

    /**
     * @var Char
     */
    protected $_introcode;

    /**
     * @var Date
     */
    protected $_introdate;

    /**
     * @var Char
     */
    protected $_designnam;

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
    protected $_qtyscrap;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Date
     */
    protected $_blockdates;

    /**
     * @var Date
     */
    protected $_blockdatee;

    /**
     * @var Char
     */
    protected $_minmaxdate;

    /**
     * @var Numeric
     */
    protected $_fetamt;

    /**
     * @var Logical
     */
    protected $_picnoupd;

    /**
     * @var Char
     */
    protected $_upccodein;

    /**
     * @var Numeric
     */
    protected $_caselength;

    /**
     * @var Numeric
     */
    protected $_casewidth;

    /**
     * @var Numeric
     */
    protected $_caseheight;

    /**
     * @var Char
     */
    protected $_countryorg;

    /**
     * @var Numeric
     */
    protected $_discamt;

    /**
     * @var Char
     */
    protected $_uncode;

    /**
     * @var Numeric
     */
    protected $_botldep;

    /**
     * @var Numeric
     */
    protected $_costhi6mth;

    /**
     * @var Char
     */
    protected $_mm_code;

    /**
     * @var Logical
     */
    protected $_costgstbd;

    /**
     * @var Char
     */
    protected $_buyercode;

    /**
     * @var Numeric
     */
    protected $_shpcartid;

    /**
     * @var Memo
     */
    protected $_icstat;

    /**
     * Getters
     */

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
    public function getItemorigin() {
        return $this->_itemorigin;
    }

    /**
     * @return Char
     */
    public function getEquivitem() {
        return $this->_equivitem;
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
     * @return Char
     */
    public function getDescrip2() {
        return $this->_descrip2;
    }

    /**
     * @return Memo
     */
    public function getExtdescrip() {
        return $this->_extdescrip;
    }

    /**
     * @return Char
     */
    public function getPodescrip() {
        return $this->_podescrip;
    }

    /**
     * @return Char
     */
    public function getPodescrip1() {
        return $this->_podescrip1;
    }

    /**
     * @return Logical
     */
    public function getHazardous() {
        return $this->_hazardous;
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
    public function getMweight() {
        return $this->_mweight;
    }

    /**
     * @return Numeric
     */
    public function getMasterqty() {
        return $this->_masterqty;
    }

    /**
     * @return Numeric
     */
    public function getLength() {
        return $this->_length;
    }

    /**
     * @return Numeric
     */
    public function getWidth() {
        return $this->_width;
    }

    /**
     * @return Numeric
     */
    public function getHeight() {
        return $this->_height;
    }

    /**
     * @return Char
     */
    public function getThick() {
        return $this->_thick;
    }

    /**
     * @return Numeric
     */
    public function getCubic() {
        return $this->_cubic;
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
    public function getBinlocal() {
        return $this->_binlocal;
    }

    /**
     * @return Char
     */
    public function getCosttype() {
        return $this->_costtype;
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
    public function getCostnet() {
        return $this->_costnet;
    }

    /**
     * @return Numeric
     */
    public function getCostfact() {
        return $this->_costfact;
    }

    /**
     * @return Char
     */
    public function getCstfctdsc() {
        return $this->_cstfctdsc;
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
    public function getCostland() {
        return $this->_costland;
    }

    /**
     * @return Numeric
     */
    public function getCostavg() {
        return $this->_costavg;
    }

    /**
     * @return Numeric
     */
    public function getListprice() {
        return $this->_listprice;
    }

    /**
     * @return Logical
     */
    public function getListprctl() {
        return $this->_listprctl;
    }

    /**
     * @return Numeric
     */
    public function getPrice1() {
        return $this->_price1;
    }

    /**
     * @return Numeric
     */
    public function getPrfact1() {
        return $this->_prfact1;
    }

    /**
     * @return Numeric
     */
    public function getPrqty1() {
        return $this->_prqty1;
    }

    /**
     * @return Numeric
     */
    public function getPrcommi1() {
        return $this->_prcommi1;
    }

    /**
     * @return Numeric
     */
    public function getPrice2() {
        return $this->_price2;
    }

    /**
     * @return Numeric
     */
    public function getPrfact2() {
        return $this->_prfact2;
    }

    /**
     * @return Numeric
     */
    public function getPrqty2() {
        return $this->_prqty2;
    }

    /**
     * @return Numeric
     */
    public function getPrcommi2() {
        return $this->_prcommi2;
    }

    /**
     * @return Numeric
     */
    public function getPrice3() {
        return $this->_price3;
    }

    /**
     * @return Numeric
     */
    public function getPrfact3() {
        return $this->_prfact3;
    }

    /**
     * @return Numeric
     */
    public function getPrqty3() {
        return $this->_prqty3;
    }

    /**
     * @return Numeric
     */
    public function getPrcommi3() {
        return $this->_prcommi3;
    }

    /**
     * @return Numeric
     */
    public function getPrice4() {
        return $this->_price4;
    }

    /**
     * @return Numeric
     */
    public function getPrfact4() {
        return $this->_prfact4;
    }

    /**
     * @return Numeric
     */
    public function getPrqty4() {
        return $this->_prqty4;
    }

    /**
     * @return Numeric
     */
    public function getPrcommi4() {
        return $this->_prcommi4;
    }

    /**
     * @return Numeric
     */
    public function getPrice5() {
        return $this->_price5;
    }

    /**
     * @return Numeric
     */
    public function getPrfact5() {
        return $this->_prfact5;
    }

    /**
     * @return Numeric
     */
    public function getPrqty5() {
        return $this->_prqty5;
    }

    /**
     * @return Numeric
     */
    public function getPrcommi5() {
        return $this->_prcommi5;
    }

    /**
     * @return Numeric
     */
    public function getPrice6() {
        return $this->_price6;
    }

    /**
     * @return Numeric
     */
    public function getPrfact6() {
        return $this->_prfact6;
    }

    /**
     * @return Numeric
     */
    public function getPrqty6() {
        return $this->_prqty6;
    }

    /**
     * @return Numeric
     */
    public function getPrcommi6() {
        return $this->_prcommi6;
    }

    /**
     * @return Numeric
     */
    public function getSaleprice() {
        return $this->_saleprice;
    }

    /**
     * @return Date
     */
    public function getSalenddte() {
        return $this->_salenddte;
    }

    /**
     * @return Numeric
     */
    public function getPricefact() {
        return $this->_pricefact;
    }

    /**
     * @return Char
     */
    public function getPrifctdsc() {
        return $this->_prifctdsc;
    }

    /**
     * @return Date
     */
    public function getLstprchg() {
        return $this->_lstprchg;
    }

    /**
     * @return Char
     */
    public function getPricecode() {
        return $this->_pricecode;
    }

    /**
     * @return Numeric
     */
    public function getOnhand() {
        return $this->_onhand;
    }

    /**
     * @return Numeric
     */
    public function getNegonhand() {
        return $this->_negonhand;
    }

    /**
     * @return Numeric
     */
    public function getOnhandmax() {
        return $this->_onhandmax;
    }

    /**
     * @return Numeric
     */
    public function getCommitted() {
        return $this->_committed;
    }

    /**
     * @return Numeric
     */
    public function getComtoship() {
        return $this->_comtoship;
    }

    /**
     * @return Numeric
     */
    public function getRmaqty() {
        return $this->_rmaqty;
    }

    /**
     * @return Numeric
     */
    public function getOnorder() {
        return $this->_onorder;
    }

    /**
     * @return Numeric
     */
    public function getOnhandmin() {
        return $this->_onhandmin;
    }

    /**
     * @return Numeric
     */
    public function getReordqty() {
        return $this->_reordqty;
    }

    /**
     * @return Numeric
     */
    public function getMinordqty() {
        return $this->_minordqty;
    }

    /**
     * @return Date
     */
    public function getStkenddte() {
        return $this->_stkenddte;
    }

    /**
     * @return Numeric
     */
    public function getBckordqty() {
        return $this->_bckordqty;
    }

    /**
     * @return Char
     */
    public function getVendno() {
        return $this->_vendno;
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
    public function getLstsaldte() {
        return $this->_lstsaldte;
    }

    /**
     * @return Date
     */
    public function getLstbuydte() {
        return $this->_lstbuydte;
    }

    /**
     * @return Date
     */
    public function getLstarvdte() {
        return $this->_lstarvdte;
    }

    /**
     * @return Date
     */
    public function getFrsbuydte() {
        return $this->_frsbuydte;
    }

    /**
     * @return Date
     */
    public function getLsticdate() {
        return $this->_lsticdate;
    }

    /**
     * @return Numeric
     */
    public function getLsticbal() {
        return $this->_lsticbal;
    }

    /**
     * @return Date
     */
    public function getIcdatectrl() {
        return $this->_icdatectrl;
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
     * @return Char
     */
    public function getTaxcode() {
        return $this->_taxcode;
    }

    /**
     * @return Char
     */
    public function getImptaxid() {
        return $this->_imptaxid;
    }

    /**
     * @return Numeric
     */
    public function getImptaxrate() {
        return $this->_imptaxrate;
    }

    /**
     * @return Numeric
     */
    public function getPtdqtysld() {
        return $this->_ptdqtysld;
    }

    /**
     * @return Numeric
     */
    public function getPtdsls() {
        return $this->_ptdsls;
    }

    /**
     * @return Numeric
     */
    public function getPtdcost() {
        return $this->_ptdcost;
    }

    /**
     * @return Numeric
     */
    public function getYtdqtysld() {
        return $this->_ytdqtysld;
    }

    /**
     * @return Numeric
     */
    public function getYtdsls() {
        return $this->_ytdsls;
    }

    /**
     * @return Numeric
     */
    public function getYtdcost() {
        return $this->_ytdcost;
    }

    /**
     * @return Numeric
     */
    public function getPyqtysld() {
        return $this->_pyqtysld;
    }

    /**
     * @return Numeric
     */
    public function getPysls() {
        return $this->_pysls;
    }

    /**
     * @return Numeric
     */
    public function getPycost() {
        return $this->_pycost;
    }

    /**
     * @return Numeric
     */
    public function getPpyqtysld() {
        return $this->_ppyqtysld;
    }

    /**
     * @return Numeric
     */
    public function getPpysls() {
        return $this->_ppysls;
    }

    /**
     * @return Numeric
     */
    public function getPpycost() {
        return $this->_ppycost;
    }

    /**
     * @return Char
     */
    public function getGlacctsal() {
        return $this->_glacctsal;
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
     * @return Char
     */
    public function getGlacctsw() {
        return $this->_glacctsw;
    }

    /**
     * @return Logical
     */
    public function getIcserial() {
        return $this->_icserial;
    }

    /**
     * @return Numeric
     */
    public function getRecptdqty() {
        return $this->_recptdqty;
    }

    /**
     * @return Numeric
     */
    public function getRecytdqty() {
        return $this->_recytdqty;
    }

    /**
     * @return Numeric
     */
    public function getRecptdsls() {
        return $this->_recptdsls;
    }

    /**
     * @return Numeric
     */
    public function getRecytdsls() {
        return $this->_recytdsls;
    }

    /**
     * @return Numeric
     */
    public function getSwptdqty() {
        return $this->_swptdqty;
    }

    /**
     * @return Numeric
     */
    public function getSwytdqty() {
        return $this->_swytdqty;
    }

    /**
     * @return Numeric
     */
    public function getSwptdsls() {
        return $this->_swptdsls;
    }

    /**
     * @return Numeric
     */
    public function getSwytdsls() {
        return $this->_swytdsls;
    }

    /**
     * @return Numeric
     */
    public function getAdjptdqty() {
        return $this->_adjptdqty;
    }

    /**
     * @return Numeric
     */
    public function getAdjytdqty() {
        return $this->_adjytdqty;
    }

    /**
     * @return Numeric
     */
    public function getAdjptdsls() {
        return $this->_adjptdsls;
    }

    /**
     * @return Numeric
     */
    public function getAdjytdsls() {
        return $this->_adjytdsls;
    }

    /**
     * @return Numeric
     */
    public function getGptdqty() {
        return $this->_gptdqty;
    }

    /**
     * @return Numeric
     */
    public function getGytdqty() {
        return $this->_gytdqty;
    }

    /**
     * @return Numeric
     */
    public function getGptdsls() {
        return $this->_gptdsls;
    }

    /**
     * @return Numeric
     */
    public function getGytdsls() {
        return $this->_gytdsls;
    }

    /**
     * @return Numeric
     */
    public function getRmptdqty() {
        return $this->_rmptdqty;
    }

    /**
     * @return Numeric
     */
    public function getRmytdqty() {
        return $this->_rmytdqty;
    }

    /**
     * @return Numeric
     */
    public function getRmptdsls() {
        return $this->_rmptdsls;
    }

    /**
     * @return Numeric
     */
    public function getRmytdsls() {
        return $this->_rmytdsls;
    }

    /**
     * @return Numeric
     */
    public function getOnbond() {
        return $this->_onbond;
    }

    /**
     * @return Memo
     */
    public function getPicture_fi() {
        return $this->_picture_fi;
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
    public function getMetric() {
        return $this->_metric;
    }

    /**
     * @return Char
     */
    public function getCatpageno() {
        return $this->_catpageno;
    }

    /**
     * @return Char
     */
    public function getFacttreat() {
        return $this->_facttreat;
    }

    /**
     * @return Numeric
     */
    public function getMasterd() {
        return $this->_masterd;
    }

    /**
     * @return Char
     */
    public function getMetricd() {
        return $this->_metricd;
    }

    /**
     * @return Char
     */
    public function getBmisc() {
        return $this->_bmisc;
    }

    /**
     * @return Logical
     */
    public function getDeactive() {
        return $this->_deactive;
    }

    /**
     * @return Logical
     */
    public function getNflg0() {
        return $this->_nflg0;
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
    public function getCustfld2() {
        return $this->_custfld2;
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
    public function getCustfld4() {
        return $this->_custfld4;
    }

    /**
     * @return Char
     */
    public function getCustfld5() {
        return $this->_custfld5;
    }

    /**
     * @return Char
     */
    public function getCustfld6() {
        return $this->_custfld6;
    }

    /**
     * @return Char
     */
    public function getCustfld7() {
        return $this->_custfld7;
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
    public function getOrder() {
        return $this->_order;
    }

    /**
     * @return Memo
     */
    public function getNotes() {
        return $this->_notes;
    }

    /**
     * @return Char
     */
    public function getMfcstkno() {
        return $this->_mfcstkno;
    }

    /**
     * @return Logical
     */
    public function getLots() {
        return $this->_lots;
    }

    /**
     * @return Date
     */
    public function getSalbegdte() {
        return $this->_salbegdte;
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
    public function getLabel2() {
        return $this->_label2;
    }

    /**
     * @return Char
     */
    public function getType2() {
        return $this->_type2;
    }

    /**
     * @return Char
     */
    public function getLabel3() {
        return $this->_label3;
    }

    /**
     * @return Char
     */
    public function getType3() {
        return $this->_type3;
    }

    /**
     * @return Char
     */
    public function getLabel4() {
        return $this->_label4;
    }

    /**
     * @return Char
     */
    public function getType4() {
        return $this->_type4;
    }

    /**
     * @return Char
     */
    public function getLabel5() {
        return $this->_label5;
    }

    /**
     * @return Char
     */
    public function getType5() {
        return $this->_type5;
    }

    /**
     * @return Char
     */
    public function getLabel6() {
        return $this->_label6;
    }

    /**
     * @return Char
     */
    public function getType6() {
        return $this->_type6;
    }

    /**
     * @return Char
     */
    public function getLocno() {
        return $this->_locno;
    }

    /**
     * @return Numeric
     */
    public function getCstloadfct() {
        return $this->_cstloadfct;
    }

    /**
     * @return Numeric
     */
    public function getCostload() {
        return $this->_costload;
    }

    /**
     * @return Numeric
     */
    public function getOldonhand() {
        return $this->_oldonhand;
    }

    /**
     * @return Date
     */
    public function getOldohdate() {
        return $this->_oldohdate;
    }

    /**
     * @return Char
     */
    public function getGlacctwip() {
        return $this->_glacctwip;
    }

    /**
     * @return Char
     */
    public function getGlacctswcs() {
        return $this->_glacctswcs;
    }

    /**
     * @return Char
     */
    public function getCustfld9() {
        return $this->_custfld9;
    }

    /**
     * @return Logical
     */
    public function getSpclflag() {
        return $this->_spclflag;
    }

    /**
     * @return Logical
     */
    public function getReswhs() {
        return $this->_reswhs;
    }

    /**
     * @return Char
     */
    public function getWebdescrip() {
        return $this->_webdescrip;
    }

    /**
     * @return Logical
     */
    public function getWebsyncflg() {
        return $this->_websyncflg;
    }

    /**
     * @return Logical
     */
    public function getWebactive() {
        return $this->_webactive;
    }

    /**
     * @return Char
     */
    public function getUsdasdsc() {
        return $this->_usdasdsc;
    }

    /**
     * @return Char
     */
    public function getVendor() {
        return $this->_vendor;
    }

    /**
     * @return Char
     */
    public function getKit() {
        return $this->_kit;
    }

    /**
     * @return Char
     */
    public function getModel() {
        return $this->_model;
    }

    /**
     * @return Char
     */
    public function getTagtype() {
        return $this->_tagtype;
    }

    /**
     * @return Date
     */
    public function getRllupdate() {
        return $this->_rllupdate;
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
     * @return Numeric
     */
    public function getPricecore1() {
        return $this->_pricecore1;
    }

    /**
     * @return Numeric
     */
    public function getPricecore2() {
        return $this->_pricecore2;
    }

    /**
     * @return Numeric
     */
    public function getPricecore3() {
        return $this->_pricecore3;
    }

    /**
     * @return Numeric
     */
    public function getPricecore4() {
        return $this->_pricecore4;
    }

    /**
     * @return Numeric
     */
    public function getPricecore5() {
        return $this->_pricecore5;
    }

    /**
     * @return Numeric
     */
    public function getPricecore6() {
        return $this->_pricecore6;
    }

    /**
     * @return Memo
     */
    public function getNotegen() {
        return $this->_notegen;
    }

    /**
     * @return Numeric
     */
    public function getCorebase() {
        return $this->_corebase;
    }

    /**
     * @return Numeric
     */
    public function getCorenet() {
        return $this->_corenet;
    }

    /**
     * @return Numeric
     */
    public function getCoreunit() {
        return $this->_coreunit;
    }

    /**
     * @return Numeric
     */
    public function getListcore() {
        return $this->_listcore;
    }

    /**
     * @return Date
     */
    public function getLandcstdte() {
        return $this->_landcstdte;
    }

    /**
     * @return Numeric
     */
    public function getLeadtime() {
        return $this->_leadtime;
    }

    /**
     * @return Logical
     */
    public function getSwcogsflag() {
        return $this->_swcogsflag;
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
    public function getBrdqtysqf() {
        return $this->_brdqtysqf;
    }

    /**
     * @return Numeric
     */
    public function getComper2() {
        return $this->_comper2;
    }

    /**
     * @return Numeric
     */
    public function getComr1f() {
        return $this->_comr1f;
    }

    /**
     * @return Numeric
     */
    public function getComr2f() {
        return $this->_comr2f;
    }

    /**
     * @return Numeric
     */
    public function getComr1t() {
        return $this->_comr1t;
    }

    /**
     * @return Numeric
     */
    public function getComr2t() {
        return $this->_comr2t;
    }

    /**
     * @return Numeric
     */
    public function getComper1() {
        return $this->_comper1;
    }

    /**
     * @return Numeric
     */
    public function getComtype() {
        return $this->_comtype;
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
    public function getDesigner() {
        return $this->_designer;
    }

    /**
     * @return Char
     */
    public function getRettrxcode() {
        return $this->_rettrxcode;
    }

    /**
     * @return Logical
     */
    public function getPrototype() {
        return $this->_prototype;
    }

    /**
     * @return Logical
     */
    public function getInspection() {
        return $this->_inspection;
    }

    /**
     * @return Date
     */
    public function getStndcstdte() {
        return $this->_stndcstdte;
    }

    /**
     * @return Numeric
     */
    public function getCoststnd() {
        return $this->_coststnd;
    }

    /**
     * @return Numeric
     */
    public function getOnconsign() {
        return $this->_onconsign;
    }

    /**
     * @return Numeric
     */
    public function getOnconsignp() {
        return $this->_onconsignp;
    }

    /**
     * @return Numeric
     */
    public function getIntran() {
        return $this->_intran;
    }

    /**
     * @return Numeric
     */
    public function getMetricarea() {
        return $this->_metricarea;
    }

    /**
     * @return Logical
     */
    public function getConsflag() {
        return $this->_consflag;
    }

    /**
     * @return Numeric
     */
    public function getEpcdays() {
        return $this->_epcdays;
    }

    /**
     * @return Numeric
     */
    public function getEtadays() {
        return $this->_etadays;
    }

    /**
     * @return Date
     */
    public function getIntroend() {
        return $this->_introend;
    }

    /**
     * @return Char
     */
    public function getIntrocode() {
        return $this->_introcode;
    }

    /**
     * @return Date
     */
    public function getIntrodate() {
        return $this->_introdate;
    }

    /**
     * @return Char
     */
    public function getDesignnam() {
        return $this->_designnam;
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
    public function getQtyscrap() {
        return $this->_qtyscrap;
    }

    /**
     * @return Char
     */
    public function getQblistid() {
        return $this->_qblistid;
    }

    /**
     * @return Date
     */
    public function getBlockdates() {
        return $this->_blockdates;
    }

    /**
     * @return Date
     */
    public function getBlockdatee() {
        return $this->_blockdatee;
    }

    /**
     * @return Char
     */
    public function getMinmaxdate() {
        return $this->_minmaxdate;
    }

    /**
     * @return Numeric
     */
    public function getFetamt() {
        return $this->_fetamt;
    }

    /**
     * @return Logical
     */
    public function getPicnoupd() {
        return $this->_picnoupd;
    }

    /**
     * @return Char
     */
    public function getUpccodein() {
        return $this->_upccodein;
    }

    /**
     * @return Numeric
     */
    public function getCaselength() {
        return $this->_caselength;
    }

    /**
     * @return Numeric
     */
    public function getCasewidth() {
        return $this->_casewidth;
    }

    /**
     * @return Numeric
     */
    public function getCaseheight() {
        return $this->_caseheight;
    }

    /**
     * @return Char
     */
    public function getCountryorg() {
        return $this->_countryorg;
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
    public function getUncode() {
        return $this->_uncode;
    }

    /**
     * @return Numeric
     */
    public function getBotldep() {
        return $this->_botldep;
    }

    /**
     * @return Numeric
     */
    public function getCosthi6mth() {
        return $this->_costhi6mth;
    }

    /**
     * @return Char
     */
    public function getMm_code() {
        return $this->_mm_code;
    }

    /**
     * @return Logical
     */
    public function getCostgstbd() {
        return $this->_costgstbd;
    }

    /**
     * @return Char
     */
    public function getBuyercode() {
        return $this->_buyercode;
    }

    /**
     * @return Numeric
     */
    public function getShpcartid() {
        return $this->_shpcartid;
    }

    /**
     * @return Memo
     */
    public function getIcstat() {
        return $this->_icstat;
    }

    /**
     * Setters
     */

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
    public function setItemorigin($value) {
        $this->_itemorigin = $value;
    }

    /**
     * @param Char
     */
    public function setEquivitem($value) {
        $this->_equivitem = $value;
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
     * @param Char
     */
    public function setDescrip2($value) {
        $this->_descrip2 = $value;
    }

    /**
     * @param Memo
     */
    public function setExtdescrip($value) {
        $this->_extdescrip = $value;
    }

    /**
     * @param Char
     */
    public function setPodescrip($value) {
        $this->_podescrip = $value;
    }

    /**
     * @param Char
     */
    public function setPodescrip1($value) {
        $this->_podescrip1 = $value;
    }

    /**
     * @param Logical
     */
    public function setHazardous($value) {
        $this->_hazardous = $value;
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
    public function setMweight($value) {
        $this->_mweight = $value;
    }

    /**
     * @param Numeric
     */
    public function setMasterqty($value) {
        $this->_masterqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setLength($value) {
        $this->_length = $value;
    }

    /**
     * @param Numeric
     */
    public function setWidth($value) {
        $this->_width = $value;
    }

    /**
     * @param Numeric
     */
    public function setHeight($value) {
        $this->_height = $value;
    }

    /**
     * @param Char
     */
    public function setThick($value) {
        $this->_thick = $value;
    }

    /**
     * @param Numeric
     */
    public function setCubic($value) {
        $this->_cubic = $value;
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
    public function setBinlocal($value) {
        $this->_binlocal = $value;
    }

    /**
     * @param Char
     */
    public function setCosttype($value) {
        $this->_costtype = $value;
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
    public function setCostnet($value) {
        $this->_costnet = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostfact($value) {
        $this->_costfact = $value;
    }

    /**
     * @param Char
     */
    public function setCstfctdsc($value) {
        $this->_cstfctdsc = $value;
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
    public function setCostland($value) {
        $this->_costland = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostavg($value) {
        $this->_costavg = $value;
    }

    /**
     * @param Numeric
     */
    public function setListprice($value) {
        $this->_listprice = $value;
    }

    /**
     * @param Logical
     */
    public function setListprctl($value) {
        $this->_listprctl = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrice1($value) {
        $this->_price1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrfact1($value) {
        $this->_prfact1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrqty1($value) {
        $this->_prqty1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrcommi1($value) {
        $this->_prcommi1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrice2($value) {
        $this->_price2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrfact2($value) {
        $this->_prfact2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrqty2($value) {
        $this->_prqty2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrcommi2($value) {
        $this->_prcommi2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrice3($value) {
        $this->_price3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrfact3($value) {
        $this->_prfact3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrqty3($value) {
        $this->_prqty3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrcommi3($value) {
        $this->_prcommi3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrice4($value) {
        $this->_price4 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrfact4($value) {
        $this->_prfact4 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrqty4($value) {
        $this->_prqty4 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrcommi4($value) {
        $this->_prcommi4 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrice5($value) {
        $this->_price5 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrfact5($value) {
        $this->_prfact5 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrqty5($value) {
        $this->_prqty5 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrcommi5($value) {
        $this->_prcommi5 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrice6($value) {
        $this->_price6 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrfact6($value) {
        $this->_prfact6 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrqty6($value) {
        $this->_prqty6 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPrcommi6($value) {
        $this->_prcommi6 = $value;
    }

    /**
     * @param Numeric
     */
    public function setSaleprice($value) {
        $this->_saleprice = $value;
    }

    /**
     * @param Date
     */
    public function setSalenddte($value) {
        $this->_salenddte = $value;
    }

    /**
     * @param Numeric
     */
    public function setPricefact($value) {
        $this->_pricefact = $value;
    }

    /**
     * @param Char
     */
    public function setPrifctdsc($value) {
        $this->_prifctdsc = $value;
    }

    /**
     * @param Date
     */
    public function setLstprchg($value) {
        $this->_lstprchg = $value;
    }

    /**
     * @param Char
     */
    public function setPricecode($value) {
        $this->_pricecode = $value;
    }

    /**
     * @param Numeric
     */
    public function setOnhand($value) {
        $this->_onhand = $value;
    }

    /**
     * @param Numeric
     */
    public function setNegonhand($value) {
        $this->_negonhand = $value;
    }

    /**
     * @param Numeric
     */
    public function setOnhandmax($value) {
        $this->_onhandmax = $value;
    }

    /**
     * @param Numeric
     */
    public function setCommitted($value) {
        $this->_committed = $value;
    }

    /**
     * @param Numeric
     */
    public function setComtoship($value) {
        $this->_comtoship = $value;
    }

    /**
     * @param Numeric
     */
    public function setRmaqty($value) {
        $this->_rmaqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setOnorder($value) {
        $this->_onorder = $value;
    }

    /**
     * @param Numeric
     */
    public function setOnhandmin($value) {
        $this->_onhandmin = $value;
    }

    /**
     * @param Numeric
     */
    public function setReordqty($value) {
        $this->_reordqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setMinordqty($value) {
        $this->_minordqty = $value;
    }

    /**
     * @param Date
     */
    public function setStkenddte($value) {
        $this->_stkenddte = $value;
    }

    /**
     * @param Numeric
     */
    public function setBckordqty($value) {
        $this->_bckordqty = $value;
    }

    /**
     * @param Char
     */
    public function setVendno($value) {
        $this->_vendno = $value;
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
    public function setLstsaldte($value) {
        $this->_lstsaldte = $value;
    }

    /**
     * @param Date
     */
    public function setLstbuydte($value) {
        $this->_lstbuydte = $value;
    }

    /**
     * @param Date
     */
    public function setLstarvdte($value) {
        $this->_lstarvdte = $value;
    }

    /**
     * @param Date
     */
    public function setFrsbuydte($value) {
        $this->_frsbuydte = $value;
    }

    /**
     * @param Date
     */
    public function setLsticdate($value) {
        $this->_lsticdate = $value;
    }

    /**
     * @param Numeric
     */
    public function setLsticbal($value) {
        $this->_lsticbal = $value;
    }

    /**
     * @param Date
     */
    public function setIcdatectrl($value) {
        $this->_icdatectrl = $value;
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
     * @param Char
     */
    public function setTaxcode($value) {
        $this->_taxcode = $value;
    }

    /**
     * @param Char
     */
    public function setImptaxid($value) {
        $this->_imptaxid = $value;
    }

    /**
     * @param Numeric
     */
    public function setImptaxrate($value) {
        $this->_imptaxrate = $value;
    }

    /**
     * @param Numeric
     */
    public function setPtdqtysld($value) {
        $this->_ptdqtysld = $value;
    }

    /**
     * @param Numeric
     */
    public function setPtdsls($value) {
        $this->_ptdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setPtdcost($value) {
        $this->_ptdcost = $value;
    }

    /**
     * @param Numeric
     */
    public function setYtdqtysld($value) {
        $this->_ytdqtysld = $value;
    }

    /**
     * @param Numeric
     */
    public function setYtdsls($value) {
        $this->_ytdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setYtdcost($value) {
        $this->_ytdcost = $value;
    }

    /**
     * @param Numeric
     */
    public function setPyqtysld($value) {
        $this->_pyqtysld = $value;
    }

    /**
     * @param Numeric
     */
    public function setPysls($value) {
        $this->_pysls = $value;
    }

    /**
     * @param Numeric
     */
    public function setPycost($value) {
        $this->_pycost = $value;
    }

    /**
     * @param Numeric
     */
    public function setPpyqtysld($value) {
        $this->_ppyqtysld = $value;
    }

    /**
     * @param Numeric
     */
    public function setPpysls($value) {
        $this->_ppysls = $value;
    }

    /**
     * @param Numeric
     */
    public function setPpycost($value) {
        $this->_ppycost = $value;
    }

    /**
     * @param Char
     */
    public function setGlacctsal($value) {
        $this->_glacctsal = $value;
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
     * @param Char
     */
    public function setGlacctsw($value) {
        $this->_glacctsw = $value;
    }

    /**
     * @param Logical
     */
    public function setIcserial($value) {
        $this->_icserial = $value;
    }

    /**
     * @param Numeric
     */
    public function setRecptdqty($value) {
        $this->_recptdqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setRecytdqty($value) {
        $this->_recytdqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setRecptdsls($value) {
        $this->_recptdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setRecytdsls($value) {
        $this->_recytdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setSwptdqty($value) {
        $this->_swptdqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setSwytdqty($value) {
        $this->_swytdqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setSwptdsls($value) {
        $this->_swptdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setSwytdsls($value) {
        $this->_swytdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setAdjptdqty($value) {
        $this->_adjptdqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setAdjytdqty($value) {
        $this->_adjytdqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setAdjptdsls($value) {
        $this->_adjptdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setAdjytdsls($value) {
        $this->_adjytdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setGptdqty($value) {
        $this->_gptdqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setGytdqty($value) {
        $this->_gytdqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setGptdsls($value) {
        $this->_gptdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setGytdsls($value) {
        $this->_gytdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setRmptdqty($value) {
        $this->_rmptdqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setRmytdqty($value) {
        $this->_rmytdqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setRmptdsls($value) {
        $this->_rmptdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setRmytdsls($value) {
        $this->_rmytdsls = $value;
    }

    /**
     * @param Numeric
     */
    public function setOnbond($value) {
        $this->_onbond = $value;
    }

    /**
     * @param Memo
     */
    public function setPicture_fi($value) {
        $this->_picture_fi = $value;
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
    public function setMetric($value) {
        $this->_metric = $value;
    }

    /**
     * @param Char
     */
    public function setCatpageno($value) {
        $this->_catpageno = $value;
    }

    /**
     * @param Char
     */
    public function setFacttreat($value) {
        $this->_facttreat = $value;
    }

    /**
     * @param Numeric
     */
    public function setMasterd($value) {
        $this->_masterd = $value;
    }

    /**
     * @param Char
     */
    public function setMetricd($value) {
        $this->_metricd = $value;
    }

    /**
     * @param Char
     */
    public function setBmisc($value) {
        $this->_bmisc = $value;
    }

    /**
     * @param Logical
     */
    public function setDeactive($value) {
        $this->_deactive = $value;
    }

    /**
     * @param Logical
     */
    public function setNflg0($value) {
        $this->_nflg0 = $value;
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
    public function setCustfld2($value) {
        $this->_custfld2 = $value;
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
    public function setCustfld4($value) {
        $this->_custfld4 = $value;
    }

    /**
     * @param Char
     */
    public function setCustfld5($value) {
        $this->_custfld5 = $value;
    }

    /**
     * @param Char
     */
    public function setCustfld6($value) {
        $this->_custfld6 = $value;
    }

    /**
     * @param Char
     */
    public function setCustfld7($value) {
        $this->_custfld7 = $value;
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
    public function setOrder($value) {
        $this->_order = $value;
    }

    /**
     * @param Memo
     */
    public function setNotes($value) {
        $this->_notes = $value;
    }

    /**
     * @param Char
     */
    public function setMfcstkno($value) {
        $this->_mfcstkno = $value;
    }

    /**
     * @param Logical
     */
    public function setLots($value) {
        $this->_lots = $value;
    }

    /**
     * @param Date
     */
    public function setSalbegdte($value) {
        $this->_salbegdte = $value;
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
    public function setLabel2($value) {
        $this->_label2 = $value;
    }

    /**
     * @param Char
     */
    public function setType2($value) {
        $this->_type2 = $value;
    }

    /**
     * @param Char
     */
    public function setLabel3($value) {
        $this->_label3 = $value;
    }

    /**
     * @param Char
     */
    public function setType3($value) {
        $this->_type3 = $value;
    }

    /**
     * @param Char
     */
    public function setLabel4($value) {
        $this->_label4 = $value;
    }

    /**
     * @param Char
     */
    public function setType4($value) {
        $this->_type4 = $value;
    }

    /**
     * @param Char
     */
    public function setLabel5($value) {
        $this->_label5 = $value;
    }

    /**
     * @param Char
     */
    public function setType5($value) {
        $this->_type5 = $value;
    }

    /**
     * @param Char
     */
    public function setLabel6($value) {
        $this->_label6 = $value;
    }

    /**
     * @param Char
     */
    public function setType6($value) {
        $this->_type6 = $value;
    }

    /**
     * @param Char
     */
    public function setLocno($value) {
        $this->_locno = $value;
    }

    /**
     * @param Numeric
     */
    public function setCstloadfct($value) {
        $this->_cstloadfct = $value;
    }

    /**
     * @param Numeric
     */
    public function setCostload($value) {
        $this->_costload = $value;
    }

    /**
     * @param Numeric
     */
    public function setOldonhand($value) {
        $this->_oldonhand = $value;
    }

    /**
     * @param Date
     */
    public function setOldohdate($value) {
        $this->_oldohdate = $value;
    }

    /**
     * @param Char
     */
    public function setGlacctwip($value) {
        $this->_glacctwip = $value;
    }

    /**
     * @param Char
     */
    public function setGlacctswcs($value) {
        $this->_glacctswcs = $value;
    }

    /**
     * @param Char
     */
    public function setCustfld9($value) {
        $this->_custfld9 = $value;
    }

    /**
     * @param Logical
     */
    public function setSpclflag($value) {
        $this->_spclflag = $value;
    }

    /**
     * @param Logical
     */
    public function setReswhs($value) {
        $this->_reswhs = $value;
    }

    /**
     * @param Char
     */
    public function setWebdescrip($value) {
        $this->_webdescrip = $value;
    }

    /**
     * @param Logical
     */
    public function setWebsyncflg($value) {
        $this->_websyncflg = $value;
    }

    /**
     * @param Logical
     */
    public function setWebactive($value) {
        $this->_webactive = $value;
    }

    /**
     * @param Char
     */
    public function setUsdasdsc($value) {
        $this->_usdasdsc = $value;
    }

    /**
     * @param Char
     */
    public function setVendor($value) {
        $this->_vendor = $value;
    }

    /**
     * @param Char
     */
    public function setKit($value) {
        $this->_kit = $value;
    }

    /**
     * @param Char
     */
    public function setModel($value) {
        $this->_model = $value;
    }

    /**
     * @param Char
     */
    public function setTagtype($value) {
        $this->_tagtype = $value;
    }

    /**
     * @param Date
     */
    public function setRllupdate($value) {
        $this->_rllupdate = $value;
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
     * @param Numeric
     */
    public function setPricecore1($value) {
        $this->_pricecore1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPricecore2($value) {
        $this->_pricecore2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPricecore3($value) {
        $this->_pricecore3 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPricecore4($value) {
        $this->_pricecore4 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPricecore5($value) {
        $this->_pricecore5 = $value;
    }

    /**
     * @param Numeric
     */
    public function setPricecore6($value) {
        $this->_pricecore6 = $value;
    }

    /**
     * @param Memo
     */
    public function setNotegen($value) {
        $this->_notegen = $value;
    }

    /**
     * @param Numeric
     */
    public function setCorebase($value) {
        $this->_corebase = $value;
    }

    /**
     * @param Numeric
     */
    public function setCorenet($value) {
        $this->_corenet = $value;
    }

    /**
     * @param Numeric
     */
    public function setCoreunit($value) {
        $this->_coreunit = $value;
    }

    /**
     * @param Numeric
     */
    public function setListcore($value) {
        $this->_listcore = $value;
    }

    /**
     * @param Date
     */
    public function setLandcstdte($value) {
        $this->_landcstdte = $value;
    }

    /**
     * @param Numeric
     */
    public function setLeadtime($value) {
        $this->_leadtime = $value;
    }

    /**
     * @param Logical
     */
    public function setSwcogsflag($value) {
        $this->_swcogsflag = $value;
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
    public function setBrdqtysqf($value) {
        $this->_brdqtysqf = $value;
    }

    /**
     * @param Numeric
     */
    public function setComper2($value) {
        $this->_comper2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setComr1f($value) {
        $this->_comr1f = $value;
    }

    /**
     * @param Numeric
     */
    public function setComr2f($value) {
        $this->_comr2f = $value;
    }

    /**
     * @param Numeric
     */
    public function setComr1t($value) {
        $this->_comr1t = $value;
    }

    /**
     * @param Numeric
     */
    public function setComr2t($value) {
        $this->_comr2t = $value;
    }

    /**
     * @param Numeric
     */
    public function setComper1($value) {
        $this->_comper1 = $value;
    }

    /**
     * @param Numeric
     */
    public function setComtype($value) {
        $this->_comtype = $value;
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
    public function setDesigner($value) {
        $this->_designer = $value;
    }

    /**
     * @param Char
     */
    public function setRettrxcode($value) {
        $this->_rettrxcode = $value;
    }

    /**
     * @param Logical
     */
    public function setPrototype($value) {
        $this->_prototype = $value;
    }

    /**
     * @param Logical
     */
    public function setInspection($value) {
        $this->_inspection = $value;
    }

    /**
     * @param Date
     */
    public function setStndcstdte($value) {
        $this->_stndcstdte = $value;
    }

    /**
     * @param Numeric
     */
    public function setCoststnd($value) {
        $this->_coststnd = $value;
    }

    /**
     * @param Numeric
     */
    public function setOnconsign($value) {
        $this->_onconsign = $value;
    }

    /**
     * @param Numeric
     */
    public function setOnconsignp($value) {
        $this->_onconsignp = $value;
    }

    /**
     * @param Numeric
     */
    public function setIntran($value) {
        $this->_intran = $value;
    }

    /**
     * @param Numeric
     */
    public function setMetricarea($value) {
        $this->_metricarea = $value;
    }

    /**
     * @param Logical
     */
    public function setConsflag($value) {
        $this->_consflag = $value;
    }

    /**
     * @param Numeric
     */
    public function setEpcdays($value) {
        $this->_epcdays = $value;
    }

    /**
     * @param Numeric
     */
    public function setEtadays($value) {
        $this->_etadays = $value;
    }

    /**
     * @param Date
     */
    public function setIntroend($value) {
        $this->_introend = $value;
    }

    /**
     * @param Char
     */
    public function setIntrocode($value) {
        $this->_introcode = $value;
    }

    /**
     * @param Date
     */
    public function setIntrodate($value) {
        $this->_introdate = $value;
    }

    /**
     * @param Char
     */
    public function setDesignnam($value) {
        $this->_designnam = $value;
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
    public function setQtyscrap($value) {
        $this->_qtyscrap = $value;
    }

    /**
     * @param Char
     */
    public function setQblistid($value) {
        $this->_qblistid = $value;
    }

    /**
     * @param Date
     */
    public function setBlockdates($value) {
        $this->_blockdates = $value;
    }

    /**
     * @param Date
     */
    public function setBlockdatee($value) {
        $this->_blockdatee = $value;
    }

    /**
     * @param Char
     */
    public function setMinmaxdate($value) {
        $this->_minmaxdate = $value;
    }

    /**
     * @param Numeric
     */
    public function setFetamt($value) {
        $this->_fetamt = $value;
    }

    /**
     * @param Logical
     */
    public function setPicnoupd($value) {
        $this->_picnoupd = $value;
    }

    /**
     * @param Char
     */
    public function setUpccodein($value) {
        $this->_upccodein = $value;
    }

    /**
     * @param Numeric
     */
    public function setCaselength($value) {
        $this->_caselength = $value;
    }

    /**
     * @param Numeric
     */
    public function setCasewidth($value) {
        $this->_casewidth = $value;
    }

    /**
     * @param Numeric
     */
    public function setCaseheight($value) {
        $this->_caseheight = $value;
    }

    /**
     * @param Char
     */
    public function setCountryorg($value) {
        $this->_countryorg = $value;
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
    public function setUncode($value) {
        $this->_uncode = $value;
    }

    /**
     * @param Numeric
     */
    public function setBotldep($value) {
        $this->_botldep = $value;
    }

    /**
     * @param Numeric
     */
    public function setCosthi6mth($value) {
        $this->_costhi6mth = $value;
    }

    /**
     * @param Char
     */
    public function setMm_code($value) {
        $this->_mm_code = $value;
    }

    /**
     * @param Logical
     */
    public function setCostgstbd($value) {
        $this->_costgstbd = $value;
    }

    /**
     * @param Char
     */
    public function setBuyercode($value) {
        $this->_buyercode = $value;
    }

    /**
     * @param Numeric
     */
    public function setShpcartid($value) {
        $this->_shpcartid = $value;
    }

    /**
     * @param Memo
     */
    public function setIcstat($value) {
        $this->_icstat = $value;
    }

    /**
     * Constructor
     */
    public function __construct($itemno, $itmwhs, $itemtype, $itemorigin, $equivitem, $upccode, $descrip, $descrip1, $descrip2, $extdescrip, $podescrip, $podescrip1, $hazardous, $weight, $mweight, $masterqty, $length, $width, $height, $thick, $cubic, $class, $subclass1, $subclass2, $subclass3, $binlocal, $costtype, $costbase, $costdisc, $costnet, $costfact, $cstfctdsc, $costunit, $costland, $costavg, $listprice, $listprctl, $price1, $prfact1, $prqty1, $prcommi1, $price2, $prfact2, $prqty2, $prcommi2, $price3, $prfact3, $prqty3, $prcommi3, $price4, $prfact4, $prqty4, $prcommi4, $price5, $prfact5, $prqty5, $prcommi5, $price6, $prfact6, $prqty6, $prcommi6, $saleprice, $salenddte, $pricefact, $prifctdsc, $lstprchg, $pricecode, $onhand, $negonhand, $onhandmax, $committed, $comtoship, $rmaqty, $onorder, $onhandmin, $reordqty, $minordqty, $stkenddte, $bckordqty, $vendno, $venstkno, $lstsaldte, $lstbuydte, $lstarvdte, $frsbuydte, $lsticdate, $lsticbal, $icdatectrl, $taxable, $taxrate, $taxcode, $imptaxid, $imptaxrate, $ptdqtysld, $ptdsls, $ptdcost, $ytdqtysld, $ytdsls, $ytdcost, $pyqtysld, $pysls, $pycost, $ppyqtysld, $ppysls, $ppycost, $glacctsal, $glacctexp, $glacctast, $glacctsw, $icserial, $recptdqty, $recytdqty, $recptdsls, $recytdsls, $swptdqty, $swytdqty, $swptdsls, $swytdsls, $adjptdqty, $adjytdqty, $adjptdsls, $adjytdsls, $gptdqty, $gytdqty, $gptdsls, $gytdsls, $rmptdqty, $rmytdqty, $rmptdsls, $rmytdsls, $onbond, $picture_fi, $man_code, $metric, $catpageno, $facttreat, $masterd, $metricd, $bmisc, $deactive, $nflg0, $custfld1, $custfld2, $custfld3, $custfld4, $custfld5, $custfld6, $custfld7, $custfld8, $order, $notes, $mfcstkno, $lots, $salbegdte, $costcode, $label2, $type2, $label3, $type3, $label4, $type4, $label5, $type5, $label6, $type6, $locno, $cstloadfct, $costload, $oldonhand, $oldohdate, $glacctwip, $glacctswcs, $custfld9, $spclflag, $reswhs, $webdescrip, $websyncflg, $webactive, $usdasdsc, $vendor, $kit, $model, $tagtype, $rllupdate, $fupdtime, $fupddate, $fstation, $fuserid, $pricecore1, $pricecore2, $pricecore3, $pricecore4, $pricecore5, $pricecore6, $notegen, $corebase, $corenet, $coreunit, $listcore, $landcstdte, $leadtime, $swcogsflag, $palqtysqf, $palqtypcs, $brdqtysqf, $comper2, $comr1f, $comr2f, $comr1t, $comr2t, $comper1, $comtype, $abccode, $designer, $rettrxcode, $prototype, $inspection, $stndcstdte, $coststnd, $onconsign, $onconsignp, $intran, $metricarea, $consflag, $epcdays, $etadays, $introend, $introcode, $introdate, $designnam, $pcslayers, $nolayers, $qtyscrap, $qblistid, $blockdates, $blockdatee, $minmaxdate, $fetamt, $picnoupd, $upccodein, $caselength, $casewidth, $caseheight, $countryorg, $discamt, $uncode, $botldep, $costhi6mth, $mm_code, $costgstbd, $buyercode, $shpcartid, $icstat) {
        $this->_itemno = $itemno;
        $this->_itmwhs = $itmwhs;
        $this->_itemtype = $itemtype;
        $this->_itemorigin = $itemorigin;
        $this->_equivitem = $equivitem;
        $this->_upccode = $upccode;
        $this->_descrip = $descrip;
        $this->_descrip1 = $descrip1;
        $this->_descrip2 = $descrip2;
        $this->_extdescrip = $extdescrip;
        $this->_podescrip = $podescrip;
        $this->_podescrip1 = $podescrip1;
        $this->_hazardous = $hazardous;
        $this->_weight = $weight;
        $this->_mweight = $mweight;
        $this->_masterqty = $masterqty;
        $this->_length = $length;
        $this->_width = $width;
        $this->_height = $height;
        $this->_thick = $thick;
        $this->_cubic = $cubic;
        $this->_class = $class;
        $this->_subclass1 = $subclass1;
        $this->_subclass2 = $subclass2;
        $this->_subclass3 = $subclass3;
        $this->_binlocal = $binlocal;
        $this->_costtype = $costtype;
        $this->_costbase = $costbase;
        $this->_costdisc = $costdisc;
        $this->_costnet = $costnet;
        $this->_costfact = $costfact;
        $this->_cstfctdsc = $cstfctdsc;
        $this->_costunit = $costunit;
        $this->_costland = $costland;
        $this->_costavg = $costavg;
        $this->_listprice = $listprice;
        $this->_listprctl = $listprctl;
        $this->_price1 = $price1;
        $this->_prfact1 = $prfact1;
        $this->_prqty1 = $prqty1;
        $this->_prcommi1 = $prcommi1;
        $this->_price2 = $price2;
        $this->_prfact2 = $prfact2;
        $this->_prqty2 = $prqty2;
        $this->_prcommi2 = $prcommi2;
        $this->_price3 = $price3;
        $this->_prfact3 = $prfact3;
        $this->_prqty3 = $prqty3;
        $this->_prcommi3 = $prcommi3;
        $this->_price4 = $price4;
        $this->_prfact4 = $prfact4;
        $this->_prqty4 = $prqty4;
        $this->_prcommi4 = $prcommi4;
        $this->_price5 = $price5;
        $this->_prfact5 = $prfact5;
        $this->_prqty5 = $prqty5;
        $this->_prcommi5 = $prcommi5;
        $this->_price6 = $price6;
        $this->_prfact6 = $prfact6;
        $this->_prqty6 = $prqty6;
        $this->_prcommi6 = $prcommi6;
        $this->_saleprice = $saleprice;
        $this->_salenddte = $salenddte;
        $this->_pricefact = $pricefact;
        $this->_prifctdsc = $prifctdsc;
        $this->_lstprchg = $lstprchg;
        $this->_pricecode = $pricecode;
        $this->_onhand = $onhand;
        $this->_negonhand = $negonhand;
        $this->_onhandmax = $onhandmax;
        $this->_committed = $committed;
        $this->_comtoship = $comtoship;
        $this->_rmaqty = $rmaqty;
        $this->_onorder = $onorder;
        $this->_onhandmin = $onhandmin;
        $this->_reordqty = $reordqty;
        $this->_minordqty = $minordqty;
        $this->_stkenddte = $stkenddte;
        $this->_bckordqty = $bckordqty;
        $this->_vendno = $vendno;
        $this->_venstkno = $venstkno;
        $this->_lstsaldte = $lstsaldte;
        $this->_lstbuydte = $lstbuydte;
        $this->_lstarvdte = $lstarvdte;
        $this->_frsbuydte = $frsbuydte;
        $this->_lsticdate = $lsticdate;
        $this->_lsticbal = $lsticbal;
        $this->_icdatectrl = $icdatectrl;
        $this->_taxable = $taxable;
        $this->_taxrate = $taxrate;
        $this->_taxcode = $taxcode;
        $this->_imptaxid = $imptaxid;
        $this->_imptaxrate = $imptaxrate;
        $this->_ptdqtysld = $ptdqtysld;
        $this->_ptdsls = $ptdsls;
        $this->_ptdcost = $ptdcost;
        $this->_ytdqtysld = $ytdqtysld;
        $this->_ytdsls = $ytdsls;
        $this->_ytdcost = $ytdcost;
        $this->_pyqtysld = $pyqtysld;
        $this->_pysls = $pysls;
        $this->_pycost = $pycost;
        $this->_ppyqtysld = $ppyqtysld;
        $this->_ppysls = $ppysls;
        $this->_ppycost = $ppycost;
        $this->_glacctsal = $glacctsal;
        $this->_glacctexp = $glacctexp;
        $this->_glacctast = $glacctast;
        $this->_glacctsw = $glacctsw;
        $this->_icserial = $icserial;
        $this->_recptdqty = $recptdqty;
        $this->_recytdqty = $recytdqty;
        $this->_recptdsls = $recptdsls;
        $this->_recytdsls = $recytdsls;
        $this->_swptdqty = $swptdqty;
        $this->_swytdqty = $swytdqty;
        $this->_swptdsls = $swptdsls;
        $this->_swytdsls = $swytdsls;
        $this->_adjptdqty = $adjptdqty;
        $this->_adjytdqty = $adjytdqty;
        $this->_adjptdsls = $adjptdsls;
        $this->_adjytdsls = $adjytdsls;
        $this->_gptdqty = $gptdqty;
        $this->_gytdqty = $gytdqty;
        $this->_gptdsls = $gptdsls;
        $this->_gytdsls = $gytdsls;
        $this->_rmptdqty = $rmptdqty;
        $this->_rmytdqty = $rmytdqty;
        $this->_rmptdsls = $rmptdsls;
        $this->_rmytdsls = $rmytdsls;
        $this->_onbond = $onbond;
        $this->_picture_fi = $picture_fi;
        $this->_man_code = $man_code;
        $this->_metric = $metric;
        $this->_catpageno = $catpageno;
        $this->_facttreat = $facttreat;
        $this->_masterd = $masterd;
        $this->_metricd = $metricd;
        $this->_bmisc = $bmisc;
        $this->_deactive = $deactive;
        $this->_nflg0 = $nflg0;
        $this->_custfld1 = $custfld1;
        $this->_custfld2 = $custfld2;
        $this->_custfld3 = $custfld3;
        $this->_custfld4 = $custfld4;
        $this->_custfld5 = $custfld5;
        $this->_custfld6 = $custfld6;
        $this->_custfld7 = $custfld7;
        $this->_custfld8 = $custfld8;
        $this->_order = $order;
        $this->_notes = $notes;
        $this->_mfcstkno = $mfcstkno;
        $this->_lots = $lots;
        $this->_salbegdte = $salbegdte;
        $this->_costcode = $costcode;
        $this->_label2 = $label2;
        $this->_type2 = $type2;
        $this->_label3 = $label3;
        $this->_type3 = $type3;
        $this->_label4 = $label4;
        $this->_type4 = $type4;
        $this->_label5 = $label5;
        $this->_type5 = $type5;
        $this->_label6 = $label6;
        $this->_type6 = $type6;
        $this->_locno = $locno;
        $this->_cstloadfct = $cstloadfct;
        $this->_costload = $costload;
        $this->_oldonhand = $oldonhand;
        $this->_oldohdate = $oldohdate;
        $this->_glacctwip = $glacctwip;
        $this->_glacctswcs = $glacctswcs;
        $this->_custfld9 = $custfld9;
        $this->_spclflag = $spclflag;
        $this->_reswhs = $reswhs;
        $this->_webdescrip = $webdescrip;
        $this->_websyncflg = $websyncflg;
        $this->_webactive = $webactive;
        $this->_usdasdsc = $usdasdsc;
        $this->_vendor = $vendor;
        $this->_kit = $kit;
        $this->_model = $model;
        $this->_tagtype = $tagtype;
        $this->_rllupdate = $rllupdate;
        $this->_fupdtime = $fupdtime;
        $this->_fupddate = $fupddate;
        $this->_fstation = $fstation;
        $this->_fuserid = $fuserid;
        $this->_pricecore1 = $pricecore1;
        $this->_pricecore2 = $pricecore2;
        $this->_pricecore3 = $pricecore3;
        $this->_pricecore4 = $pricecore4;
        $this->_pricecore5 = $pricecore5;
        $this->_pricecore6 = $pricecore6;
        $this->_notegen = $notegen;
        $this->_corebase = $corebase;
        $this->_corenet = $corenet;
        $this->_coreunit = $coreunit;
        $this->_listcore = $listcore;
        $this->_landcstdte = $landcstdte;
        $this->_leadtime = $leadtime;
        $this->_swcogsflag = $swcogsflag;
        $this->_palqtysqf = $palqtysqf;
        $this->_palqtypcs = $palqtypcs;
        $this->_brdqtysqf = $brdqtysqf;
        $this->_comper2 = $comper2;
        $this->_comr1f = $comr1f;
        $this->_comr2f = $comr2f;
        $this->_comr1t = $comr1t;
        $this->_comr2t = $comr2t;
        $this->_comper1 = $comper1;
        $this->_comtype = $comtype;
        $this->_abccode = $abccode;
        $this->_designer = $designer;
        $this->_rettrxcode = $rettrxcode;
        $this->_prototype = $prototype;
        $this->_inspection = $inspection;
        $this->_stndcstdte = $stndcstdte;
        $this->_coststnd = $coststnd;
        $this->_onconsign = $onconsign;
        $this->_onconsignp = $onconsignp;
        $this->_intran = $intran;
        $this->_metricarea = $metricarea;
        $this->_consflag = $consflag;
        $this->_epcdays = $epcdays;
        $this->_etadays = $etadays;
        $this->_introend = $introend;
        $this->_introcode = $introcode;
        $this->_introdate = $introdate;
        $this->_designnam = $designnam;
        $this->_pcslayers = $pcslayers;
        $this->_nolayers = $nolayers;
        $this->_qtyscrap = $qtyscrap;
        $this->_qblistid = $qblistid;
        $this->_blockdates = $blockdates;
        $this->_blockdatee = $blockdatee;
        $this->_minmaxdate = $minmaxdate;
        $this->_fetamt = $fetamt;
        $this->_picnoupd = $picnoupd;
        $this->_upccodein = $upccodein;
        $this->_caselength = $caselength;
        $this->_casewidth = $casewidth;
        $this->_caseheight = $caseheight;
        $this->_countryorg = $countryorg;
        $this->_discamt = $discamt;
        $this->_uncode = $uncode;
        $this->_botldep = $botldep;
        $this->_costhi6mth = $costhi6mth;
        $this->_mm_code = $mm_code;
        $this->_costgstbd = $costgstbd;
        $this->_buyercode = $buyercode;
        $this->_shpcartid = $shpcartid;
        $this->_icstat = $icstat;
    }

    public static function toString() {
        return self::$_name;
    }

}
