<?php 
$insert_id = 0;
function ambilsql($sql){
	global $conn;
	$query = mysqli_query($conn, $sql)or die('<pre>Error mysqli_query: ' . mysqli_error($conn) . '<br />' . $sql . '</pre>');
	
	if ( preg_match("/^(insert|replace)\s+/i",$sql) )
	{

	   $insert_id = $conn->insert_id;
	}
	
	return $query;
}
function get_results($sql){
    global $conn;
	$query = mysqli_query($conn,$sql);
	$arr = [];
	while( $row = mysqli_fetch_assoc($query) ) {
		$arr[] = $row;
	}
	return $arr;
}
$rows = get_results("SELECT * FROM tb_gejala ORDER BY kode_gejala");
$GEJALA = array();
foreach($rows as $row){
    $kode_gejala = $row["kode_gejala"];
    $GEJALA[$kode_gejala] = $row["nama_gejala"];
}

$rows = get_results("SELECT * FROM tbl_penyakit ORDER BY id_penyakit");
$DIAGNOSA = array();
foreach($rows as $row){
    $DIAGNOSA[$row["id_penyakit"]] = $row;
}

function get_terjawab(){
    $rows = get_results("SELECT kode_gejala, jawaban FROM tbl_konsultasi");
    $arr = array();
    foreach($rows as $row){
        $kode_gejala=$row["kode_gejala"];
        $arr[$kode_gejala] = $row["jawaban"];
    }
    return $arr;
}

function get_relasi($terjawab){
    $rows = get_results("SELECT id_penyakit, kode_gejala 
        FROM tbl_relasi 
        ORDER BY id_penyakit");
    $arr =array();
    foreach($rows as $row){
        $penyakit = $row["id_penyakit"];
        $gejala = $row["kode_gejala"];
        $arr[$penyakit][$gejala] = @$terjawab[$gejala];
    }
    echo '<pre>' . print_r($terjawab, 1) . '</pre>';
    return $arr;
}
function get_row($sql){
	$datasql = ambilsql($sql);
	$result = mysqli_fetch_assoc($datasql);
    return $result;
}

function get_var($sql){
	$datasql = ambilsql($sql);
	$row = mysqli_fetch_row($datasql);
	return $row[0];
}

function  get_next_gejala($relasi){
    eliminate_relasi($relasi);
    foreach($relasi as $key => $val){
        foreach($val as $k => $v){
            if($v=='')
                return $k;
        }
    }
    return false;
}



function eliminate_relasi(&$relasi){
    foreach($relasi as $key => $val){
        $tidak=0;
        foreach($val as $k => $v){
            if($v=='Tidak')
                $tidak++;
        }
        if($tidak>=2 || $tidak >= count($val)/2)
            unset($relasi[$key]);
    }
    echo '<pre>' . print_r($relasi, 1) . '</pre>';
}

?>