<?php

class Cadena {
    function construir(String $palabra) {
        for ( $i=0; $i < strlen($palabra); $i++){
            switch ($palabra[$i]){
                case 'z':
                    $palabra[$i]='a';
                    break;
                case 'Z':
                    $palabra[$i]='A';
                    break;
                case 'a':
                    $palabra[$i]='b';
                    break;
                case 'A':
                    $palabra[$i]='B';
                    break;
                case 'b':
                    $palabra[$i]='c';
                    break;
                case 'B':
                    $palabra[$i]='C';
                    break;
                case 'c':
                    $palabra[$i]='d';
                    break;
                case 'C':
                    $palabra[$i]='D';
                    break;
                case 'd':
                    $palabra[$i]='e';
                    break;
                case 'D':
                    $palabra[$i]='E';
                    break;
                case 'e':
                    $palabra[$i]='f';
                    break;
                case 'E':
                    $palabra[$i]='F';
                    break;
                case 'f':
                    $palabra[$i]='g';
                    break;
                case 'F':
                    $palabra[$i]='G';
                    break;
                case 'g':
                    $palabra[$i]='h';
                    break;
                case 'G':
                    $palabra[$i]='H';
                    break;
                case 'h':
                    $palabra[$i]='i';
                    break;
                case 'H':
                    $palabra[$i]='I';
                    break;
                case 'i':
                    $palabra[$i]='j';
                    break;
                case 'I':
                    $palabra[$i]='J';
                    break;
                case 'j':
                    $palabra[$i]='k';
                    break;
                case 'J':
                    $palabra[$i]='K';
                    break;
                case 'k':
                    $palabra[$i]='l';
                    break;
                case 'K':
                    $palabra[$i]='L';
                    break;
                case 'l':
                    $palabra[$i]='m';
                    break;
                case 'L':
                    $palabra[$i]='M';
                    break;
                case 'm':
                    $palabra[$i]='n';
                    break;
                case 'M':
                    $palabra[$i]='N';
                    break;
                case 'n':
                    $palabra[$i]='ñ';
                    break;
                case 'N':
                    $palabra[$i]='Ñ';
                    break;
                case 'ñ':
                    $palabra[$i]='o';
                    break;
                case 'Ñ':
                    $palabra[$i]='O';
                    break;
                case 'o':
                    $palabra[$i]='p';
                    break;
                case 'O':
                    $palabra[$i]='P';
                    break;
                case 'p':
                    $palabra[$i]='q';
                    break;
                case 'P':
                    $palabra[$i]='Q';
                    break;
                case 'q':
                    $palabra[$i]='r';
                    break;
                case 'Q':
                    $palabra[$i]='R';
                    break;
                case 'r':
                    $palabra[$i]='s';
                    break;
                case 'R':
                    $palabra[$i]='S';
                    break;
                case 's':
                    $palabra[$i]='t';
                    break;
                case 'S':
                    $palabra[$i]='T';
                    break;
                case 't':
                    $palabra[$i]='u';
                    break;
                case 'T':
                    $palabra[$i]='U';
                    break;
                case 'u':
                    $palabra[$i]='v';
                    break;
                case 'U':
                    $palabra[$i]='V';
                    break;
                case 'v':
                    $palabra[$i]='w';
                    break;
                case 'V':
                    $palabra[$i]='W';
                    break;
                case 'w':
                    $palabra[$i]='x';
                    break;
                case 'W':
                    $palabra[$i]='X';
                    break;
                case 'x':
                    $palabra[$i]='y';
                    break;
                case 'X':
                    $palabra[$i]='Y';
                    break;
                case 'y':
                    $palabra[$i]='z';
                    break;
                case 'Y':
                    $palabra[$i]='Z';
                    break;
            }
        }
        echo $palabra."<br>";
        return $palabra; 
    }
    
}

$class = new Cadena;
$class -> construir("765abcd*99");
$class -> construir("--Casa &%$#");
$class -> construir("**FLht 98Z");


?>
