<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>DATA HASIL GET</title>
     <style>
         .navbar{
            background-color: transparent !important;
        }
          h1{
            font-family : cursive;
            color:#302e2e;
            font-size:40px;
            text-align:center;
            margin:5px;
        }
        h4{
            font-family: cursive;
            color:#302e2e;
            font-size:30px;
            text-align:center;
            margin:12px;

            }
        body{
 
            background-image: url(image.jpg);
            margin-top:40px;
            background-position:center;
            background-size:cover;
            font-family:sans-serif;
            }
         
         
        td{
            text-align:left;
            width:200px;
            font-size:20px;
            height:50px;
            font-style:courier;
            padding:10px  ;
        } 
        .titik{
            text-align: center;
        }
        .main{
            background-color:rgb(179, 225, 236 ,0.5);
            width:800px;
            margin:auto;
            border-radius: 15px 15px 15px 15px;
        }
        .judul{
            background-color:rgb(179, 225, 236 ,0.5);
            margin:auto;
            width:800px;
            border-radius: 10px 10px 10px 10px;
        }
     </style>
 </head>
 <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
              <img src="logo.png" alt="" width="200" height="100">
          </a>
        </div>
    </nav>
    
    <div class="judul">
    <?php echo "<h1> Registration Form Fish World</h1>";
    echo "<h4> Pendataan Hasil Tangkapan Nelayan di Laut </h4>";
    ?>
    </div>

    <div class="main">
    <table   border="0" cellspacing="0" align="center"  >
         <tr> 
             <td  > First Name </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['firstname'] ?> </td>
        </tr>

         <tr> 
             <td  > Last Name </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['lastname'] ?> </td>
        </tr>
        

        <tr> 
             <td  > Email </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['Email'] ?> </td>
        </tr>

        <tr> 
             <td  > Password </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['Password'] ?> </td>
        </tr>

        
        <tr> 
             <td  > Pelabuhan Asal </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['pelabuhan'] ?> </td>
        </tr>
        
        <tr> 
             <td  > Tanggal Berangkat  </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['date-time'] ?> </td>
        </tr>

        <tr> 
             <td  > Tanggal Kembali </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['date-time'] ?> </td>
        </tr>

        
        <tr> 
             <td  > Nama Kapal </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['namakapal'] ?> </td>
        </tr>
        
        <tr> 
             <td  >  Ukuran Kapal  </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['kapal'] ?> </td>
        </tr>

        <tr> 
             <td  >Hasil Tangkapan Ikan </td>
             <td class="titik"> :  </td>
             <td  > <?php $hasil = $_GET['hasil' ] ; foreach ( $hasil as $value ) 
             {    echo $value ."<br>";

             }
                 ?> </td>
        </tr>

        <tr> 
             <td  > Volume Tangkapan Ikan  </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['volume'] ?> </td>
        </tr>
         

        <tr> 
             <td  > Total Tangkapan Ikan  </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['total'] ?> </td>
        </tr>

        <tr> 
             <td  > Alat Tangkap  </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['alat'] ?> </td>
        </tr>
        
        <tr> 
             <td  > Daerah Penangkapan Ikan  </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['Alamat'] ?> </td>
        </tr>

        <tr> 
             <td  > Catatan  </td>
             <td class="titik"> :  </td>
             <td  > <?php echo $_GET['catatan'] ?> </td>
        </tr>
        
        

    </table>
            <br><br><br><br><br><br>
            <br><br><br><br><br><br>
    </div>
 </body>
 </html>