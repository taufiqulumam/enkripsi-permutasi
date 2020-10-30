<?php 

    if(isset($_POST['kolom'])) {

        echo "<h3 align='center'>Perpotongan baris dan kolom</h3>";
        $kalimat = $_POST['kalimat'];
        $kolom = $_POST['kolom'];
        $baris = strlen($kalimat);

        
        $baris = $baris / $kolom;
        
        $baris =ceil($baris);

        $arr = [[$baris], [$kolom]];
        $pos = 0;

        //Pengisian kalimat ke dalam array
        for($i = 0; $i<$baris; $i++) {
          for($j = 0; $j<$kolom; $j++) {
            if(strlen($kalimat) > $pos) { 
              $arr[$i][$j] = $kalimat[$pos++]; 
            } 
            else 
            { 
              break; 
            } 
          }
        } 

        echo "<table class='table mb-5 text-center table-bordered'>";
        echo "<tbody>";

        //Mencetak kalimat dari dalam array berdasarkan kolom yang ditentukan
        for($i = 0; $i < $baris; $i++) { 
            echo "<tr>";
            for($j = 0; $j < $kolom; $j++) 
            { 
                echo "<td>";
                if(isset($arr[$i][$j])) {
                    echo ($arr[$i][$j]); 
                }
                echo "</td>";
            }
            echo "</tr>"; 
        } 
          
        echo "</tbody>"; 
        echo "</table>"; 
        $hasil = "";

        //merotasikan kata per kolom lalu menggabungkan ke dalam baris
        for($i = 0; $i<$baris; $i++) {
            for($j = $kolom-1; $j >= 0; $j--) {
                if(isset($arr[$i][$j])) {
                    $hasil = $hasil . $arr[$i][$j];
            
                }  
            }
        }    
    } 
?>