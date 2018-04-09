

    function correctAnswer(boleano, a_id, q_id){
       
          $.ajax({
            url: "http://localhost/UsefulEnglish/quiz/finish.php",
            data: { question_id: q_id },
            method: "POST"
          }).done(function(resp) {
            console.log(resp);  
          });
          if(boleano === 1){
              $.ajax({
                url: "http://localhost/UsefulEnglish/quiz/progress.php",
                data: { bolean: boleano, answer_id: a_id, question_id: q_id, answered_q: 1 },
                method: "POST"
              }).done(function() {
              });
            correctClick();
            return;
          } else {
            $.ajax({
                url: "http://localhost/UsefulEnglish/quiz/progress.php",
                data: { bolean: boleano, answer_id: a_id, question_id: q_id, answered_q: 1 },
                method: "POST"
              }).done(function() {
              });
            errorClick();
            return;
          }
    };
    function correctClick(){
        swal({
            title: "Well done!!",
            text: "You're improving your english really fast!",
            icon: "success",
            buttons:{
                Next: "Siguiente pregunta",
              },
            dangerMode: false,
          })
          .then((value) => {
            switch (value) {
              case "Next":
                location.reload(true);
                break;
            }
          });
    };
    function errorClick(){
        swal({
            title: "Are you sure?",
            text: "Sorry, try with the next question!",
            icon: "warning",
            buttons:{
                Next: "Siguiente pregunta",
              },
            dangerMode: true,
          })
          .then((value) => {
            switch (value) {
           
              case "Next":
              
                location.reload(true);
                break;
            }
          });
    };
function resetGame(){
  swal("Has reiniciado el juego");
  $.ajax({
    url: "http://localhost/UsefulEnglish/quiz/reset.php",
    data: {},
    method: "POST"
  }).done(function(resp) {
    console.log('Ha borrado los datos?');
    console.log(resp);
    $(location).attr("href", "http://localhost/UsefulEnglish/quiz/");
  });
};
function closeGame(){
  swal("Has salido del juego");
  $.ajax({
    url: "http://localhost/UsefulEnglish/quiz/close.php",
    data: {},
    method: "POST"
  }).done(function(resp) {
    console.log('Ha salido del juego?');
    console.log(resp);
    $(location).attr("href", "http://localhost/UsefulEnglish/");
  });
};  
function nextQuestion(){
  $.ajax({
    url: "http://localhost/UsefulEnglish/quiz/progress.php",
    data: { bolean: false, answer_id: $(".answer").data("answer-id"), question_id: $(".question").data("question-id"), answered_q: 1 },
    method: "POST"
  }).done(function() {
  location.reload(true);
  });
}
function checkRegister(){
  swal("¿Ya tienes una cuenta? Inicia sesión o regístrate", {
    buttons: {
      login: "Entra con tu usuario",
      register: "Crea un cuenta",
    },
  })
  .then((value) => {
    switch (value) {
   
      case "login":
      $(location).attr("href", "http://localhost/UsefulEnglish/login");
        break;
   
      case "register":
      $(location).attr("href", "http://localhost/UsefulEnglish/registration");
        break;

    }
  });
}