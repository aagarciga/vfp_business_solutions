<?php

/**
 * Project:  VFP Business Series
 * Copyright: 2014. VFP Business Solutions, LLC
 */

namespace Dandelion\MVC\Application\Models\Entities\Base;

/**
 * BaseAPVEND
 */
class BaseAPVEND
{

    /**
     * Private fields
     */
    private static $_name = "APVEND";

    /**
     * Protected fields
     */

    /**
     * @var Char
     */
    protected $_vendno;

    /**
     * @var Char
     */
    protected $_vendor;

    /**
     * @var Char
     */
    protected $_address1;

    /**
     * @var Char
     */
    protected $_address2;

    /**
     * @var Char
     */
    protected $_city;

    /**
     * @var Char
     */
    protected $_state;

    /**
     * @var Char
     */
    protected $_zip;

    /**
     * @var Char
     */
    protected $_country;

    /**
     * @var Char
     */
    protected $_phone;

    /**
     * @var Char
     */
    protected $_phone1;

    /**
     * @var Char
     */
    protected $_email;

    /**
     * @var Char
     */
    protected $_phonecrd;

    /**
     * @var Char
     */
    protected $_contact;

    /**
     * @var Char
     */
    protected $_contact1;

    /**
     * @var Char
     */
    protected $_crdmngr;

    /**
     * @var Char
     */
    protected $_terms;

    /**
     * @var Char
     */
    protected $_terms1;

    /**
     * @var Char
     */
    protected $_check_no;

    /**
     * @var Numeric
     */
    protected $_amount;

    /**
     * @var Date
     */
    protected $_ldate;

    /**
     * @var Numeric
     */
    protected $_ytd_purch;

    /**
     * @var Numeric
     */
    protected $_ptd_purch;

    /**
     * @var Numeric
     */
    protected $_unpostbal;

    /**
     * @var Numeric
     */
    protected $_balance;

    /**
     * @var Numeric
     */
    protected $_crdlimit;

    /**
     * @var Numeric
     */
    protected $_discount;

    /**
     * @var Char
     */
    protected $_ssnmbr;

    /**
     * @var Char
     */
    protected $_title;

    /**
     * @var Char
     */
    protected $_title1;

    /**
     * @var Char
     */
    protected $_faxnum;

    /**
     * @var Char
     */
    protected $_faxnum2;

    /**
     * @var Numeric
     */
    protected $_duedays;

    /**
     * @var Numeric
     */
    protected $_discdays;

    /**
     * @var Char
     */
    protected $_terr;

    /**
     * @var Char
     */
    protected $_source;

    /**
     * @var Char
     */
    protected $_class;

    /**
     * @var Char
     */
    protected $_indust;

    /**
     * @var Char
     */
    protected $_buyercode;

    /**
     * @var Char
     */
    protected $_shipvia;

    /**
     * @var Char
     */
    protected $_status;

    /**
     * @var Logical
     */
    protected $_shippart;

    /**
     * @var Char
     */
    protected $_shipto;

    /**
     * @var Char
     */
    protected $_dom_exp;

    /**
     * @var Char
     */
    protected $_remitto1;

    /**
     * @var Char
     */
    protected $_remitto2;

    /**
     * @var Char
     */
    protected $_remitto3;

    /**
     * @var Char
     */
    protected $_vendorref;

    /**
     * @var Memo
     */
    protected $_notes;

    /**
     * @var Logical
     */
    protected $_auto;

    /**
     * @var Char
     */
    protected $_acct_auto;

    /**
     * @var Numeric
     */
    protected $_autoamt;

    /**
     * @var Char
     */
    protected $_autoperiod;

    /**
     * @var Logical
     */
    protected $_taxstat;

    /**
     * @var Numeric
     */
    protected $_tax;

    /**
     * @var Date
     */
    protected $_entrydate;

    /**
     * @var Char
     */
    protected $_fed_id_no;

    /**
     * @var Char
     */
    protected $_disb_acct;

    /**
     * @var Char
     */
    protected $_poremark;

    /**
     * @var Char
     */
    protected $_blanpo;

    /**
     * @var Char
     */
    protected $_idpono;

    /**
     * @var Char
     */
    protected $_fobpoint;

    /**
     * @var Logical
     */
    protected $_nflg0;

    /**
     * @var Logical
     */
    protected $_prt1099;

    /**
     * @var Char
     */
    protected $_frtstat;

    /**
     * @var Char
     */
    protected $_remitto;

    /**
     * @var Logical
     */
    protected $_manufact;

    /**
     * @var Char
     */
    protected $_postcurrid;

    /**
     * @var Char
     */
    protected $_paycurrid;

    /**
     * @var Char
     */
    protected $_apacct;

    /**
     * @var Char
     */
    protected $_taxtype;

    /**
     * @var Numeric
     */
    protected $_tax2;

    /**
     * @var Char
     */
    protected $_taxica;

    /**
     * @var Char
     */
    protected $_baseid;

    /**
     * @var Char
     */
    protected $_regionid;

    /**
     * @var Char
     */
    protected $_confirm;

    /**
     * @var Char
     */
    protected $_address3;

    /**
     * @var Char
     */
    protected $_address4;

    /**
     * @var Char
     */
    protected $_pmtmed;

    /**
     * @var Char
     */
    protected $_taxcode1;

    /**
     * @var Char
     */
    protected $_taxcode2;

    /**
     * @var Char
     */
    protected $_taxcode3;

    /**
     * @var Char
     */
    protected $_taxcode4;

    /**
     * @var Char
     */
    protected $_cmptype;

    /**
     * @var Char
     */
    protected $_bnkactno;

    /**
     * @var Char
     */
    protected $_bnkcode;

    /**
     * @var Char
     */
    protected $_bnkacttp;

    /**
     * @var Char
     */
    protected $_bnkcont;

    /**
     * @var Char
     */
    protected $_bnktitle;

    /**
     * @var Char
     */
    protected $_bnkzone;

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
    protected $_fuserid;

    /**
     * @var Char
     */
    protected $_fstation;

    /**
     * @var Char
     */
    protected $_key;

    /**
     * @var Char
     */
    protected $_bustype;

    /**
     * @var Logical
     */
    protected $_w9;

    /**
     * @var Logical
     */
    protected $_defvchr;

    /**
     * @var Char
     */
    protected $_type1099;

    /**
     * @var Numeric
     */
    protected $_ytdpaid;

    /**
     * @var Logical
     */
    protected $_designer;

    /**
     * @var Char
     */
    protected $_edicustno;

    /**
     * @var Char
     */
    protected $_edicompany;

    /**
     * @var Char
     */
    protected $_ediactcomp;

    /**
     * @var Numeric
     */
    protected $_ptdqty;

    /**
     * @var Numeric
     */
    protected $_ytdqty;

    /**
     * @var Logical
     */
    protected $_poshpflag;

    /**
     * @var Char
     */
    protected $_desc_exp;

    /**
     * @var Char
     */
    protected $_qblistid;

    /**
     * @var Logical
     */
    protected $_isactive;

    /**
     * @var Char
     */
    protected $_nameprefix;

    /**
     * @var Char
     */
    protected $_firstname;

    /**
     * @var Char
     */
    protected $_lastname;

    /**
     * @var Logical
     */
    protected $_apbudget;

    /**
     * @var Char
     */
    protected $_emailcc;

    /**
     * @var Logical
     */
    protected $_cctypevend;

    /**
     * @var Char
     */
    protected $_bnkabano;

    /**
     * @var Char
     */
    protected $_bnkswiftno;

    /**
     * @var Logical
     */
    protected $_botldepgst;

    /**
     * @var Char
     */
    protected $_ftaxcode;

    /**
     * @var Logical
     */
    protected $_nameother;

    /**
     * @var Numeric
     */
    protected $_polimit;

    /**
     * @var Char
     */
    protected $_manfid;

    /**
     * @var Char
     */
    protected $_manfupc;

    /**
     * @var Char
     */
    protected $_editype;

    /**
     * @var Char
     */
    protected $_poedilink;


    /**
     * Getters
     */

    /**
     * @return Char
     */
    public function getVendno()
    {
        return $this->_vendno;
    }

    /**
     * @return Char
     */
    public function getVendor()
    {
        return $this->_vendor;
    }

    /**
     * @return Char
     */
    public function getAddress1()
    {
        return $this->_address1;
    }

    /**
     * @return Char
     */
    public function getAddress2()
    {
        return $this->_address2;
    }

    /**
     * @return Char
     */
    public function getCity()
    {
        return $this->_city;
    }

    /**
     * @return Char
     */
    public function getState()
    {
        return $this->_state;
    }

    /**
     * @return Char
     */
    public function getZip()
    {
        return $this->_zip;
    }

    /**
     * @return Char
     */
    public function getCountry()
    {
        return $this->_country;
    }

    /**
     * @return Char
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @return Char
     */
    public function getPhone1()
    {
        return $this->_phone1;
    }

    /**
     * @return Char
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @return Char
     */
    public function getPhonecrd()
    {
        return $this->_phonecrd;
    }

    /**
     * @return Char
     */
    public function getContact()
    {
        return $this->_contact;
    }

    /**
     * @return Char
     */
    public function getContact1()
    {
        return $this->_contact1;
    }

    /**
     * @return Char
     */
    public function getCrdmngr()
    {
        return $this->_crdmngr;
    }

    /**
     * @return Char
     */
    public function getTerms()
    {
        return $this->_terms;
    }

    /**
     * @return Char
     */
    public function getTerms1()
    {
        return $this->_terms1;
    }

    /**
     * @return Char
     */
    public function getCheck_no()
    {
        return $this->_check_no;
    }

    /**
     * @return Numeric
     */
    public function getAmount()
    {
        return $this->_amount;
    }

    /**
     * @return Date
     */
    public function getLdate()
    {
        return $this->_ldate;
    }

    /**
     * @return Numeric
     */
    public function getYtd_purch()
    {
        return $this->_ytd_purch;
    }

    /**
     * @return Numeric
     */
    public function getPtd_purch()
    {
        return $this->_ptd_purch;
    }

    /**
     * @return Numeric
     */
    public function getUnpostbal()
    {
        return $this->_unpostbal;
    }

    /**
     * @return Numeric
     */
    public function getBalance()
    {
        return $this->_balance;
    }

    /**
     * @return Numeric
     */
    public function getCrdlimit()
    {
        return $this->_crdlimit;
    }

    /**
     * @return Numeric
     */
    public function getDiscount()
    {
        return $this->_discount;
    }

    /**
     * @return Char
     */
    public function getSsnmbr()
    {
        return $this->_ssnmbr;
    }

    /**
     * @return Char
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @return Char
     */
    public function getTitle1()
    {
        return $this->_title1;
    }

    /**
     * @return Char
     */
    public function getFaxnum()
    {
        return $this->_faxnum;
    }

    /**
     * @return Char
     */
    public function getFaxnum2()
    {
        return $this->_faxnum2;
    }

    /**
     * @return Numeric
     */
    public function getDuedays()
    {
        return $this->_duedays;
    }

    /**
     * @return Numeric
     */
    public function getDiscdays()
    {
        return $this->_discdays;
    }

    /**
     * @return Char
     */
    public function getTerr()
    {
        return $this->_terr;
    }

    /**
     * @return Char
     */
    public function getSource()
    {
        return $this->_source;
    }

    /**
     * @return Char
     */
    public function getClass()
    {
        return $this->_class;
    }

    /**
     * @return Char
     */
    public function getIndust()
    {
        return $this->_indust;
    }

    /**
     * @return Char
     */
    public function getBuyercode()
    {
        return $this->_buyercode;
    }

    /**
     * @return Char
     */
    public function getShipvia()
    {
        return $this->_shipvia;
    }

    /**
     * @return Char
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @return Logical
     */
    public function getShippart()
    {
        return $this->_shippart;
    }

    /**
     * @return Char
     */
    public function getShipto()
    {
        return $this->_shipto;
    }

    /**
     * @return Char
     */
    public function getDom_exp()
    {
        return $this->_dom_exp;
    }

    /**
     * @return Char
     */
    public function getRemitto1()
    {
        return $this->_remitto1;
    }

    /**
     * @return Char
     */
    public function getRemitto2()
    {
        return $this->_remitto2;
    }

    /**
     * @return Char
     */
    public function getRemitto3()
    {
        return $this->_remitto3;
    }

    /**
     * @return Char
     */
    public function getVendorref()
    {
        return $this->_vendorref;
    }

    /**
     * @return Memo
     */
    public function getNotes()
    {
        return $this->_notes;
    }

    /**
     * @return Logical
     */
    public function getAuto()
    {
        return $this->_auto;
    }

    /**
     * @return Char
     */
    public function getAcct_auto()
    {
        return $this->_acct_auto;
    }

    /**
     * @return Numeric
     */
    public function getAutoamt()
    {
        return $this->_autoamt;
    }

    /**
     * @return Char
     */
    public function getAutoperiod()
    {
        return $this->_autoperiod;
    }

    /**
     * @return Logical
     */
    public function getTaxstat()
    {
        return $this->_taxstat;
    }

    /**
     * @return Numeric
     */
    public function getTax()
    {
        return $this->_tax;
    }

    /**
     * @return Date
     */
    public function getEntrydate()
    {
        return $this->_entrydate;
    }

    /**
     * @return Char
     */
    public function getFed_id_no()
    {
        return $this->_fed_id_no;
    }

    /**
     * @return Char
     */
    public function getDisb_acct()
    {
        return $this->_disb_acct;
    }

    /**
     * @return Char
     */
    public function getPoremark()
    {
        return $this->_poremark;
    }

    /**
     * @return Char
     */
    public function getBlanpo()
    {
        return $this->_blanpo;
    }

    /**
     * @return Char
     */
    public function getIdpono()
    {
        return $this->_idpono;
    }

    /**
     * @return Char
     */
    public function getFobpoint()
    {
        return $this->_fobpoint;
    }

    /**
     * @return Logical
     */
    public function getNflg0()
    {
        return $this->_nflg0;
    }

    /**
     * @return Logical
     */
    public function getPrt1099()
    {
        return $this->_prt1099;
    }

    /**
     * @return Char
     */
    public function getFrtstat()
    {
        return $this->_frtstat;
    }

    /**
     * @return Char
     */
    public function getRemitto()
    {
        return $this->_remitto;
    }

    /**
     * @return Logical
     */
    public function getManufact()
    {
        return $this->_manufact;
    }

    /**
     * @return Char
     */
    public function getPostcurrid()
    {
        return $this->_postcurrid;
    }

    /**
     * @return Char
     */
    public function getPaycurrid()
    {
        return $this->_paycurrid;
    }

    /**
     * @return Char
     */
    public function getApacct()
    {
        return $this->_apacct;
    }

    /**
     * @return Char
     */
    public function getTaxtype()
    {
        return $this->_taxtype;
    }

    /**
     * @return Numeric
     */
    public function getTax2()
    {
        return $this->_tax2;
    }

    /**
     * @return Char
     */
    public function getTaxica()
    {
        return $this->_taxica;
    }

    /**
     * @return Char
     */
    public function getBaseid()
    {
        return $this->_baseid;
    }

    /**
     * @return Char
     */
    public function getRegionid()
    {
        return $this->_regionid;
    }

    /**
     * @return Char
     */
    public function getConfirm()
    {
        return $this->_confirm;
    }

    /**
     * @return Char
     */
    public function getAddress3()
    {
        return $this->_address3;
    }

    /**
     * @return Char
     */
    public function getAddress4()
    {
        return $this->_address4;
    }

    /**
     * @return Char
     */
    public function getPmtmed()
    {
        return $this->_pmtmed;
    }

    /**
     * @return Char
     */
    public function getTaxcode1()
    {
        return $this->_taxcode1;
    }

    /**
     * @return Char
     */
    public function getTaxcode2()
    {
        return $this->_taxcode2;
    }

    /**
     * @return Char
     */
    public function getTaxcode3()
    {
        return $this->_taxcode3;
    }

    /**
     * @return Char
     */
    public function getTaxcode4()
    {
        return $this->_taxcode4;
    }

    /**
     * @return Char
     */
    public function getCmptype()
    {
        return $this->_cmptype;
    }

    /**
     * @return Char
     */
    public function getBnkactno()
    {
        return $this->_bnkactno;
    }

    /**
     * @return Char
     */
    public function getBnkcode()
    {
        return $this->_bnkcode;
    }

    /**
     * @return Char
     */
    public function getBnkacttp()
    {
        return $this->_bnkacttp;
    }

    /**
     * @return Char
     */
    public function getBnkcont()
    {
        return $this->_bnkcont;
    }

    /**
     * @return Char
     */
    public function getBnktitle()
    {
        return $this->_bnktitle;
    }

    /**
     * @return Char
     */
    public function getBnkzone()
    {
        return $this->_bnkzone;
    }

    /**
     * @return Char
     */
    public function getFupdtime()
    {
        return $this->_fupdtime;
    }

    /**
     * @return Date
     */
    public function getFupddate()
    {
        return $this->_fupddate;
    }

    /**
     * @return Char
     */
    public function getFuserid()
    {
        return $this->_fuserid;
    }

    /**
     * @return Char
     */
    public function getFstation()
    {
        return $this->_fstation;
    }

    /**
     * @return Char
     */
    public function getKey()
    {
        return $this->_key;
    }

    /**
     * @return Char
     */
    public function getBustype()
    {
        return $this->_bustype;
    }

    /**
     * @return Logical
     */
    public function getW9()
    {
        return $this->_w9;
    }

    /**
     * @return Logical
     */
    public function getDefvchr()
    {
        return $this->_defvchr;
    }

    /**
     * @return Char
     */
    public function getType1099()
    {
        return $this->_type1099;
    }

    /**
     * @return Numeric
     */
    public function getYtdpaid()
    {
        return $this->_ytdpaid;
    }

    /**
     * @return Logical
     */
    public function getDesigner()
    {
        return $this->_designer;
    }

    /**
     * @return Char
     */
    public function getEdicustno()
    {
        return $this->_edicustno;
    }

    /**
     * @return Char
     */
    public function getEdicompany()
    {
        return $this->_edicompany;
    }

    /**
     * @return Char
     */
    public function getEdiactcomp()
    {
        return $this->_ediactcomp;
    }

    /**
     * @return Numeric
     */
    public function getPtdqty()
    {
        return $this->_ptdqty;
    }

    /**
     * @return Numeric
     */
    public function getYtdqty()
    {
        return $this->_ytdqty;
    }

    /**
     * @return Logical
     */
    public function getPoshpflag()
    {
        return $this->_poshpflag;
    }

    /**
     * @return Char
     */
    public function getDesc_exp()
    {
        return $this->_desc_exp;
    }

    /**
     * @return Char
     */
    public function getQblistid()
    {
        return $this->_qblistid;
    }

    /**
     * @return Logical
     */
    public function getIsactive()
    {
        return $this->_isactive;
    }

    /**
     * @return Char
     */
    public function getNameprefix()
    {
        return $this->_nameprefix;
    }

    /**
     * @return Char
     */
    public function getFirstname()
    {
        return $this->_firstname;
    }

    /**
     * @return Char
     */
    public function getLastname()
    {
        return $this->_lastname;
    }

    /**
     * @return Logical
     */
    public function getApbudget()
    {
        return $this->_apbudget;
    }

    /**
     * @return Char
     */
    public function getEmailcc()
    {
        return $this->_emailcc;
    }

    /**
     * @return Logical
     */
    public function getCctypevend()
    {
        return $this->_cctypevend;
    }

    /**
     * @return Char
     */
    public function getBnkabano()
    {
        return $this->_bnkabano;
    }

    /**
     * @return Char
     */
    public function getBnkswiftno()
    {
        return $this->_bnkswiftno;
    }

    /**
     * @return Logical
     */
    public function getBotldepgst()
    {
        return $this->_botldepgst;
    }

    /**
     * @return Char
     */
    public function getFtaxcode()
    {
        return $this->_ftaxcode;
    }

    /**
     * @return Logical
     */
    public function getNameother()
    {
        return $this->_nameother;
    }

    /**
     * @return Numeric
     */
    public function getPolimit()
    {
        return $this->_polimit;
    }

    /**
     * @return Char
     */
    public function getManfid()
    {
        return $this->_manfid;
    }

    /**
     * @return Char
     */
    public function getManfupc()
    {
        return $this->_manfupc;
    }

    /**
     * @return Char
     */
    public function getEditype()
    {
        return $this->_editype;
    }

    /**
     * @return Char
     */
    public function getPoedilink()
    {
        return $this->_poedilink;
    }


    /**
     * Setters
     */

    /**
     * @param Char
     */
    public function setVendno($value)
    {
        $this->_vendno = $value;
    }

    /**
     * @param Char
     */
    public function setVendor($value)
    {
        $this->_vendor = $value;
    }

    /**
     * @param Char
     */
    public function setAddress1($value)
    {
        $this->_address1 = $value;
    }

    /**
     * @param Char
     */
    public function setAddress2($value)
    {
        $this->_address2 = $value;
    }

    /**
     * @param Char
     */
    public function setCity($value)
    {
        $this->_city = $value;
    }

    /**
     * @param Char
     */
    public function setState($value)
    {
        $this->_state = $value;
    }

    /**
     * @param Char
     */
    public function setZip($value)
    {
        $this->_zip = $value;
    }

    /**
     * @param Char
     */
    public function setCountry($value)
    {
        $this->_country = $value;
    }

    /**
     * @param Char
     */
    public function setPhone($value)
    {
        $this->_phone = $value;
    }

    /**
     * @param Char
     */
    public function setPhone1($value)
    {
        $this->_phone1 = $value;
    }

    /**
     * @param Char
     */
    public function setEmail($value)
    {
        $this->_email = $value;
    }

    /**
     * @param Char
     */
    public function setPhonecrd($value)
    {
        $this->_phonecrd = $value;
    }

    /**
     * @param Char
     */
    public function setContact($value)
    {
        $this->_contact = $value;
    }

    /**
     * @param Char
     */
    public function setContact1($value)
    {
        $this->_contact1 = $value;
    }

    /**
     * @param Char
     */
    public function setCrdmngr($value)
    {
        $this->_crdmngr = $value;
    }

    /**
     * @param Char
     */
    public function setTerms($value)
    {
        $this->_terms = $value;
    }

    /**
     * @param Char
     */
    public function setTerms1($value)
    {
        $this->_terms1 = $value;
    }

    /**
     * @param Char
     */
    public function setCheck_no($value)
    {
        $this->_check_no = $value;
    }

    /**
     * @param Numeric
     */
    public function setAmount($value)
    {
        $this->_amount = $value;
    }

    /**
     * @param Date
     */
    public function setLdate($value)
    {
        $this->_ldate = $value;
    }

    /**
     * @param Numeric
     */
    public function setYtd_purch($value)
    {
        $this->_ytd_purch = $value;
    }

    /**
     * @param Numeric
     */
    public function setPtd_purch($value)
    {
        $this->_ptd_purch = $value;
    }

    /**
     * @param Numeric
     */
    public function setUnpostbal($value)
    {
        $this->_unpostbal = $value;
    }

    /**
     * @param Numeric
     */
    public function setBalance($value)
    {
        $this->_balance = $value;
    }

    /**
     * @param Numeric
     */
    public function setCrdlimit($value)
    {
        $this->_crdlimit = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscount($value)
    {
        $this->_discount = $value;
    }

    /**
     * @param Char
     */
    public function setSsnmbr($value)
    {
        $this->_ssnmbr = $value;
    }

    /**
     * @param Char
     */
    public function setTitle($value)
    {
        $this->_title = $value;
    }

    /**
     * @param Char
     */
    public function setTitle1($value)
    {
        $this->_title1 = $value;
    }

    /**
     * @param Char
     */
    public function setFaxnum($value)
    {
        $this->_faxnum = $value;
    }

    /**
     * @param Char
     */
    public function setFaxnum2($value)
    {
        $this->_faxnum2 = $value;
    }

    /**
     * @param Numeric
     */
    public function setDuedays($value)
    {
        $this->_duedays = $value;
    }

    /**
     * @param Numeric
     */
    public function setDiscdays($value)
    {
        $this->_discdays = $value;
    }

    /**
     * @param Char
     */
    public function setTerr($value)
    {
        $this->_terr = $value;
    }

    /**
     * @param Char
     */
    public function setSource($value)
    {
        $this->_source = $value;
    }

    /**
     * @param Char
     */
    public function setClass($value)
    {
        $this->_class = $value;
    }

    /**
     * @param Char
     */
    public function setIndust($value)
    {
        $this->_indust = $value;
    }

    /**
     * @param Char
     */
    public function setBuyercode($value)
    {
        $this->_buyercode = $value;
    }

    /**
     * @param Char
     */
    public function setShipvia($value)
    {
        $this->_shipvia = $value;
    }

    /**
     * @param Char
     */
    public function setStatus($value)
    {
        $this->_status = $value;
    }

    /**
     * @param Logical
     */
    public function setShippart($value)
    {
        $this->_shippart = $value;
    }

    /**
     * @param Char
     */
    public function setShipto($value)
    {
        $this->_shipto = $value;
    }

    /**
     * @param Char
     */
    public function setDom_exp($value)
    {
        $this->_dom_exp = $value;
    }

    /**
     * @param Char
     */
    public function setRemitto1($value)
    {
        $this->_remitto1 = $value;
    }

    /**
     * @param Char
     */
    public function setRemitto2($value)
    {
        $this->_remitto2 = $value;
    }

    /**
     * @param Char
     */
    public function setRemitto3($value)
    {
        $this->_remitto3 = $value;
    }

    /**
     * @param Char
     */
    public function setVendorref($value)
    {
        $this->_vendorref = $value;
    }

    /**
     * @param Memo
     */
    public function setNotes($value)
    {
        $this->_notes = $value;
    }

    /**
     * @param Logical
     */
    public function setAuto($value)
    {
        $this->_auto = $value;
    }

    /**
     * @param Char
     */
    public function setAcct_auto($value)
    {
        $this->_acct_auto = $value;
    }

    /**
     * @param Numeric
     */
    public function setAutoamt($value)
    {
        $this->_autoamt = $value;
    }

    /**
     * @param Char
     */
    public function setAutoperiod($value)
    {
        $this->_autoperiod = $value;
    }

    /**
     * @param Logical
     */
    public function setTaxstat($value)
    {
        $this->_taxstat = $value;
    }

    /**
     * @param Numeric
     */
    public function setTax($value)
    {
        $this->_tax = $value;
    }

    /**
     * @param Date
     */
    public function setEntrydate($value)
    {
        $this->_entrydate = $value;
    }

    /**
     * @param Char
     */
    public function setFed_id_no($value)
    {
        $this->_fed_id_no = $value;
    }

    /**
     * @param Char
     */
    public function setDisb_acct($value)
    {
        $this->_disb_acct = $value;
    }

    /**
     * @param Char
     */
    public function setPoremark($value)
    {
        $this->_poremark = $value;
    }

    /**
     * @param Char
     */
    public function setBlanpo($value)
    {
        $this->_blanpo = $value;
    }

    /**
     * @param Char
     */
    public function setIdpono($value)
    {
        $this->_idpono = $value;
    }

    /**
     * @param Char
     */
    public function setFobpoint($value)
    {
        $this->_fobpoint = $value;
    }

    /**
     * @param Logical
     */
    public function setNflg0($value)
    {
        $this->_nflg0 = $value;
    }

    /**
     * @param Logical
     */
    public function setPrt1099($value)
    {
        $this->_prt1099 = $value;
    }

    /**
     * @param Char
     */
    public function setFrtstat($value)
    {
        $this->_frtstat = $value;
    }

    /**
     * @param Char
     */
    public function setRemitto($value)
    {
        $this->_remitto = $value;
    }

    /**
     * @param Logical
     */
    public function setManufact($value)
    {
        $this->_manufact = $value;
    }

    /**
     * @param Char
     */
    public function setPostcurrid($value)
    {
        $this->_postcurrid = $value;
    }

    /**
     * @param Char
     */
    public function setPaycurrid($value)
    {
        $this->_paycurrid = $value;
    }

    /**
     * @param Char
     */
    public function setApacct($value)
    {
        $this->_apacct = $value;
    }

    /**
     * @param Char
     */
    public function setTaxtype($value)
    {
        $this->_taxtype = $value;
    }

    /**
     * @param Numeric
     */
    public function setTax2($value)
    {
        $this->_tax2 = $value;
    }

    /**
     * @param Char
     */
    public function setTaxica($value)
    {
        $this->_taxica = $value;
    }

    /**
     * @param Char
     */
    public function setBaseid($value)
    {
        $this->_baseid = $value;
    }

    /**
     * @param Char
     */
    public function setRegionid($value)
    {
        $this->_regionid = $value;
    }

    /**
     * @param Char
     */
    public function setConfirm($value)
    {
        $this->_confirm = $value;
    }

    /**
     * @param Char
     */
    public function setAddress3($value)
    {
        $this->_address3 = $value;
    }

    /**
     * @param Char
     */
    public function setAddress4($value)
    {
        $this->_address4 = $value;
    }

    /**
     * @param Char
     */
    public function setPmtmed($value)
    {
        $this->_pmtmed = $value;
    }

    /**
     * @param Char
     */
    public function setTaxcode1($value)
    {
        $this->_taxcode1 = $value;
    }

    /**
     * @param Char
     */
    public function setTaxcode2($value)
    {
        $this->_taxcode2 = $value;
    }

    /**
     * @param Char
     */
    public function setTaxcode3($value)
    {
        $this->_taxcode3 = $value;
    }

    /**
     * @param Char
     */
    public function setTaxcode4($value)
    {
        $this->_taxcode4 = $value;
    }

    /**
     * @param Char
     */
    public function setCmptype($value)
    {
        $this->_cmptype = $value;
    }

    /**
     * @param Char
     */
    public function setBnkactno($value)
    {
        $this->_bnkactno = $value;
    }

    /**
     * @param Char
     */
    public function setBnkcode($value)
    {
        $this->_bnkcode = $value;
    }

    /**
     * @param Char
     */
    public function setBnkacttp($value)
    {
        $this->_bnkacttp = $value;
    }

    /**
     * @param Char
     */
    public function setBnkcont($value)
    {
        $this->_bnkcont = $value;
    }

    /**
     * @param Char
     */
    public function setBnktitle($value)
    {
        $this->_bnktitle = $value;
    }

    /**
     * @param Char
     */
    public function setBnkzone($value)
    {
        $this->_bnkzone = $value;
    }

    /**
     * @param Char
     */
    public function setFupdtime($value)
    {
        $this->_fupdtime = $value;
    }

    /**
     * @param Date
     */
    public function setFupddate($value)
    {
        $this->_fupddate = $value;
    }

    /**
     * @param Char
     */
    public function setFuserid($value)
    {
        $this->_fuserid = $value;
    }

    /**
     * @param Char
     */
    public function setFstation($value)
    {
        $this->_fstation = $value;
    }

    /**
     * @param Char
     */
    public function setKey($value)
    {
        $this->_key = $value;
    }

    /**
     * @param Char
     */
    public function setBustype($value)
    {
        $this->_bustype = $value;
    }

    /**
     * @param Logical
     */
    public function setW9($value)
    {
        $this->_w9 = $value;
    }

    /**
     * @param Logical
     */
    public function setDefvchr($value)
    {
        $this->_defvchr = $value;
    }

    /**
     * @param Char
     */
    public function setType1099($value)
    {
        $this->_type1099 = $value;
    }

    /**
     * @param Numeric
     */
    public function setYtdpaid($value)
    {
        $this->_ytdpaid = $value;
    }

    /**
     * @param Logical
     */
    public function setDesigner($value)
    {
        $this->_designer = $value;
    }

    /**
     * @param Char
     */
    public function setEdicustno($value)
    {
        $this->_edicustno = $value;
    }

    /**
     * @param Char
     */
    public function setEdicompany($value)
    {
        $this->_edicompany = $value;
    }

    /**
     * @param Char
     */
    public function setEdiactcomp($value)
    {
        $this->_ediactcomp = $value;
    }

    /**
     * @param Numeric
     */
    public function setPtdqty($value)
    {
        $this->_ptdqty = $value;
    }

    /**
     * @param Numeric
     */
    public function setYtdqty($value)
    {
        $this->_ytdqty = $value;
    }

    /**
     * @param Logical
     */
    public function setPoshpflag($value)
    {
        $this->_poshpflag = $value;
    }

    /**
     * @param Char
     */
    public function setDesc_exp($value)
    {
        $this->_desc_exp = $value;
    }

    /**
     * @param Char
     */
    public function setQblistid($value)
    {
        $this->_qblistid = $value;
    }

    /**
     * @param Logical
     */
    public function setIsactive($value)
    {
        $this->_isactive = $value;
    }

    /**
     * @param Char
     */
    public function setNameprefix($value)
    {
        $this->_nameprefix = $value;
    }

    /**
     * @param Char
     */
    public function setFirstname($value)
    {
        $this->_firstname = $value;
    }

    /**
     * @param Char
     */
    public function setLastname($value)
    {
        $this->_lastname = $value;
    }

    /**
     * @param Logical
     */
    public function setApbudget($value)
    {
        $this->_apbudget = $value;
    }

    /**
     * @param Char
     */
    public function setEmailcc($value)
    {
        $this->_emailcc = $value;
    }

    /**
     * @param Logical
     */
    public function setCctypevend($value)
    {
        $this->_cctypevend = $value;
    }

    /**
     * @param Char
     */
    public function setBnkabano($value)
    {
        $this->_bnkabano = $value;
    }

    /**
     * @param Char
     */
    public function setBnkswiftno($value)
    {
        $this->_bnkswiftno = $value;
    }

    /**
     * @param Logical
     */
    public function setBotldepgst($value)
    {
        $this->_botldepgst = $value;
    }

    /**
     * @param Char
     */
    public function setFtaxcode($value)
    {
        $this->_ftaxcode = $value;
    }

    /**
     * @param Logical
     */
    public function setNameother($value)
    {
        $this->_nameother = $value;
    }

    /**
     * @param Numeric
     */
    public function setPolimit($value)
    {
        $this->_polimit = $value;
    }

    /**
     * @param Char
     */
    public function setManfid($value)
    {
        $this->_manfid = $value;
    }

    /**
     * @param Char
     */
    public function setManfupc($value)
    {
        $this->_manfupc = $value;
    }

    /**
     * @param Char
     */
    public function setEditype($value)
    {
        $this->_editype = $value;
    }

    /**
     * @param Char
     */
    public function setPoedilink($value)
    {
        $this->_poedilink = $value;
    }


    /**
     * Constructor
     * @param $vendno
     * @param $vendor
     * @param $address1
     * @param $address2
     * @param $city
     * @param $state
     * @param $zip
     * @param $country
     * @param $phone
     * @param $phone1
     * @param $email
     * @param $phonecrd
     * @param $contact
     * @param $contact1
     * @param $crdmngr
     * @param $terms
     * @param $terms1
     * @param $check_no
     * @param $amount
     * @param $ldate
     * @param $ytd_purch
     * @param $ptd_purch
     * @param $unpostbal
     * @param $balance
     * @param $crdlimit
     * @param $discount
     * @param $ssnmbr
     * @param $title
     * @param $title1
     * @param $faxnum
     * @param $faxnum2
     * @param $duedays
     * @param $discdays
     * @param $terr
     * @param $source
     * @param $class
     * @param $indust
     * @param $buyercode
     * @param $shipvia
     * @param $status
     * @param $shippart
     * @param $shipto
     * @param $dom_exp
     * @param $remitto1
     * @param $remitto2
     * @param $remitto3
     * @param $vendorref
     * @param $notes
     * @param $auto
     * @param $acct_auto
     * @param $autoamt
     * @param $autoperiod
     * @param $taxstat
     * @param $tax
     * @param $entrydate
     * @param $fed_id_no
     * @param $disb_acct
     * @param $poremark
     * @param $blanpo
     * @param $idpono
     * @param $fobpoint
     * @param $nflg0
     * @param $prt1099
     * @param $frtstat
     * @param $remitto
     * @param $manufact
     * @param $postcurrid
     * @param $paycurrid
     * @param $apacct
     * @param $taxtype
     * @param $tax2
     * @param $taxica
     * @param $baseid
     * @param $regionid
     * @param $confirm
     * @param $address3
     * @param $address4
     * @param $pmtmed
     * @param $taxcode1
     * @param $taxcode2
     * @param $taxcode3
     * @param $taxcode4
     * @param $cmptype
     * @param $bnkactno
     * @param $bnkcode
     * @param $bnkacttp
     * @param $bnkcont
     * @param $bnktitle
     * @param $bnkzone
     * @param $fupdtime
     * @param $fupddate
     * @param $fuserid
     * @param $fstation
     * @param $key
     * @param $bustype
     * @param $w9
     * @param $defvchr
     * @param $type1099
     * @param $ytdpaid
     * @param $designer
     * @param $edicustno
     * @param $edicompany
     * @param $ediactcomp
     * @param $ptdqty
     * @param $ytdqty
     * @param $poshpflag
     * @param $desc_exp
     * @param $qblistid
     * @param $isactive
     * @param $nameprefix
     * @param $firstname
     * @param $lastname
     * @param $apbudget
     * @param $emailcc
     * @param $cctypevend
     * @param $bnkabano
     * @param $bnkswiftno
     * @param $botldepgst
     * @param $ftaxcode
     * @param $nameother
     * @param $polimit
     * @param $manfid
     * @param $manfupc
     * @param $editype
     * @param $poedilink
     */
    public function __construct($vendno, $vendor, $address1, $address2, $city, $state, $zip, $country, $phone, $phone1, $email, $phonecrd, $contact, $contact1, $crdmngr, $terms, $terms1, $check_no, $amount, $ldate, $ytd_purch, $ptd_purch, $unpostbal, $balance, $crdlimit, $discount, $ssnmbr, $title, $title1, $faxnum, $faxnum2, $duedays, $discdays, $terr, $source, $class, $indust, $buyercode, $shipvia, $status, $shippart, $shipto, $dom_exp, $remitto1, $remitto2, $remitto3, $vendorref, $notes, $auto, $acct_auto, $autoamt, $autoperiod, $taxstat, $tax, $entrydate, $fed_id_no, $disb_acct, $poremark, $blanpo, $idpono, $fobpoint, $nflg0, $prt1099, $frtstat, $remitto, $manufact, $postcurrid, $paycurrid, $apacct, $taxtype, $tax2, $taxica, $baseid, $regionid, $confirm, $address3, $address4, $pmtmed, $taxcode1, $taxcode2, $taxcode3, $taxcode4, $cmptype, $bnkactno, $bnkcode, $bnkacttp, $bnkcont, $bnktitle, $bnkzone, $fupdtime, $fupddate, $fuserid, $fstation, $key, $bustype, $w9, $defvchr, $type1099, $ytdpaid, $designer, $edicustno, $edicompany, $ediactcomp, $ptdqty, $ytdqty, $poshpflag, $desc_exp, $qblistid, $isactive, $nameprefix, $firstname, $lastname, $apbudget, $emailcc, $cctypevend, $bnkabano, $bnkswiftno, $botldepgst, $ftaxcode, $nameother, $polimit, $manfid, $manfupc, $editype, $poedilink)
    {
        $this->_vendno = $vendno;
        $this->_vendor = $vendor;
        $this->_address1 = $address1;
        $this->_address2 = $address2;
        $this->_city = $city;
        $this->_state = $state;
        $this->_zip = $zip;
        $this->_country = $country;
        $this->_phone = $phone;
        $this->_phone1 = $phone1;
        $this->_email = $email;
        $this->_phonecrd = $phonecrd;
        $this->_contact = $contact;
        $this->_contact1 = $contact1;
        $this->_crdmngr = $crdmngr;
        $this->_terms = $terms;
        $this->_terms1 = $terms1;
        $this->_check_no = $check_no;
        $this->_amount = $amount;
        $this->_ldate = $ldate;
        $this->_ytd_purch = $ytd_purch;
        $this->_ptd_purch = $ptd_purch;
        $this->_unpostbal = $unpostbal;
        $this->_balance = $balance;
        $this->_crdlimit = $crdlimit;
        $this->_discount = $discount;
        $this->_ssnmbr = $ssnmbr;
        $this->_title = $title;
        $this->_title1 = $title1;
        $this->_faxnum = $faxnum;
        $this->_faxnum2 = $faxnum2;
        $this->_duedays = $duedays;
        $this->_discdays = $discdays;
        $this->_terr = $terr;
        $this->_source = $source;
        $this->_class = $class;
        $this->_indust = $indust;
        $this->_buyercode = $buyercode;
        $this->_shipvia = $shipvia;
        $this->_status = $status;
        $this->_shippart = $shippart;
        $this->_shipto = $shipto;
        $this->_dom_exp = $dom_exp;
        $this->_remitto1 = $remitto1;
        $this->_remitto2 = $remitto2;
        $this->_remitto3 = $remitto3;
        $this->_vendorref = $vendorref;
        $this->_notes = $notes;
        $this->_auto = $auto;
        $this->_acct_auto = $acct_auto;
        $this->_autoamt = $autoamt;
        $this->_autoperiod = $autoperiod;
        $this->_taxstat = $taxstat;
        $this->_tax = $tax;
        $this->_entrydate = $entrydate;
        $this->_fed_id_no = $fed_id_no;
        $this->_disb_acct = $disb_acct;
        $this->_poremark = $poremark;
        $this->_blanpo = $blanpo;
        $this->_idpono = $idpono;
        $this->_fobpoint = $fobpoint;
        $this->_nflg0 = $nflg0;
        $this->_prt1099 = $prt1099;
        $this->_frtstat = $frtstat;
        $this->_remitto = $remitto;
        $this->_manufact = $manufact;
        $this->_postcurrid = $postcurrid;
        $this->_paycurrid = $paycurrid;
        $this->_apacct = $apacct;
        $this->_taxtype = $taxtype;
        $this->_tax2 = $tax2;
        $this->_taxica = $taxica;
        $this->_baseid = $baseid;
        $this->_regionid = $regionid;
        $this->_confirm = $confirm;
        $this->_address3 = $address3;
        $this->_address4 = $address4;
        $this->_pmtmed = $pmtmed;
        $this->_taxcode1 = $taxcode1;
        $this->_taxcode2 = $taxcode2;
        $this->_taxcode3 = $taxcode3;
        $this->_taxcode4 = $taxcode4;
        $this->_cmptype = $cmptype;
        $this->_bnkactno = $bnkactno;
        $this->_bnkcode = $bnkcode;
        $this->_bnkacttp = $bnkacttp;
        $this->_bnkcont = $bnkcont;
        $this->_bnktitle = $bnktitle;
        $this->_bnkzone = $bnkzone;
        $this->_fupdtime = $fupdtime;
        $this->_fupddate = $fupddate;
        $this->_fuserid = $fuserid;
        $this->_fstation = $fstation;
        $this->_key = $key;
        $this->_bustype = $bustype;
        $this->_w9 = $w9;
        $this->_defvchr = $defvchr;
        $this->_type1099 = $type1099;
        $this->_ytdpaid = $ytdpaid;
        $this->_designer = $designer;
        $this->_edicustno = $edicustno;
        $this->_edicompany = $edicompany;
        $this->_ediactcomp = $ediactcomp;
        $this->_ptdqty = $ptdqty;
        $this->_ytdqty = $ytdqty;
        $this->_poshpflag = $poshpflag;
        $this->_desc_exp = $desc_exp;
        $this->_qblistid = $qblistid;
        $this->_isactive = $isactive;
        $this->_nameprefix = $nameprefix;
        $this->_firstname = $firstname;
        $this->_lastname = $lastname;
        $this->_apbudget = $apbudget;
        $this->_emailcc = $emailcc;
        $this->_cctypevend = $cctypevend;
        $this->_bnkabano = $bnkabano;
        $this->_bnkswiftno = $bnkswiftno;
        $this->_botldepgst = $botldepgst;
        $this->_ftaxcode = $ftaxcode;
        $this->_nameother = $nameother;
        $this->_polimit = $polimit;
        $this->_manfid = $manfid;
        $this->_manfupc = $manfupc;
        $this->_editype = $editype;
        $this->_poedilink = $poedilink;

    }

    public static function toString()
    {
        return self::$_name;
    }

}