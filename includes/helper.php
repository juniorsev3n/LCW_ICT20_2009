<?php
namespace includes;
use DB;

class helper{

    function set_title($p,$mode,$pid,$id,$act)
    {
          if(!$p)
          {
            echo "Home";
          }
          elseif($p==='berita')
          {
            if(!$mode)
            {
              echo "Berita";
            }
            elseif($mode==='detail')
            {
              $result=DB::con()->query("SELECT judul FROM berita WHERE id='".$id."' AND tampilkan='1'");
              $row=mysqli_fetch_object($result);
              echo $row->judul;
            }
          }
          elseif($p==='profil')
          {
            if(!$id)
            {
              echo "Profil";
            }
            elseif($id)
            {
              $result2=DB::con()->query("SELECT judul FROM profil WHERE id='$id' AND tampilkan='1'");
              $row2=mysqli_fetch_object($result2); echo $row2->judul;
            }
          }
          elseif($p==='galeri')
          {
            echo "Galeri";
          }
          elseif($p==='e-magz')
          {
            if(!$mode)
            {
              echo "E-magz";
            }
            elseif($mode==='view')
            {
              $result3=DB::con()->query("SELECT judul FROM emagz WHERE id='$id'");
              $row3=mysqli_fetch_object($result3); echo $row3->judul;
            }
          }
          elseif($p==='bukutamu')
            {
              echo "Bukutamu";
            }
          elseif($p==='polling')
          {
            if(!$pid && !$id && !$act)
            {
              echo "Polling";
            }
            elseif($pid)
            {
              $result4=DB::con()->query("SELECT judul FROM poll_data WHERE id='$pid'");
              $row4=mysqli_fetch_object($result4); echo $row4->judul;
            }
          }
          elseif($p==='credits')
          {
            echo "Credits";
          }
          elseif($p==='sitemap')
          {
            echo "Sitemap";
          }
          else{
            echo "404";
          }


      }

}


 ?>
