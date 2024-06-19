<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern News</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">

<nav class="bg-violet-500 py-4 flex justify-between items-center px-8 absolute w-full ">
  <div class="container mx-auto">
    <h1 class="font-bold text-white text-2xl">👨‍🎓 Amikom News</h1>
  </div>
  <a href="admin/login.php" class="text-white font-semibold bg-blue-700 px-4 py-2 rounded-md inline-block">LOGIN</a>
</nav>

<div class="h-screen bg-[url('https://i.ytimg.com/vi/H_crsnAiwbo/maxresdefault.jpg')] bg-no-repeat bg-cover bg-center bg-gray-300 bg-blend-multiply">
</div>

<div class="container mx-auto my-8 px-4 lg:px-0">
  <div class="grid grid-cols-12 gap-4">
    <!-- Berita Item -->
    <div class="lg:col-span-9 col-span-12 flex gap-4">
      <div class="grid grid-cols-10 gap-3">
      <?php 
        include 'config.php';
        $sql = "SELECT berita_id, berita_judul, berita_isi, berita_gambar, user_nama, berita_tanggal FROM  berita ORDER BY berita_id"; 
        $hasil = mysqli_query($config, $sql);
        $no = 1;
        while ($data=mysqli_fetch_array($hasil)) {
        ?>
          <div class="bg-white rounded-lg shadow-md lg:col-span-5 col-span-full overflow-hidden">
            <div class=" h-80">
              <img src="admin/<?php echo $data['berita_gambar']?>" alt="Berita Image" class=" h-full w-full object-cover" />
                </div>
                <!-- <img  class="rounded-t-lg"> -->
                <div class="p-4 ">
                    <h2 class="text-2xl font-semibold mb-2 uppercase"><?php echo $data['berita_judul']?></h2>
                    <p class="text-sm"><?php echo $data['berita_tanggal']?></p>
                    <p class="text-sm font-semibold">Ditulis oleh : <?php echo $data['user_nama']?></p>
                    <p class="text-gray-600 mt-4 mb-4 text-sm line-clamp-4"><?php echo $data['berita_isi']?> Lorem ipsum dolor sit amet consectetur adipisicing elit. At autem expedita repudiandae necessitatibus aperiam illum omnis tenetur esse nihil, inventore debitis dolores dignissimos facilis cumque molestiae, repellat alias ratione? Vel!</p>
                </div>
            </div>
      <?php } ?>
      </div>
    </div>

    <div class="lg:col-span-2 col-span-12 lg:w-80">
          <div>
            <h1 class="text-xl font-bold tracking-widest">Topik populer</h1>
              <ul class="border-4 border-violet-500 mt-4">
                <li class=" px-4 py-2 border-b-2 border-violet-500 font-semibold">
                  <a href="#" class="text-blue-600">
                    Ramadhan 2020
                  </a>
                </li>
                <li class=" px-4 py-2 border-b-2 border-violet-500 font-semibold">
                  <a href="#" class="text-blue-600">Liga  2020</a>    
                </li>
                <li class=" px-4 py-2 border-b-2 border-violet-500 font-semibold">
                  <a href="#" class="text-blue-600">
                    Waisak 2020
                  </a>    
                </li>
              </ul>
          </div>
    </div>
  </div>
</div>

    <footer class="bg-violet-500 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; Kevin Rizki Irawan ~ 22.11.4870 .</p>
        </div>
    </footer>
</body>
</html>
