<?php

class M_tulisan extends CI_Model {

    function get_all_tulisan() {
        $hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC");
        return $hsl;
    }

    function simpan_tulisan($judul, $isi, $kategori_id, $kategori_nama, $user_id, $user_nama, $gambar, $slug) {
        $hsl = $this->db->query("insert into tbl_tulisan(tulisan_judul,tulisan_isi,tulisan_kategori_id,tulisan_kategori_nama,tulisan_pengguna_id,tulisan_author,tulisan_gambar,tulisan_slug) values ('$judul','$isi','$kategori_id','$kategori_nama','$user_id','$user_nama','$gambar','$slug')");
        //echo 'Query : '.$hsl;
        return $hsl;
    }

    function get_tulisan_by_kode($kode) {
        $hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_id='$kode'");
        return $hsl;
    }

    function update_tulisan($tulisan_id, $judul, $isi, $kategori_id, $kategori_nama, $user_id, $user_nama, $gambar, $slug) {
        $hsl = $this->db->query("update tbl_tulisan set tulisan_judul='$judul',tulisan_isi='$isi',tulisan_kategori_id='$kategori_id',tulisan_kategori_nama='$kategori_nama',tulisan_pengguna_id='$user_id',tulisan_author='$user_nama',tulisan_gambar='$gambar',tulisan_slug='$slug' where tulisan_id='$tulisan_id'");
        return $hsl;
    }

    function update_tulisan_tanpa_img($tulisan_id, $judul, $isi, $kategori_id, $kategori_nama, $user_id, $user_nama, $slug) {
        $hsl = $this->db->query("update tbl_tulisan set tulisan_judul='$judul',tulisan_isi='$isi',tulisan_kategori_id='$kategori_id',tulisan_kategori_nama='$kategori_nama',tulisan_pengguna_id='$user_id',tulisan_author='$user_nama',tulisan_slug='$slug' where tulisan_id='$tulisan_id'");
        return $hsl;
    }

    function hapus_tulisan($kode) {
        $hsl = $this->db->query("delete from tbl_tulisan where tulisan_id='$kode'");
        return $hsl;
    }

    //Front-End

    function get_post_home() {
        $hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d %M %Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC limit 3");
        return $hsl;
    }

    function get_berita_slider() {
        $hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_img_slider='1' ORDER BY tulisan_id DESC");
        return $hsl;
    }

    function berita_perpage($offset, $limit) {
        $hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC limit $offset,$limit");
        return $hsl;
    }

    function berita() {
        $hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC");
        return $hsl;
    }

    function get_berita_by_slug($slug) {
        $hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_slug='$slug'");
        return $hsl;
    }

    function get_tulisan_by_kategori($kategori_id) {
        $hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_kategori_id='$kategori_id'");
        return $hsl;
    }

    function get_tulisan_by_kategori_perpage($kategori_id, $offset, $limit) {
        $hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan where tulisan_kategori_id='$kategori_id' limit $offset,$limit");
        return $hsl;
    }

    function search_tulisan($keyword) {
        $hsl = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d/%m/%Y') AS tanggal FROM tbl_tulisan WHERE tulisan_judul LIKE '%$keyword%'");
        return $hsl;
    }

    

    function get_tulisan_populer() {
        $hasil = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d %M %Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_views DESC limit 10");
        return $hasil;
    }

    function get_tulisan_terbaru() {
        $hasil = $this->db->query("SELECT tbl_tulisan.*,DATE_FORMAT(tulisan_tanggal,'%d %M %Y') AS tanggal FROM tbl_tulisan ORDER BY tulisan_id DESC limit 10");
        return $hasil;
    }

    function get_kategori_for_blog() {
        $hasil = $this->db->query("SELECT COUNT(tulisan_kategori_id) AS jml,kategori_id,kategori_nama FROM tbl_tulisan JOIN tbl_kategori ON tulisan_kategori_id=kategori_id GROUP BY tulisan_kategori_id");
        return $hasil;
    }

}
