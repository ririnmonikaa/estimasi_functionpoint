  <?php  
  mysqli_connect("localhost","root","","dbakademik");
  
  ?>
  <title>Combobox</title>


  <p></p>
  <table width="451" border="0" align="center">
  	<tr>
  		<td width="118">NIM</td>
  		<td width="323"><select name="nim" id="nim" onchange="changeValue(this.value)" >
  			<option value=0>-Pilih-</option>
  			<?php
  			$result = mysqli_query("select * from tb_mhs");   
  			$jsArray = "var dtMhs = new Array();\n";       
  			while ($row = mysqli_fetch_array($result)) {   
  				echo '<option value="' . $row['nim'] . '">' . $row['nim'] . '</option>';   
  				$jsArray .= "dtMhs['" . $row['nim'] . "'] = {nama:'" . addslashes($row['nama']) . "',jrsn:'".addslashes($row['jurusan'])."'};\n";   
  			}     
  			?>   
  		</select></td>
  	</tr>
  	<tr>
  		<td>Nama Mahasiswa</td>
  		<td><input type="text" name="nm" id="nm"/></td>
  	</tr>
  	<tr>
  		<td>Jurusan</td>
  		<td><input type="text" name="jrsn" id="jrsn"/></td>
  	</tr>
  </table>
  <script type="text/javascript">   
  	<?php echo $jsArray; ?> 
  	function changeValue(nim){ 
  		document.getElementById('nm').value = dtMhs[nim].nama; 
  		document.getElementById('jrsn').value = dtMhs[nim].jrsn; 
  	}; 
  </script>
