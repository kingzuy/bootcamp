<?php
function query($query_text){
    global $koneksi;
    $query = mysqli_query($koneksi,$query_text);
    while($array = mysqli_fetch_array($query)){
        $result[] = $array;
    }
    return $result;
}
<?php
function update_data($query_text){
    global $koneksi;
    $query = mysqli_query($koneksi,$query_text);
}