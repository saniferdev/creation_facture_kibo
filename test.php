<?php
for($i=1;$i<67;$i++){
	if( $i== 1 || $i== 2 || $i== 11 || $i== 17 || $i== 18 || $i== 24 || $i== 31 || $i== 47 || $i== 48 || $i== 55 || $i== 63 ){
		echo "INSERT INTO ta_proof_status (id_proof_status, orders_status_id) VALUES (2,$i);"."<br>";
	}
	else if( $i== 13 || $i== 49 ){
		echo "INSERT INTO ta_proof_status (id_proof_status, orders_status_id) VALUES (3,$i);"."<br>";
	}
	else
		echo "INSERT INTO ta_proof_status (id_proof_status, orders_status_id) VALUES (1,$i);"."<br>";
}
?>