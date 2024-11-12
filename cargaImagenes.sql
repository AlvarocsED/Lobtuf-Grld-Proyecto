insert into banderas values
(null,curdate(),curdate(),'Alemania','Alemania.png'),

(null,curdate(),curdate(),'Eslovenia','Eslovenia.png');

insert into equipos values
(null,curdate(),curdate(),'AFC Ajax','AFC_Ajax.png'),

(null,curdate(),curdate(),'','');

insert into jugadors values 
(null,curdate(),curdate(),20000330, 'Delantero', 'Younes', 'Amin', 
				(select id from banderas where pais='Marruecos'  limit 1), 'Amin_Younes.png'),
                
                
(null,curdate(),curdate(),20000330, 'Delantero', 'Sébastien', 'Haller', 
				(select id from banderas where pais='Costa_De_Marfil'  limit 1), 'Sebastien_Haller.png');                

