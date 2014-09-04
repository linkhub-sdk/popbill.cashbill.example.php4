<?php

include 'common.php';


echo '팝빌 기본 URL 확인 테스트'.chr(10).'처리결과 : ' ;

$result = $CashbillService->GetPopbillURL('1231212312','userid','LOGIN');
if(is_a($result,'PopbillException')) {
	echo '['.$result->code.'] '.$result->message;
}
else {

	echo chr(10);
	echo substr( $result,0,40) . ' ...생략...';
}
echo chr(10);
?>
