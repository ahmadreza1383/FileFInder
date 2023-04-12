<?php 
namespace tests;
use src\directory\ScanDirectory;

ScanDirectory::setPath(__DIR__.DIRECTORY_SEPARATOR.'search'.DIRECTORY_SEPARATOR);

$result = [
    "/mnt/fileFinder/tests/testers/search/gogoli/ahmad/asghar/",
    "/mnt/fileFinder/tests/testers/search/gogoli/ahmad/",
    "/mnt/fileFinder/tests/testers/search/gogoli/jafar/akbar/",
    "/mnt/fileFinder/tests/testers/search/gogoli/jafar/",
    "/mnt/fileFinder/tests/testers/search/gogoli/mamad/javad/asghar/",
    "/mnt/fileFinder/tests/testers/search/gogoli/mamad/javad/",
    "/mnt/fileFinder/tests/testers/search/gogoli/mamad/jepeto/",
    "/mnt/fileFinder/tests/testers/search/gogoli/mamad/",
    "/mnt/fileFinder/tests/testers/search/gogoli/",
    "/mnt/fileFinder/tests/testers/search/",
];

assert(ScanDirectory::get() == $result);

echo "testing src\directory\ScanDirectory: PASSWED\n";