function formLogin() {

    const formLogin = document.querySelector('form');

    if(formLogin){
        document.querySelector('form').addEventListener('submit', function (event) {
        event.preventDefault();
        const form = event.target;
        const formFields = form.elements;

        const user = formFields.nome.value;
        const pass = formFields.senha.value;

        if((user == 'admin') && (pass == '1234')){
            sessionStorage.setItem('loggedUser', 'true');
            setTimeout("location.href = 'leads.php';",1);
        }else{
            setTimeout("location.href = 'index.php?erro=1';",1);
        }
    }, false); 
    }
}

formLogin();

