<?php
            require("conn.php");
            $id = $_GET["id"];
            
            if( hapus($id) > 0){

            echo "
                <script>
                    alert('Data berhasil dihapus');
                    document.location.href = 'home.php';
                </script>
            ";

            } else {
                echo "
                    <script>
                        alert('Data gagal dihapus');
                        document.location.href = 'home.php';
                    </script>
                ";
            }
            function hapus($id){
                global $conn;
                $namagambar = query("SELECT gambar FROM event WHERE id = $id")[0]['gambar'];
                unlink(''.$namagambar);
                mysqli_query($conn, "DELETE FROM event WHERE id =$id");
                return mysqli_affected_rows($conn);
            }
?>
