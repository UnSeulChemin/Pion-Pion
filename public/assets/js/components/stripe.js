let stripe = Stripe('pk_test_51NsTx2LuOR7BT49XJbd9J0j3xhnJ5ce6eMJYQ45IP7UiRHPacMOkFci2F1v0kRWZkjelaR63Py8aV8UbSCMECUMU00hxOyBWRH');
let elements = stripe.elements();

let card = elements.create('card');
card.mount('#card-element');

card.addEventListener('change', function(event)
{
    let displayError = document.getElementById('#card-error');

    if (event.error)
    {
        displayError.textContent = event.error.message;
    }

    else
    {
        displayError.textContent = '';
    }
})


let form = document.querySelector('#payment-form');
form.addEventListener('submit', function(event)
{
    event.preventDefault();

    stripe.createToken(card).then(function(result)
    {
        if (result.error)
        {
            let errorElement = document.querySelector('#card-error');
            errorElement.textContent = result.error.message;
        }

        else
        {
            stripeTokenHandler(result.token);
        }
    })
})

function stripeTokenHandler(token)
{
    let form = document.querySelector('#payment-form');
    let hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    form.submit();
}
