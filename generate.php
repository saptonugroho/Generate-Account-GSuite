<?php
// Data yang akan ditulis ke file CSV
$password = "Yourpassword";
$namaemail = $_GET['email'];
$domain = $_GET['domain'];
$total = $_GET['total'];
if ($domain == "pdimail.site") {
    $folder = "/pdi";
} else {
    $folder = "/monoton";
}

$namafile = $namaemail . ".csv";
function generateRandomName()
{
    $names = [
        'Adi', 'Budi', 'Citra', 'Dewi', 'Eka', 'Firda', 'Gita', 'Hadi', 'Indah', 'Joko', 'Kartika',
        'Lia', 'Mulya', 'Nina', 'Oscar', 'Putri', 'Qori', 'Rizki', 'Sari', 'Tono', 'Utami', 'Vina',
        'Wawan', 'Xena', 'Yoga', 'Zara', 'Aldi', 'Bayu', 'Cindy', 'Dian', 'Eko', 'Fitri', 'Galih',
        'Hanif', 'Intan', 'Jaka', 'Kamila', 'Lukman', 'Mira', 'Nanda', 'Olive', 'Pandu', 'Qonita',
        'Rifki', 'Salsa', 'Taufan', 'Uci', 'Vero', 'Wira', 'Xavier', 'Yuni', 'Zainab', 'Angga',
        'Bella', 'Cahya', 'Dita', 'Evan', 'Fira', 'Gilang', 'Hesty', 'Irfan', 'Jasmine', 'Krisna',
        'Laras', 'Miko', 'Nadia', 'Omar', 'Puspita', 'Qori', 'Rendra', 'Siska', 'Teguh', 'Ursula',
        'Vicky', 'Windy', 'Xavi', 'Yosef', 'Zahra', 'Alvin', 'Bella', 'Cakra', 'Dara', 'Edo', 'Fira',
        'Gerald', 'Hesti', 'Ivan', 'Jihan', 'Koko', 'Lia', 'Musa', 'Nia', 'Opik', 'Putu', 'Qinara',
        'Rangga', 'Suci', 'Taufik', 'Uli', 'Viona', 'Willy', 'Xanthe', 'Yasmin', 'Zidan',
        'Alya', 'Bambang', 'Cinta', 'Darma', 'Evi', 'Firman', 'Gisella', 'Hendra', 'Ira', 'Johan',
        'Kania', 'Lutfi', 'Maya', 'Nizar', 'Olive', 'Prima', 'Qodir', 'Ratna', 'Sigit', 'Tasya',
        'Umar', 'Vivi', 'Wira', 'Xiao', 'Yono', 'Zulaika', 'Andi', 'Bunga', 'Chandra', 'Dhika',
        'Elsa', 'Firyal', 'Guntur', 'Husna', 'Ismail', 'Juli', 'Kurnia', 'Larasati', 'Maman',
        'Nabila', 'Omar', 'Putra', 'Qila', 'Rico', 'Sofia', 'Tito', 'Uci', 'Vian', 'Widya',
        'Xander', 'Yara', 'Zaki', 'Adi', 'Budi', 'Citra', 'Dewi', 'Eka', 'Firda', 'Gita', 'Hadi', 'Indah', 'Joko', 'Kartika',
        'Lia', 'Mulya', 'Nina', 'Oscar', 'Putri', 'Qori', 'Rizki', 'Sari', 'Tono', 'Utami', 'Vina',
        'Wawan', 'Xena', 'Yoga', 'Zara', 'Aldi', 'Bayu', 'Cindy', 'Dian', 'Eko', 'Fitri', 'Galih',
        'Hanif', 'Intan', 'Jaka', 'Kamila', 'Lukman', 'Mira', 'Nanda', 'Olive', 'Pandu', 'Qonita',
        'Rifki', 'Salsa', 'Taufan', 'Uci', 'Vero', 'Wira', 'Xavier', 'Yuni', 'Zainab', 'Angga',
        'Bella', 'Cahya', 'Dita', 'Evan', 'Fira', 'Gilang', 'Hesty', 'Irfan', 'Jasmine', 'Krisna',
        'Laras', 'Miko', 'Nadia', 'Omar', 'Puspita', 'Qori', 'Rendra', 'Siska', 'Teguh', 'Ursula',
        'Vicky', 'Windy', 'Xavi', 'Yosef', 'Zahra', 'Alvin', 'Bella', 'Cakra', 'Dara', 'Edo', 'Fira',
        'Gerald', 'Hesti', 'Ivan', 'Jihan', 'Koko', 'Lia', 'Musa', 'Nia', 'Opik', 'Putu', 'Qinara',
        'Rangga', 'Suci', 'Taufik', 'Uli', 'Viona', 'Willy', 'Xanthe', 'Yasmin', 'Zidan',
        'Alya', 'Bambang', 'Cinta', 'Darma', 'Evi', 'Firman', 'Gisella', 'Hendra', 'Ira', 'Johan',
        'Kania', 'Lutfi', 'Maya', 'Nizar', 'Olive', 'Prima', 'Qodir', 'Ratna', 'Sigit', 'Tasya',
        'Umar', 'Vivi', 'Wira', 'Xiao', 'Yono', 'Zulaika', 'Andi', 'Bunga', 'Chandra', 'Dhika',
        'Elsa', 'Firyal', 'Guntur', 'Husna', 'Ismail', 'Juli', 'Kurnia', 'Larasati', 'Maman',
        'Nabila', 'Omar', 'Putra', 'Qila', 'Rico', 'Sofia', 'Tito', 'Uci', 'Vian', 'Widya',
        'Xander', 'Yara', 'Zaki', 'Earl', 'Earle', 'Earnest', 'Ed', 'Eddie', 'Eddy', 'Edgar',
        'Edgardo', 'Edison', 'Edmond', 'Edmund', 'Edmundo', 'Eduardo', 'Edward', 'Edwardo', 'Edwin',
        'Efrain', 'Efren', 'Elbert', 'Elden', 'Eldon', 'Eldridge', 'Eli', 'Elias', 'Elijah', 'Eliseo',
        'Elisha', 'Elliot', 'Elliott', 'Ellis', 'Ellsworth', 'Elmer', 'Elmo', 'Eloy', 'Elroy', 'Elton',
        'Elvin', 'Elvis', 'Elwood', 'Emanuel', 'Emerson', 'Emery', 'Emil', 'Emile', 'Emilio', 'Emmanuel',
        'Emmett', 'Emmitt', 'Emory', 'Enoch', 'Enrique', 'Erasmo', 'Eric', 'Erich', 'Erick', 'Erik', 'Erin',
        'Ernest', 'Ernesto', 'Ernie', 'Errol', 'Ervin', 'Erwin', 'Esteban', 'Ethan', 'Eugene', 'Eugenio',
        'Eusebio', 'Evan', 'Everett', 'Everette', 'Ezekiel', 'Ezequiel', 'Ezra', 'Fabian', 'Faustino',
        'Fausto', 'Federico', 'Felipe', 'Felix', 'Felton', 'Ferdinand', 'Fermin', 'Fernando', 'Fidel',
        'Filiberto', 'Fletcher', 'Florencio', 'Florentino', 'Floyd', 'Forest', 'Forrest', 'Foster', 'Frances',
        'Francesco', 'Francis', 'Francisco', 'Frank', 'Frankie', 'Franklin', 'Franklyn', 'Fred', 'Freddie',
        'Freddy', 'Frederic', 'Frederick', 'Fredric', 'Fredrick', 'Freeman', 'Fritz', 'Gabriel', 'Gail',
        'Gale', 'Galen', 'Garfield', 'Garland', 'Garret', 'Garrett', 'Garry', 'Garth', 'Gary', 'Gaston',
        'Gavin', 'Gayle', 'Gaylord', 'Genaro', 'Gene', 'Geoffrey', 'George', 'Gerald', 'Geraldo', 'Gerard',
        'Gerardo', 'German', 'Gerry', 'Gil', 'Gilbert', 'Gilberto', 'Gino', 'Giovanni', 'Giuseppe', 'Glen',
        'Glenn', 'Gonzalo', 'Gordon', 'Grady', 'Graham', 'Graig', 'Grant', 'Granville', 'Greg', 'Gregg',
        'Gregorio', 'Gregory', 'Grover', 'Guadalupe', 'Guillermo', 'Gus', 'Gustavo', 'Guy', 'Hai', 'Hal',
        'Hank', 'Hans', 'Harlan', 'Harland', 'Harley', 'Harold', 'Harris', 'Harrison', 'Harry', 'Harvey',
        'Hassan', 'Hayden', 'Haywood', 'Heath', 'Hector', 'Henry', 'Herb', 'Herbert', 'Heriberto', 'Herman',
        'Herschel', 'Hershel', 'Hilario', 'Hilton', 'Hipolito', 'Hiram', 'Hobert',
        'Hollis', 'Homer', 'Hong', 'Horace', 'Horacio', 'Hosea', 'Houston', 'Howard', 'Hoyt', 'Hubert', 'Huey',
        'Hugh', 'Hugo', 'Humberto', 'Hung', 'Hunter', 'Hyman', 'Jacinto', 'Jack', 'Jackie', 'Jackson', 'Jacob',
        'Jacques', 'Jae', 'Jaime', 'Jake', 'Jamaal', 'Jamal', 'Jamar', 'Jame', 'Jamel', 'James', 'Jamey', 'Jamie',
        'Jamison', 'Jan', 'Jared', 'Jarod', 'Jarred', 'Jarrett', 'Jarrod', 'Jarvis', 'Jason', 'Jasper', 'Javier',
        'Jay', 'Jayson', 'Jc', 'Jean', 'Jed', 'Jeff', 'Jefferey', 'Jefferson', 'Jeffery', 'Jeffrey', 'Jeffry',
        'Jerald', 'Jeramy', 'Jere', 'Jeremiah', 'Jeremy', 'Jermaine', 'Jerold', 'Jerome', 'Jeromy', 'Jerrell',
        'Jerrod', 'Jerrold', 'Jerry', 'Jess', 'Jesse', 'Jessie', 'Jesus', 'Jewel', 'Jewell', 'Jim', 'Jimmie',
        'Jimmy', 'Joan', 'Joaquin', 'Jody', 'Joe', 'Joel', 'Joesph', 'Joey', 'John', 'Johnathan', 'Johnathon',
        'Johnie', 'Johnnie', 'Johnny', 'Johnson', 'Jon', 'Jonah', 'Jonas', 'Jonathan', 'Jonathon', 'Jordan',
        'Jordon', 'Jorge', 'Jose', 'Josef', 'Joseph', 'Josh', 'Joshua', 'Josiah', 'Jospeh', 'Josue', 'Juan',
        'Jude', 'Judson', 'Jules', 'Julian', 'Julio', 'Julius', 'Junior', 'Justin', 'Lacy', 'Lamar', 'Lamont',
        'Lance', 'Landon', 'Lane', 'Lanny', 'Larry', 'Lauren', 'Laurence', 'Lavern', 'Laverne', 'Lawerence',
        'Lawrence', 'Lazaro', 'Leandro', 'Lee', 'Leif', 'Leigh', 'Leland', 'Lemuel', 'Len', 'Lenard', 'Lenny',
        'Leo', 'Leon', 'Leonard', 'Leonardo', 'Leonel', 'Leopoldo', 'Leroy', 'Les', 'Lesley', 'Leslie', 'Lester',
        'Levi', 'Lewis', 'Lincoln', 'Lindsay', 'Lindsey', 'Lino', 'Linwood', 'Lionel', 'Lloyd', 'Logan', 'Lon',
        'Long', 'Lonnie', 'Luther', 'Lyle', 'Lyman', 'Lyndon', 'Lynn'
    ];

    $randIndex = array_rand($names);
    return $names[$randIndex];
}

function generatecsv($filename, $data)
{
    $csvFile = ($filename);
    $header = array(
        'First Name [Required]',
        'Last Name [Required]',
        'Email Address [Required]',
        'Password [Required]',
        'Password Hash Function [UPLOAD ONLY]',
        'Org Unit Path [Required]',
        'New Primary Email [UPLOAD ONLY]',
        'Recovery Email',
        'Home Secondary Email',
        'Work Secondary Email',
        'Recovery Phone [MUST BE IN THE E.164 FORMAT]',
        'Work Phone',
        'Home Phone',
        'Mobile Phone',
        'Work Address',
        'Home Address',
        'Employee ID',
        'Employee Type',
        'Employee Title',
        'Manager Email',
        'Department',
        'Cost Center',
        'Building ID',
        'Floor Name',
        'Floor Section',
        'Change Password at Next Sign-In',
        'New Status [UPLOAD ONLY]'
    );

    // Membuka file CSV untuk ditulis
    $fp = fopen($csvFile, 'w');

    // Menggabungkan nilai-nilai dengan koma dan menambahkan baris baru
    fwrite($fp, implode(',', $header) . "\n");
    foreach ($data as $row) {
        fwrite($fp, implode(',', $row) . "\n");
    }

    // Menutup file CSV
    fclose($fp);
}


$gsuiteAccounts = array();
// Menambahkan data akun G Suite secara dinamis dengan perulangan
for ($i = 1; $i <= $total; $i++) {
    $gsuiteAccounts[] = array(
        generateRandomName(),
        generateRandomName(),
        $namaemail . $i . "@" . $domain,
        $password,
        '',
        $folder,
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        'FALSE',
        ''
    );
}


generatecsv($namafile, $gsuiteAccounts);
// Set header untuk memicu download
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . $namaemail . '.csv"');

// Baca file dan kirimkan isinya ke output
readfile($namaemail . ".csv");
unlink($namafile);

// Hentikan eksekusi script setelah file dikirim
exit();
