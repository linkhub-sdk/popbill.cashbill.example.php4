<?php

include 'common.php';


echo '발급 단가 확인 테스트'.chr(10).'처리결과 : ' ;

$result = $CashbillService->GetUnitCost('1231212312');
if(is_a($result,'PopbillException')) {
	echo '['.$result->code.'] '.$result->message;
}
else {

	echo $result;
}
echo chr(10);
?>
