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
            
                ?>