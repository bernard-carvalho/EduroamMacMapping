<?php
    $file_name = "detail-20220915";
    $vetor_entradas=array();
    $vetor_comandos=array();
    $cat_file = "cat ".$file_name;
    exec($cat_file,$conteudo_arquivo,$return);
    $head=1;$tail=0;$number_of_entry=0;
    for($linha_arquivo=0;$linha_arquivo<count($conteudo_arquivo);$linha_arquivo++){
    //loop que percorre todo o arquivo, linha a linha
        if(strlen($conteudo_arquivo[$linha_arquivo])!=0){
        //condicional para verificar se a linha do arquivo não esta vazia, representando um atributo ou a criação de uma nova entrada
            if($conteudo_arquivo[$linha_arquivo][0]!="\t"){
                //nova entrada
                echo $conteudo_arquivo[$linha_arquivo]."\n";
                echo $number_of_entry++.":["."\n";
            }
        }//if(strlen($conteudo_arquivo[$linha_arquivo])==0)
    }//for($linha_arquivo=0;$$linha_arquivo<count($result);$linha_arquivo++)

?>