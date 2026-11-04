<?php

require 'function.php';

// echo "ID nya adalah " . $_GET["id"];

$id = $_GET["id"];

  if (hapus_data($id) > 0){
        echo "<script>
              alert ('Data berhasil di hapus!');
              document.location.href = 'index.php';
              </script>  
                    ";
    }else{
        echo "<script>
               alert('Data gagal di hapus!');
               </script>                
               ";
  }

?>