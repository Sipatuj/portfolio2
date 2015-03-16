<?
$id = strtolower(strip_tags(trim($_GET['id'])));

$result = '';
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$subj = trim(strip_tags($_POST['name']));
		$boby = trim(strip_tags($_POST['contact']));
		$bob = trim(strip_tags($_POST['message']));
		if(mail('admin@mysite.local', $subj, $boby, $bob))
				$file=fopen('mes.txt','a+');
				fputs($file,"**************************************");
				fputs($file,"\r\n");
				fputs($file,'Фамилия:   ' . $_POST['name']);
				fputs($file,"\r\n");
				fputs($file,'Почта:   ' . $_POST['contact']);
				fputs($file,"\r\n");
				fputs($file,'Сообщение:'. "\r\n" . $_POST['message']);
				fputs($file,"\r\n");
				fputs($file,"**************************************" . "\r\n");
				fclose($file);
	}