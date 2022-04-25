<?php

class user 
{
    public $First_name;
    public $Second_name;
    public $Email;
    public $User_ID;
    public $Phone_number;
    public $User_type;
    public $FileManagerobj;
    function constraction()
    {
        $this->FileManagerobj = new FileManager();
        $this->FileManagerobj -> filename="Users.txt";
        $this->FileManagerobj -> Separator="~";
    }
    function Storeuser()
    {
        $lastid = $this->FileManagerobj->getLastId($this->FileManagerobj->Separator) + 1;
        $record = $this->lastid."~".$this->First_name."~".$this->Second_name."~".$this->Email."~".$this->User_ID."~".$this->Phone_number."~".$this->User_type;
        $this->FileManagerobj->storerecord($record);
    }
}


class FileManager
{
    public $fileName;
    public $Separator;
    function storerecord($record)
    {
        $myfile = fopen("Users.txt", "a+");
        fwrite($myfile, $record."\r\n");
        fclose($myfile);
    }
    function getLastId()
    {
	
        if ( !file_exists($this->fileName) ) {
        return 0;
        }		
        
        $myfile = fopen($this->fileName, "r+") or die("Unable to open file!");
        $LastId=0;
        while(!feof($myfile)) 
        {
            $line= fgets($myfile);
            $ArrayLine=explode($this->Separator,$line);
            
            if ($ArrayLine[0]!="")
            {
            $LastId=$ArrayLine[0];	
            }
            
        }
        return $LastId;
    }
    function Drawtablefromfile()
    {
        $myfile = fopen($this->filename, "r+") or die("Unable to open file!");
            while(!feof($myfile)) 
            {
                $line=fgets($myfile);
                echo "<tr>";
                $arrayline = explode($this->Separator, $line);
                for($i=0;$i<count($arrayline);$i++)
                {
                    echo "<td>" .$arrayline[$i]."</td>";
                }
                
            }
            echo "</tr>";
        fclose($myfile);
}
}
?>