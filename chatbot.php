<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADDTECH Chatbot</title>
    <style>
        body{
    font-family:  Arial, sans-serif;
    background-color: #f5f7fa;
    margin: 0;
}
.chat-container{
    width: 450px;
    max-width:90%;
    margin: 40px auto;
    background-color: white;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.18);
    overflow: hidden;
}

.chat-header{
    background-color: #1f4e79;
    color: white;
    padding: 20px;
    overflow-y: auto;
}
.user-message{
    background-color:#e8f0fe;
    padding:12px 15px;
    margin: 10px 15px 10px auto;
    border-radius:15px 15px 3px 15px;
    max-width:75%;
    line-height:1.5;
}
.bot-message{
    background-color: #f1f1f1 !important;
    padding: 12px 15px;
    margin: 10px auto 10px 15px;
    border-radius: 15px  15px 15px 3px;
    max-width:75%;
    line-height:1.5;
}
.chat-input{
    display: flex;
    gap:10px;
    padding: 15px;
    border-top: 1px solid #ddd;
    background-color:ffffff;
}
.chat-input-field{
    flex:1;
    padding:12px 15px;
    border:1px solid #ccc;
    border-radius:8px;
    outline:none;
    font-size:15px;
}
.chat-input-field:focus{
    border-color:#1f4e79;
}
.chat-input-field:focus{
    border-color:#1f4e79;
}
.chat-input button{
    padding: 12px 20px;
    background-color: #1f4e79;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size:15px;
}
.chat-input button:hover{
    background-color:#163a5c;
}
    </style>
</head>
<body>
    <div class=" chat-container">
        <div class="chat-header">
            <h2>ADDTECH Chatbot</h2>
            <p>How can we help you?</p>
        </div>
        <div class="chat-body">
            <div class="bot-message">
                Hello! Welcome to ADDTECH CENTER. 
                I can provide information about our organization,
                services and internship program.
            </div>
        </div>
        <div class="chat-input">
            <input type="text"  
            class="chat-input-field"
            placeholder="Type your question...">
            <button type="button"
             onclick="sendMessage()">Send</button>
        </div>
    </div>
<script>
    function sendMessage(){
        let input=
        document.querySelector(".chat-input-field");
        let chatBody=
        document.querySelector(".chat-body");
        let question=
        input.value.toLowerCase().trim();
        if (question ===""){
            return;
        }
        //display the user's question
        let userMessage=
        document.createElement("div");
        userMessage.ClassName=
        "user-message";
        userMessage.innerHTML=question;
        chatBody.appendChild(userMessage);
        let answer="";
        //ADDTECH information
        if(question.includes("what is addtech center?")||
        question.includes("about addtech") )
        {
            answer="ADDTECH stands for Accurate Design and Development Technology. It is an organization focused on technology,design and development.";
    
        }
        else if
        (question.includes("internship")
        &&
        (question.includes("fee")
    ||
    question.includes("cost")
    ||
    question.includes("price")
    ||
    question.includes("how much")
    ||
    question.includes("pay")
    )){
        answer="The internship fee at ADDTECH CENTER is 30,000 FCFA.";
    }
     else if
        (question.includes("internship")
        &&
        (question.includes("duration")
    ||
    question.includes("long")||
    question.includes("how many  months")
    )){
        answer="The internship lasts for 1 month and 2 weeks.";
    }
 else if
        (question.includes("where is addtech center")
        ||
        (question.includes("where is addtech")||
    question.includes("location of addtech center ")
    )){
        answer="ADDTECH is located at BP 113,Biyem-Assi,Yaounde,Cameroon,near carrefour lycee Bilingue, Approximately 100 meters towards kameni.";
    }
    else if
        (question.includes("phone")
    ||
    question.includes("contact")
    ||
    question.includes("telephone")
    ){
        answer="you can contact ADDTECH CENTER on(+237)672674786.";}
        else if
        (question.includes("email")
    ||
    question.includes("mail")
    ){
        answer="The ADDTECH CENTER email address is atohdenis1232@gmail.com.";
}
 else if
        (question.includes("services")
    ||
    question.includes("offer")
    ){
        answer=" ADDTECH offers Graphic Design, Secretariat Duties,Full-Stack Development,Mobile Development,Cybersecurity,Ethical Hacking and Database Administration.";

}
 else if
        (question.includes("graphic design")
    ){
        answer=" ADDTECH provides training and services related to graphic design and digital visual content.";

}
 else if
        (question.includes("secretariat")
    ){
        answer=" ADDTECH provides training related to secretarial and office duties.";
}
 else if
        (question.includes("full-stack")
    ||
    question.includes("full-stack")
    ){
        answer=" ADDTECH provides training in both frontend and backend web development.";
}
 else if(
    question.includes("mobile development")
    ){
        answer=" ADDTECH provides training in the development of mobile applications.";
}
 else if
        (question.includes("cybersecurity")
    ||
    question.includes("cybersecurity")
    ){
        answer="ADDTECH provides training focused on protecting computer systems,networks and digital information.";

}
 else if(
       question.includes("ethical hacking")
    ){
        answer="ADDTECH provides training in authorized security testing and identifying security weaknesses.";

}
 else if
        ( question.includes("database")
    ){
        answer="ADDTECH provides training related to managing,maintaining and securing databases.";
}
 else if
        (question === "hi"
    ||
    question ==="hello" ||
    question ==="hey"
    ){
        answer="Hello! Welcome to ADDTECH CENTER. How can I help you with information about ADDTECH?";
}
else{
    answer="Sorry, I can only provide information about ADDTECH CENTER, its services and internship program.";
}
//display chatbot answer
let botMessage= document.createElement("div");
botMessage.ClassName="bot-message";
botMessage.innerHTML=answer;
chatBody.appendChild(botMessage);
//clear input
input.value="";
//scroll to latest message
chatBody.scrollTop=chatBody.scrollHeight;
        }
    </script>
</body>
</html>

