<?php
namespace FileTransfer;

class FtpSftp {
	public function transfer(){
		var_dump(parse_ini_file("Configs/filetransfer.ini", true));
	}
}