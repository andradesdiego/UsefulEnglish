USE	useful_english;
INSERT INTO questions (question) VALUES 
	('Ahead of time')
    , ('Be at the end of one`s tether')
    , ('Day in, day out')
    , ('From time to time')
    , ('Speaks one mind');


LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` (`answer`, `question_id`, `correct`) VALUES
	('Con anticipación, previamente', 1, true)
    , ('Justo a tiempo', 1, false)
    , ('Ya era hora', 1, false)
    , ('Llegar al límite, no poder más', 2, true)
    , ('Estar al borde del precipicio', 2, false)
    , ('Conseguir éxito personal', 2, false)
    , ('Todos los santos días', 3, true)
    , ('Día si, dia no', 3, false)
    , ('En días alternos', 3, false)
    , ('De vez en cuando', 4, true)
    , ('Desde el principio al final', 4, false)
    , ('Desde una época hasta ahora', 4, false)
    , ('Dar una opinión', 5, true)
    , ('Hablarle a tu mente', 5, false)
    , ('Decir lo primero que viene a la mente', 5, false);
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `solutions` WRITE;
/*!40000 ALTER TABLE `solutions` DISABLE KEYS */;
INSERT INTO `solutions` (`question_id`, `correct_answer_id`,`wrong1_answer_id`,`wrong2_answer_id`) VALUES
	(1,1,2,3)
    , (2,4,5,6)
    , (3,7,8,9)
    , (4,10,11,12)
    , (5,13,14,15);
/*!40000 ALTER TABLE `solutions` ENABLE KEYS */;
UNLOCK TABLES;