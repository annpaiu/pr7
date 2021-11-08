// якщо файл існує, зчитайте його:
if (file_exists('database/users.csv')) {
   file_get_contents('database/users.csv', '');
}
$users[] = [
   'name' => $user[0],
   'email' => $user[1],
   'gender' => $user[2]
];
