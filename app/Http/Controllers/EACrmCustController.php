<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use App\Http\Helpers\I5Helper;


class EACrmCustController extends Controller
{ 
    
    public function callCmd($cmd) {
        I5HelperCW::callCmd($cmd);
        
    }
    
    public function getCustLst($empId, $page) {
        $salesRep = '000';
        $terrMgr = $empId;
        $regMgr = '000';
        $senMgr = '000';
        $params = array(
            array('IN',10,'CTUSER','CTUSER',env('DB_USERNAME','userId')),
            array('IN',3,'SALESREP','SALESREP',$salesRep),
            array('IN',3,'TERRITORYMNG','TERRITORYMNG',$terrMgr),
            array('IN',3,'REGIONMNG','REGIONMNG',$regMgr),
            array('IN',3,'SENIORMNGMT','SENIORMNGMT',$senMgr),
            array('IN',6,'CLIMIT','CLIMIT',env('EA_PAGE_SIZE','000025')),
            array('IN',6,'COFFSET','COFFSET',$page));
        I5Helper::callPgm('CRMCULSTR',$params);       
    }
    
    public function callCMDfromODBC($cmd) {
        $cmdLen = strlen($cmd);
        $stmt = "CALL QCMDEXC('DSPFFD FILE(QS36F/HORDDT)')";
        //dd($stmt);
        $results = DB::select($stmt);
        dd($results);
        return view('crm/crm-contacts',compact('results'));
    }
    
    public function getSPCustList() {
            $salesRep = '000';
        $terrMgr = 0;
        $regMgr = '000';
        $senMgr = '000';
        $results = DB::select("CALL CTPEAPGM.CRMCUSLST('HOLIVEROS','027','   ','   ','   ','000010','000003')");
        return view('crm/crm-contacts',compact('results'));  
    }    
    
    public function testRpg() {
        $results = DB::select("call CTPEAPGM.CRMCULSTR('HOLIVEROS','027','   ','   ','   ','000010','000003')");
        dd($results);
    }
    
    public function testRpgIO() {
        $results = DB::select("CALL CTPINV.GETMAILR('HOLIVEROS ' '                    ')");
        dd($results);
    }
    
    public function testSQL() {
        $sqlStmt = "WITH COUNTRY   (CNTRY, CNTRYNAME) AS (SELECT CNT03 CNTRY, CNTDE1 CNTRYNAME FROM QS36F.CNTRLL WHERE CNT01='210'),
        SALESZONE (SZONE, ZONENAME)  AS (SELECT CNT03 SZONE, CNTDE1 ZONENAME  FROM QS36F.CNTRLL WHERE CNT01='222'),
        SALESREP  (SREP, REPNAME)   AS (SELECT CNT03 SREP, CNTDE1 REPNAME  FROM QS36F.CNTRLL WHERE CNT01='215')
        SELECT CUNUM, CUNAM, CUAD1, CUAD2, CUAD3, CUSTE, CUCLS, CUTRM, CUZIP, CUZPE, CUPH1,
        CUPH2, CUCN1, CUCN2, CUFAX, COUNTRY.CNTRYNAME, SALESZONE.ZONENAME, SALESREP.REPNAME
        FROM QS36F.CUMSTA
        JOIN COUNTRY ON LEFT(CURT2,3) = CNTRY
        JOIN SALESZONE ON SUBSTR(CURT2,5,2) = SZONE
        JOIN SALESREP ON CUSLM = SREP
        WHERE CUSLM = 027 fetch first 10 rows only";
        $results = DB::select($sqlStmt);
        return view('crm/crm-contacts',compact('results'));     }
}
