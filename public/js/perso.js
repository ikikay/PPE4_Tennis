/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* Change les bouton danger, en bouton info, lors d'un click
$(".btn-danger").click(function() {
    $(this).attr('class', 'btn btn-info')   
});
*/

$(".jsDeleteButton").click(function() 
{
    event.preventDefault(); /* Annule le Submit, pour éviter une suppréssion, au cas ou l'utilisateur appuis sur annulé */
    
    var id = $(this).attr('id'); /* Création d'une variable id de this, car this.id non utilisable dans le callback */
    
    bootbox.confirm(
    {
        
        message: "Êtes vous sur de vouloir supprimer " + $("#td"+id).html() + " ?",
        buttons: 
        {
            confirm: 
            {
                label: 'Oui',
                className: 'btn-danger'
            },

            cancel: 
            {
                label: 'Non',
                className: 'btn-success'
            }
        },

        callback: function (result) 
        {
            if (result === true) 
            {
                $("#form"+id).submit();
            }
        }
    });
});
