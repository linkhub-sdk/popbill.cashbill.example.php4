<?php

include 'common.php';


echo '현금영수증 다량인쇄화면 URL(최대 100건) 확인 테스트'.chr(10).'처리결과 : ' ;

$MgtKeyList = array(
		'123123',
		'123123123',
		'123123123123',
		'1',
		'2'
);

$result = $CashbillService->GetMassPrintURL('1231212312',$MgtKeyList,'hklee0002');
if(is_a($result,'PopbillException')) {
	echo '['.$result->code.'] '.$result->message;
}
else {

	echo chr(10);
	echo substr( $result,0,40) . ' ...생략...';
}
echo chr(10);
?>
