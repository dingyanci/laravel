<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use App\Jobs\Queue;
require_once __DIR__ . '/usr/rabbitmq/vendor/autoload.php';
//require_once '../vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
class MailController extends Controller
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    /**
     * 发送邮件
     */
    public function mail(Request $request){
        $mail=$request->input('mail');
        //测试数据
        $viewData = ['title' => '你若盛开，清风自来','author' => '木心'];
        $emailData = [
            'content' => '从前的日色变得慢 车 马 邮件 都慢',
            'subject' => '这是邮件主题，希望您能支持！',//邮件主题
            'addr' => "$mail",//邮件接收地址
        ];
        $this->sendText($emailData);
        //$this->sendHtml('mail',$viewData,$emailData);
        //TODO  $tag 判断发送是否成功，进行后续代码开发
        return view('mail',['title' => '你若盛开，清风自来','author' => '木心']);
    }



	public function sendText($emailData){
        //此处为文本内容
        $tag = $this->mailer
            ->raw($emailData['content'],
                function ($message)use ($emailData){
                    $message->subject($emailData['subject']);
                    $message->to($emailData['addr']);
                });
        $arr=array(
            'time'=>time()
        );
        $this->dispatch(new Queue($arr));
        return $tag;
    }
    //注册
    public function login(){
        return view('login');
    }
}
