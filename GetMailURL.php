<?php

include 'common.php';


echo '현금영수증 공급받는자용 URL(메일링크와 동일) 확인 테스트'.chr(10).'처리결과 : ' ;


$result = $CashbillService->GetMailURL('1231212312','123123','hklee0002');
if(is_a($result,'PopbillException')) {
	echo '['.$result->code.'] '.$result->message;
}
else {

	echo chr(10);
	echo substr( $result,0,40) . ' ...생략...';
}
echo chr(10);
?>
