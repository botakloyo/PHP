<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <?php foreach($data['mhs'] as $mhs) :?>
            <ul>
                <li>Nama : <?= $mhs["name"];?></li>
                <li>Nrp : <?= $mhs["nrp"];?></li>
                <li>Jurusan : <?= $mhs["jurusan"];?></li>
                <li>Email : <?= $mhs["email"];?></li>
                
            </ul>
            <?php endforeach?>
        </div>
    </div>
</div>