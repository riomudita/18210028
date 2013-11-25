<?php
class callsql
{
    function index()
    {
        $xml = new stdClass();
        $con=mysqli_connect("127.0.0.1","root","","matakuliah");
        $result = mysqli_query($con,"SELECT * FROM makul");
        $xml->makul = array();
        while($row = mysqli_fetch_array($result))
        {
            $xml->makul[] = array(
                'kode' => $row['kode'],
                'nama' => $row['nama'],
                'sks' => $row['sks']
            );
        }
        mysqli_close($con);
        return $xml;
        
    }
    
}

