select * from user;
select * from user where idUser_name = 'joao.exemplo' and Password = '123456';
select * from user;
select * from language;

insert into user (idUser_name, name, password, email, description)
	values ( 'artur.paiva', 'Artur Romero Monteiro Paiva', '123456', 'artur.paiva@not.real', 'Student of CS at UniCEUB' );
insert into user (idUser_name, name, password, email, description)
	values ( 'erick.weiss', 'Erich Weißenstein', '123456', 'erick.weiss@not.real', 'Student of CS at UniCEUB' );
insert into user (idUser_name, name, password, email, description)
	values ( 'gabriel.castro', 'Gabriel de Castro', '123456', 'gabriel.castro@not.real', 'Student of CS at UniCEUB' );
insert into user (idUser_name, name, password, email, description)
	values ( 'gislaine.santana', 'Gislaine Santana', '123456', 'gislaine.santana@not.real', 'Profesor of CS at UniCEUB' );
    
    
    
select * from theme;
insert into theme (themename, language_idlanguage, themedescription)
	values ( 'Materiais', 1, 'Aprenda sobre como materiais como: Madeira, Metal, Aço, Plástico; são ditos em Inglês, e como utilizá-los em sentenças comuns.' );
insert into theme (themename, language_idlanguage, themedescription)
	values ( 'Família', 1, 'Como se referir a membros da família, desde pais e irmãos, à avós e tias. Também inclue apelidos comuns dados a esses membros como: vovó, mamãe e papai.' );
insert into theme (themename, language_idlanguage, themedescription)
	values ( 'Festas', 1, 'Diversas maneiras de se comunicar para saber o que falar para aceitar ou recusar festas, ou o que falar durante festas de língua inglesa.' );
insert into theme (themename, language_idlanguage, themedescription)
	values ( 'Austrália', 1, 'Há diversas maneiras de se expressar na língua inglessa que são exclusivos ao dialeto australiano. Descubra novas gírias e expressões que lhe familializará com a cultura do país.' );
insert into theme (themename, language_idlanguage, themedescription)
	values ( 'Emoções', 1, 'Formas de expressar um sentimento em si mesmo ou em outros.' );