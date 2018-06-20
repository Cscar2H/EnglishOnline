<?PHP
/**
*
*/
class Mail_Model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function send($email, $name, $Subject, $content)
	{
		$this->load->library('mail/phpmailer');
		$this->load->library('mail/smtp');

		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->SMTPAuth=true;
		$mail->Host = 'mail.sovosc.3www.win';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;
		$mail->Hostname = 'sovosc.3www.win';
		$mail->CharSet = 'UTF-8';
		$mail->FromName = 'SOVO思创公司';
		$mail->Username ='sc@sovosc.3www.win';
		$mail->Password = 'y5V(InC+=!HE';
		$mail->From = 'sc@sovosc.3www.win';
		$mail->isHTML(true);
		$mail->addAddress($email, $name);
		$mail->Subject = $Subject;
		$mail->Body = $content;
		$status = $mail->send();

		//简单的判断与提示信息
		if($status) {
		 	return 1;
		}else{
		 	return 0;
		}
	}

}
