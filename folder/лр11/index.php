<?php
$file = fopen("test.txt", "w");
fwrite($file, "Привет, мир!");
fclose($file);
echo "1. Файл создан и записан =)<br>";

$file = fopen("test.txt", "r");
$data = fread($file, filesize("test.txt"));
echo "2. Что внутри файла: " . $data . "<br>";
fclose($file);


rename ("test.txt", "mir.txt") or die ("Ошибка переименования файла");
echo "3. Файл переименован =)<br>";

$dir = "folder";
if(!file_exists($dir)){
if(mkdir($dir)){
echo "4. Папка создана =)";
} else{
echo "4. Ошибка: папка не может быть создана =(";
}
} else{
echo "4. Папка уже существует =()";
}
rename('mir.txt', 'folder/mir.txt');
echo "4. Файл перенесен в папку folder =)<br>";

copy('folder/mir.txt','folder/world.txt');
echo "5. Файл скопирован в файл world.txt =)<br>";

$sizeBytes = filesize('folder/world.txt');
$sizeKB = $sizeBytes / 1024;
$sizeMB = $sizeBytes / (1024 * 1024);
$sizeGB = $sizeBytes / (1024 * 1024 * 1024);

echo "6. в байтах - " .$sizeBytes . "\n";
echo "6. в килобайтах - " .$sizeKB . "\n";
echo "6. в мегабайтах - " .$sizeMB . "\n";
echo "6. в гигабайтах - " .$sizeGB . "\n <br>";

unlink('folder/world.txt');
echo "7. Файл world.txt удален =(  <br>";

$worldExists = file_exists('folder/world.txt');
$mirExists = file_exists('folder/mir.txt');

echo "8. world.txt существует: ". ($worldExists ? "YES" : "NO")." <br>";
echo "8. mir.txt существует: ". ($mirExists ? "YES" : "NO")." <br> <br>";


$dir = "test";
if(!file_exists($dir)){
if(mkdir($dir)){
echo "1. Папка создана =) <br>";
} else{
echo "1. Ошибка: папка не может быть создана =(";
}
} else{
echo "1. Папка уже существует =() <br>";
}

if(file_exists('test')){
rename('test','www');
echo "2. Папка переименована =) <br>";
}else{
echo "2. Папка не найдена =(<br>";
}

/*if(file_exists('www')){
$dir = opendir('www')*/

$dir = '/var/www/Низомадинова.com/www';
if (rmdir($dir)) {
    echo "3. Директория успешно удалена <br>";
} else {
    echo "3. Ошибка при удалении директории <br>";
}


$dir = "test";
if(!file_exists($dir)){
if(mkdir($dir)){
echo "4. Папка создана =) <br>";
} else{
echo "4. Ошибка: папка не может быть создана =(";
}
} else{
echo "4. Папка уже существует =() <br>";
}

$folders = ['images', 'videos','music'];
foreach($folders as $folder){
$path = 'test/'.$folder;
if(!file_exists($path)){
    mkdir($path, 0777, true);
echo "cоздана папка: ".$folder."\n <br>";
}
}

echo "5. Файлы с расширением .jpg в текущей папке:<br>";
$jpgFiles = glob("*.jpg");

if (empty($jpgFiles)) {
    echo "Файлы .jpg не найдены.<br>";
} else {
    foreach ($jpgFiles as $file) {
        echo basename($file) . " (size: " . filesize($file) . " bytes)<br>";
    }
}
echo "Текущая рабочая директория: " . getcwd() . "<br><br>";

    


?>
