$("#add").click(function(){
    let nombreQuestions = 0
    nombreQuestions = $("#nombreQuestions").val();
    $(".questionsInput").remove();
    $(".reponses").remove();
    for(let i = 1; i <= nombreQuestions; i++){
        $("#questions").append("<input class='questionsInput' type='text' name='question"+ i +"'placeholder='Ajoutez la question "+i+"'>")
        $("#questions").append("<div class='reponses question"+i+"'></div>")
        $(".question"+i).append("<input id='nbreponsesquestion"+i+"' type='number' max='4' name='nbreponsequestion"+ i +"'placeholder='Ajoutez tant de réponses "+i+"'>")
        $(".question"+i).append("<input type='button' value='Ajouter' class='addReponse'>")
    }
})

$("#questions").on("click", ".reponses>.addReponse", function(){
    let parentName = ""
    let nombreQuestions = 0
    let nombreReponses = 0
    var $this = $(this);
    nombreQuestions = $("#nombreQuestions").val()    
    nombreReponses = $this[0].parentElement.children[0].value
    questionActuelle = $this[0].parentElement.className[17]
    parentName = $this[0].parentElement.className.split(' ')
    $("."+parentName[1]+">.inputDel").remove()

    for(let i = 1; i<=nombreReponses; i++){
        $("."+parentName[1]).append("<input type='text' name='question" + questionActuelle +"reponse"+ i +"value' class='inputDel question" + questionActuelle +"reponse"+ i +"value' placeholder='Rentrez la réponse " + i + "' >")
        $("."+parentName[1]).append("<input type='radio' value ='question" + questionActuelle +"reponse"+ i +"' name='question" + questionActuelle +"isTrue' class='inputDel question" + questionActuelle +"reponse"+ i +"isTrue'>")
    }

})