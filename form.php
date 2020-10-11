<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <section>
    <form action="thanks.php" method="post">
        <div>
            <label for="lastname" >Last name :</label>
            <input type="text" id="name" name="user_last_name">
        </div>
        <div>
            <label for="firstname">First name :</label>
            <input type="text" id="firstname" name="user_first_name">
        </div>
        <div>
            <label for="email">Your email :</label>
            <input type="email" id="email" name="user_email">
        </div>   
         <div class="phone">
            <label for="phone_number">Please enter your phone number here (pattern required xx-xx-xx-xx-xx):</label>
            <input type="tel" id="phone_number" name="user_phone_number" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" required>
        </div>
        <div>
        <label for="choice_menu">Please choose a subject</label>
            <select name="choice_menu" id="choice_menu">
                <option value="J'ai faim">J'ai faim</option>
                <option value="J'ai fait un gateau à la banane">J'ai fait un gateau à la banane</option>
                <option value="Je veux aller en Russie câliner des ours">Je veux aller en Russie câliner des ours</option>
                <option value="Je suis un(e) geek">Je suis un(e) geek</option>
            </select>
        </div>
        <div>
            <label for="message">Your message :</label>
            <textarea name="user_message" id="message" cols="30" rows="10"></textarea>
        </div>
        <div class="button">
            <button type="submit">Send your message</button>
        </div>
    </form>    


    </section>
    
</body>
</html>

