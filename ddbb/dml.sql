INSERT INTO questions (question) VALUES
	('Ahead of time')
    , ('Be at the end of one`s tether')
    , ('Day in, day out')
    , ('From time to time')
    , ('Speaks one mind');


INSERT INTO answers (`answer`, `question_id`, `correct`) VALUES
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
