<?php

include 'common.php';


echo '파트너 잔여 통합포인트 확인 테스트'.chr(10).'처리결과 : ' ;


$result = $CashbillService->GetPartnerBalance('1231212312');
if(is_a($result,'PopbillException')) {
	echo '['.$result->code.'] '.$result->message;
}
else {

	echo $result;
}
echo chr(10);
?>
