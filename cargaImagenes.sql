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
(null,curdate(),curdate(),20000330, 'Delantero', 'Younes', 'Amin', 
				(select id from banderas where pais='Marruecos'  limit 1), 'Amin_Younes.png'),
                
                
(null,curdate(),curdate(),20000330, 'Delantero', 'Sébastien', 'Haller', 
				(select id from banderas where pais='Costa_De_Marfil'  limit 1), 'Sebastien_Haller.png');                

