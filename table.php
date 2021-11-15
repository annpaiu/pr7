<?php
// якщо файл існує, зчитайте його:
if (file_exists('C:\WebstormProjects\pr7\database\users.csv'))
    $user = str_getcsv(str_replace("\n", ",", file_get_contents('C:\WebstormProjects\pr7\database\users.csv')));

for ($i = 0; $i < count($user) - 4; $i += 4) {
    $users[($i)/4] = [
        'name' => $user[$i],
        'email' => $user[$i+1],
        'gender' => $user[$i+2],
        'filePath' => $user[$i+3]
    ];
}

for($i = 0; $i < count($users); $i++){
    echo "</br>";
    echo " <td> ".$users[$i]['name']." </td> ";
    echo " <td> ".$users[$i]['email']." </td> ";
    echo " <td> ".$users[$i]['gender']." </td> ";
    $img = pathinfo($users[$i]['filePath']);
    if ($users[$i]['filePath'] == "")
        $img['basename'] = "image.jpg";
    echo "<td>"."<img src='"."public/images//".$img['basename']."' alt='' width='50' height='50'"."</td>";
}