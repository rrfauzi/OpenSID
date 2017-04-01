<style type="text/css">
  table.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
  table.tftable th {font-size:12px;background-color:#8DABD4;border-width: 1px;padding: 3px;border-style: solid;border-color: #7195BA;text-align:left;}
  table.tftable tr {background-color:#ffffff;}
  table.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
</style>

<div id="pageC">
<!-- Start of Space Admin 	<td class="side-menu"><legend>Laporan : </legend>
			<div class="lmenu">
				<ul>
				<li class="selected"><a href="<?php echo site_url()?>laporan">Laporan Bulanan</a></li>
				<li><a href="<?php echo site_url()?>laporan_rentan">Data Kelompok Rentan</a></li>

				</ul>
			</div>
		</td>-->
	<table class="inner">
	<tr style="vertical-align:top">

  <td style="background:#fff;padding:0px;">
  <div id="contentpane">
	<form id="mainform" name="mainform" action="<?php echo site_url('laporan/bulan')?>" method="post">
    <div class="ui-layout-north panel top">
      <div class="left">
        <div class="uibutton-group">


          <a class="uibutton tipsy south" title="Cetak" onclick="$('#'+'mainform').attr('target','_blank');formAction('mainform','<?php echo site_url('laporan/cetak')?>')"><span class="icon-print icon-large">&nbsp;</span>Cetak</a>
      		<a href="<?php echo site_url("laporan/excel")?>" class="uibutton tipsy south" title="Excel" target="_blank"><span class="icon-file-text icon-large">&nbsp;</span>Excel</a>
        </div>
      </div>
    </div>
    <div class="ui-layout-center" id="maincontent" style="padding: 5px;">
      <table  width="100%">
  			<tbody>
          <tr>	<?php foreach($config as $data){?>
    				<td width="37%"><h4>PEMERINTAH KABUPATEN/KOTA  <?php echo unpenetration($data['nama_kabupaten'])?></h4></td>
    				<td align= "right" width="17%"><h4>LAMPIRAN A - 9</h4></td>
          </tr>
  				<tr>
  					<td></td>
  					<td width="100%"><h3>LAPORAN PERKEMBANGAN PENDUDUK</h3></td>
  				</tr>
  			</tbody>
      </table>
			<table>
				<tbody>
          <tr>
  					<td><?php echo ucwords(config_item('sebutan_desa'))?>/Kelurahan</td>
  					<td width="3%">:</td>
  					<td width="38.5%"><?php echo unpenetration($data['nama_desa'])?></h4></td>
  					<td></td>
  				</tr>
  				<tr>
  					<td>Kecamatan</td>
  					<td width="3%">:</td>
  					<td width="38.5%"><?php echo unpenetration($data['nama_kecamatan'])?></td>
  					<td></td>
  					<?php  } ?>
  				</tr>
  				<tr>
  					<td>Tahun</td>
  					<td width="3%">:</td>
  					<td><input name="tahun" type="text" class="inputbox required" size="5" value="<?php echo $tahun ?>"  onchange="$('#'+'mainform').attr('target','');formAction('mainform','<?php echo site_url('laporan/tahun')?>')" /></td>
  				</tr>
				  <tr>
  					<td>Bulan</td>
  					<td width="3%">:</td>
  					<td>
    					<select name="bulan" onchange="$('#'+'mainform').attr('target','');formAction('mainform','<?php echo site_url('laporan/bulan')?>')" >
      					<option value="">Pilih bulan</option>
      					<option value="1" <?php  if($bulan=="1"){?>selected<?php  }?>>Januari</option>
      					<option value="2" <?php  if($bulan=="2"){?>selected<?php  }?>>Februari</option>
      					<option value="3" <?php  if($bulan=="3"){?>selected<?php  }?>>Maret</option>
      					<option value="4" <?php  if($bulan=="4"){?>selected<?php  }?>>April</option>
      					<option value="5" <?php  if($bulan=="5"){?>selected<?php  }?>>Mei</option>
      					<option value="6" <?php  if($bulan=="6"){?>selected<?php  }?>>Juni</option>
      					<option value="7" <?php  if($bulan=="7"){?>selected<?php  }?>>Juli</option>
      					<option value="8" <?php  if($bulan=="8"){?>selected<?php  }?>>Agustus</option>
      					<option value="9" <?php  if($bulan=="9"){?>selected<?php  }?>>September</option>
      					<option value="10" <?php  if($bulan=="10"){?>selected<?php  }?>>Oktober</option>
      					<option value="11" <?php  if($bulan=="11"){?>selected<?php  }?>>November</option>
      					<option value="12" <?php  if($bulan=="12"){?>selected<?php  }?>>Desember</option>
    					</select>
  					</td>
  					<td width="40%"></td>
  				</tr>
		    </tbody>
      </table>

      <table width="100%" id="tfhover" class="tftable lap-bulanan" border="1">
        <thead>
          <tr>
            <th rowspan="2" scope="col">No.</th>
            <th rowspan="2" scope="col">PERINCIAN</th>
            <th colspan="2" scope="col">Penduduk WNI</th>
            <th colspan="2" scope="col">Penduduk WNA</th>
            <th colspan="3" scope="col">Jumlah Penduduk</th>
            <th colspan="3" scope="col">Keluarga</th>
          </tr>
          <tr>
            <th>Laki-laki</th>
            <th>Perempuan</th>
            <th>Laki-laki</th>
            <th>Perempuan</th>
            <th>Laki-laki</th>
            <th>Perempuan</th>
            <th>Keseluruhan</th>
            <th>KK Laki-laki</th>
            <th>KK Perempuan</th>
            <th>Keseluruhan</th>
          </tr>
  				<tr>
  					<th>1</th>
  					<th>2</th>
  					<th class="kolom-data">3</th>
      			<th class="kolom-data">4</th>
  		      <th class="kolom-data">5</th>
      			<th class="kolom-data">6</th>
  		      <th class="kolom-data">7</th>
      			<th class="kolom-data">8</th>
      			<th class="kolom-data">9</th>
            <th class="kolom-data">10</th>
            <th class="kolom-data">11</th>
            <th class="kolom-data">12</th>
  				</tr>
  			</thead>
  			<tbody>
          <tr></tr>
          <tr>
            <td><div align="center">1</div></td>
            <td>Awal bulan ini</td>
            <td><?php echo $penduduk_awal['WNI_L']+0 ?></td>
            <td><?php echo $penduduk_awal['WNI_P']+0 ?></td>
            <td><?php echo $penduduk_awal['WNA_L']+0 ?></td>
            <td><?php echo $penduduk_awal['WNA_P']+0 ?></td>
            <td><?php echo ($penduduk_awal['WNI_L']+$penduduk_awal['WNA_L'])?></td>
            <td><?php echo ($penduduk_awal['WNI_P']+$penduduk_awal['WNA_P'])?></td>
            <td><?php echo ($penduduk_awal['WNI_L']+$penduduk_awal['WNA_L'])+($penduduk_awal['WNI_P']+$penduduk_awal['WNA_P'])?></td>
            <td><?php echo ($penduduk_awal['KK_L'])?></td>
            <td><?php echo ($penduduk_awal['KK_P'])?></td>
            <td><?php echo ($penduduk_awal['KK'])?></td>
          </tr>
      		<tr>
          	<td><div align="center">2</div></td>
          	<td>Kelahiran/Keluarga Baru bulan ini</td>
          	<td><?php echo $kelahiran['WNI_L']+0 ?></td>
          	<td><?php echo $kelahiran['WNI_P']+0 ?></td>
          	<td><?php echo $kelahiran['WNA_L']+0 ?></td>
          	<td><?php echo $kelahiran['WNA_P']+0 ?></td>
            <td><?php echo ($kelahiran['WNI_L']+$kelahiran['WNA_L'])?></td>
            <td><?php echo ($kelahiran['WNI_P']+$kelahiran['WNA_P'])?></td>
            <td><?php echo ($kelahiran['WNI_L']+$kelahiran['WNA_L'])+($kelahiran['WNI_P']+$kelahiran['WNA_P'])?></td>
            <td><?php echo ($kelahiran['KK_L'])?></td>
            <td><?php echo ($kelahiran['KK_P'])?></td>
            <td><?php echo ($kelahiran['KK'])?></td>
        	</tr>
      		<tr>
          	<td><div align="center">3</div></td>
          	<td>Kematian bulan ini</td>
          	<td><?php echo $kematian['WNI_L']+0 ?></td>
          	<td><?php echo $kematian['WNI_P']+0 ?></td>
          	<td><?php echo $kematian['WNA_L']+0 ?></td>
          	<td><?php echo $kematian['WNA_P']+0 ?></td>
            <td><?php echo ($kematian['WNI_L']+$kematian['WNA_L'])?></td>
            <td><?php echo ($kematian['WNI_P']+$kematian['WNA_P'])?></td>
            <td><?php echo ($kematian['WNI_L']+$kematian['WNA_L'])+($kematian['WNI_P']+$kematian['WNA_P'])?></td>
            <td class="kosong" colspan=3>&nbsp;</td>
        	</tr>
      		<tr>
          	<td><div align="center">4</div></td>
          	<td>Pendatang bulan ini</td>
          	<td><?php echo $pendatang['WNI_L']+0 ?></td>
          	<td><?php echo $pendatang['WNI_P']+0 ?></td>
          	<td><?php echo $pendatang['WNA_L']+0 ?></td>
          	<td><?php echo $pendatang['WNA_P']+0 ?></td>
            <td><?php echo ($pendatang['WNI_L']+$pendatang['WNA_L'])?></td>
            <td><?php echo ($pendatang['WNI_P']+$pendatang['WNA_P'])?></td>
            <td><?php echo ($pendatang['WNI_L']+$pendatang['WNA_L'])+($pendatang['WNI_P']+$pendatang['WNA_P'])?></td>
            <td class="kosong" colspan=3>&nbsp;</td>
        	</tr>
      		<tr>
          	<td><div align="center">5</div></td>
          	<td>Pindah/Keluarga Pergi bulan ini</td>
          	<td><?php echo $pindah['WNI_L']+0 ?></td>
          	<td><?php echo $pindah['WNI_P']+0 ?></td>
          	<td><?php echo $pindah['WNA_L']+0 ?></td>
          	<td><?php echo $pindah['WNA_P']+0 ?></td>
            <td><?php echo ($pindah['WNI_L']+$pindah['WNA_L'])?></td>
            <td><?php echo ($pindah['WNI_P']+$pindah['WNA_P'])?></td>
            <td><?php echo ($pindah['WNI_L']+$pindah['WNA_L'])+($pindah['WNI_P']+$pindah['WNA_P'])?></td>
            <td><?php echo ($pindah['KK_L'])?></td>
            <td><?php echo ($pindah['KK_P'])?></td>
            <td><?php echo ($pindah['KK'])?></td>
        	</tr>
          <tr>
          	<td><div align="center">6</div></td>
          	<td>Penduduk hilang bulan ini</td>
          	<td><?php echo $hilang['WNI_L']+0 ?></td>
          	<td><?php echo $hilang['WNI_P']+0 ?></td>
          	<td><?php echo $hilang['WNA_L']+0 ?></td>
          	<td><?php echo $hilang['WNA_P']+0 ?></td>
            <td><?php echo ($hilang['WNI_L']+$hilang['WNA_L'])?></td>
            <td><?php echo ($hilang['WNI_P']+$hilang['WNA_P'])?></td>
            <td><?php echo ($hilang['WNI_L']+$hilang['WNA_L'])+($hilang['WNI_P']+$hilang['WNA_P'])?></td>
            <td class="kosong" colspan=3>&nbsp;</td>
        	</tr>
      		<tr>
          	<td><div align="center">7</div></td>
          	<td>Akhir bulan ini</td>
          	<td><?php echo $penduduk_akhir['WNI_L']+0 ?></td>
          	<td><?php echo $penduduk_akhir['WNI_P']+0 ?></td>
          	<td><?php echo $penduduk_akhir['WNA_L']+0 ?></td>
          	<td><?php echo $penduduk_akhir['WNA_P']+0 ?></td>
            <td><?php echo ($penduduk_akhir['WNI_L']+$penduduk_akhir['WNA_L'])?></td>
            <td><?php echo ($penduduk_akhir['WNI_P']+$penduduk_akhir['WNA_P'])?></td>
            <td><?php echo ($penduduk_akhir['WNI_L']+$penduduk_akhir['WNA_L'])+($penduduk_akhir['WNI_P']+$penduduk_akhir['WNA_P'])?></td>
            <td><?php echo ($penduduk_akhir['KK_L'])?></td>
            <td><?php echo ($penduduk_akhir['KK_P'])?></td>
            <td><?php echo ($penduduk_akhir['KK'])?></td>
        	</tr>
        </tbody>
      </table>
      <p>&nbsp;</p>
      <table>
        <tr>
          <td colspan=2>
            <strong>Diketahui : </strong>
          </td>
        </tr>
        <tr>
          <td>Staf Pemerintah <?php echo ucwords(config_item('sebutan_desa'))?></th>
          <td width="3%">:</td>
          <td><select name="pamong"  class="inputbox">
            <option value="">Pilih Staf Pemerintah <?php echo ucwords(config_item('sebutan_desa'))?></option>
            <?php foreach($pamong AS $data){?>
              <option value="<?php echo $data['pamong_nama']?>"><?php echo $data['pamong_nama']?>(<?php echo $data['jabatan']?>)</option>
            <?php }?>
            </select></td>
        </tr>
        <tr>
          <td>Sebagai</th>
          <td width="3%">:</td>
          <td><select name="jabatan"  class="inputbox">
            <option value="">Pilih Jabatan</option>
            <?php foreach($pamong AS $data){?>
              <option ><?php echo $data['jabatan']?></option>
            <?php }?>
            </select></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>

      </div>
    </div>
    <div class="ui-layout-south panel bottom">
      <div class="left">
        <a href="<?php echo site_url()?>sid_wilayah" class="uibutton icon prev">Kembali</a>
      </div>
      <div class="right">
        <div class="uibutton-group">
          <button class="uibutton confirm" type="submit" >Cetak</button>
        </div>
      </div>
    </div>
	</form>
</div>
</td></tr></table>
</div>
