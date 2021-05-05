                <?php
              
                  $handle = curl_init();
                  // Set the url
                  $url = "https://www.myfxbook.com/api/login.json?email=raphael.tunji@yahoo.com&password=zrqN7QMXubatiSRbIrN31985378";
                  
                  curl_setopt($handle, CURLOPT_URL, $url);
                  // Set the result output to be a string.
                  curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
                  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
                  $output = curl_exec($handle);

                  if($e = curl_error($handle)){
                    echo $e;
                  }else{
                    $decoded = json_decode($output);
                    print_r($decoded);
                  }

                  curl_close($handle);
                  
                  //echo $output;
                  //return $output;
            
                
                //<?php
//namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;

class VerifyEmail extends VerifyEmailBase
{
//    use Queueable;

    // change as you want
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }
        return (new MailMessage)
            ->subject(Lang::getFromJson('Verify Email Address'))
            ->line(Lang::getFromJson('Please click the button below to verify your email address.'))
            ->action(
                Lang::getFromJson('Verify Email Address'),
                $this->verificationUrl($notifiable)
            )
            ->line(Lang::getFromJson('If you did not create an account, no further action is required.'));
    }
}
