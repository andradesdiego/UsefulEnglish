SELECT * FROM users;

SELECT * FROM answers;

SELECT * FROM questions;

SELECT * FROM user_progress;

SELECT q.question, a.answer
	FROM questions as q 
    INNER JOIN answers as a 
    ON a.question_id = q.id 
    WHERE a.correct = 1;

SELECT q.question, a.answer
	FROM questions as q 
    INNER JOIN answers as a 
    ON a.question_id = q.id 
    WHERE q.id = 3;

/*DROP TABLE user_progress;
*/
TRUNCATE user_progress;

SELECT COUNT(id) as NumberOfQuestions 
            FROM questions;
            
            
SELECT question FROM questions
  WHERE NOT EXISTS (SELECT question_id FROM user_progress
				);
                
                
SELECT q.question as pregunta
                FROM questions as q
                left OUTER JOIN user_progress AS up
                ON q.id = up.question_id
                where up.answered_q IS null
                ORDER BY rand() LIMIT 1;
                
DELETE FROM user_progress
         WHERE user_id = 7;
         
DELETE FROM users
         WHERE id = 7;