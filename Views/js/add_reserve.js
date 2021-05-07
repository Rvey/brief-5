$(document).ready(function () {
    var counter = 0;
    let count = document.querySelector('#counter');

    $(document).on('click', '.add', function () {
        cont = '';
        counter++;


        cont += '<td class="hmm">';
        cont += '<div id="all_t" style="width: 47rem;">'
        cont += '<div class="col-sm-6">\n' +
            '                            <label for="room" class="form-label">Bien</label>\n' +
            '                            <select class="form-select" name="room_' + counter + '" id="rooms" required="">\n' +
            '                                <option  value="null">Choose...</option>\n' +
            '                                <option value="double">chambre double</option>\n' +
            '                                <option value="simple">chambre simple</option>\n' +
            '                                <option value="appartement">Appartement</option>\n' +
            '                                <option value="bungalow">bungalow</option>\n' +
            '                            </select>\n' +
            '\n' +
            '                        </div>';
        cont += '<div class="col-sm-4" id="room_type_containers" style="display: none">\n' +
            '                            <label for="room_type" class="form-label">Bien Type</label>\n' +
            '                            <select class="form-select" name="room_type_' + counter + '" id="room_types" required="">\n' +
            '                            </select>\n' +
            '\n' +
            '                        </div>';
        cont += '<div class="col-sm-4" style="display: none" id="room_view_containers">\n' +
            '                            <label for="room_view"  class="form-label">Bien View</label>\n' +
            '                            <select class="form-select" name="room_view_' + counter + '" id="room_views" required="">\n' +
            '                                \n' +
            '                            </select>\n' +
            '\n' +
            '                        </div>';

        cont += '<div class="col-8">\n' +
            '                            <label for="pension" class="form-label">Pension</label>\n' +
            '                            <select class="form-select" name="pension_' + counter + '" id="pensions" required="">\n' +
            '                                <option value="null">Choose...</option>\n' +
            '                                <option value="complete">complete</option>\n' +
            '                                <option value="sans">sans</option>\n' +
            '                                <option value="demi">demi</option>\n' +
            '                            </select>\n' +
            '                        </div>';
        cont += '<div class="col-4" style="display: none" id="pension_type_containers">\n' +
            '                            <label for="pension_type" class="form-label">Pension Type</label>\n' +
            '                            <select class="form-select" name="pension_type_' + counter + '" id="pension_types" required="">\n' +
            '\n' +
            '                            </select>\n' +
            '                        </div>';
        cont += '<br>';

        cont += '<button type="button" name="remove" class="btn btn-danger btn-xs remove"><span class="glyphicon glyphicon-minus"></span>delete</button>';
        cont += '</td>';

        $('#add_new').append(cont);
        count.value = counter;
        var all_t = document.querySelectorAll('#all_t');

        all_t.forEach(item => {

            var rooms = item.querySelector('#rooms');
            var room_type_containers = item.querySelector('#room_type_containers');
            var room_types = item.querySelector('#room_types');
            var room_view_containers = item.querySelector('#room_view_containers');
            var room_views = item.querySelector('#room_views');
            var pensions = item.querySelector('#pensions');
            var pension_type_containers = item.querySelector('#pension_type_containers');
            var pension_types = item.querySelector('#pension_types');

            rooms.onchange = () => {


                if (rooms.value == 'double') {

                    room_types.innerHTML = initialise;
                    room_type_containers.style = "display:block";
                    room_view_containers.style = "display:none";

                    for (i = 0; i < room_view_array[rooms.value].length; i++) {
                        room_types.innerHTML += '<option value="' + room_view_array[rooms.value][i] + '">' + room_view_array[rooms.value][i] + '</option>';
                    }

                } else {
                    room_type_containers.style = "display:none";
                    room_view_containers.style = "display:block";
                    room_views.innerHTML = initialise;

                    for (i = 0; i < room_view_array[rooms.value].length; i++) {
                        room_views.innerHTML += '<option value="' + room_view_array[rooms.value][i] + '">' + room_view_array[rooms.value][i] + '</option>';
                    }

                }
                room_types.addEventListener('change', () => {

                    room_view_containers.style = "display:block";
                    room_views.innerHTML = initialise;

                    for (i = 0; i < double_room_type[room_types.value].length; i++) {
                        room_views.innerHTML += '<option value="' + double_room_type[room_types.value][i] + '">' + double_room_type[room_types.value][i] + '</option>';
                    }
                })


            }
            pensions.addEventListener('change', () => {

                if (pensions.value == 'demi') {

                    pension_type_containers.style = "display:block";
                    pension_types.innerHTML = initialise;

                    for (i = 0; i < pension_type_array.length; i++) {
                        pension_types.innerHTML += '<option value="' + pension_type_array[i] + '">' + pension_type_array[i] + '</option>';
                    }
                } else {
                    pension_type_containers.style = "display:none";
                }
            })

        })


    });

    $(document).on('click', '.remove', function () {
        $(this).closest('.hmm').remove();
        console.log('test')
        counter--;
        count.value = counter;
    });
// $('.remove').on('click' , function (){
//     console.log('ja');
// })

    // $remove = document.querySelector('.remove') ;
    // $remove.addEventListener('click' , () => {
    //     console.log('lol');
    // })

});