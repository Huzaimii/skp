<?php
session_start();

$koneksi = mysqli_connect("localhost", "root", "", "db_skripsihz");

function tgl_indo12($tanggal)
{
  $bulan = array(
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);

  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun

  return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
function rp($angka)
{

  $hasil_rupiah = "Rp." . number_format($angka, 2, ',', '.');
  return $hasil_rupiah;
}
function selisih($CheckIn, $CheckOut)
{
  $CheckInX = explode("-", $CheckIn);
  $CheckOutX =  explode("-", $CheckOut);
  $date1 =  mktime(0, 0, 0, $CheckInX[1], $CheckInX[2], $CheckInX[0]);
  $date2 =  mktime(0, 0, 0, $CheckOutX[1], $CheckOutX[2], $CheckOutX[0]);
  $interval = ($date2 - $date1) / (3600 * 24);
  // returns numberofdays
  return  $interval;
}
