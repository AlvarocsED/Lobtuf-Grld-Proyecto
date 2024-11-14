insert into banderas values
(null,curdate(),curdate(),'Alemania','Alemania.png'),
(null,curdate(),curdate(),'Argentina','Argentinna.png'),
(null,curdate(),curdate(),'Austria','Austria.png'),
(null,curdate(),curdate(),'Belgica','Belgica.png'),
(null,curdate(),curdate(),'Chile','Chile.png'),
(null,curdate(),curdate(),'Colombia','Colombia.png'),
(null,curdate(),curdate(),'Alemania','Costa_De_Marfil.png'),
(null,curdate(),curdate(),'Dinamarca','Dinamarca.png'),
(null,curdate(),curdate(),'Eslovenia','Eslovenia.png');

insert into equipos values
(null,curdate(),curdate(),'AFC Ajax','AFC_Ajax.png'),
(null,curdate(),curdate(),'Atletico de Madrid','Atletico.png'),
(null,curdate(),curdate(),'FC Barcelona','fc_Baecelona.png'),
(null,curdate(),curdate(),'Real Madrid','Real-Madrid.png'),
(null,curdate(),curdate(),'Sporting Portugal','Spoting_Lisboa.png');

insert into jugadors values 
(null,curdate(),curdate(),19930806, 'Lateral Izquierdo', 'Younes', 'Amin', 
				(select id from banderas where pais='Alemania'  limit 1), 'Amin_Younes.png'),
(null,curdate(),curdate(),19980402,'Portero','Onana','André',
				(select id from banderas where pais='Camerun' limit 1),'Andre_Onana.png'),
(null,curdate(),curdate(),2000022,'Extremo Derecho','Antony','Antony',
				(select id from banderas where pais='Brasil' limit 1),'Antony.png'),
(null,curdate(),curdate(),19920214,'Mediocenro','Eriksen','Christian',
				(select id from bandera where pais='Dinamarca' limit 1), 'christian_Eriksen.png'),
(null,curdate(),curdate(),19960602,'Defensa','Sanchez','Davinson',
				(select id from banderas	n where pais='Colombia' limit 1), 'davinson_sanchez.png'),
(null,curdate(),curdate(),19930107,'Portero','Oblak','Jan',
				(select id from banderas where pais='Eslovenia' limit 1), 'Jan_Oblak.png'),
(null,curdate(),curdate(),19870424,'Defensa','Vertonghen','Jan',
				(select id from banderas where pais='Belgica' limit 1), 'Jan ç_Veronghen.png'),
(null,curdate(),curdate(),20020306,'Mediocentro','Rojas','Luis',
				(select id from banderas where pais='Chile' limit 1),'Luis_Rojas.png'),
(null,curdate(),curdate(),19980204,'Defensa','Wober','Maximilian',
				(select id from banderas where pais='Austria'limit 1),'Maximilian_Wober.png'),
(null,curdate(),curdate(),19920831,'lateral Izquierdo','Tagliafico','Nicolas',
				(select id from banderas where pais='Argentina' limit 1),'Nicolas_Tagliafico.png'),
(null,curdate(),curdate(),20000330, 'Delantero', 'Sébastien', 'Haller', 
				(select id from banderas where pais='Costa_De_Marfil'  limit 1), 'Sebastien_Haller.png');                
                