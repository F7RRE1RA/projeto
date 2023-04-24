<?php 
function conectar($sql){
    $id = "";
    $senha = "";

    $hostweb = false; 
    if($hostweb){
        $id = "xxx";
        $senha = $id."mydb";
    }

    $servidor = "localhost"; 
    $usuario = $id."root";
    $banco = $id."mydb";

    $con = new mysqli($servidor, $usuario, $senha, $banco);

    if($con->connect_error){
        die("erro :".$con->connect_error);
    }
    return $con->query($sql);
}

?>
<script.sql>

create table enquete(
    id int primary key auto_increment,
    nome varchar(200)
); 

create table resposta (
    id int primary key auto_increment,
    id_enquete int not null,
    nome varchar(200)
    quantidade int,
    foreign key (id_enquete) references enquete(id)
);


INSERT INTO enquete(nome) VALUES('Qual seu genero de jogo favorito?');

SELECT id FROM enquete WHERE nome = 'Qual seu genero de jogo favorito?';

INSERT INTO resposta (id_enquete, nome, quantidade) VALUES (1,'FPS',0);
INSERT INTO resposta (id_enquete, nome, quantidade) VALUES (1,'RPG',0);
INSERT INTO resposta (id_enquete, nome, quantidade) VALUES (1,'MOBA',0);
