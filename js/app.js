document.querySelector('#delete-button').addEventListener('click',deleteGame);
function deleteGame () {
    if (confirm('Click ok! to Delete.') == true) 
        document.querySelector('#delete-submit').click();
    
}