const url = 'createBag.php'

const formSubmitButton = document.getElementById('form_submit');
formSubmitButton.addEventListener('click', function()
{
    let formData = new FormData();
    formData.append('name', document.getElementById('name').value);
    formData.append('description', document.getElementById('description').value);
    formData.append('media', document.getElementById('media').files[0]);

    axios({
        method: 'post',
        url: url,
        headers: {
           'Content-Type': 'multipart/form-data'
        },
        data: formData,
    })
    .then(function(response) {
        console.log(response);
        console.log(document.getElementById('name').value);
    });
})



