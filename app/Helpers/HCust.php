<?php

namespace app\Helpers;
use DB;


class HCust
{

    public static function getBasic($custNo){
        
        $sqlStmt = "
        SELECT CUSTS, CUNUM, CUNAM, CUAD1,CUAD2,CUAD3, CUSLM, CUCLS,CUTRM,CUCRD,CUPH1,CUPH2,CUCN1,CUCN2,
        CUFAX,CUTX#,CUSRT,CUBRDF,SUBSTR(T2.CNTDE2,1,11) BRANCH,CUSLM,T3.CNTDE1 SALESREP,CUSLTR,
        T4.CNTDE1 TERR,T5.CNTDE1 COUNTRY, CUCITY, CUZIP,CUSTE,CULANG
        FROM QS36F.CSCUMST T1
        LEFT JOIN QS36F.CNTRLL T2 ON T2.CNT01 = '304' AND T1.CUBRDF = T2.CNT03 
        LEFT JOIN QS36F.CNTRLL T3 ON T3.CNT01 = '215' AND T1.CUSLM = T3.CNT03 
        LEFT JOIN QS36F.CNTRLL T4 ON T4.CNT01 = '224' AND T1.CUSLTR = T4.CNT03
        LEFT JOIN QS36F.CNTRLL T5 ON T5.CNT01 = '210' AND T1.CUCTRY = T5.CNT03
        WHERE CUNUM = $custNo         
        ";       

        try {     
            return DB::select($sqlStmt); 
        } catch (Throwable $th) {
            //throw $th;
            abort(500); 
        }
        
        

        

    }


}

?>