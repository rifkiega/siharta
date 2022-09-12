<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULIR LAPORAN HARTA KEKAYAAN APARATUR SIPIL NEGARA</title>
</head>
<style>
    #halaman {
        width: auto;
        height: auto;
        /* position: absolute; */
        border: 1px solid;
        padding-top: 10px;
        padding-left: 30px;
        padding-right: 30px;
        padding-bottom: 30px;
        margin-top: 10px;
    }

    #halaman2 {
        width: auto;
        height: auto;
        /* position: absolute; */
        border: 1px solid;
        padding-top: 30px;
        padding-left: 30px;
        padding-right: 30px;
        padding-bottom: 80px;
        margin-top: 10px;
    }

    body {
        font-family: Arial;
        font-size: 10pt;
    }

    #table-1 {
        border: 1px solid black;
        border-collapse: collapse;
    }

    #table-1 th {
        background-color: #F7F7F7;
        font-weight: bold;
    }

    #table-1 th,
    #table-1 td {
        padding: 5px;
        border: 1px solid black;
    }

</style>

<body>
    <div style="display: flex; justify-content: space-between;">
        <div>
            <p style="padding: 2px; margin: 0; font-size: 12px; font-weight: bold">INSTANSI PEMERINTAH</p>
            <p style="padding: 2px; margin: 0; font-size: 12px">Pemerintah Kab. Indramayu</p>
            <p style="padding: 2px; margin: 0; font-size: 12px; font-weight: bold">SIFAT RAHASIA</p>
        </div>
        <div>
            <p style="padding: 2px; margin: 0; font-size: 12px">Lembar ke-1 : Untuk Pimpinan</p>
        </div>
    </div>
    <center style="margin-top: 20px;">
        <p
            style="font-weight: bold; padding: 4px; margin: 0; text-decoration: underline; text-underline-position: under;">
            FORMULIR LAPORAN HARTA KEKAYAAN APARATUR SIPIL NEGARA
        </p>
        <small>Tahun @if(date('Y') == '2022') {{ date('Y') }} @else 2022 - {{ date('Y') }} @endif</small>
        <p style="padding: 4px; margin: 0; font-size: 14px;">NO LAPORAN : *******</p>
    </center>
    <div id="halaman">
        @php
        $dataPribadi = App\Models\DataPribadi::where('user_id', auth()->user()->id)->first();
        @endphp
        <table style="font-size: 12px;">
            <tr>
                <td style="width: 30%;"><span style="padding-right: 10px">1.</span>Nama Lengkap</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->nama_lengkap }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><span style="padding-right: 10px">2.</span>Nomor KTP</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->nomer_ktp }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;"><span style="padding-right: 10px">3.</span>Jenis Kelamin
                </td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->jenis_kelamin }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><span style="padding-right: 10px">4.</span>Tempat/Tgl Lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->tempat }},
                    {{ date("d F Y", strtotime($dataPribadi->tanggal_lahir)) }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><span style="padding-right: 10px">5.</span>Agama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->agama }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><span style="padding-right: 10px">6.</span>Status Perkawinan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->status_perkawinan }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><span style="padding-right: 10px">7.</span>NIP</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->nip }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><span style="padding-right: 10px">8.</span>Pangkat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->pangkat_golongan }} <span style="padding-left: 20px">Mulai
                        Tanggal {{ date("d F Y", strtotime($dataPribadi->terhitung_mulai_tanggal)) }}</span></td>
            </tr>
            <tr>
                <td style="width: 30%;"><span style="padding-right: 10px">9.</span>Jabatan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->jabatan }} <span style="padding-left: 20px">Mulai Tanggal
                        {{ date("d F Y", strtotime($dataPribadi->terhitung_mulai_tanggal)) }}</span></td>
            </tr>
            <tr>
                <td style="width: 30%;"><span style="padding-right: 4px">10.</span>Eselon</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->eselon }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><span style="padding-right: 4px">11.</span>Unit Kerja</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->unit_kerja }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"><span style="padding-right: 4px">12.</span>Alamat</td>
            </tr>
            <tr>
                <td style="width: 30%; padding-left: 20px;"><span style="padding-right: 10px">-</span>Kantor</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->kantor }} <span style="padding-left: 10px">Kode Pos
                        {{ $dataPribadi->kode_pos_kantor }}</span></td>
            </tr>
            <tr>
                <td style="width: 30%; padding-left: 20px;"><span style="padding-right: 10px">-</span>Rumah</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->rumah }} <span style="padding-left: 10px">Kode Pos
                        {{ $dataPribadi->kode_pos_rumah }}</span></td>
            </tr>
            <tr>
                <td style="width: 30%;"><span style="padding-right: 4px">13.</span>No. Telepon</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $dataPribadi->nomer_telephon }}</td>
            </tr>
        </table>
        <table style="margin-bottom: 20px; font-size: 12px; margin-top: 10px;">
            {{-- ================================================ HARTA KEKAYAAN =================================================== --}}
            <tr>
                <td style="width: 30%; font-weight: bold;"><span style="padding-right: 10px">I.</span> HARTA KEKAYAAN
                </td>
            </tr>
            @php
                // ================== Kekayaan ==================
                $totalHartaTidakBergerak = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Tidak Bergerak')->sum('detail_laporans.isi_7');
                $totalHartaBergerakTransportasi = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Kendaraan')->sum('detail_laporans.isi_8');
                $totalSuratBerharga = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Surat Berharga')->sum('detail_laporans.isi_6');
                $totalHutang = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Hutang')->sum('detail_laporans.isi_5');
                $totalUangTunai = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Uang Tunai')->sum('detail_laporans.isi_6');
                $totalPiutang = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Piutang')->sum('detail_laporans.isi_5');
                
                // ================== Penghasilan ================
                $totalSuamiIstri = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Data Suami/Istri')->sum('detail_laporans.isi_4');
                $totalPenghasilanProfesi = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Penghasilan Profesi')->sum('detail_laporans.isi_3');
                $totalPenghasilanJabatan = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Penghasilan Jabatan')->sum('detail_laporans.isi_5');
                $totalPenghasilanHibah = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Penghasilan Hibah')->sum('detail_laporans.isi_3');
                // ================== Pengeluaran ================
                $totalPengeluaranRutin = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Laporan Pengeluaran')->sum('detail_laporans.isi_1');
                $totalPengeluaranLainnya = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Laporan Pengeluaran')->sum('detail_laporans.isi_2');

                $subTotalHartaKekayaan = 0;
                $subTotalPenghasilan = 0;
                $subTotalPengeluaran = 0;
            @endphp
            <tr>
                <td style="width: 85%; padding-left: 25px;"><span style="padding-right: 10px">I.1.</span> HARTA TIDAK
                    BERGERAK</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">{{number_format($totalHartaTidakBergerak, 0)}}</td>
            </tr>
            <tr>
                <td style="width: 85%; padding-left: 25px;"><span style="padding-right: 10px">I.2.</span> HARTA BERGERAK
                    (MOBIL, MOTOR, DLL)</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">{{number_format($totalHartaBergerakTransportasi, 0)}}</td>
            </tr>
            <tr>
                <td style="width: 85%; padding-left: 25px;"><span style="padding-right: 10px">I.3.</span> SURAT BERHARGA
                </td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">{{number_format($totalSuratBerharga, 0)}}</td>
            </tr>
            <tr>
                <td style="width: 85%; padding-left: 25px;"><span style="padding-right: 10px">I.4.</span> UANG TUNAI,
                    DEPOSITO, GIRO, TABUNGAN DAN KAS LAINNYA</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">{{number_format($totalUangTunai, 0)}}</td>
            </tr>
            <tr>
                <td style="width: 85%; padding-left: 25px;"><span style="padding-right: 10px">I.5.</span> PIUTANG
                    (BARANG, UANG)</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">{{number_format($totalPiutang, 0)}}</td>
            </tr>
            <tr>
                @php
                    $subTotalHartaKekayaan = $totalHartaTidakBergerak + $totalHartaBergerakTransportasi + $totalSuratBerharga + $totalUangTunai + $totalPiutang;
                @endphp
                <td style="width: 85%; padding-left: 15rem; font-weight: bold">SUB TOTAL HARTA</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%; border-top: 1px solid;">{{number_format($subTotalHartaKekayaan, 0)}}</td>
            </tr>
            <tr>
                <td style="width: 85%; padding-left: 25px;""><span style=" padding-right: 10px">I.6.</span> HUTANG<span
                        style=" padding-left: 12.57rem; font-weight: bold">(-)</span></td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%; border-bottom: 1px solid;">{{number_format($totalHutang, 0)}}</td>
            </tr>
            <tr>
                @php
                    $totalHartaKekayaan = $subTotalHartaKekayaan - $totalHutang
                @endphp
                <td style="width: 85%; padding-left: 15rem; font-weight: bold">SUB TOTAL HARTA KEKAYAAN</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">{{number_format($totalHartaKekayaan, 0)}}</td>
            </tr>

            {{-- ========================================================= PENGHASILAN ========================================================= --}}

            <tr>
                <td style="width: 30%; font-weight: bold;"><span style="padding-right: 10px">II.</span> PENGHASILAN</td>
            </tr>
            <tr>
                <td style="width: 85%; padding-left: 25px;"><span style="padding-right: 10px">II.1.</span> PENGHASILAN
                    DARI JABATAN (PER TAHUN)</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">{{number_format($totalPenghasilanJabatan, 0)}}</td>
            </tr>
            <tr>
                <td style="width: 85%; padding-left: 25px;"><span style="padding-right: 10px">II.2.</span> PENGHASILAN
                    DARI PROFESI / KEAHLIAN (PER TAHUN)</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">{{number_format($totalPenghasilanProfesi, 0)}}</td>
            </tr>
            <tr>
                <td style="width: 85%; padding-left: 25px;"><span style="padding-right: 10px">II.3.</span> PENGHASILAN
                    DARI USAHA LAINNYA (PER TAHUN)</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">0</td>
            </tr>
            <tr>
                <td style="width: 85%; padding-left: 25px;"><span style="padding-right: 10px">II.4.</span> PENGHASILAN
                    DARI HIBAH / LAINNYA</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">{{number_format($totalPenghasilanHibah, 0)}}</td>
            </tr>
            <tr>
                <td style="width: 85%; padding-left: 25px;"><span style="padding-right: 10px">II.5.</span> PENGHASILAN
                    DARI ISTRI / SUAMI YANG BEKERJA</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">{{number_format($totalSuamiIstri, 0)}}</td>
            </tr>
            @php
                $subTotalPenghasilan = $totalPenghasilanJabatan + $totalPenghasilanProfesi + $totalPenghasilanHibah + $totalSuamiIstri;
            @endphp
            <tr>
                <td style="width: 85%; padding-left: 15rem; font-weight: bold">TOTAL PENGHASILAN</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%; border-top: 1px solid;">{{number_format($subTotalPenghasilan, 0)}}</td>
            </tr>
            <tr>
                <td style="width: 85%; padding-left: 25px;"><span style="padding-right: 10px">II.6.</span> PENGELUARAN
                    (PER TAHUN)</td>
            </tr>
            <tr>
                <td style="width: 85%; padding-left: 58px;"><span style="padding-right: 5px">II.6.1.</span> PENGELUARAN
                    RUTIN<span style=" padding-left: 5rem; font-weight: bold">(-)</span></td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">{{number_format($totalPengeluaranRutin, 0)}}</td>
            </tr>
            <tr>
                <td style="width: 85%; padding-left: 58px;"><span style="padding-right: 5px">II.6.2.</span> PENGELUARAN
                    LAINNYA<span style=" padding-left: 4rem; font-weight: bold">(-)</span></td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%; border-bottom: 1px solid;">{{number_format($totalPengeluaranLainnya, 0)}}</td>
            </tr>
            @php
                $subTotalPengeluaran = $totalPengeluaranRutin + $totalPengeluaranLainnya;
            @endphp
            <tr>
                <td style="width: 85%; padding-left: 15rem; font-weight: bold">TOTAL PENGELUARAN</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">{{number_format($subTotalPengeluaran, 0)}}</td>
            </tr>
            @php
                $totalPenghasilanBersih = $subTotalPenghasilan - $subTotalPengeluaran;
            @endphp
            <tr>
                <td style="width: 85%; padding-left: 15rem; font-weight: bold">PENGHASILAN BERSIH</td>
                <td style="width: 5%;">Rp.</td>
                <td style="width: 10%;">{{number_format($totalPenghasilanBersih, 0)}}</td>
            </tr>
        </table>

        <div style="width: 35%; text-align: left; float: right; font-size: 12px;">.....................,
            .......................... @if(date('Y') == '2022') {{ date('Y') }} @else 2022 - {{ date('Y') }} @endif
        </div><br>
        <div style="width: 35%; text-align: left; float: right; font-size: 12px;">Yang melaporkan,</div>
        <br><br><br><br><br>
        <div style="width: 35%; text-align: left; float: right; font-size: 12px;"><span
                style="border-bottom: 1px solid;">{{ $dataPribadi->nama_lengkap }}</span></div><br>
        <div style="width: 35%; text-align: left; float: right; font-size: 12px;">NIP {{ $dataPribadi->nip }}</div>
    </div>

    {{-- ====================================================== HARTA KEKAYAAN =========================================================== --}}

    <p style="padding: 10px 0px 0px 0px; margin: 0; font-size: 12px; font-weight: bold">I. HARTA KEKAYAAN</p>
    <p style="padding: 10px 0px 2px 10px; margin: 0; font-size: 12px; font-weight: bold">I.1. HARTA TIDAK BERGERAK
        (TANAH DAN BANGUNAN)</p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Harta</th>
                <th scope="col">Luas Tanah/Luas Bangunan</th>
                <th scope="col">Atas Nama/Hubungan Keluarga</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tahun Perolehan</th>
                <th scope="col">Harga Perolehan (Rp)</th>
                <th scope="col">NJOP Saat Pelaporan (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
                <td style="text-align: center">(5)</td>
                <td style="text-align: center">(6)</td>
                <td style="text-align: center">(7)</td>
                <td style="text-align: center">(8)</td>
            </tr>
            @php
                $hartaTidakBergerak = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Tidak Bergerak')->get();
                $i = 1;
                $totalPerolehanHartaTidakBergerak = 0;
                $totalNJOPHartaTidakBergerak = 0;
            @endphp
            @foreach ($hartaTidakBergerak as $item)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $item->isi_1 }}</td>
                <td>{{ $item->isi_2 }} m&#178;</td>
                <td>{{ $item->isi_3 }}</td>
                <td>{{ $item->isi_4 }}</td>
                <td>{{ date("d F Y", strtotime($item->isi_5)) }}</td>
                <td>{{number_format($item->isi_6, 0)}}</td>
                <td>{{number_format($item->isi_7, 0)}}</td>
                @php
                    $totalPerolehanHartaTidakBergerak += $item->isi_6;
                    $totalNJOPHartaTidakBergerak += $item->isi_7;
                @endphp
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr style="border: none;">
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;">JUMLAH</td>
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td>{{number_format($totalPerolehanHartaTidakBergerak, 0)}}</td>
                <td>{{number_format($totalNJOPHartaTidakBergerak, 0)}}</td>
            </tr>
        </tfoot>
    </table>

    {{-- ============================================================ HARTA BERGERAK =========================================================== --}}

    <p style="padding: 10px 0px 2px 10px; margin: 0; font-size: 12px; font-weight: bold">I.2. HARTA BERGERAK</p>
    <p style="padding: 0px 0px 2px 30px; margin: 0; font-size: 12px;">I.2.1. Alat Transportasi (Pesawat Udara, Kapal
        Laut, Mobil, Sepeda Motor, Mesin Lainnya)</p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Alat Transportasi</th>
                <th scope="col">No Kendaraan/Merek/Model/Tahun Pembuatan</th>
                <th scope="col">Atas Nama/Hubungan Keluarga</th>
                <th scope="col">Tahun Perolehan</th>
                <th scope="col">Nilai Perolehan (Rp)</th>
                <th scope="col">Nilai Jual Saat Pelaporan (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
                <td style="text-align: center">(5)</td>
                <td style="text-align: center">(6)</td>
                <td style="text-align: center">(7)</td>
            </tr>
            @php
                $hartaBergerakTransportasi = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Kendaraan')->get();
                $i = 1;
                $nilaiPerolehanHartaBergerakTransportasi = 0;
                $totalNJHartaBergerakTransportasi = 0;
            @endphp
            @foreach ($hartaBergerakTransportasi as $item)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $item->isi_1 }}</td>
                <td>{{ $item->isi_2 }}/{{ $item->isi_3 }}/{{ date("d F Y", strtotime($item->isi_4)) }}</td>
                <td>{{ $item->isi_5 }}/{{ $item->isi_6 }}</td>
                <td>{{ date("d F Y", strtotime($item->isi_4)) }}</td>
                <td>{{number_format($item->isi_7, 0)}}</td>
                <td>{{number_format($item->isi_8, 0)}}</td>
                @php
                    $nilaiPerolehanHartaBergerakTransportasi += $item->isi_7;
                    $totalNJHartaBergerakTransportasi += $item->isi_8;
                @endphp
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr style="border: none;">
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;">JUMLAH</td>
                <td style="border: none;"></td>
                <td>{{number_format($nilaiPerolehanHartaBergerakTransportasi, 0)}}</td>
                <td>{{number_format($totalNJHartaBergerakTransportasi, 0)}}</td>
            </tr>
        </tfoot>
    </table>

    {{-- ====================================================== Peternakan ========================================================== --}}

    <p style="padding: 10px 0px 2px 30px; margin: 0; font-size: 12px;">I.2.2. Peternakan, Perikanan, Perkebunan,
        Pertanian, Kehutanan, Pertambangan, dan Usaha Lainnya.</p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Usaha</th>
                <th scope="col">Atas Nama/Hubungan Keluarga</th>
                <th scope="col">Tahun Perolehan</th>
                <th scope="col">Jumlah/Satuan</th>
                <th scope="col">Omzet Per Bulan (Rp)</th>
                <th scope="col">Nilai Jual Saat Pelaporan (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
                <td style="text-align: center">(5)</td>
                <td style="text-align: center">(6)</td>
                <td style="text-align: center">(7)</td>
            </tr>
            @php
                $hartaBergerakUsaha = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Usaha')->get();
                $i = 1;
                $omzetHartaBergerakUsaha = 0;
                $totalNJHartaBergerakUsaha = 0;
            @endphp
            @foreach ($hartaBergerakUsaha as $item)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $item->isi_1 }}</td>
                <td>{{ $item->isi_2 }}/{{ $item->isi_3 }}</td>
                <td>{{ date("d F Y", strtotime($item->isi_5)) }}</td>
                <td>{{ $item->isi_4 }}</td>
                <td>{{number_format($item->isi_6, 0)}}</td>
                <td>{{number_format($item->isi_7, 0)}}</td>
                @php
                    $omzetHartaBergerakUsaha += $item->isi_6;
                    $totalNJHartaBergerakUsaha += $item->isi_7;
                @endphp
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr style="border: none;">
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;">JUMLAH</td>
                <td style="border: none;"></td>
                <td>{{number_format($omzetHartaBergerakUsaha, 0)}}</td>
                <td>{{number_format($totalNJHartaBergerakUsaha, 0)}}</td>
            </tr>
        </tfoot>
    </table>

    {{-- ================================================== HARTA BERGERAK LAINNYA ======================================================== --}}

    <p style="padding: 10px 0px 2px 30px; margin: 0; font-size: 12px;">I.2.3. Harta Bergerak Lainnya (Logam Mulia, Batu
        Mulia, Barang-Barang Seni dan Antik, Benda Bergerak Lainnya).</p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Harta</th>
                <th scope="col">Atas Nama/Hubungan Keluarga</th>
                <th scope="col">Tahun Perolehan</th>
                <th scope="col">Jumlah/Satuan</th>
                <th scope="col">Harga Perolehan (Rp)</th>
                <th scope="col">Nilai Jual Saat Pelaporan (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
                <td style="text-align: center">(5)</td>
                <td style="text-align: center">(6)</td>
                <td style="text-align: center">(7)</td>
            </tr>
            @php
                $hartaBergerakLogam = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Logam')->get();
                $i = 1;
                $hargaPerolehanHartaBergerakLogam = 0;
                $totalNJHartaBergerakLogam = 0;
            @endphp
            @foreach ($hartaBergerakLogam as $item)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $item->isi_1 }}</td>
                <td>{{ $item->isi_2 }}/{{ $item->isi_3 }}</td>
                <td>{{ date("d F Y", strtotime($item->isi_5)) }}</td>
                <td>{{ $item->isi_4 }}</td>
                <td>{{number_format($item->isi_6, 0)}}</td>
                <td>{{number_format($item->isi_7, 0)}}</td>
                @php
                    $hargaPerolehanHartaBergerakLogam += $item->isi_6;
                    $totalNJHartaBergerakLogam += $item->isi_7;
                @endphp
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr style="border: none;">
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;">JUMLAH</td>
                <td style="border: none;"></td>
                <td>{{number_format($hargaPerolehanHartaBergerakLogam, 0)}}</td>
                <td>{{number_format($totalNJHartaBergerakLogam, 0)}}</td>
            </tr>
        </tfoot>
    </table>

    {{-- ==================================================== SURAT BERHARGA ===================================================================== --}}

    <p style="padding: 10px 0px 2px 10px; margin: 0; font-size: 12px; font-weight: bold">I.3. SURAT BERHARGA</p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Surat Berharga</th>
                <th scope="col">Atas Nama/Hubungan Keluarga</th>
                <th scope="col">Jumlah Lembar / % Kepemilikan</th>
                <th scope="col">Nama Perusahaan</th>
                <th scope="col">Nilai Jual Saat Pelaporan (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
                <td style="text-align: center">(5)</td>
                <td style="text-align: center">(6)</td>
            </tr>
            @php
                $suratBerharga = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Surat Berharga')->get();
                $i = 1;
                $totalNJSuratBerharga = 0;
            @endphp
            @foreach ($suratBerharga as $item)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $item->isi_1 }}</td>
                <td>{{ $item->isi_2 }}/{{ $item->isi_3 }}</td>
                <td>{{ $item->isi_4 }} Lembar/100% Kepemilikan Yang Bersangkutan</td>
                <td>{{ $item->isi_5 }}</td>
                <td>{{number_format($item->isi_6, 0)}}</td>
                @php
                    $totalNJSuratBerharga += $item->isi_6;
                @endphp
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr style="border: none;">
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;">JUMLAH</td>
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td>{{number_format($totalNJSuratBerharga, 0)}}</td>
            </tr>
        </tfoot>
    </table>

    {{-- ==================================================== UANG TUNAI, DEPO DLL ===================================================================== --}}

    <p style="padding: 10px 0px 2px 10px; margin: 0; font-size: 12px; font-weight: bold">I.4. UANG TUNAI, DEPOSITO,
        GIRO, TABUNGAN DAN KAS LAINNYA</p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Kas</th>
                <th scope="col">Atas Nama/Hubungan Keluarga</th>
                <th scope="col">Nama Bank/Lembaga Penyimpanan</th>
                <th scope="col">Nomor Rekening</th>
                <th scope="col">Saldo Saat Pelaporan (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
                <td style="text-align: center">(5)</td>
                <td style="text-align: center">(6)</td>
            </tr>
            @php
                $uangTunai = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Uang Tunai')->get();
                $i = 1;
                $totalSaldoUangTunai = 0;
            @endphp
            @foreach ($uangTunai as $item)

            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $item->isi_1 }}</td>
                <td>{{ $item->isi_2 }}/{{ $item->isi_3 }}</td>
                <td>{{ $item->isi_4 }}</td>
                <td>{{ $item->isi_5 }}</td>
                <td>{{number_format($item->isi_6, 0)}}</td>
                @php
                    $totalSaldoUangTunai += $item->isi_6;
                @endphp
            </tr>
            @endforeach

        </tbody>
        <tfoot>
            <tr style="border: none;">
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;">JUMLAH</td>
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td>{{number_format($totalSaldoUangTunai, 0)}}</td>
            </tr>
        </tfoot>
    </table>

    {{-- ==================================================== PIUTANG ===================================================================== --}}

    <p style="padding: 10px 0px 2px 10px; margin: 0; font-size: 12px; font-weight: bold">I.5. PIUTANG</p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Atas Nama/Hubungan Keluarga</th>
                <th scope="col">Nama Bank/Lembaga Penyimpanan</th>
                <th scope="col">Nomor Rekening</th>
                <th scope="col">Saldo Saat Pelaporan (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
                <td style="text-align: center">(5)</td>
            </tr>
            @php
                $piutang = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Piutang')->get();
                $i = 1;
                $totalSaldoPiutang = 0;
            @endphp
            @foreach ($piutang as $item)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $item->isi_1 }}/{{ $item->isi_2 }}</td>
                <td>{{ $item->isi_3 }}</td>
                <td>{{ $item->isi_4 }}</td>
                <td>{{number_format($item->isi_5, 0)}}</td>
                @php
                    $totalSaldoPiutang += $item->isi_5;
                @endphp
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr style="border: none;">
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;">JUMLAH</td>
                <td style="border: none;"></td>
                <td>{{number_format($totalSaldoPiutang, 0)}}</td>
            </tr>
        </tfoot>
    </table>

    {{-- ==================================================== HUTANG ===================================================================== --}}

    <p style="padding: 10px 0px 2px 10px; margin: 0; font-size: 12px; font-weight: bold">I.6. HUTANG</p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Atas Nama/Hubungan Keluarga</th>
                <th scope="col">Nama Bank/Lembaga Penyimpanan</th>
                <th scope="col">Nomor Rekening</th>
                <th scope="col">Saldo Saat Pelaporan (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
                <td style="text-align: center">(5)</td>
            </tr>
            @php
                $hutang = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Harta Hutang')->get();
                $i = 1;
                $totalSaldoHutang = 0;
            @endphp
            @foreach ($hutang as $item)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $item->isi_1 }}/{{ $item->isi_2 }}</td>
                <td>{{ $item->isi_3 }}</td>
                <td>{{ $item->isi_4 }}</td>
                <td>{{number_format($item->isi_5, 0)}}</td>
                @php
                    $totalSaldoHutang += $item->isi_5;
                @endphp
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr style="border: none;">
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;">JUMLAH</td>
                <td style="border: none;"></td>
                <td>{{number_format($totalSaldoHutang, 0)}}</td>
            </tr>
        </tfoot>
    </table>

    {{-- ================================================== PENGHASILAN DARI JABATAN ============================================================== --}}

    <p style="padding: 10px 0px 0px 0px; margin: 0; font-size: 12px; font-weight: bold">II. PENGHASILAN</p>
    <p style="padding: 10px 0px 2px 10px; margin: 0; font-size: 12px; font-weight: bold">II.1. PENGHASILAN DARI JABATAN
    </p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">Gaji Pokok</th>
                <th scope="col">Tunjangan Jabatan</th>
                <th scope="col">Tunjangan Lain</th>
                <th scope="col">Potongan-Potongan</th>
                <th scope="col">Penghasilan Bersih</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
                <td style="text-align: center">(5)</td>
            </tr>
            @php
                $penghasilanJabatan = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Penghasilan Jabatan')->get();
                $i = 1;
                $totalBersihPenghasilanJabatan = 0;
            @endphp
            @foreach ($penghasilanJabatan as $item)
            <tr>
                <td>{{number_format($item->isi_1, 0)}}</td>
                <td>{{number_format($item->isi_2, 0)}}</td>
                <td>{{number_format($item->isi_3, 0)}}</td>
                <td>{{number_format($item->isi_4, 0)}}</td>
                <td>{{number_format($item->isi_5, 0)}}</td>
                @php
                    $totalBersihPenghasilanJabatan += $item->isi_5;
                @endphp
            </tr>  
            @endforeach
        </tbody>
        <tfoot>
            <tr style="border: none;">
                <td style="border: none;"></td>
                <td style="border: none;"></td>
                <td style="border: none;">JUMLAH</td>
                <td style="border: none;"></td>
                <td>{{number_format($totalBersihPenghasilanJabatan, 0)}}</td>
            </tr>
        </tfoot>
    </table>

    {{-- ================================================== PENGHASILAN DARI PROFESI ============================================================== --}}

    <p style="padding: 10px 0px 2px 10px; margin: 0; font-size: 12px; font-weight: bold">II.2. PENGHASILAN DARI PROFESI
        / KEAHLIAN</p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Penghasilan</th>
                <th scope="col">Lembaga</th>
                <th scope="col">Total Penghasilan Bersih</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
            </tr>
            @php
                $penghasilanProfesi = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Penghasilan Profesi')->get();
                $i = 1;
                $totalBersihPenghasilanProfesi = 0;
            @endphp
            @foreach ($penghasilanProfesi as $item)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $item->isi_1 }}</td>
                    <td>{{ $item->isi_2 }}</td>
                    <td>{{number_format($item->isi_3, 0)}}</td>
                    @php
                        $totalBersihPenghasilanProfesi += $item->isi_3;
                    @endphp
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr style="border: none;">
                <td style="border: none;"></td>
                <td style="border: none;">JUMLAH</td>
                <td style="border: none;"></td>
                <td>{{number_format($totalBersihPenghasilanProfesi, 0)}}</td>
            </tr>
        </tfoot>
    </table>

    {{-- ================================================== PENGHASILAN DARI USAHA ============================================================== --}}

    <p style="padding: 10px 0px 2px 10px; margin: 0; font-size: 12px; font-weight: bold">II.3. PENGHASILAN DARI USAHA /
        LAINNYA</p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Penghasilan</th>
                <th scope="col">Total Penghasilan Bersih</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
            </tr>
        </tbody>
        <tfoot>
            <tr style="border: none;">
                <td style="border: none;"></td>
                <td style="border: none;">JUMLAH</td>
                <td>0</td>
            </tr>
        </tfoot>
    </table>

    {{-- ================================================== PENGHASILAN DARI HIBAH ============================================================== --}}

    <p style="padding: 10px 0px 2px 10px; margin: 0; font-size: 12px; font-weight: bold">II.4. PENGHASILAN DARI HIBAH
    </p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Penghasilan</th>
                <th scope="col">Lembaga</th>
                <th scope="col">Total Penghasilan Bersih</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
            </tr>
            @php
                $penghasilanHibah = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Penghasilan Hibah')->get();
                $i = 1;
                $totalBersihPenghasilanHibah = 0;
            @endphp
            @foreach ($penghasilanHibah as $item)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $item->isi_1 }}</td>
                <td>{{ $item->isi_2 }}</td>
                <td>{{number_format($item->isi_3, 0)}}</td>
                @php
                    $totalBersihPenghasilanHibah += $item->isi_3;
                @endphp
            </tr> 
            @endforeach
        </tbody>
        <tfoot>
            <tr style="border: none;">
                <td style="border: none;"></td>
                <td style="border: none;">JUMLAH</td>
                <td style="border: none;"></td>
                <td>{{number_format($totalBersihPenghasilanHibah, 0)}}</td>
            </tr>
        </tfoot>
    </table>

    {{-- ================================================== PENGHASILAN DARI ISTRI / SUAMI YANG BEKERJA ============================================================== --}}

    <p style="padding: 10px 0px 2px 10px; margin: 10px 0px 0px 0px; font-size: 12px; font-weight: bold">II.5.
        PENGHASILAN DARI ISTRI / SUAMI YANG BEKERJA</p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Total Penghasilan Bersih</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
            </tr>
            @php
                $dataSuamiIstri = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Data Suami/Istri')->get();
                $i = 1;
                $totalBersihPenghasilanSuamiIstri = 0;
            @endphp
            @foreach ($dataSuamiIstri as $item)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $item->isi_1 }}</td>
                <td>{{ $item->isi_3 }}</td>
                <td>{{number_format($item->isi_4, 0)}}</td>
                @php
                    $totalBersihPenghasilanSuamiIstri += $item->isi_4;
                @endphp
            </tr>  
            @endforeach
        </tbody>
        <tfoot>
            <tr style="border: none;">
                <td style="border: none;"></td>
                <td style="border: none;">JUMLAH</td>
                <td style="border: none;"></td>
                <td>{{number_format($totalBersihPenghasilanSuamiIstri, 0)}}</td>
            </tr>
        </tfoot>
    </table>

    {{-- ================================================== DATA KELUARGA ISTRI/SUAMI ============================================================== --}}

    <p style="padding: 10px 0px 0px 0px; margin: 0px; font-size: 12px; font-weight: bold">III. DATA KELUARGA</p>
    <p style="padding: 10px 0px 2px 10px; margin: 0; font-size: 12px; font-weight: bold">III.1. DATA ISTRI/SUAMI</p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">Nama Istri/Suami</th>
                <th scope="col">Tempat/Tanggal Lahir</th>
                <th scope="col">Tempat/Tanggal Nikah</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Alamat Rumah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
                <td style="text-align: center">(5)</td>
            </tr>
            @php
                $dataSuamiIstri = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Data Suami/Istri')->get();
            @endphp
            @foreach ($dataSuamiIstri as $item)
            <tr>
                <td>{{ $item->isi_1 }}</td>
                <td>{{ $item->isi_5 }}, {{ date("d F Y", strtotime($item->isi_2)) }}</td>
                <td>-</td>
                <td>{{ $item->isi_3 }}</td>
                <td>{{ $item->isi_5 }}</td>
            </tr>  
            @endforeach
        </tbody>
    </table>

    {{-- ================================================== DATA KELUARGA ANAK ============================================================== --}}

    <p style="padding: 10px 0px 2px 10px; margin: 0; font-size: 12px; font-weight: bold">III.2. DATA ANAK</p>
    <table id="table-1" class="table table-bordered" style="font-size: 12px; border: 1px solid;">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Anak</th>
                <th scope="col">Tempat/Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Alamat Rumah</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">(1)</td>
                <td style="text-align: center">(2)</td>
                <td style="text-align: center">(3)</td>
                <td style="text-align: center">(4)</td>
                <td style="text-align: center">(5)</td>
                <td style="text-align: center">(6)</td>
            </tr>
            @php
                $dataAnak = App\Models\DetailLaporan::join('laporans', 'detail_laporans.laporan_id', '=', 'laporans.id')->where('laporans.user_id', auth()->user()->id)->where('detail_laporans.type', 'Data Anak')->get();
                $i = 1;
            @endphp
            @foreach ($dataAnak as $item)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $item->isi_1 }}</td>
                <td>{{ $item->isi_2 }}, {{ date("d F Y", strtotime($item->isi_3)) }}</td>
                <td>{{ $item->isi_4 }}</td>
                <td>{{ $item->isi_5 }}</td>
                <td>{{ $item->isi_6 }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{-- <table border='1' class="table table-bordered table-striped">
            <tr bcolor=grey>
                <td>
                    Pengeluaran Rutin
                </td>
                @foreach($pengeluaran as $row)
                <td>{{'Rp..' .number_format ($row->pengeluaran_rutin,) }}</td>
    @endforeach
    </tr>

    <tr bcolor=grey>
        <td>
            Pengeluaran Lainnya
        </td>
        @foreach($pengeluaran as $row)
        <td>{{'Rp..' .number_format($row->pengeluaran_lainnya,) }}</td>
        @endforeach
    </tr>
    </table> --}}
</body>

</html>

<script>
    window.print();

</script>
