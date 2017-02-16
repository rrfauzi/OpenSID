<?php $this->load->view('print/headjs.php');?>

<body>
<div id="content" class="container_12 clearfix">
<div id="content-main" class="grid_7">

<link href="<?php echo base_url()?>assets/css/surat.css" rel="stylesheet" type="text/css" />
<div>
<table width="100%">

<tr> <img src="<?php echo LogoDesa($desa['logo']);?>" alt="" class="logo"></tr>

<div class="header">
<h4 class="kop">PEMERINTAH KABUPATEN <?php echo strtoupper(unpenetration($desa['nama_kabupaten']))?> </h4>
<h4 class="kop">KECAMATAN <?php echo strtoupper(unpenetration($desa['nama_kecamatan']))?> </h4>
<h4 class="kop">DESA <?php echo strtoupper(unpenetration($desa['nama_desa']))?></h4>
<h5 class="kop2"><?php echo (unpenetration($desa['alamat_kantor']))?> </h5>

<div style="text-align: center;">
<hr /></div></div>

</table>
<table width="100%">
</table>
<table width="100%">
</table>
<table width="100%">
<div align="center"><u><h4 class="kop">SURAT KETERANGAN TIDAK MAMPU</h4></u></div>
<div align="center"><h4 class="kop3">Nomor : 467.1/<?php echo $input['nomor']?>/Kesra/<?php echo date("Y")?></h4></div>
</table>
<div class="clear"></div>

<table width="100%">

<tr><td class="indentasi">Yang bertanda tangan dibawah ini <?php echo unpenetration($input['jabatan'])?> <?php echo unpenetration($desa['nama_desa'])?> Kecamatan <?php echo unpenetration($desa['nama_kecamatan'])?> Kabupaten <?php echo unpenetration($desa['nama_kabupaten'])?> Provinsi <?php echo unpenetration($desa['nama_propinsi'])?> menerangkan dengan sebenarnya kepada :  </td></tr>
</table>
<div id="isi3">
<table width="100%">
<tr><td width="23%">1. Nama Kepala Keluarga</td><td width="3%">:</td><td width="64%"><b><?php echo unpenetration($data['nama'])?></td></tr>
<tr><td width="23%">2. NIK/ No KTP</td><td width="3%">:</td><td width="64%"><?php echo $data['nik']?></td></tr>
<tr><td>3. Tempat dan Tgl. Lahir </td><td>:</td><td><?php echo ($data['tempatlahir'])?>, <?php echo tgl_indo($data['tanggallahir'])?> </td></tr>
<tr><td>4. Jenis Kelamin</td><td>:</td><td><?php echo $data['sex']?></td></tr>
<tr><td>5. Agama</td><td>:</td><td><?php echo $data['agama']?></td></tr>
<tr><td>6. Status Perkawinan</td><td>:</td><td><?php echo $data['status_kawin']?></td></tr>
<tr><td>7. Pendidikan</td><td>:</td><td><?php echo $data['pendidikan']?></td></tr>
<tr><td>8. Pekerjaan</td><td>:</td><td><?php echo $data['pekerjaan']?></td></tr>
<tr><td>9. Kewarganegaraan </td><td>:</td><td><?php echo $data['warganegara']?></td></tr>
<tr><td>10. Alamat/ Tempat Tinggal</td><td>:</td><td><?php echo $data['alamat']?> RT. <?php echo $data['rt']?> RW. <?php echo $data['rw']?> Dusun <?php echo unpenetration(ununderscore($data['dusun']))?> Desa <?php echo unpenetration($desa['nama_desa'])?> Kecamatan <?php echo unpenetration($desa['nama_kecamatan'])?> Kabupaten <?php echo unpenetration($desa['nama_kabupaten'])?></td></tr>
</table>
<table width="100%">
<tr><td class="indentasi">Bahwa yang tersebut namanya diatas, sepanjang pengetahuan dan penelitian kami hingga saat dikeluarkannya surat keterangan ini memang benar Keluarga yang KURANG MAMPU dan tidak memiliki penghasilan tetap. </td></tr>
</table>
<table width="100%">
<tr><td><center><u><b><i>DAFTAR TANGGUNGAN KELUARGA</td><td></td></tr>
<tr>
</table>
<?php  	
	$i=0;
	if($pengikut){
		foreach($pengikut AS $data1){
			$i++;
		}
	}
?>

<tr></tr>
<?php  if($pengikut){ ?>

<table width = 740 border =1>
	<thead>
		<tr>
			<th align="center" >No</th>
			<th align="center" >NIK</th>
			<th align="center" >Nama Lengkap</th>
			<th align="center" align="center">Jenis Kelamin</th>
			<th  align="center" >Tempat Tanggal Lahir</th>
			<th align="center" >SHDK</th>			
						
			
		</tr>
	<tbody><?php  $i=0;?>
		<?php  foreach($pengikut AS $data1){$i++;?>		
		<tr>
            <td align="center"width="6"> <?php echo $i?></td>
			<td align="center"><?php echo $data1['nik']?></td>
			<td> <?php echo unpenetration($data1['nama'])?></td>
			<td align="center"><?php echo $data1['sex']?></td>
			<td align="left"> <?php echo $data1['tempatlahir']?>, <?php echo tgl_indo($data1['tanggallahir'])?></td>
			<td align="center"><?php echo $data1['hubungan']?></td>
			
					
			
		</tr>  
		<?php  }?>
	</tbody>

<?php  } ?>
<tr></tr>
<?php  if($pengikut){ ?>
<tr></tr>	
<tr></tr>
<?php  } ?>
</table>
<table width="100%">
<tr></tr>
<tr></tr>
<tr><td class="indentasi">Surat Keterangan ini dibuat untuk Keperluan : <b><?php echo $input['keperluan']?>
<tr></tr>
</table>
<table width="100%">
<tr></tr>
<tr><td class="indentasi">Demikian surat keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya</td></tr>
<tr></tr>
</table>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
</table></div>
<table width="100%">
<tr></tr>
<tr></tr>
<tr></tr>
<tr><td width="23%"></td><td width="30%"></td><td  align="center"><?php echo unpenetration($desa['nama_desa'])?>, <?php echo $tanggal_sekarang?></td></tr>
<tr><td width="23%"></td><td width="30%"></td><td align="center"><?php echo unpenetration($input['jabatan'])?> <?php echo unpenetration($desa['nama_desa'])?></td></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<tr></tr>
<table width="100%">
<tr><td></td><td width="45%"></td><td  align="center"><b><u><?php echo unpenetration($input['pamong'])?></td></tr>
<tr><td></td><td width="45%"></td><td align="center"><?php echo unpenetration($input['pamong_nip'])?></td></tr>					
</table>  </div></div>
</div>
<div id="aside">

</div>
<div id="footer" class="container_12">
</div></div>
</body>
</html>
