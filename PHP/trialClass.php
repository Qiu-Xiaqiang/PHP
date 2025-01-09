<?php
require_once 'Persona.php';
require_once 'Studente.php';
require_once 'Insegnante.php';
$p1 = new Persona("Valentino",20,"valentino@gmail.com");
echo $p1->getName().'<br>';
echo $p1->introduce().'<br>';
$s1 = new Studente('Yongkang', 20,'yongkang.hu@iisviolamarchesini.edu.it', 'ITIS');
echo $s1->introduce().'<br>';
echo $s1->toDo().'<br>';
$t1 = new Insegnante('Ye','Ding');
$t1 = new Insegnante('Xiaqiang','CHIU');
$t1 = new Insegnante('Ye','Ding');
echo Insegnante::getRegister();
