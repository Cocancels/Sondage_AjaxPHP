const urlParams = new URLSearchParams(window.location.search);
let idQuestion = urlParams.get('sondage')

$.ajax({
    method: "GET",
    url: "http://localhost/AjaxPHP/public/?page=sondage",
    dataType: "json",
    headers: {
        'Accept': 'application/json'
    },
    success: function (res) {
        for (i = 0; i < res.length; i++) {
            if (res[i].id === idQuestion) {
                render(res[i])
            }
        }
    },
    error: function (res, status, err) {
        console.log(err)
    },
})


function render(sondage) {
    $('.title').text(sondage.titre)

    sondage.questions.forEach(element => {
        $(".questionContent").append(`<div class="${element.id} questions"><h2>${element.titre}</h2></div>`)
        let vote = 0
        console.log(element)
        element.reponses.forEach(elem => {
            vote += parseInt(elem.vote)
        })
        element.reponses.forEach(ele => {
            $(`.${element.id}`).append(`<input type="radio" class="reponse" id="${ele.id}" name="${element.id}"><label for="${ele.id}">${ele.reponse}</label>`)
            $(`.${element.id}`).append(` (${Math.round((ele.vote / vote)*100)}%)<br><br>`)
        })
    });
    $(".questionContent").append('<button onclick="end()">envoyer</button>')

}

function end() {
    let answered = [];
    let allAnswers = document.getElementsByClassName("reponse")
    for (i = 0; i < allAnswers.length; i++) {
        if (allAnswers[i].checked === true) {
            answered.push(parseInt(allAnswers[i].id))
        }
    }
    console.log(answered)
    $.ajax({
        url: "http://localhost/AjaxPHP/public/?page=sondage",
        method: 'POST',
        data:{
            item: answered,
        },
        dataType: "json",
        success: function (response) {
            console.log(response)
        },
        error: function(response, err){
            console.log(err)
        }
    })
    window.location.href = "http://localhost/AjaxPHP/public/?page=home"

}

let timer = parseInt($('.timer').text())

function time(sec) {

    setTimeout(() => {
        sec--
        if (sec === 0) {
            window.location.href = "http://localhost/AjaxPHP/public/?page=home"
        } else {
            $('.timer').html(sec)
            time(sec)
        }
    }, 1000)
}

time(timer)