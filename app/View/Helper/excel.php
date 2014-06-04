<?php
    class ExcelHelper extends appHelper{
        
        var $delimitier =',';
        var $enclouser =',';
        var $filename ='Steam.csv';
        var $line = array();
        var $buffer;
        
        function excelHelper(){
            $this->clear();
        }
        
        function clear (){
            $this->line = array();
            $this->buffer = fopen('php://temp/maxmemory:'. (5*1024*1024), 'r+');
        }
        
        function addField ($velue){
            $this->line[] =$velue;
        }
        
        function endRow(){
            $this->addRow($this->line);
            $this->line = array();
        }
        
        function addRow(){
            fputcsv($this->buffer, $row, $this->delimiter, $this->enclouser);
        }
        
        function renderHeaders(){
            header('Content-Type: text/csv');
            header("Content-type:application/vnd.ms-excel");
            header("Content-disposition:attachment;filename=".$this->filename);
        }
        
        
    }
?>