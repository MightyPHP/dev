<?php

namespace MightyCMS;

class FileManager {    
        public static function upload($file){
            echo $file;
			include_once __DIR__ . "/FileTransfer/FtpSftp.php";
			$test = new \FileTransfer\FtpSftp;
			$test->transfer();
        }
} 
