<?php 
$server = 'localhost';
$Database = 'maridiagnosa';
$username = 'root';
$password = '';

$conn = mysqli_connect($server, $username, $password, $Database); 
include 'fungsiDSA.php';
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

// function get_results($sql){
// 	$query = $this->query($sql);
// 	$arr = array();
// 	while($row = mysqli_fetch_object($query)){
// 		$arr[] = $row;
// 	}
// 	return $arr;
// }
// $rows = $conn->get_results("SELECT kode_gejala, nama_gejala FROM tb_gejala ORDER BY kode_gejala");
// $GEJALA = array();
// foreach($rows as $row){
//     $GEJALA[$row->kode_gejala] = $row->nama_gejala;
// }

// $rows = $conn->get_results("SELECT kode_gejala, nama_gejala FROM tb_gejala ORDER BY kode_gejala");
// $GEJALA = array();
// foreach($rows as $row){
//     $GEJALA[$row->kode_gejala] = $row->nama_gejala;
// }

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}
//fungsi tambah penyakit dan gejala
function tambah($data) {
	global $conn;
	$idp = $data["id_penyakit"];
	$nama = htmlspecialchars($data["namapenyakit"]);
	$jenispenyakit = htmlspecialchars($data["jenispenyakit"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$solusi = htmlspecialchars($data["solusi"]);

	$query = 
			"INSERT INTO tbl_penyakit
			VALUES
			('$idp', '$nama', '$jenispenyakit', '$deskripsi', '$solusi')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function tambahrelasi($data) {
	global $conn;
	$id = $data["id_relasi"];
	$idg = $data["kode_gejala"];
	$idp = $data["kode_penyakit"];

	$query = 
			"INSERT INTO tbl_relasi
			VALUES
			('$id', '$idp', '$idg')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function tambahgejala($data) {
	global $conn;
	$id = $data["kode_gejala"];
	$nama = htmlspecialchars($data["nama_gejala"]);
	$keterangan = htmlspecialchars($data["keterangan"]);

	$query = 
			"INSERT INTO tb_gejala
			VALUES
			('$id', '$nama', '$keterangan')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}
//Fucntion Hapus
function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM akun WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function hapuspenyakit($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tbl_penyakit WHERE id_penyakit = $id");
	return mysqli_affected_rows($conn);
}

function hapusgejala($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_gejala WHERE kode_gejala = $id");
	return mysqli_affected_rows($conn);
}

//function Ubah
function ubah($data) {
	global $conn;

	$id = $data["id"];
	$level = $data["level"];
	$nama = htmlspecialchars($data["nama"]);
	$username = htmlspecialchars($data["username"]);
	$email = htmlspecialchars($data["email"]);
	$alamat = htmlspecialchars($data["alamat"]);
	
	// cek apakah user pilih gambar baru atau tidak
	// if( $_FILES['gambar']['error'] === 4 ) {
	// 	$gambar = $gambarLama;
	// } else {
	// 	$gambar = upload();
	// }
	
	$query = "UPDATE akun SET
				nama = '$nama',
				username = '$username',
				email = '$email',
				alamat = '$alamat',
				riwayat = '',
				level = '$level',
				password = ''
			  WHERE id = $id
			";
	// $query = "UPDATE data_akun SET
	// 			nama = '$nama',
	// 			alamat = '$alamat'
	// 			WHERE id = $id
	// 		";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

function ubahlvl($data) {
	global $conn;
	$id = $data["id_user"];
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$username = htmlspecialchars($data["username"]);
	$level = htmlspecialchars($data["level"]);
	$alamat = htmlspecialchars($data["alamat"]);
	
	$query = "UPDATE akun SET
				nama = '$nama',
				email = '$email',
				username = '$username',
				level = '$level',
				alamat = '$alamat'
			WHERE id = $id
			";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);	
}

function ubahpenyakit($data) {
	global $conn;
	$id = $data["idpenyakit"];
	$nama = htmlspecialchars($data["namapenyakit"]);
	$jenis = htmlspecialchars($data["jenispenyakit"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);
	$penanganan = htmlspecialchars($data["solusi"]);
	
	$query = "UPDATE tbl_penyakit SET
				nama_penyakit = '$nama',
				jenis_penyakit = '$jenis',
				deskripsi = '$deskripsi',
				solusi = '$penanganan'
			WHERE id_penyakit = $id
			";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);	
}

function ubahgejala($data) {
	global $conn;
	$id = $data["kode_gejala"];
	$nama = htmlspecialchars($data["nama_gejala"]);
	$keterangan = htmlspecialchars($data["keterangan"]);
	
	$query = "UPDATE tb_gejala SET
				nama_gejala = '$nama',
				keteragan = '$keterangan'
			WHERE kode_gejala = $id
			";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);	
}

function cari($keyword) {
	$query = "SELECT * FROM tbl_relasi INNER JOIN tb_gejala INNER JOIN tbl_penyakit
			WHERE
			id_penyakit LIKE '%$keyword%' OR
			nama_penyakit LIKE '%$keyword%' OR
			kode_gejala LIKE '%$keyword%' OR
			nama_gejala LIKE '%$keyword%'
			";
	return query($query);
}


function registrasi($data) {
	global $conn;
	$level = "user";
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$username = strtolower(stripslashes($data["username"]));
	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM akun WHERE username = '$username'");
	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username Sudah terdaftar!')
		      </script>";
		return false;
	}
	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);
	// tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO akun VALUES('','$nama','$email', '$password', '$username','','', '$level')");
	return mysqli_affected_rows($conn);
}
?>