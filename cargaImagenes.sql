insert into banderas values
(1,curdate(),curdate(),'Alemania','Alemania.png'),
(2,curdate(),curdate(),'Argentina','Argentina.png'),
(3,curdate(),curdate(),'Austria','Austria.png'),
(4,curdate(),curdate(),'Belgica','Belgica.png'),
(5,curdate(),curdate(),'Chile','Chile.png'),
(6,curdate(),curdate(),'Colombia','Colombia.png'),
(7,curdate(),curdate(),'Alemania','Costa_De_Marfil.png'),
(8,curdate(),curdate(),'Dinamarca','Dinamarca.png'),
(9,curdate(),curdate(),'Camerún','Camerun.png'),
(10,curdate(),curdate(),'Eslovenia','Eslovenia.png');

insert into equipos values
(1,curdate(),curdate(),'AFC Ajax','AFC_Ajax.png'),
(2,curdate(),curdate(),'Atletico de Madrid','Atletico.png'),
(3,curdate(),curdate(),'FC Barcelona','fc_Baecelona.png'),
(4,curdate(),curdate(),'Real Madrid','Real-Madrid.png'),
(5,curdate(),curdate(),'Sporting Portugal','Spoting_Lisboa.png');

insert into jugadors values 
(1,curdate(),curdate(),19930806, 'Lateral Izquierdo', 'Younes', 'Amin', 1, 'Amin_Younes.png'),
(2,curdate(),curdate(),19980402,'Portero','Onana','André', 9,'Andre_Onana.png'),
(3,curdate(),curdate(),2000022,'Extremo Derecho','Antony','Antony',??,'Antony.png'),
(4,curdate(),curdate(),19920214,'Mediocenro','Eriksen','Christian',	8, 'christian_Eriksen.png'),
(5,curdate(),curdate(),19960602,'Defensa','Sanchez','Davinson',
				(select id from banderas	n where pais='Colombia' limit 1), 'davinson_sanchez.png'),
(6,curdate(),curdate(),19930107,'Portero','Oblak','Jan',
				(select id from banderas where pais='Eslovenia' limit 1), 'Jan_Oblak.png'),
(7,curdate(),curdate(),19870424,'Defensa','Vertonghen','Jan',
				(select id from banderas where pais='Belgica' limit 1), 'Jan ç_Veronghen.png'),
(8,curdate(),curdate(),20020306,'Mediocentro','Rojas','Luis',
				(select id from banderas where pais='Chile' limit 1),'Luis_Rojas.png'),
(9,curdate(),curdate(),19980204,'Defensa','Wober','Maximilian',
				(select id from banderas where pais='Austria'limit 1),'Maximilian_Wober.png'),
(10,curdate(),curdate(),19920831,'lateral Izquierdo','Tagliafico','Nicolas',
				(select id from banderas where pais='Argentina' limit 1),'Nicolas_Tagliafico.png'),
(11,curdate(),curdate(),20000330, 'Delantero', 'Sébastien', 'Haller', 
				(select id from banderas where pais='Costa_De_Marfil'  limit 1), 'Sebastien_Haller.png');                
                