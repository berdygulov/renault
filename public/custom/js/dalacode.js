$(document).ready(function () {

    /* Prevent delete function */
    const deleteBtn = $('.prevent-delete');
    deleteBtn.on('click', function (e) {
        const url = $(this).prop('href');
        e.preventDefault();

        const confirmation = prompt('Вы уверены? Напишите "да" для подтверждения.');

        if (confirmation.toLocaleLowerCase() == 'да') {
            window.location.replace(url);
        }
    })
});
