<div class="contact">
    <h2 class="text-center mt-5">Contact</h2>
    <form class="col-4 mt-3 p-3" action="./save.php" method="POST">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="name">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="surname">
        </div>
        <div class="form-group">
            <label for="mail">Mail</label>
            <input type="email" class="form-control" id="mail" name="email" placeholder="bob@gmail.com">
        </div>
        <div class="form-group">
            <label for="message">Votre message</label>
            <textarea class="form-control" id="message" name="msg" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyez</button>
    </form>
</div>