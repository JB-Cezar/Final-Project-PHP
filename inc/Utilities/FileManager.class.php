<?php

class FileManager{
    public static function readCsvFile($filePath){
        //try to open a file read only
        try{
            $fileHandle = fopen($filePath,'r');
            if(! $fileHandle){
                throw new Exception("We could not open your File.$filePath");
            }
            $fileContent = fread($fileHandle,filesize($filePath));
            //close file
            fclose($fileHandle);

        }catch(Exception $error){
            echo $error->getManager();
        }
        return $fileContent;
    }

    public static function wrightCsvFile ($fileContent){
        try{
            $fileHandle = fopen("/data/MOCK_DATA.csv",'w');
            if(!$fileHandle){
                throw new Exception("Error trying to wright the  file");
            }
            fwrite($fileHandle,$fileContent);
            fclose($fileHandle);
        }catch(Exception $error){
            echo $error->getMessage();
        }
    }
}