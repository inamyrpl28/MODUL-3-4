<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Data Siswa</title>
   </head>
   <style media="screen">
   body{
     background-image: url("background.png");
   }
   .container{
       margin-top: 10px ;
       margin-left: 350px ;
       width: 25%;
     }
   </style>
   <body>
     <h1 align ="center" ><font color = "black">Selamat datang!</font></h1>
     <h1 align ="center" ><font color = "black">Silahkan Mengisi Data</font></h1>
       <div class="container">
         <form name="formku" action="data.php" method="post">
           <table cellpadding="5">
             <tr>
               <td><font color = "white">NIS</td>
               <td><input type="number" name="nis"  placeholder="NIS" autocomplete="off" required></td>
              </tr>
              <tr>
                <td><font color = "white">Nama Depan</td>
                <td><input type="text" name="nama"  placeholder="Nama Depan" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td><font color = "white">Nama Belakang</td>
                    <td><input type="text" name="nama"  placeholder="Nama Belakang" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td><font color = "white">Tempat lahir</td>
                    <td><input type="text" name="templahir"  placeholder="tempat lahir" autocomplete="off" size = "25" required></td>
                  </tr>
                  <tr>
                    <td><font color = "white">Tanggal lahir</td>
                    <td><input type="date" name="tgllahir"  placeholder="tanggal lahir" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td><font color = "white">Agama</td>
                    <td><input type="text" name="agama"  placeholder="agama" autocomplete="off" required></td>
                  </tr>
                  <tr>
                  <td><font color = "white">Jenis Kelamin</td>
                  <td>
                    <input type="radio" name="gender" value="Pria" required> <font color = "white">Pria
                    <input type="radio" name="gender" value="Wanita" required><font color = "white">Wanita
                  </td>
                </tr>s
                  <tr>
                    <td><font color = "white">Email</td>
                    <td><input type="text" name="email"  placeholder="email" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td><font color = "white">Telepon</td>
                    <td><input type="number" name="notelp"  placeholder="no telpon" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td><font color = "white">Facebook</td>
                    <td><input type="text" name="fb"  placeholder="facebook" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td><font color = "white">Instagram</td>
                    <td><input type="text" name="ig"  placeholder="instagram" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td><font color = "white">Website</td>
                    <td><input type="text" name="web"  placeholder="http://" autocomplete="off" required></td>
                  </tr>
                  <tr>
                    <td><font color = "white">Alamat</td>
                     <td><textarea name="alamat" rows="5" cols="25" placeholder="Alamat Lengkap" required></textarea></td>
                      </tr>
                      <tr>
                         <td><font color = "white">Jurusan</td>
                         <td>
                           <select name="jurusan" required>
                             <option value="">>>Pilih Jurusan<<</option>
                             <option value="RPL" required>Rekayasa Perangkat Lunak</option>
                             <option value="TKJ" required>Teknik Komputer dan Jaringan</option>
                           </select>
                         </td>
                       </tr>
                       <tr>
                          <td><font color = "white">Kelas</td>
                          <td>
                            <select name="kelas" required>
                              <option value="">>>Pilih kelas<<</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td><font color = "white">Username</td>
                          <td><input type="text" name="username"  placeholder="username" autocomplete="off" required></td>
                        </tr>
                        <tr>
                          <td><font color = "white">Password</td>
                          <td><input type="password" name="password"  placeholder="password" autocomplete="off" required></td>
                        </tr>
                        <tr>
                          <td><font color = "white">Pesan</td>
                           <td><textarea name="pesan" rows="5" cols="25" placeholder="pesan anda" required></textarea></td>
                          </tr>

                   </table>
                     <input type = "submit" name = "simpan" class = "btn btn-success" value = "Simpan">
                     <input type = "submit" name = "batal" class = "btn btn-success" value = "Batal">
                 </form>
       </div>
   </body>
 </html>