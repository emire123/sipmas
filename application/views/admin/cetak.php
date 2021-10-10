<style type="text/css" media="print">
    @page {
        size: auto;
        /* auto is the initial value */
        margin: 2;
        /* this affects the margin in the printer settings */
    }
</style>

<body onload="window.print()">
    <br>
    <center>
        <h2>Laporan Pengaduan Masyarakat
        SIPEKAT</h2>
        <br>

       Jl. Basuki Rahmat No.72, Sumur Putri, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35212
        <br>
        Website : www.dinsos.lampungprov.go.id, Email : dinsoslampung@gmail.com, No. Telp/WhatsApp : 0813-7328-5533
        <h4 class="h3 mb-4 text-gray-800">Laporan Per - Tanggal : <?= date("d-m-Y"); ?></h4>
        -------------------------------------------------------------------------------------------------------

        <table border="1" align="center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Laporan</th>
                    <th scope="col">Tanggal Terima</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggapan</th>
                    <th scope="col">Tanggal Respon</th>
                </tr>
            </thead>
            <tbody align="center">
                <?php $no = 1; ?>
                <?php foreach ($laporan as $c) : ?>
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $c['nama'] ?></td>
                        <td><?= $c['nik'] ?></td>
                        <td><?= $c['isi_laporan'] ?></td>
                        <td><?= $c['tgl_pengaduan'] ?></td>
                        <td>
                            <?php
                            if ($c['status'] == '0') :
                                echo '<span class="badge badge-secondary">Sedang di verifikasi</span>';
                            elseif ($c['status'] == 'proses') :
                                echo '<span class="badge badge-primary">Sedang di proses</span>';
                            elseif ($c['status'] == 'selesai') :
                                echo '<span class="badge badge-success">Selesai di kerjakan</span>';
                            elseif ($c['status'] == 'tolak') :
                                echo '<span class="badge badge-danger">Pengaduan di rujuk</span>';
                            else :
                                echo '-';
                            endif;
                            ?>
                        </td>
                        <td><?= $c['tanggapan'] == null ? '-' : $c['tanggapan']; ?></td>
                        <td><?= $c['tgl_tanggapan'] == null ? '-' : $c['tgl_tanggapan']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</body>
</center>