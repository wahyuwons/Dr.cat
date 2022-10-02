<?php
	session_start();
	$id = $_GET['id'];
	$konsultasi = $_GET['konsultasi'];			
?>
<!DOCTYPE html>
<html lang="en">
<body>	
    <div class="navbar-inner" style="border:1px solid #bbb; border-radius:10px; padding:10px 20px 10px 20px; margin-top:50px; margin-left:auto; margin-right:auto;">
		<div>
            <form name="form1" method="post" action="">       
				<?php
                        //PROSES PENYAKIT P001
                        $s1 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P01%') AND konsultasi=$konsultasi");
                        $r1 = mysqli_num_rows($s1);
                        
                        $ssum1 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.b1,0)) as j1
                                                from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P01%')")
                                                or die(mysqli_error());
                        $dsum1 = mysqli_fetch_array($ssum1);
                        $cek1=$dsum1['j1'];
						$proses1 = $dsum1['j1']/35;
						$proses1_ok = number_format($proses1, 2, '.', '');
					$peroa1 = $proses1_ok*100;
                        //echo"$cek1";
                        //PROSES PENYAKIT P002
                        $s2 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P02%') AND konsultasi=$konsultasi");
                        $r2 = mysqli_num_rows($s2);
                        
                        $ssum2 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.b2,0)) as j2
                                                from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P02%')")
                                                or die(mysqli_error());
                        $dsum2 = mysqli_fetch_array($ssum2);
						$cek2=$dsum2['j2'];
                        $proses2 = $dsum2['j2']/34;
						$proses2_ok = number_format($proses2, 2, '.', '');
					$peroa2 = $proses2_ok*100;
                        //echo"$cek2";
                        //PROSES PENYAKIT P003
                        $s3 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P03%') AND konsultasi=$konsultasi");
                        $r3 = mysqli_num_rows($s3);
                        
                        $ssum3 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.b3,0)) as j3
                                                from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P03%')")
                                                or die(mysqli_error());
                        $dsum3 = mysqli_fetch_array($ssum3);
						$cek3=$dsum3['j3'];
                        $proses3 = $dsum3['j3']/16;
						$proses3_ok = number_format($proses3, 2, '.', '');
					$peroa3 = $proses3_ok*100;
                        //echo"$cek3";
                        //PROSES PENYAKIT P004
                        $s4 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P04%') AND konsultasi=$konsultasi");
                        $r4 = mysqli_num_rows($s4);
                        
                        $ssum4 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.b4,0)) as j4
                                                from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P04%')")
                                                or die(mysqli_error());
                        $dsum4 = mysqli_fetch_array($ssum4);
						$cek4=$dsum4['j4'];
                        $proses4 = $dsum4['j4']/10;
						$proses4_ok = number_format($proses4, 2, '.', '');
					$peroa4 = $proses4_ok*100;
                       // echo"$cek4";
                        //PROSES PENYAKIT P005
                        $s5 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P05%') AND konsultasi=$konsultasi");
                        $r5 = mysqli_num_rows($s5);
                        
                        $ssum5 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.b5,0)) as j5
                                                from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P05%')")
                                                or die(mysqli_error());
                        $dsum5 = mysqli_fetch_array($ssum5);
						$cek5=$dsum5['j5'];
                        $proses5 = $dsum5['j5']/29;
                        
                        $proses5_ok = number_format($proses5, 2, '.', '');
					$peroa5 = $proses5_ok*100;
                        //echo"$cek5";
                         //PROSES PENYAKIT P006
                        $s6 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P06%') AND konsultasi=$konsultasi");
                        $r6 = mysqli_num_rows($s6);
                        
                        $ssum6 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.b6,0)) as j6
                                                from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P06%')")
                                                or die(mysqli_error());
                        $dsum6 = mysqli_fetch_array($ssum6);
                        $cek6= $dsum6['j6'];
                        $proses6 = $dsum6['j6']/35;
                        $proses6_ok = number_format($proses6, 2, '.', '');
                    $peroa6 = $proses6_ok*100;
                       // echo "$cek6";
                       //PROSES PENYAKIT P007
                       $s7 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P07%') AND konsultasi=$konsultasi");
                       $r7 = mysqli_num_rows($s7);
                       
                       $ssum7 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.b7,0)) as j7
                                               from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P07%')")
                                               or die(mysqli_error());
                       $dsum7 = mysqli_fetch_array($ssum7);
                       $cek7= $dsum7['j7'];
                       $proses7 = $dsum7['j7']/19;
                       $proses7_ok = number_format($proses7, 2, '.', '');
                    $peroa7 = $proses7_ok*100;
                      // echo "$cek7";
                      //PROSES PENYAKIT P008
                      $s8 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P08%') AND konsultasi=$konsultasi");
                      $r8 = mysqli_num_rows($s8);
                      
                      $ssum8 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.b8,0)) as j8
                                              from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P08%')")
                                              or die(mysqli_error());
                      $dsum8 = mysqli_fetch_array($ssum8);
                      $cek8= $dsum8['j8'];
                      $proses8 = $dsum8['j8']/3;
                      $proses8_ok = number_format($proses8, 2, '.', '');
                    $peroa8 = $proses8_ok*100;
                      // echo "$cek8";
                     //PROSES PENYAKIT P009
                     $s9 = mysqli_query($kon,"select * from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P09%') AND konsultasi=$konsultasi");
                     $r9 = mysqli_num_rows($s9);
                     
                     $ssum9 = mysqli_query($kon,"select sum(if(a.konsultasi=$konsultasi, a.b9,0)) as j9
                                             from hasil_konsultasi a where a.id_gejala IN (select b.id_gejala from basis_kasus b where b.kd_penyakit like 'P09%')")
                                             or die(mysqli_error());
                     $dsum9 = mysqli_fetch_array($ssum9);
                     $cek9= $dsum9['j9'];
                     $proses9 = $dsum9['j9']/12;
                     $proses9_ok = number_format($proses9, 2, '.', '');
                    $peroa9 = $proses9_ok*100;
                    // echo "$cek9";
                    
 
                        //MEMBANDINGKAN NILAI SIMILARITY DAN MENGAMBIL NILAI YANG PALING TINGGI
                        $MAX = max($proses1, $proses2, $proses3, $proses4, $proses5, $proses6,  $proses7, $proses8, $proses9);
                         echo "<div  style='margin-top:10px;'><font face='Times New Roman cursive'>Proses Perhitungan <b ><br>
                             Intoksikasi: Similiarity = $cek1/35 = $proses1_ok x 100 = $peroa1%<br>
                             Helminthiasis: Similiarity = $cek2/34 = $proses2_ok x 100 = $peroa2 %<br>
                             Gastritis: Similiarity = $cek3/16 = $proses3_ok x 100 = $peroa3%<br> 
                             Enteritis: Similiarity = $cek4/10 = $proses4_ok x 100 = $peroa4%<br>
                             Panleukopenia: Similiarity = $cek5/29 = $proses5_ok x 100 = $peroa5%<br>
                             Calici: Similiarity = $cek6/35 = $proses6_ok x 100 = $peroa6%<br>
                             Konstipasi: Similiarity = $cek7/19 = $proses7_ok x 100 = $peroa7 %<br>
                             Megacolon: Similiarity = $cek8/3 = $proses8_ok x 100 = $peroa8%<br> 
                             Prolaps Recti-Ani: Similiarity = $cek9/12 = $proses9_ok x 100 = $peroa9%<br>
                             </b></font></div>";
                        
                        //MENAMPILKAN HASIL AKHIR
                        if($MAX==$proses1){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P01%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
							
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama Pasien: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
                            
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala yang anda inputkan, kemungkinan anda menderita gejala : <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran Pengobatan :</b><br/>$dp[solusi]</font></div>";
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Contoh kucing mengalami Intoksikasi kunjungi link dibawah :</b><br/>$dp[contoh]</font></div>";
                            echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }
                        else if($MAX==$proses2){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P02%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon, "select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama Pasien: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
							
                            echo "<div  style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala yang anda inputkan, kemungkinan anda menderita gejala : <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran Pengobatan :</b><br/>$dp[solusi]</font></div>";
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Contoh kucing mengalami Helminthiasis kunjungi link dibawah :</b><br/>$dp[contoh]</font></div>";
                            echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }
                        else if($MAX==$proses3){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P03%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
                            
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama Pasien: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
							
                            echo "<div  style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala yang anda inputkan, kemungkinan anda menderita gejala : <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran Pengobatan :</b><br/>$dp[solusi]</font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Contoh kucing mengalami Gastritis kunjungi link dibawah :</b><br/>$dp[contoh]</font></div>";
							echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }
                        else if($MAX==$proses4){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P04%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
							
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama Pasien: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
                            
                            
                            echo "<div  style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala yang anda inputkan, kemungkinan anda menderita gejala : <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran Pengobatan :</b><br/>$dp[solusi]</font></div>";
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Contoh kucing mengalami Enteritis kunjungi link dibawah :</b><br/>$dp[contoh]</font></div>";
                            echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }
                        else if($MAX==$proses5){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P05%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
                            
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama Pasien: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
                            
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala yang anda inputkan, kemungkinan anda menderita gejala : <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran Pengobatan :</b><br/>$dp[solusi]</font></div>";
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Contoh kucing mengalami Panleukopenia kunjungi link dibawah :</b><br/>$dp[contoh]</font></div>";
                            echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }
                        else if($MAX==$proses6){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P06%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
                            
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama Pasien: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala yang anda inputkan, kemungkinan anda menderita gejala : <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran Pengobatan :</b><br/>$dp[solusi]</font></div>";
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Contoh kucing mengalami Calici kunjungi link dibawah :</b><br/>$dp[contoh]</font></div>";
                            echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
						
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }
                        else if($MAX==$proses7){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P07%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
                            
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama Pasien: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala yang anda inputkan, kemungkinan anda menderita gejala : <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran Pengobatan :</b><br/>$dp[solusi]</font></div>";
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Contoh kucing mengalami Konstipasi kunjungi link dibawah :</b><br/>$dp[contoh]</font></div>";
                            echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
						
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }
                        else if($MAX==$proses8){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P08%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
                            
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama Pasien: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala yang anda inputkan, kemungkinan anda menderita gejala : <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran Pengobatan :</b><br/>$dp[solusi]</font></div>";
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Contoh kucing mengalami Megacolon kunjungi link dibawah :</b><br/>$dp[contoh]</font></div>";
                            echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
						
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }
                        else if($MAX==$proses9){
                            $sp = mysqli_query($kon,"select * from penyakit where kd_penyakit LIKE 'P09%'") or die(mysqli_error());
                            $dp = mysqli_fetch_array($sp);
                            $spas =  mysqli_query($kon,"select * from pasien where id_user='$id'") or die(mysqli_error());
                            $dpas = mysqli_fetch_array($spas);
							$nk = mysqli_query($kon,"select * from hasil_konsultasi group by waktu desc limit 1");
							$r = mysqli_fetch_array($nk);
                            
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Nama Pasien: <b ><u>$dpas[nm_lengkap]</u></b></font></div>";
							$h = mysqli_query($kon, "select * from hasil_konsultasi where konsultasi='$konsultasi'");
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Gejala yang dipilih :</font></div>";
							while($rh=mysqli_fetch_array($h)){
								$sg = mysqli_query($kon, "select * from gejala where id_gejala='$rh[id_gejala]'");
								$rg = mysqli_fetch_array($sg);
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b ><u>$rg[nm_gejala]</u></b></font></div>";
							}
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'>Berdasarkan gejala yang anda inputkan, kemungkinan anda menderita gejala : <b ><u>$dp[nm_penyakit]</u></b></font></div>";
                            echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Saran Pengobatan :</b><br/>$dp[solusi]</font></div>";
							echo "<div style='margin-top:10px;'><font face='Times New Roman, cursive'><b>Contoh kucing mengalami Prolaps Recti-Ani kunjungi link dibawah :</b><br/>$dp[contoh]</font></div>";
                            echo "<br><a href='cetak.php?id=$id&konsultasi=$konsultasi' class='btn btn-success btn-lg' >
									<span class='glyphicon glyphicon-print'></span> Cetak 
							</a>";
						
                            $ket = mysqli_query($kon,"insert into keterangan (id_konsultasi, nama, tgl_konsultasi, nilai, kd_penyakit) values ('$konsultasi', '$_SESSION[namalengkap]', NOW(), '$MAX', '$dp[kd_penyakit]')");
                        }
                ?>  
            </form>
		</div>
	</div>
<br><br><br><br>
</body>
</html>