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

$(".jsDeleteButton").click(function ()
{
    event.preventDefault(); /* Annule le Submit, pour éviter une suppréssion, au cas ou l'utilisateur appuis sur annulé */

    var id = $(this).attr('id'); /* Création d'une variable id de this, car this.id non utilisable dans le callback */

    bootbox.confirm(
            {

                message: "Êtes vous sur de vouloir supprimer " + $("#td" + id).html() + " ?",
                buttons:
                        {
                            confirm:
                                    {
                                        label: 'Oui',
                                        className: 'btn-success'
                                    },

                            cancel:
                                    {
                                        label: 'Non',
                                        className: 'btn-danger'
                                    }
                        },

                callback: function (result)
                {
                    if (result === true)
                    {
                        $("#form" + id).submit();
                    }
                }
            });
});


$(document).ready(function () {
    $('.thumbnail').click(function () {
        $('.modal-body').empty();
        var title = $(this).parent('a').attr("title");
        $('.modal-title').html(title);
        $($(this).parents('div').html()).appendTo('.modal-body');
        $('#myModal').modal({show: true});
    });
});