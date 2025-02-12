<?php

include('includes/boot.php');

error_reporting(E_ALL);
ini_set('display_errors', '1');

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if (empty($name) || empty($phone) || empty($message)){
    die('ОШИБКА: Пожалуйста заполните все поля.');
}

$content = <<<HEREDOC
Поступила новая заявка с веб-сайта. Были указаны следующие данные:

Имя: {$name}
Телефон: {$phone}
Сообщение: {$message}

HEREDOC;

Telegram::send($content);

# Shared class to send to Telegram
final class Telegram
{
    private $token;

    public static function send($message)
    {
        $token = '7460906156:AAFfoOyqTbC-5_wkOMVhF6fbOyqrrz7DqrA'; // Bot token
        $chatId = '-4277879147'; // Group ID

        $telegram = new self($token);
        return $telegram->sendMessage($chatId, $message);
    }

    public function __construct($token)
    {
        $this->token = $token;
    }
    
    public function sendMessage($chatId, $text)
    {
        return $this->callApi('sendMessage', array(
            'chat_id' => $chatId,
            'text' => $text,
        ));
    }

    private function callApi($method, $params)
    {
        $url = sprintf(
            "https://api.telegram.org/bot%s/%s",
            $this->token,
            $method
        );

        $ch = curl_init();
        curl_setopt_array( $ch, array(
            CURLOPT_URL             => $url,
            CURLOPT_POST            => true,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_FOLLOWLOCATION  => false,
            CURLOPT_HEADER          => false,
            CURLOPT_TIMEOUT         => 10,
            CURLOPT_HTTPHEADER      => array('Accept-Language: ru,en-us'),
            CURLOPT_POSTFIELDS      => $params
        ));

        $response = curl_exec($ch);
        return json_decode( $response);
    }
}

?>

<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TakLog - грузоперевозки из Европы в Узбекистан по оптимальной цене!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php $active = 0; ?>
    <?php include('includes/header.php'); ?>
    
    <!--Banner-->
    <section class="offices-banner position-relative py-5">
      <div class="container-fluid common-container h-100">
        <div class="text-white box d-flex flex-column justify-content-end align-items-start h-100">
          <h1 class="text-uppercase">Спасибо!</h1>
          <p class="lh-sm small mb-lg-4 with-arrow position-relative">Мы получили вашу заявку и скоро с вами свяжемся.</p>
          <a class="btn btn-primary rounded-1" href="/">На главную<i class="bi bi-arrow-down-right ms-4"></i></a>
        </div>
      </div>
    </section>
    
    <?php include('includes/footer.php'); ?>
  </body>
</html>