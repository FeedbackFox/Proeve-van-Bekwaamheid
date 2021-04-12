<?php


    
//This class is intended to be used as an easy logging tool. 
    Class Log 
    {

        //This function is for normal messages and accepts 3 arguments:
            //Source: The source of the message.
            //Msg: The message to send.
            //Filename: The file to log it in. If no filename is provided, it will automatically log in robin.log.
            //You can specify a path inside the server by adding one in the $filename, starting from the server root.
        
        
        static function norm($source, $msg, $filename = 'Proeve')
        {
            if(is_string($msg))
            {
                file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/' . $filename . '.log', '[' . $source . ']: ' . $msg . "\n", FILE_APPEND);
            }
            else
            {
                throw new Exception('Log::norm expected msg to be string, received ' . gettype($msg));
            }
                
        }
        
        static function alert($source, $msg, $filename = 'Proeve')
        {
            if(is_string($msg))
            {
                file_put_contents($_SERVER['DOCUMENT_ROOT'] . '/' . $filename . '.log', '[ALERT!][' . $source . ']: ' . $msg . "\n", FILE_APPEND);
            }
            else
            {
                throw new Exception('Log::alert expected msg to be string, received ' . gettype($msg));
            }
        }
    }




?>