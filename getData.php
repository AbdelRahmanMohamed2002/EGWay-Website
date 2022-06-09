<?php

require_once 'config.php';
if (isset($_POST['search_param'])) {
    $search_param = mysqli_real_escape_string($conn, $_POST['search_param']);
    $query = mysqli_query($conn, "SELECT * FROM sharm where  email like '%$search_param%' way like '%$search_param%' or date like '%$search_param%' or Time like '%$search_param%' or Tim like '%$search_param%' or Adults like '%$search_param%' or child like '%$search_param%' or infant like '%$search_param%' or class like '%$search_param%' or From1 like '%$search_param%' or id like '%$search_param%'  order by id limit 20");
    $output = '';
    if ($query->num_rows > 0) {
        while ($row = mysqli_fetch_array($query)) {
            $output .= '<tr>
    <td>' . $row['email'] . '</td>
    <td>' . $row['way'] . '</td>
    <td>' . $row['date'] . '</td>
    <td>' . $row['dat'] . '</td>
    <td>' . $row['Time'] . '</td>
    <td>' . $row['Tim'] . '</td>
    <td>' . $row['Adults'] . '</td>
    <td>' . $row['child'] . '</td>
    <td>' . $row['infant'] . '</td>
    <td>' . $row['class'] . '</td>
    <td>' . $row['From1'] . '</td>
    <td>' . $row['id'] . '</td>

  </tr>';
        }
    } else {
        $output = '
  <tr>
    <td colspan="4"> No result found. </td>   
  </tr>';
    }
    echo $output;
}
?>