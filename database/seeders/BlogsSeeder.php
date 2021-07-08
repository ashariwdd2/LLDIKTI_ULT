<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('blogs')->insert([
            'title'      => 'Loket 1',
            'description'      => 'PENETAPAN INPASSING PANGKAT DOSEN BUKAN PEGAWAI NEGERI SIPIL GOLONGAN III'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 1',
            'description'      => 'PENETAPAN INPASSING PANGKAT DOSEN BUKAN PEGAWAI NEGERI SIPIL GOLONGAN IV'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 1',
            'description'      => 'MUTASI DOSEN PEGAWAI NEGERI SIPIL DIPEKERJAKAN (DPK)'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 1',
            'description'      => 'PENETAPAN INPASSING PANGKAT DOSEN BUKAN PEGAWAI NEGERI SIPIL GOLONGAN III'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 1',
            'description'      => 'REKOMENDASI MUTASI DOSEN PEGAWAI NEGERI SIPIL'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 1',
            'description'      => 'TUGAS BELAJAR PEGAWAI NEGERI SIPIL DIPEKERJAKAN (DPK)'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 1',
            'description'      => 'IZIN BELAJAR DOSEN PEGAWAI NEGERI SIPIL DIPEKERJAKAN (DPK)'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 1',
            'description'      => 'KENAIKAN PANGKAT/GOLONGAN DOSEN PEGAWAI NEGERI SIPIL DIPEKERJAKAN (DPK)'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 1',
            'description'      => 'PENILAIAN ANGKA KREDIT JABATAN AKADEMIK DOSEN ASISTEN AHLI DAN LEKTOR'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 1',
            'description'      => 'REKOMENDASI JABATAN AKADEMIK DOSEN LEKTOR KEPALA DAN PROFESOR'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 1',
            'description'      => 'PEMBERIAN REKOMENDASI BEASISWA DOSEN'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 1',
            'description'      => 'PEMBERIAN PERPANJANGAN WAKTU BEASISWA LUAR NEGERI'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 1',
            'description'      => 'PINDAH HOMEBASE DOSEN TETAP YAYASAN'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 2',
            'description'      => ' AUDIENSI INSTANSI PEMERINTAH ATAU LEMBAGA LAIN'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 2',
            'description'      => 'PENYEDIAAN NARASUMBER'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 3',
            'description'      => 'ALIH BINA PERGURUAN TINGGI SWASTA (PTS)'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 3',
            'description'      => 'PERUBAHAN NAMA BADAN PENYELENGGARA PERGURUAN TINGGI SWASTA (PTS)'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 3',
            'description'      => 'PENDIRIAN PERGURUAN TINGGI SWASTA (PTS) DAN PEMBUKAAN PROGRAM STUDI BARU'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 3',
            'description'      => 'PERUBAHAN BENTUK PERGURUAN TINGGI SWASTA (PTS)'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 3',
            'description'      => 'PENYELESAIAN MASALAH PERGURUAN TINGGI SWASTA (PTS) TIDAK TAAT AZAS'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 3',
            'description'      => 'PENGEMBANGAN KAMPUS DAN PERKULIAHAN DI LUAR DOMISILI'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 3',
            'description'      => 'PELAPORAN PROSES BELAJAR MENGAJAR (PBM) PADA DATA PENDIDIKAN TINGGI'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 3',
            'description'      => 'PUBLIKASI INFORMASI'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 3',
            'description'      => 'VALIDASI PERUBAHAN DATA POKOK DOSEN PADA DATA PENDIDIKAN TINGGI'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 3',
            'description'      => 'VALIDASI CALON PESERTA UJI KOMPETENSI MAHASISWA PROGRAM STUDI KESEHATAN PADA DATA PENDIDIKAN TINGGI'
        ]);
        \DB::table('blogs')->insert([
            'title'      => 'Loket 4',
            'description'      => 'VALIDASI IJAZAH'
        ]);
        
    }
}
